<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    public function index(Request $request)
    {
        $season = $request->get('season');
        
        if ($season) {
            $itineraries = Itinerary::where('season', $season)->get();
        } else {
            $itineraries = Itinerary::all();
        }
        
        // Ambil daftar season yang tersedia untuk filter
        $seasons = Itinerary::select('season')->distinct()->pluck('season');
        
        return view('itineraries.index', compact('itineraries', 'seasons', 'season'));
    }
    
    public function show($id)
    {
        $itinerary = Itinerary::findOrFail($id);
        
        // Rekomendasi itinerary lain (exclude yang sedang dilihat)
        $otherItineraries = Itinerary::where('id', '!=', $id)->latest()->take(3)->get();
        
        return view('itineraries.show', compact('itinerary', 'otherItineraries'));
    }
}