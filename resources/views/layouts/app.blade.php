<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sabang Island of Peace')</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #2563eb;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after, .active-nav::after {
            width: 100%;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-900">
    
    <nav class="glass-nav fixed w-full z-50 top-0 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="group flex items-center gap-2">
                        <div class="bg-blue-600 p-2 rounded-lg transition-transform group-hover:rotate-12">
                            <i class="fas fa-island-tropical text-white"></i>
                        </div>
                        <span class="text-xl font-extrabold tracking-tight text-slate-800">
                            Sabang<span class="text-blue-600">Island</span>
                        </span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-10">
                    <a href="{{ route('home') }}" 
                       class="nav-link text-sm font-semibold tracking-wide {{ request()->routeIs('home') ? 'active-nav text-blue-600' : 'text-slate-600 hover:text-blue-600' }}">
                        Home
                    </a>
                    <a href="{{ route('itineraries.index') }}" 
                       class="nav-link text-sm font-semibold tracking-wide {{ request()->routeIs('itineraries.*') ? 'active-nav text-blue-600' : 'text-slate-600 hover:text-blue-600' }}">
                        Itineraries
                    </a>
                    <a href="{{ route('about') }}" 
                       class="nav-link text-sm font-semibold tracking-wide {{ request()->routeIs('about') ? 'active-nav text-blue-600' : 'text-slate-600 hover:text-blue-600' }}">
                        About Us
                    </a>
                   
                </div>
                
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="p-2 rounded-lg text-slate-600 hover:bg-gray-100 focus:outline-none">
                        <i class="fas fa-bars-staggered text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 animate-fade-in-down">
            <div class="px-6 py-6 space-y-4">
                <a href="{{ route('home') }}" class="block text-lg font-medium text-slate-700">Home</a>
                <a href="{{ route('itineraries.index') }}" class="block text-lg font-medium text-slate-700">Itineraries</a>
                <a href="{{ route('about') }}" class="block text-lg font-medium text-slate-700">About Us</a>
                <hr class="border-gray-100">
                <button class="w-full bg-blue-600 text-white py-3 rounded-xl font-bold">Plan Your Trip</button>
            </div>
        </div>
    </nav>

    <main class="pt-20 min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-slate-950 text-white pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="bg-blue-600 p-2 rounded-lg">
                            <i class="fas fa-island-tropical text-white"></i>
                        </div>
                        <span class="text-xl font-bold italic">Sabang Island</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed">
                        Explore the westernmost point of Indonesia. Experience tranquility, crystal clear waters, and unforgettable memories.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 relative inline-block after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-8 after:height-2 after:bg-blue-600">Quick Links</h4>
                    <ul class="space-y-4 text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('itineraries.index') }}" class="hover:text-white transition-colors">Travel Itineraries</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Our Stories</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Us</h4>
                    <ul class="space-y-4 text-slate-400">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-location-dot mt-1 text-blue-500"></i>
                            <span>Sabang, Pulau Weh,<br>Aceh, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-blue-500"></i>
                            <span>+62 123 4567 890</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-blue-500"></i>
                            <span>hello@sabangisland.com</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                    <p class="text-slate-400 text-sm mb-4">Get the latest travel tips and promo updates.</p>
                    <form class="flex flex-col gap-2">
                        <input type="email" placeholder="Your email address" class="bg-slate-800 border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-600 text-white text-sm">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition-all">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 text-sm">
                <p>&copy; 2026 Sabang Island of Peace. All rights reserved.</p>
                <p>Built with <i class="fas fa-heart text-red-500 mx-1"></i> for travelers.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth Toggle Mobile Menu
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuButton) {
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Change nav background on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 20) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });
    </script>
</body>
</html>