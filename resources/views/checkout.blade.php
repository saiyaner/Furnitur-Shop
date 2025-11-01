<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout || Furniture Shop</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        // ===== KONFIGURASI - MUDAH DIUBAH =====
        const PROMO_CODES = {
            'WELCOME10': 10,
            'DISCOUNT15': 15,
            'SAVE20': 20,
            'SPECIAL25': 25,
            'FURNITURE30': 30
        };
        
        // ===== VARIABEL GLOBAL =====
        let currentDiscount = 0;

        // ===== FUNGSI UPDATE QUANTITY =====
        function updateQuantity(button, change) {
            const container = button.closest('.quantity-control');
            const quantityElement = container?.querySelector('.quantity-display');
            if (!quantityElement) return;

            const currentQty = parseInt(quantityElement.textContent) || 1;
            const stockLimit = parseInt(quantityElement.dataset.stock || 999);
            const newQty = Math.max(1, Math.min(stockLimit, currentQty + change));
            
            quantityElement.textContent = newQty;
            
            let cartKey;
            try {
                cartKey = atob(container.dataset.cartKey);
            } catch (e) {
                quantityElement.textContent = currentQty;
                alert('Error memproses data');
                return;
            }
            
            fetch('{{ route("cart.update-quantity") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ cart_key: cartKey, quantity: newQty })
            })
            .then(r => r.ok ? r.json() : r.json().then(e => Promise.reject(e)))
            .then(data => {
                if (data.success) {
                    document.getElementById('total-amount').textContent = data.total_amount;
                    document.getElementById('total-price').textContent = '$' + data.total_price;
                    calculateGrandTotal();
                } else {
                    quantityElement.textContent = currentQty;
                    alert(data.message || 'Gagal update quantity');
                }
            })
            .catch(() => {
                quantityElement.textContent = currentQty;
                alert('Terjadi kesalahan');
            });
        }

        // ===== FUNGSI PROMO CODE =====
        function applyPromoCode() {
            const promoCode = document.getElementById('promo-code-input').value.trim().toUpperCase();
            const promoMessage = document.getElementById('promo-message');
            const discountRow = document.getElementById('discount-row');
            
            promoMessage.classList.add('hidden');
            
            if (!promoCode) {
                currentDiscount = 0;
                discountRow.classList.add('hidden');
                discountRow.classList.remove('flex');
                calculateGrandTotal();
                return;
            }
            
            if (PROMO_CODES[promoCode]) {
                currentDiscount = PROMO_CODES[promoCode];
                discountRow.classList.remove('hidden');
                discountRow.classList.add('flex');
                document.getElementById('discount-value').textContent = currentDiscount + '%';
                showMessage(promoMessage, 'Promo code berhasil diterapkan!', 'green');
            } else {
                currentDiscount = 0;
                discountRow.classList.add('hidden');
                discountRow.classList.remove('flex');
                showMessage(promoMessage, 'Promo code tidak valid!', 'red');
            }
            calculateGrandTotal();
        }

        function showMessage(element, text, color) {
            element.textContent = text;
            element.classList.remove('hidden', 'text-red-500', 'text-green-600');
            element.classList.add(color === 'green' ? 'text-green-600' : 'text-red-500');
        }

        // ===== FUNGSI HITUNG TOTAL =====
        function calculateGrandTotal() {
            const totalPriceEl = document.getElementById('total-price');
            const grandTotalEl = document.getElementById('grand-total');
            if (!totalPriceEl || !grandTotalEl) return;
            
            const totalPrice = parseFloat(totalPriceEl.textContent.replace('$', '').replace(/,/g, '')) || 0;
            const grandTotal = totalPrice * (1 - currentDiscount / 100);
            grandTotalEl.textContent = '$' + grandTotal.toFixed(2);
        }
    </script>
</head>
<body class="bg-yellow-400 min-h-screen">
    <!-- Header -->
    <header class="bg-yellow-400 py-4">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('productslist') }}" class="flex items-center text-gray-900 hover:text-gray-700">
                    <iconify-icon icon="mdi:arrow-left" width="24" height="24"></iconify-icon>
                    <span class="ml-2 font-semibold">Back To Furniture</span>
                </a>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('checkout') }}" class="text-gray-900 hover:text-gray-700 relative">
                        <iconify-icon icon="mdi:cart" width="26"></iconify-icon>
                    </a>
                    <a href="{{ url('login') }}">
                        <button class="text-gray-900 hover:text-gray-700">
                            <iconify-icon icon="mdi:user" width="26"></iconify-icon>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Section: Detail Order -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Detail Order</h2>
                    
                    @if(count($cart) > 0)
                        <!-- Table -->
                        <div class="overflow-x-auto mb-6">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b-2 border-gray-200">
                                        <th class="text-left py-3 px-2 font-semibold">NO</th>
                                        <th class="text-left py-3 px-2 font-semibold">Name</th>
                                        <th class="text-left py-3 px-2 font-semibold">price</th>
                                        <th class="text-left py-3 px-2 font-semibold">amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart as $key => $item)
                                        <tr class="border-b border-gray-200">
                                            <td class="py-4 px-2">{{ $loop->iteration }}</td>
                                            <td class="py-4 px-2 font-semibold">{{ $item['name'] }}</td>
                                            <td class="py-4 px-2">${{ number_format($item['price'], 2) }}</td>
                                            <td class="py-4 px-2">
                                                <div class="flex items-center gap-2 quantity-control" data-cart-key="{{ base64_encode($key) }}">
                                                    <button onclick="updateQuantity(this, -1)" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-gray-300 flex items-center justify-center">
                                                        <iconify-icon icon="mdi:minus" width="16" height="16"></iconify-icon>
                                                    </button>
                                                    <span class="quantity-display font-semibold" data-stock="{{ $item['stock'] ?? 99 }}">{{ $item['quantity'] ?? 1 }}</span>
                                                    <button onclick="updateQuantity(this, 1)" class="w-8 h-8 rounded-full bg-gray-200 hover:bg-gray-300 flex items-center justify-center">
                                                        <iconify-icon icon="mdi:plus" width="16" height="16"></iconify-icon>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Order Summary -->
                        <div class="space-y-3">
                            @php
                                $totalAmount = 0;
                                $totalPrice = 0;
                                foreach($cart as $item) {
                                    $qty = $item['quantity'] ?? 1;
                                    $totalAmount += $qty;
                                    $totalPrice += $item['price'] * $qty;
                                }
                            @endphp
                            <div class="flex justify-between">
                                <span class="font-semibold">Total Amount:</span>
                                <span id="total-amount" class="font-semibold">{{ $totalAmount }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-semibold">Total Price:</span>
                                <span id="total-price" class="font-semibold">${{ number_format($totalPrice, 2) }}</span>
                            </div>
                            <div id="discount-row" class="justify-between hidden">
                                <span class="font-semibold">Discount:</span>
                                <span id="discount-value" class="font-semibold text-green-600">0%</span>
                            </div>
                            <div class="flex justify-between text-xl font-bold pt-2 border-t-2 border-gray-200">
                                <span>Grand Total:</span>
                                <span id="grand-total" class="text-yellow-600">${{ number_format($totalPrice, 2) }}</span>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-12">
                            <p class="text-gray-500 text-lg">Keranjang Anda kosong</p>
                            <a href="{{ route('productslist') }}" class="inline-block mt-4 bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-6 py-3 rounded-lg transition-colors">
                                Belanja Sekarang
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Right Section: Payment Metode -->
                <div class="bg-yellow-50 rounded-2xl p-6 shadow-md">
                    <h2 class="text-2xl font-bold mb-6">Payment Metode</h2>
                    
                    <!-- Payment Logos -->
                    <div class="grid grid-cols-4 gap-3 mb-6">
                        <!-- VISA -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-blue-600 text-xs">VISA</span>
                        </div>
                        <!-- PayPal -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-blue-500 text-xs">PayPal</span>
                        </div>
                        <!-- Mastercard -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-red-500 text-xs">MC</span>
                        </div>
                        <!-- G Pay -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-gray-700 text-xs">G Pay</span>
                        </div>
                        <!-- gopay -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-green-600 text-xs">gopay</span>
                        </div>
                        <!-- DANA -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-blue-500 text-xs">DANA</span>
                        </div>
                        <!-- OVO -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-purple-600 text-xs">OVO</span>
                        </div>
                        <!-- Shopee Pay -->
                        <div class="bg-white rounded-lg p-3 shadow-sm flex items-center justify-center">
                            <span class="font-bold text-orange-500 text-xs">Shopee</span>
                        </div>
                    </div>

                    <!-- Input Fields -->
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Enter your payment number or e-wallet ID</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter payment number">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-2">Enter Promo Code(If if you don't have it -)</label>
                            <input type="text" id="promo-code-input" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter promo code" onkeyup="applyPromoCode()">
                            <p id="promo-message" class="mt-2 text-sm hidden"></p>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-2">Enter Your Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="your.email@example.com">
                        </div>
                        <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-4 rounded-lg transition-colors mt-6">
                            Confirm & Pay
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
