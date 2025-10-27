
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 lg:px-12 py-5">
            <div class="flex items-center justify-between">
                <a href="http:/"></a>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors">Discover</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors">Collections</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors">Inspiration</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors">Contact</a>
                </nav>
                
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-gray-900 transition-colors">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </button>
                    <button class="text-gray-700 hover:text-gray-900 transition-colors">
                        <i class="fas fa-user text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 lg:px-12 py-10">
        <!-- Search Bar -->
        <div class="max-w-xl mx-auto mb-10">
            <input 
                type="text" 
                id="searchInput"
                placeholder="Search furniture here..." 
                class="w-full px-6 py-4 rounded-full bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-all"
            >
        </div>

        <!-- Category Filter -->
        <div class="flex justify-center space-x-6 lg:space-x-10 mb-16 flex-wrap gap-y-4">
            <button class="category-btn text-gray-700 hover:text-gray-900 font-medium pb-2 border-b-2 border-yellow-400 transition-all" data-category="all">All</button>
            <button class="category-btn text-gray-700 hover:text-gray-900 font-medium pb-2 border-b-2 border-transparent hover:border-yellow-400 transition-all" data-category="chair">Chair</button>
            <button class="category-btn text-gray-700 hover:text-gray-900 font-medium pb-2 border-b-2 border-transparent hover:border-yellow-400 transition-all" data-category="table">Table</button>
            <button class="category-btn text-gray-700 hover:text-gray-900 font-medium pb-2 border-b-2 border-transparent hover:border-yellow-400 transition-all" data-category="sofa">Sofa</button>
            <button class="category-btn text-gray-700 hover:text-gray-900 font-medium pb-2 border-b-2 border-transparent hover:border-yellow-400 transition-all" data-category="lamp">Lamp</button>
            <button class="category-btn text-gray-700 hover:text-gray-900 font-medium pb-2 border-b-2 border-transparent hover:border-yellow-400 transition-all" data-category="bed">Bed</button>
        </div>

        <!-- Recommend For You Section (Only visible in 'all' category) -->
        <section class="mb-20" id="recommendedSection">
            <h2 class="text-3xl font-bold mb-8">Recommend For You</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Product Card 1 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="lamp" data-name="Shop Lamp">
                    <a href="product-detail.html?id=1" class="block">
                        <div class="relative">
                            <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Desk+Lamp" alt="Shop Lamp" class="w-full h-52 object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                <div class="flex items-center text-sm">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.3</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold">355</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                    BUY NOW
                                </button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="lamp" data-name="Shop Lamp">
                    <a href="product-detail.html?id=2" class="block">
                        <div class="relative">
                            <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Desk+Lamp" alt="Shop Lamp" class="w-full h-52 object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                <div class="flex items-center text-sm">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.3</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold">355</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                    BUY NOW
                                </button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="lamp" data-name="Shop Lamp">
                    <a href="product-detail.html?id=3" class="block">
                        <div class="relative">
                            <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Desk+Lamp" alt="Shop Lamp" class="w-full h-52 object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                <div class="flex items-center text-sm">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.3</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold">355</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                    BUY NOW
                                </button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Product Card 4 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="lamp" data-name="Shop Lamp">
                    <a href="product-detail.html?id=4" class="block">
                        <div class="relative">
                            <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Desk+Lamp" alt="Shop Lamp" class="w-full h-52 object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                <div class="flex items-center text-sm">
                                    <i class="fas fa-star text-yellow-400 mr-1"></i>
                                    <span>4.3</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold">355</span>
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                    BUY NOW
                                </button>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        <!-- Chair Section -->
        <section class="mb-20 category-section" data-category="chair">
            <h2 class="text-3xl font-bold mb-8">Chair</h2>
            <div class="relative">
                <button class="carousel-btn-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-8 bg-white rounded-full p-4 shadow-lg hover:bg-gray-100 transition-all z-10" data-section="chair">
                    <i class="fas fa-chevron-left text-gray-700"></i>
                </button>
                <div class="carousel-container overflow-hidden" data-carousel="chair">
                    <div class="carousel-track grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 transition-transform duration-500">
                        
                        <!-- Chair Product 1 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="chair" data-name="Shop Lamp">
                            <a href="product-detail.html?id=5" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Chair" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Chair Product 2 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="chair" data-name="Shop Lamp">
                            <a href="product-detail.html?id=6" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Chair" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Chair Product 3 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="chair" data-name="Shop Lamp">
                            <a href="product-detail.html?id=7" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Chair" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Chair Product 4 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="chair" data-name="Shop Lamp">
                            <a href="product-detail.html?id=8" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Chair" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Chair Product 5 (Hidden by default) -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="chair" data-name="Modern Chair">
                            <a href="product-detail.html?id=9" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Chair" alt="Modern Chair" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Modern Chair</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <button class="carousel-btn-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-8 bg-white rounded-full p-4 shadow-lg hover:bg-gray-100 transition-all z-10" data-section="chair">
                    <i class="fas fa-chevron-right text-gray-700"></i>
                </button>
            </div>
            <div class="flex justify-center mt-6 space-x-2">
                <span class="carousel-dot w-2 h-2 rounded-full bg-gray-400 transition-all" data-carousel="chair" data-index="0"></span>
                <span class="carousel-dot w-2 h-2 rounded-full bg-gray-300 transition-all" data-carousel="chair" data-index="1"></span>
            </div>
        </section>

        <!-- Table Section -->
        <section class="mb-20 category-section" data-category="table">
            <h2 class="text-3xl font-bold mb-8">Table</h2>
            <div class="relative">
                <button class="carousel-btn-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-8 bg-white rounded-full p-4 shadow-lg hover:bg-gray-100 transition-all z-10" data-section="table">
                    <i class="fas fa-chevron-left text-gray-700"></i>
                </button>
                <div class="carousel-container overflow-hidden" data-carousel="table">
                    <div class="carousel-track grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 transition-transform duration-500">
                        
                        <!-- Table Products (4 cards) -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="table" data-name="Shop Lamp">
                            <a href="product-detail.html?id=10" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Table" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="table" data-name="Shop Lamp">
                            <a href="product-detail.html?id=11" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Table" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="table" data-name="Shop Lamp">
                            <a href="product-detail.html?id=12" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Table" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300" data-category="table" data-name="Shop Lamp">
                            <a href="product-detail.html?id=13" class="block">
                                <div class="relative">
                                    <button class="absolute top-4 left-4 bg-white rounded-full p-2 hover:bg-gray-100 transition-colors" onclick="event.preventDefault();">
                                        <i class="far fa-heart text-gray-600"></i>
                                    </button>
                                    <img src="https://via.placeholder.com/200x200/f0f0f0/333333?text=Table" alt="Shop Lamp" class="w-full h-52 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-3">
                                        <h3 class="text-lg font-semibold product-name">Shop Lamp</h3>
                                        <div class="flex items-center text-sm">
                                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                                            <span>4.3</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold">355</span>
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-6 py-2 rounded-lg transition-colors">
                                            BUY NOW
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <button class="carousel-btn-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-8 bg-white rounded-full p-4 shadow-lg hover:bg-gray-100 transition-all z-10" data-section="table">
                    <i class="fas fa-chevron-right text-gray-700"></i>
                </button>
            </div>
            <div class="flex justify-center mt-6 space-x-2">
                <span class="carousel-dot w-2 h-2 rounded-full bg-gray-400 transition-all" data-carousel="table" data-index="0"></span>
                <span class="carousel-dot w-2 h-2 rounded-full bg-gray-300 transition-all" data-carousel="table" data-index="1"></span>
            </div>
        </section>

    </main>

    <!-- About Section -->
    <section class="bg-gray-200 py-20 mt-20">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid md:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Crafted with Passion, Designed for Comfort</h2>
                    <p class="text-gray-700 mb-8 leading-relaxed">
                        At Furnihouse, we believe every piece with a story deserves a special place. Our carefully curated collection showcases furniture and decor that not only look beautiful but also feel like home. We've made it easier to transform spaces into havens that feel truly personal. Whether you're looking to refresh one room or reimagine your entire living space.
                    </p>
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-8 py-3 rounded-lg transition-colors">
                        Learn More →
                    </button>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6">What Our Customers Say</h2>
                    <div class="space-y-5">
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-3">
                                <div class="text-yellow-400 text-lg">★★★★★</div>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">"Amazing quality and fast delivery!"</p>
                            <p class="text-xs text-gray-500">- John D.</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-3">
                                <div class="text-yellow-400 text-lg">★★★★★</div>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">"Beautiful furniture, exceeded expectations!"</p>
                            <p class="text-xs text-gray-500">- Sarah M.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-yellow-400 text-gray-900 py-16">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid md:grid-cols-3 gap-12">
                <div>
                    <h3 class="text-2xl font-bold mb-6">LOGO | FURNITURE SHOP</h3>
                    <p class="text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold mb-6">CATEGORIES</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:underline transition-all">All Product</a></li>
                        <li><a href="#" class="hover:underline transition-all">Furniture</a></li>
                        <li><a href="#" class="hover:underline transition-all">Lighting</a></li>
                        <li><a href="#" class="hover:underline transition-all">Decoration</a></li>
                        <li><a href="#" class="hover:underline transition-all">Bedroom</a></li>
                        <li><a href="#" class="hover:underline transition-all">Living Room</a></li>
                        <li><a href="#" class="hover:underline transition-all">Buy or Sell Product</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6">CONTACT US</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3 text-lg"></i>
                            +62 888-XXX-XXX
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-instagram mr-3 text-lg"></i>
                            @furnihouse
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-facebook mr-3 text-lg"></i>
                            Furniture Shop
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-lg"></i>
                            info@furnihouse.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-yellow-500 mt-12 pt-8 flex flex-col md:flex-row justify-between text-sm gap-4">
                <p>©Copyright: Your Store. All right reserved</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:underline transition-all">Terms of Use</a>
                    <a href="#" class="hover:underline transition-all">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Carousel state untuk setiap section
        const carouselStates = {};

        // Search Function
        const searchInput = document.getElementById('searchInput');
        const productCards = document.querySelectorAll('.product-card');
        const recommendedSection = document.getElementById('recommendedSection');

        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            
            productCards.forEach(card => {
                const productName = card.getAttribute('data-name').toLowerCase();
                
                if (productName.includes(searchTerm)) {
                    card.style.display = 'block';
                    animateCard(card);
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Category Filter
        const categoryButtons = document.querySelectorAll('.category-btn');
        const categorySections = document.querySelectorAll('.category-section');

        categoryButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                categoryButtons.forEach(b => {
                    b.classList.remove('border-yellow-400', 'text-gray-900');
                    b.classList.add('border-transparent');
                });
                
                // Add active class to clicked button
                this.classList.remove('border-transparent');
                this.classList.add('border-yellow-400', 'text-gray-900');
                
                const selectedCategory = this.getAttribute('data-category');
                
                // Show/hide sections based on category
                if (selectedCategory === 'all') {
                    // Show recommended section only in 'all'
                    recommendedSection.style.display = 'block';
                    categorySections.forEach(section => {
                        section.style.display = 'block';
                        animateSection(section);
                    });
                } else {
                    // Hide recommended section in specific category
                    recommendedSection.style.display = 'none';
                    categorySections.forEach(section => {
                        const sectionCategory = section.getAttribute('data-category');
                        if (sectionCategory === selectedCategory) {
                            section.style.display = 'block';
                            animateSection(section);
                        } else {
                            section.style.display = 'none';
                        }
                    });
                }
            });
        });

        // Carousel Navigation
        const prevButtons = document.querySelectorAll('.carousel-btn-prev');
        const nextButtons = document.querySelectorAll('.carousel-btn-next');

        prevButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const section = this.getAttribute('data-section');
                navigateCarousel(section, -1);
            });
        });

        nextButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const section = this.getAttribute('data-section');
                navigateCarousel(section, 1);
            });
        });

        function navigateCarousel(section, direction) {
            const carousel = document.querySelector(`[data-carousel="${section}"]`);
            const track = carousel.querySelector('.carousel-track');
            const dots = document.querySelectorAll(`[data-carousel="${section}"].carousel-dot`);
            
            // Initialize state if not exists
            if (!carouselStates[section]) {
                carouselStates[section] = 0;
            }
            
            // Update current position
            carouselStates[section] += direction;
            
            // Loop around if needed
            const maxIndex = dots.length - 1;
            if (carouselStates[section] < 0) {
                carouselStates[section] = maxIndex;
            } else if (carouselStates[section] > maxIndex) {
                carouselStates[section] = 0;
            }
            
            // Update dots
            dots.forEach((dot, index) => {
                if (index === carouselStates[section]) {
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-gray-400');
                } else {
                    dot.classList.remove('bg-gray-400');
                    dot.classList.add('bg-gray-300');
                }
            });
            
            // Scroll smoothly
            const scrollAmount = carousel.offsetWidth;
            carousel.scrollTo({
                left: scrollAmount * carouselStates[section],
                behavior: 'smooth'
            });
        }

        // Animation functions
        function animateCard(card) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'all 0.4s ease-out';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 10);
        }

        function animateSection(section) {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            setTimeout(() => {
                section.style.transition = 'all 0.5s ease-out';
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
            }, 10);
        }

        // Initial page load animation
        window.addEventListener('load', function() {
            const sections = document.querySelectorAll('section');
            sections.forEach((section, index) => {
                setTimeout(() => {
                    animateSection(section);
                }, index * 100);
            });
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>