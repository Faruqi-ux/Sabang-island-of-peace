@extends('layouts.app')

@section('title', 'About Us - Sabang Island of piece')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4">About Us</h1>
        <p class="text-xl">Discover the story behind Sabang Island of piece</p>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Story</h2>
            <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
            <p class="text-gray-600 leading-relaxed">
                Sabang Island of piece was founded with a simple mission: to help travelers discover amazing destinations 
                and create unforgettable experiences. We believe that travel has the power to transform lives, 
                and we're here to make planning your next adventure easier than ever.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-compass text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Our Mission</h3>
                <p class="text-gray-600">To inspire and empower travelers with the best destinations and itineraries.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-eye text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Our Vision</h3>
                <p class="text-gray-600">To become the most trusted travel planning platform.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heart text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Our Values</h3>
                <p class="text-gray-600">Integrity, innovation, and putting travelers first.</p>
            </div>
        </div>
    </div>
</section>
@endsection