<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $movies = Movie::orderBy('created_at', 'desc')->take(50)->get();
        
        $favorites = Auth::user()->favorites()->get();
        
        return view('dashboard', compact('movies', 'favorites'));
    }
}