import React from "react";
import { useState } from "react";
import GuessedWord from "./GuessedWord.js";

function WordGame(props) {
   const wordToGuess = props.word;

   const [prevGuesses, setPrevGuesses] = useState([]);
   const [currentGuess, setCurrentGuess] = useState("");
   const [guessNum, setGuessNum] = useState(1);
   const [won, setWon] = useState(false);

   function handleKeyDown(event) {
      if (event.key === "Enter" && currentGuess.length === 5) {
         const newGuesses = [...prevGuesses, currentGuess];
         setPrevGuesses(newGuesses);

         if (currentGuess === wordToGuess) {
            setWon(true);
         } else {
            setGuessNum(guessNum + 1);
         }

         setCurrentGuess("");
      }
   }

   function handleChange(event) {
      setCurrentGuess(event.target.value.toUpperCase());
   }

   return (
      <>
         {/* EACH GUESS MUST BE ITS OWN <p> */}
         {prevGuesses.map((guess, index) => (
            <p key={index}>
               <GuessedWord
                  word={guess}
                  guessNum={index}
                  wordToGuess={wordToGuess}
               />
            </p>
         ))}

         {/* INPUT OR WIN MESSAGE */}
         <p>
            {won ? (
               `Congratulations! It took you ${guessNum} ${guessNum === 1 ? "try" : "tries"}.`
            ) : (
               <>
                  <label htmlFor="word-entry">Guess {guessNum}:</label>
                  <input
                     type="text"
                     id="word-entry"
                     size="5"
                     maxLength="5"
                     value={currentGuess}
                     onChange={handleChange}
                     onKeyDown={handleKeyDown}
                  />
               </>
            )}
         </p>
      </>
   );
}

export default WordGame;