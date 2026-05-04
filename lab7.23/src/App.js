import React from "react";
import { Routes, Route } from "react-router-dom";
import MovieList from "./MovieList.js";
import MovieDetails from "./MovieDetails.js";

function App() {
   return (
      <>
         <h1>Movie Database</h1>

         <Routes>
            <Route path="/" element={<MovieList />} />
            <Route path="/movie/:movieId" element={<MovieDetails />} />
         </Routes>
      </>
   );
}

export default App;