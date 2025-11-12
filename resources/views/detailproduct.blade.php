<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail || {{ $product->name }}</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('productslist') }}" class="flex items-center text-gray-700 hover:text-gray-900">
                    <iconify-icon icon="mdi:arrow-left" width="24" height="24"></iconify-icon>
                    <span class="ml-2 font-semibold">Back To Furniture</span>
                </a>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('checkout') }}" class="text-gray-700 hover:text-gray-900 relative">
                        <iconify-icon icon="mdi:cart" width="26"></iconify-icon>
                        <span id="cart-badge" class="absolute -top-2 -right-2 bg-yellow-400 text-white text-xs font-bold rounded-full w-5 h-5 items-center justify-center hidden">0</span>
                    </a>
                    @guest
                    <a href="{{ url('login') }}">
                        <iconify-icon icon="mdi:user" width="26"></iconify-icon>
                    </a>
                    @endguest
                    @auth
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="w-8 h-8 rounded-full overflow-hidden border border-white/50">
                        @if(Auth::user()->image)
                        <img src="{{ asset(Auth::user()->image) }}" alt="{{ Auth::user()->name }}" class="w-8 h-8 object-cover">
                        @else
                        <div class="w-8 h-8 bg-gray-400 flex items-center justify-center text-white text-xs font-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        @endif
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Product Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Left Column: Product Image & Details -->
            <div>
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    @if($product->image)
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto rounded-lg mb-6">
                    @else
                        <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center mb-6">
                            <span class="text-gray-400">No Image</span>
                        </div>
                    @endif
                    
                    <h1 class="text-3xl font-bold mb-2">{{ $product->name }}</h1>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-gray-600">Sold 50+</span>
                        <span class="text-gray-400">•</span>
                        <div class="flex items-center">
                            <iconify-icon icon="mdi:star" class="text-yellow-400" width="20" height="20"></iconify-icon>
                            <span class="ml-1 font-semibold">{{ number_format($product->rate, 1) }}</span>
                        </div>
                    </div>
                    <div class="text-4xl font-bold mb-6">${{ number_format($product->price, 2) }}</div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-semibold mb-2">Color:</label>
                        <div class="flex flex-wrap gap-3">
                            @php
                                // Get available colors from the product
                                $availableColors = $product->availableColors;
                                $firstColor = $availableColors->first();
                            @endphp
                            
                            @if($availableColors->count() > 0)
                                @foreach($availableColors as $index => $color)
                                    <button 
                                        onclick="selectColor({{ $index }}, '{{ $color['name'] }}', {{ $color['stock'] }})" 
                                        class="color-btn px-4 py-2 border rounded {{ $loop->first ? 'bg-yellow-100 border-yellow-400' : 'bg-gray-100 border-gray-300' }} hover:bg-yellow-50 transition-colors"
                                        data-color-index="{{ $index }}"
                                        data-color-name="{{ $color['name'] }}"
                                        data-stock="{{ $color['stock'] }}"
                                        title="{{ $color['name'] }} (Stock: {{ $color['stock'] }})">
                                        <div class="flex items-center gap-2">
                                            @if(isset($color['hex_code']))
                                                <div class="w-4 h-4 rounded-full border border-gray-300" style="background-color: {{ $color['hex_code'] }}"></div>
                                            @endif
                                            <span>{{ $color['name'] }}</span>
                                        </div>
                                    </button>
                                @endforeach
                            @else
                                <p class="text-gray-500">No colors available</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Amount & Actions -->
            <div>
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 shadow-sm">
                    <h2 class="text-xl font-bold mb-4">Amount</h2>
                    <div class="mb-4">
                        <span class="text-sm text-gray-600">Selected Color: </span>
                        <span id="selected-color" class="font-semibold">
                            @if($product->availableColors->count() > 0)
                                {{ $product->availableColors->first()['name'] }}
                            @else
                                No color available
                            @endif
                        </span>
                        <span id="selected-stock" class="text-sm text-gray-600 ml-2">
                            @if($product->availableColors->count() > 0)
                                (Stock: {{ $product->availableColors->first()['stock'] }})
                            @endif
                        </span>
                    </div>
                    
                    <div class="flex items-center gap-4 mb-4">
                        <label class="text-sm font-semibold">Quantity:</label>
                        <div class="flex items-center border border-gray-300 rounded-lg">
                            <button onclick="updateQuantity(-1)" class="px-3 py-1 hover:bg-gray-100 rounded-l-lg">-</button>
                            <span id="quantity" class="px-4 py-1 border-x border-gray-300">1</span>
                            <button onclick="updateQuantity(1)" class="px-3 py-1 hover:bg-gray-100 rounded-r-lg">+</button>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <span class="text-sm text-gray-600">Total Price </span>
                        <span id="total-price" class="text-2xl font-bold">${{ number_format($product->price, 2) }}</span>
                    </div>
                    
                    <div class="space-y-3">
                        <button id="add-to-cart-btn" onclick="addToCart()" 
                            class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 rounded-lg transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                            {{ $product->availableColors->count() == 0 ? 'disabled' : '' }}>
                            {{ $product->availableColors->count() == 0 ? 'Out of Stock' : 'Add to Cart' }}
                        </button>
                        <button class="w-full bg-white border-2 border-yellow-400 text-yellow-600 hover:bg-yellow-50 font-semibold py-3 rounded-lg transition-colors"
                            {{ $product->availableColors->count() == 0 ? 'disabled' : '' }}>
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">Description</h2>
            <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>
        </div>

        <!-- Ratings and Review Section -->
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left: Rating Summary -->
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <span class="text-4xl font-bold">{{ number_format($product->rate, 1) }}</span>
                        <span class="text-gray-400">/</span>
                        <span class="text-2xl text-gray-400">5.0</span>
                        <iconify-icon icon="mdi:star" class="text-yellow-400" width="32" height="32"></iconify-icon>
                    </div>
                    
                    <div class="space-y-2">
                        @for($i = 5; $i >= 1; $i--)
                            <div class="flex items-center gap-2">
                                <span class="text-sm">★{{ $i }}</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-3 relative">
                                    @php
                                        $percentage = $i == 5 ? 80 : ($i == 4 ? 64 : ($i == 3 ? 40 : ($i == 2 ? 32 : 0)));
                                    @endphp
                                    <div class="bg-yellow-400 h-3 rounded-full" style="width: {{ $percentage }}%"></div>
                                </div>
                                <span class="text-sm text-gray-600">({{ $i == 5 ? 20 : ($i == 4 ? 16 : ($i == 3 ? 10 : ($i == 2 ? 8 : 0))) }})</span>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Right: Review Submission Form -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Ratings Products</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold mb-1">Email</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="your.email@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1">Description</label>
                            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Write your review here..."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-2">Rating</label>
                            <div class="flex gap-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <button type="button" class="text-yellow-400 hover:text-yellow-500">
                                        <iconify-icon icon="mdi:star" width="28" height="28"></iconify-icon>
                                    </button>
                                @endfor
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 rounded-lg transition-colors">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#FFAE00] mt-12">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Left: Logo & Description -->
                <div>
                    <h2 class="text-2xl font-bold mb-4">LOGO | FURNITURE SHOP</h2>
                    <p class="text-gray-800">Furniture shop memberikan peluang untuk anda yang ingin properti impian untuk masa depan anda</p>
                </div>

                <!-- Middle: Categories -->
                <div>
                    <h3 class="text-lg font-bold mb-4">CATEGORIES</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-800 hover:text-gray-900">Furniture</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-900">Outdoor</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-900">Lighting</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-900">Dinning</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-900">Bathroom</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-900">Miror & Decor</a></li>
                    </ul>
                </div>

                <!-- Right: Contact Us -->
                <div>
                    <h3 class="text-lg font-bold mb-4">CONTACT US</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <iconify-icon icon="mdi:phone" width="20" height="20"></iconify-icon>
                            <span class="text-gray-800">: 086-666-666-666</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <iconify-icon icon="mdi:instagram" width="20" height="20"></iconify-icon>
                            <span class="text-gray-800">: @furniture_shop</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <iconify-icon icon="mdi:facebook" width="20" height="20"></iconify-icon>
                            <span class="text-gray-800">: furnitureshop_abs</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <iconify-icon icon="mdi:map-marker" width="20" height="20"></iconify-icon>
                            <span class="text-gray-800">: Perum. Graha Pertiwi</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer Bar -->
            <div class="border-t border-yellow-600 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-800 text-sm">@Copyright Furniture all rights reserved</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-800 hover:text-gray-900 text-sm">Terms of Use</a>
                    <a href="#" class="text-gray-800 hover:text-gray-900 text-sm">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Simple JavaScript for quantity selector and color selection
        let quantity = 1;
        let selectedColorIndex = 0;
        let selectedColorName = '{{ $product->availableColors->count() > 0 ? $product->availableColors->first()["name"] : "" }}';
        let selectedColorStock = {{ $product->availableColors->count() > 0 ? $product->availableColors->first()["stock"] : 0 }};
        const price = {{ $product->price }};
        const productId = {{ $product->id }};
        
        // Get all available colors as array
        const availableColors = @json($product->availableColors);
        
        function updateQuantity(change) {
            const newQuantity = quantity + change;
            const maxStock = selectedColorStock;
            quantity = Math.max(1, Math.min(maxStock, newQuantity));
            document.getElementById('quantity').textContent = quantity;
            updateTotalPrice();
        }
        
        function selectColor(index, colorName, stock) {
            selectedColorIndex = index;
            selectedColorName = colorName;
            selectedColorStock = stock;
            
            // Update UI
            document.querySelectorAll('.color-btn').forEach(btn => {
                if (parseInt(btn.dataset.colorIndex) === index) {
                    btn.classList.add('bg-yellow-100', 'border-yellow-400');
                    btn.classList.remove('bg-gray-100', 'border-gray-300');
                } else {
                    btn.classList.remove('bg-yellow-100', 'border-yellow-400');
                    btn.classList.add('bg-gray-100', 'border-gray-300');
                }
            });
            
            document.getElementById('selected-color').textContent = colorName;
            document.getElementById('selected-stock').textContent = `(Stock: ${stock})`;
            
            // Reset quantity if exceeds new stock
            if (quantity > stock) {
                quantity = Math.max(1, Math.min(stock, 1));
                document.getElementById('quantity').textContent = quantity;
                updateTotalPrice();
            }
            
            // Update max quantity
            updateTotalPrice();
        }
        
        function updateTotalPrice() {
            const total = (price * quantity).toFixed(2);
            document.getElementById('total-price').textContent = `$${total}`;
        }
        
        // Cart functionality
        function loadCartCount() {
            fetch('{{ route("cart.count") }}')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    updateCartBadge(data.cart_count);
                })
                .catch(error => {
                    console.error('Error loading cart count:', error);
                });
        }
        
        function updateCartBadge(count) {
            const cartBadge = document.getElementById('cart-badge');
            if (count > 0) {
                cartBadge.textContent = count > 99 ? '99+' : count;
                cartBadge.classList.remove('hidden');
                cartBadge.classList.add('flex');
            } else {
                cartBadge.classList.add('hidden');
                cartBadge.classList.remove('flex');
            }
        }
        
        function addToCart() {
            const button = document.getElementById('add-to-cart-btn');
            const originalText = button.textContent;
            button.disabled = true;
            button.textContent = 'Adding...';
            
            // Get the selected color data
            const selectedColorData = availableColors[selectedColorIndex];
            
            // Validate data before sending
            if (!selectedColorData || !productId || !quantity) {
                showNotification('Data produk tidak valid', 'error');
                button.disabled = false;
                button.textContent = originalText;
                return;
            }
            
            // Prepare form data (not JSON) for better Laravel compatibility
            const formData = new FormData();
            formData.append('product_id', productId);
            formData.append('color_name', selectedColorData.name);
            formData.append('color_stock', selectedColorData.stock);
            formData.append('quantity', quantity);
            
            // Add hex_code if available
            if (selectedColorData.hex_code) {
                formData.append('color_hex', selectedColorData.hex_code);
            }
            
            fetch('{{ route("cart.add") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    updateCartBadge(data.cart_count);
                    showNotification(data.message || 'Produk berhasil ditambahkan ke keranjang', 'success');
                } else {
                    showNotification(data.message || 'Gagal menambahkan produk ke keranjang', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Terjadi kesalahan saat menambahkan ke keranjang. Silakan coba lagi.', 'error');
            })
            .finally(() => {
                button.disabled = false;
                button.textContent = originalText;
            });
        }
        
        function showNotification(message, type = 'success') {
            // Remove existing notification if any
            const existingNotification = document.getElementById('cart-notification');
            if (existingNotification) {
                existingNotification.remove();
            }
            
            // Create notification element
            const notification = document.createElement('div');
            notification.id = 'cart-notification';
            notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full opacity-0 ${
                type === 'success' ? 'bg-green-500' : 'bg-red-500'
            } text-white`;
            notification.innerHTML = `
                <div class="flex items-center gap-3">
                    <iconify-icon icon="${type === 'success' ? 'mdi:check-circle' : 'mdi:alert-circle'}" width="24" height="24"></iconify-icon>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.classList.remove('translate-x-full', 'opacity-0');
                notification.classList.add('translate-x-0', 'opacity-100');
            }, 10);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.classList.remove('translate-x-0', 'opacity-100');
                notification.classList.add('translate-x-full', 'opacity-0');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }
        
        // Load cart count on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadCartCount();
            
            // Debug info
            console.log('Available colors:', availableColors);
            console.log('Product ID:', productId);
            console.log('Price:', price);
        });
    </script>
</body>
</html>