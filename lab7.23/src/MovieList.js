import React from "react";
import movieData from "./movieData.js";
import { Link } from "react-router-dom";

function MovieList() {
   return (
      <>
         <table>
            <thead>
               <tr>
                  <th>Title</th>
                  <th>Year</th>
                  <th>Rating</th>
               </tr>
            </thead>

            <tbody>
               {movieData.map((movie) => (
                  <tr key={movie.movieId}>
                     <td>
                        <Link to={`/movie/${movie.movieId}`}>
                           {movie.title}
                        </Link>
                     </td>
                     <td>{movie.year}</td>
                     <td>{movie.rating}</td>
                  </tr>
               ))}
            </tbody>
         </table>
      </>
   );
}

export default MovieList;