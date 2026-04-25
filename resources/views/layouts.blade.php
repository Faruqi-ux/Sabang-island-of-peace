<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sabang Island of piece')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .active-nav {
            color: #2563eb;
            border-bottom: 2px solid #2563eb;
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                        <i class="fas fa-plane mr-2"></i>WisataApp
                    </a>
                </div>
                
                <!-- Menu Navbar - 3 Menu Utama -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" 
                       class="text-gray-700 hover:text-blue-600 font-medium transition duration-300 {{ request()->routeIs('home') ? 'active-nav' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('itineraries.index') }}" 
                       class="text-gray-700 hover:text-blue-600 font-medium transition duration-300 {{ request()->routeIs('itineraries.*') ? 'active-nav' : '' }}">
                        Itineraries
                    </a>
                    <a href="{{ route('about') }}" 
                       class="text-gray-700 hover:text-blue-600 font-medium transition duration-300 {{ request()->routeIs('about') ? 'active-nav' : '' }}">
                        About Us
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-2 space-y-2">
                <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ route('itineraries.index') }}" class="block py-2 text-gray-700 hover:text-blue-600">Itineraries</a>
                <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-blue-600">About Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="mt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Sabang Island of piece</h3>
                    <p class="text-gray-400">Discover amazing destinations and plan your perfect trip with us.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                        <li><a href="{{ route('itineraries.index') }}" class="hover:text-white">Itineraries</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white"><i class="fab fa-instagram mr-2"></i> Instagram</a></li>
                        <li><a href="#" class="hover:text-white"><i class="fab fa-facebook mr-2"></i> Facebook</a></li>
                        <li><a href="#" class="hover:text-white"><i class="fab fa-twitter mr-2"></i> Twitter</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i> info@wisataapp.com</li>
                        <li><i class="fas fa-phone mr-2"></i> +62 123 4567 890</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 WisataApp. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>