<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'poster_url',
        'description',
        'release_year',
        'genre'
    ];

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites', 'movie_id', 'user_id')
                    ->withTimestamps();
    }

    public function favorites()
    {
        return $this->belongsToMany(Movie::class, 'favorites', 'user_id', 'movie_id')
                    ->withTimestamps();
    }

    public function hasFavorited(Movie $movie)
    {
        return $this->favorites()->where('movie_id', $movie->id)->exists();
    }
}