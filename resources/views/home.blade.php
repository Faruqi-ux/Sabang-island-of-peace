@extends('layouts.app')

@section('title', 'Home - Sabang Island of Peace')

@section('content')
<section class="relative h-[500px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=80" 
             class="w-full h-full object-cover" alt="Hero Background">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/30"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight animate-fade-in">
            Discover Your Next <span class="text-blue-400">Adventure</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto">
            Explore the hidden gems of Sabang Island. Find curated itineraries and travel inspiration for your dream vacation.
        </p>
        
        <form action="{{ route('search') }}" method="GET" class="max-w-2xl mx-auto group">
            <div class="flex items-center bg-white p-2 rounded-2xl shadow-2xl transition-all duration-300 group-focus-within:ring-4 group-focus-within:ring-blue-500/30">
                <div class="pl-4 text-gray-400">
                    <i class="fas fa-search text-lg"></i>
                </div>
                <input type="text" name="search" placeholder="Where do you want to go?" 
                       class="flex-1 px-4 py-3 text-gray-700 bg-transparent focus:outline-none placeholder:text-gray-400 font-medium">
                <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/30">
                    Search
                </button>
            </div>
        </form>
    </div>
</section>

<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Our Recommendations</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-2">Popular Itineraries</h2>
                <p class="text-slate-500 mt-2">Expertly crafted plans to make your trip unforgettable.</p>
            </div>
            <a href="{{ route('itineraries.index') }}" class="inline-flex items-center font-bold text-blue-600 hover:text-blue-700 transition-all group">
                View All Destinations 
                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
        
        <div class="flex gap-3 mb-10 overflow-x-auto pb-2 scrollbar-hide">
            <a href="{{ route('itineraries.index') }}" 
               class="whitespace-nowrap px-6 py-2.5 rounded-full bg-blue-600 text-white font-semibold shadow-md shadow-blue-200">
               All Seasons
            </a>
            @foreach(['Summer', 'Fall', 'Spring', 'Winter'] as $season)
            <a href="{{ route('itineraries.index', ['season' => $season]) }}" 
               class="whitespace-nowrap px-6 py-2.5 rounded-full bg-white text-slate-600 font-semibold border border-slate-200 hover:border-blue-600 hover:text-blue-600 transition-all">
               {{ strtoupper($season) }}
            </a>
            @endforeach
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($itineraries as $itinerary)
            <div class="group bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="relative overflow-hidden h-52">
                    <!-- PERUBAHAN: Gambar berbeda berdasarkan ID itinerary -->
                    @php
                        $gambarSabang = [
                            1 => 'danau-aneuk-laot.jpeg',
                            2 => 'iboih.jpeg',
                            3 => 'pantai-gapang.jpeg',
                            4 => 'pantai-kasih.jpeg',
                            5 => 'pulau-rubiah.jpg',
                            6 => 'sabang-sunset.jpg',
                            7 => 'sabang-beach.jpg',
                            8 => 'sabang-underwater.jpg',
                        ];
                        $gambar = $gambarSabang[$itinerary->id] ?? 'default.jpg';
                    @endphp
                    
                    <img src="{{ asset('images/sabang/' . $gambar) }}" 
                         alt="{{ $itinerary->title }}" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur-md text-blue-600 text-xs font-extrabold px-3 py-1.5 rounded-lg shadow-sm">
                            <i class="far fa-clock mr-1"></i> {{ $itinerary->duration }}
                        </span>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Sabang, Indonesia</span>
                        <div class="flex text-yellow-400 text-xs">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <h3 class="font-bold text-xl text-slate-800 mb-2 group-hover:text-blue-600 transition-colors">
                        {{ $itinerary->title }}
                    </h3>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-6">
                        {{ $itinerary->description }}
                    </p>
                    
                    <a href="{{ route('itineraries.show', $itinerary->id) }}" 
                       class="flex items-center justify-center w-full py-3 rounded-xl bg-slate-50 text-slate-700 font-bold text-sm group-hover:bg-blue-600 group-hover:text-white transition-all">
                        Explore Details
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 text-center text-slate-500 italic">
                No itineraries found for this category.
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection