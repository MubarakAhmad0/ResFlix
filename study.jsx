import { useState } from "react";

function MovieCatalog (){
const movies =  [
    {title: "The Matrix", year: 1999},
    {title: "The Godfather", year: 1972},
    {title: "The Dark Knight", year: 2008},
]

return (
<div>
    <h1>Movie Catalog</h1>
    <ul>
        {movies.map(movie => (
            <li key={movie.title}>{movie.title} ({movie.year})</li>
        ))}
    </ul>
</div>



)


}