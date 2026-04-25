@extends('layouts.app')

@section('title', 'Itineraries - Sabang Island of Peace')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Explore Itineraries</h1>
            <p class="text-gray-600">Discover carefully curated travel plans for your next adventure in Sabang.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($itineraries as $itinerary)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <!-- GAMBAR: Menggunakan ID dengan ekstensi jpeg -->

                @php
$gambarSabang = [
    1 => 'danau-aneuk-laot.jpeg',
    2 => 'iboih.jpeg',
    3 => 'pantai-gapang.jpeg',
    4 => 'pantai-kasih.jpeg',
    5 => 'pulau-rubiah.jpeg',
    6 => 'sabang-sunset.jpeg',
    7 => 'sabang-waterfall.jpeg',
    8 => 'sabang-underwater.jpeg',
];
$gambar = $gambarSabang[$itinerary->id] ?? 'default.jpeg';
@endphp
 
                <img src="{{ asset('images/sabang/' . $gambar) }}" 
                    alt="{{ $itinerary->title }}" 
                    class="w-full h-56 object-cover">
                
                
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2">{{ $itinerary->title }}</h3>
                    <p class="text-blue-600 text-sm mb-3">
                        <i class="far fa-clock mr-1"></i> {{ $itinerary->duration }}
                    </p>
                    <p class="text-gray-600 mb-4">{{ Str::limit($itinerary->description, 100) }}</p>
                    <a href="{{ route('itineraries.show', $itinerary->id) }}" 
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        View Details
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection