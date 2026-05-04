import React from "react";

function GuessedWord(props) {
   const word = props.word;
   const wordToGuess = props.wordToGuess;

   return (
      <>
         {word.split("").map((letter, index) => {
            let className = "not-part";

            if (letter === wordToGuess[index]) {
               className = "correct";
            } else if (wordToGuess.includes(letter)) {
               className = "wrong-place";
            }

            return (
               <span key={props.guessNum + "-" + index} className={className}>
                  {letter}
               </span>
            );
         })}
      </>
   );
}

export default GuessedWord;