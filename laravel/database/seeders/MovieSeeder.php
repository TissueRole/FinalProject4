<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=Shawshank+Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'release_year' => 1994,
                'genre' => 'Drama'
            ],
            [
                'title' => 'The Godfather',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=The+Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'release_year' => 1972,
                'genre' => 'Crime, Drama'
            ],
            [
                'title' => 'Pulp Fiction',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=Pulp+Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'release_year' => 1994,
                'genre' => 'Crime, Drama'
            ],
            [
                'title' => 'The Dark Knight',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=The+Dark+Knight',
                'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'release_year' => 2008,
                'genre' => 'Action, Crime, Drama'
            ],
            [
                'title' => 'Inception',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'release_year' => 2010,
                'genre' => 'Action, Adventure, Sci-Fi'
            ],
            [
                'title' => 'Forrest Gump',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=Forrest+Gump',
                'description' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other historical events unfold through the perspective of an Alabama man with an IQ of 75.',
                'release_year' => 1994,
                'genre' => 'Drama, Romance'
            ],
            [
                'title' => 'The Matrix',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=The+Matrix',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'release_year' => 1999,
                'genre' => 'Action, Sci-Fi'
            ],
            [
                'title' => 'Parasite',
                'poster_url' => 'https://via.placeholder.com/300x450.png?text=Parasite',
                'description' => 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.',
                'release_year' => 2019,
                'genre' => 'Comedy, Drama, Thriller'
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
