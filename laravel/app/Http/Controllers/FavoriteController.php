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
            $user->favorites()->detach($movie->id);
            $message = 'Movie removed from favorites';
        } else {
            $user->favorites()->attach($movie->id);
            $message = 'Movie added to favorites';
        }

        return redirect()->route('dashboard')->with('success', $message);
    }
    
    public function index()
    {
        $favorites = Auth::user()->favorites()->paginate(12);
        return view('favorite', compact('favorites'));
    }
}