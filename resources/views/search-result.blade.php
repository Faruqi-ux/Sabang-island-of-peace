@extends('layouts.app')

@section('title', 'Search Results - Sabang Island of piece')

@section('content')
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Search Results</h1>
            <p class="text-gray-600">Search results for: <span class="font-semibold text-blue-600">"{{ $query }}"</span></p>
            <p class="text-gray-500">Found {{ $itineraries->count() }} itinerary(ies)</p>
        </div>
        
        @if($itineraries->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($itineraries as $itinerary)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="https://picsum.photos/400/300?random={{ $itinerary->id }}" 
                         alt="{{ $itinerary->title }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">{{ $itinerary->title }}</h3>
                        <p class="text-blue-600 text-sm mb-2">{{ $itinerary->duration }}</p>
                        <p class="text-gray-600">{{ Str::limit($itinerary->description, 100) }}</p>
                        <a href="{{ route('itineraries.show', $itinerary->id) }}" 
                           class="inline-block mt-3 text-blue-600 font-semibold hover:underline">
                            View Details →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                <h2 class="text-2xl font-semibold text-gray-600">No results found</h2>
                <p class="text-gray-500">No itineraries matching "{{ $query }}"</p>
                <a href="{{ route('home') }}" class="inline-block mt-4 text-blue-600 hover:underline">
                    Back to Home
                </a>
            </div>
        @endif
    </div>
</section>
@endsection