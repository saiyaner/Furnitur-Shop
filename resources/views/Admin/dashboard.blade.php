<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard - Furniture Shop</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md fixed w-full">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>
                <div class="flex items-center gap-4">
                    <a href="{{ route('admin.products') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                        Manage Products
                    </a>
                    <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    {{-- Side Bar --}}
    <div class="flex">

        <aside class="w-56 bg-white border-r border-gray-200 fixed top-0 bottom-0 left-0 h-screen overflow-y-auto -z-10">
            <div class="p-6">
                <nav class="space-y-5 flex flex-col justify-start items-start mt-20">
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Manage Products</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Manage Categories</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Manage Stock</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Orders</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Returns</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Products Reviewers</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Reports</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">User Management</a>
                    <a href="#" class=" text-gray-600 hover:text-gray-900">Settings</a>
                </nav>
    
                <!-- Sign Out Button -->
                <form method="POST" action="{{ route('logout') }}" class="mt-12">
                    @csrf
                    <button type="submit" class="flex items-center space-x-2 px-5 py-1 border-2 border-gray-800 rounded-full hover:bg-gray-100 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="font-semibold">Sign Out</span>
                    </button>
                </form>
            </div>
        </aside>



        <!-- Main Content -->
        <main class="ms-76 px-4 sm:px-6 lg:px-8 py-25">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Products -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total Products</p>
                            <p class="text-3xl font-bold text-gray-800">{{ $totalProducts }}</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <!-- Total Stock -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total Stock</p>
                            <p class="text-3xl font-bold text-gray-800">{{ number_format($totalStock) }}</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <!-- Low Stock Products -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Low Stock (< 10)</p>
                            <p class="text-3xl font-bold text-orange-600">{{ $lowStockProducts }}</p>
                        </div>
                        <div class="bg-orange-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <!-- Out of Stock -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Out of Stock</p>
                            <p class="text-3xl font-bold text-red-600">{{ $outOfStockProducts }}</p>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Sales and Returns Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Total Sales -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Total Products Sold</p>
                            <p class="text-3xl font-bold text-gray-800">0</p>
                            <p class="text-xs text-gray-400 mt-1">Coming soon - Orders tracking</p>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <!-- Returns -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm">Returned Products</p>
                            <p class="text-3xl font-bold text-gray-800">0</p>
                            <p class="text-xs text-gray-400 mt-1">Coming soon - Returns tracking</p>
                        </div>
                        <div class="bg-red-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Rating Statistics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Good Ratings -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Good Ratings (≥4.0)</h3>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-bold">{{ $goodRatings }}</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-600 h-4 rounded-full" style="width: {{ $totalProducts > 0 ? ($goodRatings / $totalProducts * 100) : 0 }}%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">{{ $totalProducts > 0 ? number_format(($goodRatings / $totalProducts * 100), 1) : 0 }}% of total products</p>
                </div>
    
                <!-- Average Ratings -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Average Ratings (3.0-4.0)</h3>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-bold">{{ $averageRatings }}</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-yellow-600 h-4 rounded-full" style="width: {{ $totalProducts > 0 ? ($averageRatings / $totalProducts * 100) : 0 }}%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">{{ $totalProducts > 0 ? number_format(($averageRatings / $totalProducts * 100), 1) : 0 }}% of total products</p>
                </div>
    
                <!-- Bad Ratings -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Bad Ratings (<3.0)</h3>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-bold">{{ $badRatings }}</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-red-600 h-4 rounded-full" style="width: {{ $totalProducts > 0 ? ($badRatings / $totalProducts * 100) : 0 }}%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">{{ $totalProducts > 0 ? number_format(($badRatings / $totalProducts * 100), 1) : 0 }}% of total products</p>
                </div>
            </div>
    
            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Top Rated Products -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Top Rated Products</h3>
                    <div class="space-y-3">
                        @forelse($topRatedProducts as $product)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    @if($product->image_url)
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-12 h-12 object-cover rounded">
                                    @else
                                        <div class="w-12 h-12 bg-gray-300 rounded flex items-center justify-center">
                                            <span class="text-gray-500 text-xs">No Image</span>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-medium text-gray-800">{{ $product->name }}</p>
                                        <p class="text-sm text-gray-500">{{ $product->category_label }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold text-yellow-600">⭐ {{ $product->rate }}</p>
                                    <p class="text-xs text-gray-500">Stock: {{ $product->stock }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-4">No products with ratings yet.</p>
                        @endforelse
                    </div>
                </div>
    
                <!-- Low Stock Products -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Low Stock Alert</h3>
                    <div class="space-y-3">
                        @forelse($lowStockList as $product)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center gap-3">
                                    @if($product->image_url)
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-12 h-12 object-cover rounded">
                                    @else
                                        <div class="w-12 h-12 bg-gray-300 rounded flex items-center justify-center">
                                            <span class="text-gray-500 text-xs">No Image</span>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-medium text-gray-800">{{ $product->name }}</p>
                                        <p class="text-sm text-gray-500">{{ $product->category_label }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-bold {{ $product->stock == 0 ? 'text-red-600' : 'text-orange-600' }}">
                                        Stock: {{ $product->stock }}
                                    </p>
                                    <p class="text-xs text-gray-500">${{ number_format($product->price, 2) }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-4">All products are well stocked!</p>
                        @endforelse
                    </div>
                </div>
            </div>
    
            <!-- Category Statistics -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Statistics by Category</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Products</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Stock</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Average Rating</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($categoryStats as $stat)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-sm font-medium text-gray-900 capitalize">{{ $stat->category }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-sm text-gray-500">{{ $stat->total }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-sm text-gray-500">{{ number_format($stat->total_stock) }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-sm font-medium text-gray-900">
                                            {{ $stat->avg_rate ? number_format($stat->avg_rate, 1) : 'N/A' }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">No category data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>


</body>
</html>
