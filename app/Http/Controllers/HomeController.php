<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $itineraries = Itinerary::latest()->take(4)->get();
        return view('home', compact('itineraries'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        
        $itineraries = Itinerary::where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->orWhere('season', 'like', "%{$query}%")
            ->get();
        
        return view('search-results', compact('itineraries', 'query'));
    }
}