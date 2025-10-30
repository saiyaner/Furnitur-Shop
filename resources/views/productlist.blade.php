<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .category-section {
            scroll-margin-top: 100px;
        }
        .active-category {
            background-color: #1f2937 !important;
            color: white !important;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold">LOGO</div>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-gray-900">Discover</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Collections</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Inspiration</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Contact</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-gray-900">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </button>
                    <button class="text-gray-700 hover:text-gray-900">
                        <i class="fas fa-user text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="container mx-auto px-6 py-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="w-full md:w-96">
                <div class="relative">
                    <form id="search-form" class="relative">
                        <input type="text" id="search-input" placeholder="Search Furniture Here" class="w-full px-6 py-3 bg-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <button type="submit" class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="flex items-center gap-4 overflow-x-auto scrollbar-hide">
                <button class="category-btn px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700 transition-colors whitespace-nowrap active-category" data-category="all">All Products</button>
                <button class="category-btn px-4 py-2 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition-colors whitespace-nowrap" data-category="chair">Chair</button>
                <button class="category-btn px-4 py-2 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition-colors whitespace-nowrap" data-category="table">Table</button>
                <button class="category-btn px-4 py-2 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition-colors whitespace-nowrap" data-category="sofa">Sofa</button>
                <button class="category-btn px-4 py-2 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition-colors whitespace-nowrap" data-category="lamp">Lamp</button>
                <button class="category-btn px-4 py-2 bg-white text-gray-800 rounded-lg hover:bg-gray-100 transition-colors whitespace-nowrap" data-category="bed">Bed</button>
            </div>
        </div>
    </div>

    <!-- Search Results Section -->
    <section id="search-results" class="container mx-auto px-6 py-8 hidden">
        <h2 class="text-3xl font-bold mb-6">Search Results</h2>
        <div id="results-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Results will be populated here -->
        </div>
    </section>

    <!-- All Products Section -->
    <section id="all-products-section" class="container mx-auto px-6 py-8">
        <!-- Recommendation Section -->
        <div id="recommendation-section">
            <h2 class="text-3xl font-bold mb-6">Recommend For You</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="lamp">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-lightbulb text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Sleep Lamp</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.3</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">355$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="lamp">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-lightbulb text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Desk Lamp</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.5</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">275$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="chair">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-chair text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Office Chair</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.5</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">355$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="table">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-table text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Coffee Table</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.2</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">420$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chair Section -->
        <div id="chair-section" class="category-section mt-12">
            <h2 class="text-3xl font-bold mb-6">Chair</h2>
            <div class="relative">
                <button onclick="scrollLeft('chair-carousel')" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white shadow-lg rounded-full p-3 hover:bg-gray-100 transition-all -ml-4">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <div id="chair-carousel" class="flex gap-6 overflow-x-auto scrollbar-hide scroll-smooth pb-4">
                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Office Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.5</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">355$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Gaming Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.7</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">425$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Lounge Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.8</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">550$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card min-w-[280px] bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex-shrink-0" data-category="chair">
                        <div class="relative p-6">
                            <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                                <i class="far fa-shopping-cart text-xl"></i>
                            </button>
                            <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                                <i class="fas fa-chair text-7xl text-gray-800"></i>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-800">Dining Chair</h3>
                                <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <span class="text-xs font-semibold">4.4</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-3xl font-bold">299$</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button onclick="scrollRight('chair-carousel')" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white shadow-lg rounded-full p-3 hover:bg-gray-100 transition-all -mr-4">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>
            </div>
            <div class="flex justify-center gap-2 mt-6">
                <span class="w-2 h-2 bg-gray-800 rounded-full"></span>
                <span class="w-2 h-2 bg-gray-300 rounded-full"></span>
                <span class="w-2 h-2 bg-gray-300 rounded-full"></span>
            </div>
        </div>

        <!-- Table Section -->
        <div id="table-section" class="category-section mt-12">
            <h2 class="text-3xl font-bold mb-6">Table</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="table">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-table text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Dining Table</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.5</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">455$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="table">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-table text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Coffee Table</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.2</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">320$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="table">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-table text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Study Table</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.6</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">380$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="table">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-table text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Side Table</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.4</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">280$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sofa Section -->
        <div id="sofa-section" class="category-section mt-12">
            <h2 class="text-3xl font-bold mb-6">Sofa</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="sofa">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-couch text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Leather Sofa</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.7</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">850$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="sofa">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-couch text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Fabric Sofa</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.5</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">720$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lamp Section -->
        <div id="lamp-section" class="category-section mt-12">
            <h2 class="text-3xl font-bold mb-6">Lamp</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="lamp">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-lightbulb text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Sleep Lamp</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.3</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">355$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="lamp">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-lightbulb text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Desk Lamp</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.5</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">275$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bed Section -->
        <div id="bed-section" class="category-section mt-12">
            <h2 class="text-3xl font-bold mb-6">Bed</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="bed">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-bed text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">King Size Bed</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.8</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">1200$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-category="bed">
                    <div class="relative p-6">
                        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 transition-colors">
                            <i class="far fa-shopping-cart text-xl"></i>
                        </button>
                        <div class="flex items-center justify-center h-48 bg-gray-50 rounded-lg">
                            <i class="fas fa-bed text-7xl text-gray-800"></i>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-800">Queen Size Bed</h3>
                            <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-xs font-semibold">4.6</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-3xl font-bold">950$</span>
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-6 py-2 rounded-lg transition-colors">BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category View Section (for when a specific category is selected) -->
    <section id="category-view-section" class="container mx-auto px-6 py-8 hidden">
        <h2 id="category-view-title" class="text-3xl font-bold mb-6"></h2>
        <div id="category-view-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Category products will be populated here -->
        </div>
    </section>

    <section class="container mx-auto px-6 py-12">
        <div class="bg-gray-200 rounded-2xl p-8 md:p-12 grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Crafted with Passion, Designed for Comfort</h2>
                <p class="text-gray-700 mb-6">At Furniture Shop, we believe every piece of furniture should tell a story. With a perfect blend of traditional craftsmanship and modern design, we create furniture that brings your living spaces to life.</p>
                <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-8 py-3 rounded-lg transition-colors flex items-center gap-2">
                    Learn More
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <div>
                <div class="bg-white rounded-xl p-6">
                    <h3 class="text-xl font-bold mb-4">What Our Customers Say</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">Amazing quality and design!</p>
                            <p class="text-xs font-semibold">- Alex R.</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">Best furniture store ever!</p>
                            <p class="text-xs font-semibold">- Maria S.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#FFAE00] text-black py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">LOGO | FURNITURE SHOP</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">CATEGORIES</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Furniture</a></li>
                        <li><a href="#" class="hover:underline">Decoration</a></li>
                        <li><a href="#" class="hover:underline">Lightning</a></li>
                        <li><a href="#" class="hover:underline">Chairs</a></li>
                        <li><a href="#" class="hover:underline">Bedroom</a></li>
                        <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">CONTACT US</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-phone"></i>
                            <span>Call: 0361-5500-900</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-envelope"></i>
                            <span>info@furniture.com</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fab fa-facebook text-2xl"></i>
                            <span>facebook.com/furniture</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fab fa-instagram text-2xl"></i>
                            <span>@furniture_official</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                            <span>Jl. Lorem St. Dolor 25A, Bali, ID 80361</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-black mt-8 pt-8 text-center">
                <p>Copyright 2024. Furniture All Rights Reserved. | <a href="#" class="hover:underline">Terms of Use</a> | <a href="#" class="hover:underline">Privacy Policy</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Carousel scrolling functions
        function scrollLeft(carouselId) {
            var carousel = document.getElementById(carouselId);
            carousel.scrollBy({ left: -320, behavior: 'smooth' });
        }
        
        function scrollRight(carouselId) {
            var carousel = document.getElementById(carouselId);
            carousel.scrollBy({ left: 320, behavior: 'smooth' });
        }

        // Category navigation and search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const categoryButtons = document.querySelectorAll('.category-btn');
            const allProductsSection = document.getElementById('all-products-section');
            const categoryViewSection = document.getElementById('category-view-section');
            const recommendationSection = document.getElementById('recommendation-section');
            const searchResults = document.getElementById('search-results');
            
            // Category navigation
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Update active button
                    categoryButtons.forEach(btn => {
                        btn.classList.remove('active-category');
                        btn.classList.add('bg-white', 'text-gray-800');
                    });
                    this.classList.add('active-category');
                    this.classList.remove('bg-white', 'text-gray-800');
                    
                    if (category === 'all') {
                        // Show all products section
                        allProductsSection.classList.remove('hidden');
                        categoryViewSection.classList.add('hidden');
                        searchResults.classList.add('hidden');
                        // Scroll to top
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    } else {
                        // Show category view
                        allProductsSection.classList.add('hidden');
                        searchResults.classList.add('hidden');
                        categoryViewSection.classList.remove('hidden');
                        
                        // Update category view title
                        document.getElementById('category-view-title').textContent = 
                            category.charAt(0).toUpperCase() + category.slice(1);
                        
                        // Populate category view with products
                        populateCategoryView(category);
                        
                        // Scroll to category view
                        categoryViewSection.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
            
            // Search functionality
            const searchForm = document.getElementById('search-form');
            const searchInput = document.getElementById('search-input');
            const resultsContainer = document.getElementById('results-container');
            
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const searchTerm = searchInput.value.trim();
                
                if (searchTerm) {
                    // Hide all sections
                    allProductsSection.classList.add('hidden');
                    categoryViewSection.classList.add('hidden');
                    
                    // Show search results section
                    searchResults.classList.remove('hidden');
                    
                    // Simulate search results
                    simulateSearchResults(searchTerm);
                    
                    // Scroll to search results
                    searchResults.scrollIntoView({ behavior: 'smooth' });
                }
            });
            
            function populateCategoryView(category) {
                const container = document.getElementById('category-view-container');
                container.innerHTML = '';
                
                // Get all products with the selected category
                const products = document.querySelectorAll(`.product-card[data-category="${category}"]`);
                
                if (products.length > 0) {
                    products.forEach(product => {
                        const clone = product.cloneNode(true);
                        container.appendChild(clone);
                    });
                } else {
                    container.innerHTML = '<p class="col-span-4 text-center text-gray-500">No products found in this category.</p>';
                }
            }
            
            function simulateSearchResults(term) {
                // Clear previous results
                resultsContainer.innerHTML = '';
                
                // Get all products that match the search term
                const allProducts = document.querySelectorAll('.product-card');
                const matchingProducts = [];
                
                allProducts.forEach(product => {
                    const productName = product.querySelector('h3').textContent.toLowerCase();
                    if (productName.includes(term.toLowerCase())) {
                        matchingProducts.push(product);
                    }
                });
                
                if (matchingProducts.length > 0) {
                    matchingProducts.forEach(product => {
                        const clone = product.cloneNode(true);
                        resultsContainer.appendChild(clone);
                    });
                } else {
                    resultsContainer.innerHTML = '<p class="col-span-4 text-center text-gray-500">No products found matching your search.</p>';
                }
            }
        });
    </script>
</body>
</html>