<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function toggle(Movie $movie)
    {
        $user = Auth::user();

        if ($user->hasFavorited($movie)) {

            return redirect()->route('favorites.index')->with('success', "{$movie->title} is already in your favorites!");
        }

        $user->favorites()->attach($movie->id);
        return redirect()->route('favorites.index')->with('success', "{$movie->title} is added to favorites");
    }
    
    public function index()
    {
        $favorites = Auth::user()->favorites()->paginate(12);
        return view('favorite', compact('favorites'));
    }

    public function remove(Movie $movie)
    {
        $user = Auth::user();

        $user->favorites()->detach($movie->id);
        return redirect()->route('favorites.index')->with('success', "{$movie->title} has been removed from your favorites.");
    }

}