<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Shop</title>
    @vite('resources/css/app.css')
    <style>
        .carousel-container {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="md:mx-20 px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/"><div class="text-2xl font-bold">LOGO</div></a>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-gray-900">Discover</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Collections</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Inspiration</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Contact</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-gray-900">
                        <iconify-icon icon="mdi:cart" width="26"></iconify-icon>
                    </button>
                    <a href="{{ url ('login') }}"><button class="text-gray-700 hover:text-gray-900">
                        <iconify-icon icon="mdi:user" width="26"></iconify-icon>
                    </button></a>
                </div>
            </div>
            <div class="my-5">
                <div class="mt-5 flex justify-center items-center">
                    <input type="text" placeholder="Search furniture here..." class="w-full md:w-96 px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-gray-400">
                </div>
                <div class="mt-4 flex flex-wrap justify-center gap-5 text-sm">
                    <a href="#chair" class="text-gray-700 px-5 py-1 border rounded hover:text-white hover:bg-gray-900 transition">Chair</a>
                    <a href="#table" class="text-gray-700 px-5 py-1 border rounded hover:text-white hover:bg-gray-900 transition">Table</a>
                    <a href="#sofa" class="text-gray-700 px-5 py-1 border rounded hover:text-white hover:bg-gray-900 transition">Sofa</a>
                    <a href="#lamp" class="text-gray-700 px-5 py-1 border rounded hover:text-white hover:bg-gray-900 transition">Lamp</a>
                    <a href="#bed" class="text-gray-700 px-5 py-1 border rounded hover:text-white hover:bg-gray-900 transition">Bed</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-4 py-8">
        <!-- Recommend For You Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Recommend For You</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">

                <!-- Product Card -->
                @foreach ($products as $product)
                <a href="{{ route('detailproduct', ['id' => $product->id]) }}">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform md:hover:scale-105">
                        <div class="relative p-4">
                            <button class="absolute top-1 left-0 p-2 text-gray-600">
                                <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                            </button>
                            <div class="flex justify-center items-center h-48 text-6xl">
                                <img src="{{ $product->image }}" class="h-full object-cover">
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-sm font-medium text-gray-800">{{ $product->name }}</h3>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                                <span class="text-xs ml-1 text-gray-600">{{ $product->rate }}</span>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-sm md:text-lg font-bold">${{ $product->price }}</span>
                                <button onclick="buyNow('{{ $product->name }}', {{ $product->price }})" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1  rounded-full text-sm">
                                    BUY NOW
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform md:hover:scale-105">
                    <div class="relative p-4">
                        <button class="absolute top-1 left-0 p-2 text-gray-600">
                            <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                        </button>
                        <div class="flex justify-center items-center h-48 text-6xl">
                            <img src="{{ asset('img/image 5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                        <div class="flex items-center mt-1">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                            <span class="text-xs ml-1 text-gray-600">4.3</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold">35$</span>
                            <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1  rounded-full text-sm">
                                BUY NOW
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Repeat for 3 more cards -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform md:hover:scale-105">
                    <div class="relative p-4">
                        <button class="absolute top-1 left-0 p-2 text-gray-600">
                            <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                        </button>
                        <div class="flex justify-center items-center h-48 text-6xl">
                            <img src="{{ asset('img/image 12.png') }}" alt="">
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                        <div class="flex items-center mt-1">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                            <span class="text-xs ml-1 text-gray-600">4.3</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold">35$</span>
                            <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1  rounded-full text-sm">
                                BUY NOW
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform md:hover:scale-105">
                    <div class="relative p-4">
                        <button class="absolute top-1 left-0 p-2 text-gray-600">
                            <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                        </button>
                        <div class="flex justify-center items-center h-48 text-6xl">
                            <img src="{{ asset('img/image 5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                        <div class="flex items-center mt-1">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                            <span class="text-xs ml-1 text-gray-600">4.3</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold">35$</span>
                            <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1  rounded-full text-sm">
                                BUY NOW
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform md:hover:scale-105">
                    <div class="relative p-4">
                        <button class="absolute top-1 left-0 p-2 text-gray-600">
                            <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                        </button>
                        <div class="flex justify-center items-center h-48 text-6xl">
                            <img src="{{ asset('img/image 12.png') }}" alt="">
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                        <div class="flex items-center mt-1">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                            <span class="text-xs ml-1 text-gray-600">4.3</span>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold">35$</span>
                            <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1  rounded-full text-sm">
                                BUY NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Chair Section with Carousel -->
        <section class="mb-12" id ="chair">
            <h2 class="text-2xl font-bold mb-6">Chair</h2> 
            <div class="relative">
                <button onclick="scrollCarousel('chair', -1)" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="scrollCarousel('chair', 1)" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <div id="chair-carousel" class="flex overflow-x-auto gap-6 px-12 pb-4 scrollbar-hide" style="scroll-snap-type: x mandatory;">
                    <!-- Product Cards -->
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">
                                    <img src="{{ asset('img/image 12.png') }}" alt="">
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Table, Sofa, Lamp, Bed Sections (Similar structure) -->
        <!-- Table Section -->
        <section class="mb-12" id="table">
            <h2 class="text-2xl font-bold mb-6">Table</h2>
            <div class="relative">
                <button onclick="scrollCarousel('table', -1)" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="scrollCarousel('table', 1)" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <div id="table-carousel" class="flex overflow-x-auto gap-6 px-12 pb-4 scrollbar-hide">
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sofa Section -->
        <section class="mb-12" id="sofa">
            <h2 class="text-2xl font-bold mb-6">Sofa</h2>
            <div class="relative">
                <button onclick="scrollCarousel('sofa', -1)" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="scrollCarousel('sofa', 1)" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <div id="sofa-carousel" class="flex overflow-x-auto gap-6 px-12 pb-4 scrollbar-hide">
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lamp Section -->
        <section class="mb-12" id="lamp">
            <h2 class="text-2xl font-bold mb-6">Lamp</h2>
            <div class="relative">
                <button onclick="scrollCarousel('lamp', -1)" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="scrollCarousel('lamp', 1)" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <div id="lamp-carousel" class="flex overflow-x-auto gap-6 px-12 pb-4 scrollbar-hide">
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bed Section -->
        <section class="mb-12" id="bed">
            <h2 class="text-2xl font-bold mb-6">Bed</h2>
            <div class="relative">
                <button onclick="scrollCarousel('bed', -1)" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="scrollCarousel('bed', 1)" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <div id="bed-carousel" class="flex overflow-x-auto gap-6 px-12 pb-4 scrollbar-hide">
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-56 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                            <div class="relative p-4">
                                <button class="absolute top-1 left-0 p-2 text-gray-600">
                                    <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                                </button>
                                <div class="flex justify-center items-center h-48 text-6xl">💡</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-800">Shop Lamp</h3>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                    </svg>
                                    <span class="text-xs ml-1 text-gray-600">4.3</span>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-bold">35$</span>
                                    <button onclick="buyNow('Shop Lamp', 35)" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-4 py-1 rounded-full text-sm">
                                        BUY NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="mb-12 bg-gray-200 rounded-lg p-8">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Crafted with Passion, Designed for Comfort</h2>
                    <p class="text-gray-700 mb-6">At Furniuture, we believe every piece of quality products tells a story. Established in 2010, we've been creating functional art that blends timeless design with modern living. Our expert craftsmanship and carefully sourced materials ensure that every chair, table and sofa is built to lasting beauty.</p>
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-3 rounded-lg">
                        Learn More ›
                    </button>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">What Our Customers Say</h3>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg">
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">★★★★★</div>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">"Amazing quality and beautiful design!"</p>
                            <p class="text-xs text-gray-500">- John D.</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">★★★★★</div>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">"Best furniture purchase I've ever made."</p>
                            <p class="text-xs text-gray-500">- Sarah M.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-[#FFAE00] text-black py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">LOGO | FURNITURE SHOP</h3>
                    <p class="text-sm">Upgrade your life with unique furniture pieces that reflect your individuality. From sleek modern designs to cozy traditional styles, we've got something perfect for every room. Happy shopping!</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">CATEGORIES</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">All Product</a></li>
                        <li><a href="#" class="hover:underline">Furniture</a></li>
                        <li><a href="#" class="hover:underline">Lightning</a></li>
                        <li><a href="#" class="hover:underline">Decoration</a></li>
                        <li><a href="#" class="hover:underline">Sofa</a></li>
                        <li><a href="#" class="hover:underline">Bedroom</a></li>
                        <li><a href="#" class="hover:underline">Popular Search</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">CONTACT US</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>Call: 0362.459.798</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>support@example.com</span>
                        </div>
                        <div class="flex gap-4 mt-4">
                            <a href="#" class="hover:opacity-80">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="hover:opacity-80">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center gap-2 text-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Jl. LOGO St 04, BSD 12345, Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-black mt-8 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>© Copyright. For All Right Reserved</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:underline">Terms of Use</a>
                    <a href="#" class="hover:underline">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script>
        // Carousel scroll function
        function scrollCarousel(category, direction) {
            const carousel = document.getElementById(category + '-carousel');
            const scrollAmount = 280; // width of card + gap
            
            if (direction === 1) {
                carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            } else {
                carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        }

        // Buy now function
        function buyNow(productName, price) {
            alert(`Membeli ${productName} seharga ${price}\n\nPesanan Anda sedang diproses!`);
        }

        // Add to cart function (for cart icons)
        document.querySelectorAll('button').forEach(btn => {
            if (btn.querySelector('svg path[d*="M3 3h2"]')) {
                btn.addEventListener('click', function(e) {
                    if (e.target.closest('button') && !e.target.closest('button').textContent.includes('BUY NOW')) {
                        alert('Produk telah ditambahkan ke keranjang!');
                    }
                });
            }
        });

        // Hide scrollbar
        const style = document.createElement('style');
        style.textContent = `
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>