<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Furniture Shop</title>
    @vite('resources/css/app.css')
  </head>
  <body>

  <header class="header relative">
    <img src="{{ asset('img/bg-hero 1.png') }}" class="w-full object-cover object-center max-h-dvh absolute inset-0 -z-10">

      <nav class="md:flex md:justify-between md:items-center md:text-white md:mx-20 md:py-5">
        <div class="font-bold text-2xl">
          <h1>LOGO</h1>
        </div>
        <ul class="md:flex md:justify-between md:items-center md:gap-5">
          <li><a href="">Discover</a></li>
          <li><a href="">Collections</a></li>
          <li><a href="">Inspirations</a></li>
          <li><a href="">Contact</a></li>
        </ul>
        <div class="gap-5 flex">
          <iconify-icon icon="mdi:cart" width="20"></iconify-icon>
          <iconify-icon icon="mdi:user" width="20"></iconify-icon>
        </div>
      </nav>
      
      <section id="Hero" class="md:text-white md:flex md:flex-col md:justify-center md:items-center md:my-20 md:space-y-10">
        <h1 class="text-center text-6xl max-w-2xl mx-auto font-semibold">Redifine Your <span class="text-[#FFCD29]">Style</span> Elevate Your Confidence</h1>
        <p class="text-center max-w-md mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cupiditate delectus id tenetur necessitatibus excepturi debitis tempora! Adipisci, nisi suscipit.</p class="text-lg">
        <div class="flex gap-5 justify-center items-center">
          <button class="bg-[#FFCD29] px-5 py-1 rounded">SHOP NOW</button>
          <button class="bg-[#7EC26D] px-5 py-1 rounded">SHOP NOW</button>
        </div>
        <div class="my-5">
          <iconify-icon icon="mdi:arrow-bottom-circle-outline" width="60"></iconify-icon>
        </div>
      </section>
    </header>
    
    <section id="category" class="py-20 z-10">
      <h1 class="text-center text-3xl text-[#2D2D2D] font-semibold mb-16">CHOOSE CATEGORY</h1>
        <div class="md:flex md:justify-center md:items-center md:gap-4 max-w-4xl mx-auto px-4">
          <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition-shadow w-32">
            <iconify-icon icon="material-symbols:chair-outline" width="48" height="48" class="text-[#BDBDBD]"></iconify-icon>
            <p class="text-sm font-medium text-[#2D2D2D] mt-2">CHAIR</p>
          </div>
          <div class="bg-[#FFAE00] shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition-shadow w-32">
            <iconify-icon icon="ic:outline-table-restaurant" width="48" height="48" class="text-white"></iconify-icon>
            <p class="text-sm font-medium text-white mt-2">TABLE</p>
          </div>
          <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition-shadow w-32">
            <iconify-icon icon="mdi:sofa-outline" width="48" height="48" class="text-[#BDBDBD]"></iconify-icon>
            <p class="text-sm font-medium text-[#2D2D2D] mt-2">SOFA</p>
          </div>
          <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition-shadow w-32">
            <iconify-icon icon="mdi:lamp-outline" width="48" height="48" class="text-[#BDBDBD]"></iconify-icon>
            <p class="text-sm font-medium text-[#2D2D2D] mt-2">LAMP</p>
          </div>
          <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:shadow-xl transition-shadow w-32">
            <iconify-icon icon="material-symbols:bed-outline" width="48" height="48" class="text-[#BDBDBD]"></iconify-icon>
            <p class="text-sm font-medium text-[#2D2D2D] mt-2">BED</p>
          </div>
        </div>
    </section>
    
    <!-- Promotional Banners -->
    <section id="promotions" class="py-10 max-w-7xl mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-4">
        <!-- Banner 1 -->
        <div class="relative rounded-lg overflow-hidden h-64" style="background-image: url({{ asset('img/diskon1.png') }}); background-size: auto; background-position: center;">
          <div class="absolute inset-0 p-8 flex flex-col justify-center text-white">
            <p class="text-sm font-medium mb-2">UP SALE <span class="text-[#FFAE00]">30%</span></p>
            <h2 class="text-3xl font-bold mb-2">Minimalis & Modern</h2>
            <p class="text-sm mb-4 text-white/80">Lorem ipsum dolor sit amet consectetur adipisicing</p>
            <button class="bg-white text-[#2D2D2D] px-6 py-2 rounded w-fit text-sm font-medium hover:bg-gray-100 transition">Shop Now</button>
          </div>
        </div>
        
        <!-- Banner 2 -->
        <div class="relative rounded-lg overflow-hidden h-64" style="background-image: url({{ asset('img/diskon2.png') }}); background-size: auto; background-position: center;">
          <div class="absolute inset-0 p-8 flex flex-col justify-center text-white">
            <p class="text-sm font-medium mb-2">UP SALE <span class="text-[#FFAE00]">30%</span></p>
            <h2 class="text-3xl font-bold mb-2">Lamp Collection</h2>
            <p class="text-sm mb-4 text-white/80">Lorem ipsum dolor sit amet consectetur adipisicing</p>
            <button class="bg-[#7EC26D] text-white px-6 py-2 rounded w-fit text-sm font-medium hover:bg-[#6eb35b] transition">Shop Now</button>
          </div>
        </div>
      </div>
      
      <!-- Banner 3 -->
      <div class="relative bg-white rounded-lg overflow-hidden h-64 mt-4" style="background-image: url({{ asset('img/diskon3.png') }}); background-size: auto; background-position: center;">
        <div class="absolute inset-0 p-8 flex flex-col justify-center">
          <p class="text-sm font-medium mb-2 text-[#2D2D2D]">UP SALE <span class="text-[#FFAE00]">30%</span></p>
          <h2 class="text-3xl font-bold mb-2 text-[#2D2D2D]">Save An Extra <span class="text-[#FF5555]">45%</span></h2>
          <p class="text-sm mb-4 text-[#BDBDBD]">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          <button class="bg-[#FF5555] text-white px-6 py-2 rounded w-fit text-sm font-medium hover:bg-[#ff4040] transition">Shop Now</button>
        </div>
      </div>
    </section>

    <!-- Popular Products -->
    <section id="products" class="py-20 max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-semibold text-[#2D2D2D]">Popular Products</h2>
        <a href="{{ url('products') }}" class="text-[#BDBDBD] hover:text-[#FFAE00] transition">See All</a>
      </div>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Product Card 1 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="material-symbols:table-bar-outline" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Wood Table</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>

        <!-- Product Card 2 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="mdi:drawer" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Wood Drawer</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>

        <!-- Product Card 3 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="material-symbols:table-bar-outline" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Wood Oval</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>

        <!-- Product Card 4 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="mdi:lamp-outline" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Black Lamp</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>

        <!-- Product Card 5 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="mdi:sofa-outline" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Wood Table</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>

        <!-- Product Card 6 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="material-symbols:chair-outline" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Wood Drawer</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>

        <!-- Product Card 7 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="material-symbols:chair-outline" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Wood Chair</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>

        <!-- Product Card 8 -->
        <div class="bg-white rounded-lg shadow-lg p-4">
          <div class="relative">
            <iconify-icon icon="mdi:cart-outline" class="absolute top-2 left-2 text-[#BDBDBD] cursor-pointer hover:text-[#FFAE00]" width="24"></iconify-icon>
            <div class="bg-gray-100 rounded-lg h-40 flex items-center justify-center mb-3">
              <iconify-icon icon="mdi:lamp-outline" width="80" class="text-[#BDBDBD]"></iconify-icon>
            </div>
          </div>
          <h3 class="text-sm font-medium text-[#2D2D2D] mb-1">Brass Lamp</h3>
          <div class="flex items-center gap-1 mb-2">
            <iconify-icon icon="mdi:star" class="text-[#FFAE00]" width="16"></iconify-icon>
            <span class="text-xs text-[#2D2D2D]">4.3</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-[#2D2D2D]">35$</span>
            <button class="bg-[#FFAE00] text-white px-4 py-1 rounded text-xs font-medium hover:bg-[#C47F00] transition">Add to cart</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Mega Sale Banners -->
    <section id="mega-sale" class="py-10 max-w-7xl mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-4">
        <!-- Mega Sale 1 -->
        <div class="relative bg-[#4A5F6A] rounded-lg overflow-hidden h-64">
          <div class="absolute inset-0 p-8 flex flex-col justify-center text-white">
            <p class="text-sm font-medium mb-2">MEGA SALE <span class="text-[#FFAE00]">65% OFF</span></p>
            <h2 class="text-3xl font-bold mb-2">New Sofa Collections</h2>
            <p class="text-sm mb-4 text-white/80">Lorem ipsum dolor sit amet consectetur adipisicing</p>
            <button class="bg-white text-[#2D2D2D] px-6 py-2 rounded w-fit text-sm font-medium hover:bg-gray-100 transition">Shop Now</button>
          </div>
        </div>
        
        <!-- Mega Sale 2 -->
        <div class="relative bg-[#2D3234] rounded-lg overflow-hidden h-64">
          <div class="absolute inset-0 p-8 flex flex-col justify-center text-white">
            <p class="text-sm font-medium mb-2">MEGA SALE <span class="text-[#FFAE00]">65% OFF</span></p>
            <h2 class="text-3xl font-bold mb-2">Chair Collection</h2>
            <p class="text-sm mb-4 text-white/80">Lorem ipsum dolor sit amet consectetur adipisicing</p>
            <button class="bg-[#7EC26D] text-white px-6 py-2 rounded w-fit text-sm font-medium hover:bg-[#6eb35b] transition">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-20 max-w-7xl mx-auto px-4">
      <div class="grid md:grid-cols-3 gap-8">
        <div class="flex gap-4 items-start">
          <iconify-icon icon="mdi:truck-delivery-outline" width="48" class="text-[#2D2D2D] flex-shrink-0"></iconify-icon>
          <div>
            <h3 class="font-semibold text-[#2D2D2D] mb-2">Quick and Free Delivery</h3>
            <p class="text-sm text-[#BDBDBD]">Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
        
        <div class="flex gap-4 items-start">
          <iconify-icon icon="mdi:cash-multiple" width="48" class="text-[#2D2D2D] flex-shrink-0"></iconify-icon>
          <div>
            <h3 class="font-semibold text-[#2D2D2D] mb-2">Get Your Money Back</h3>
            <p class="text-sm text-[#BDBDBD]">Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
        
        <div class="flex gap-4 items-start">
          <iconify-icon icon="mdi:headset" width="48" class="text-[#2D2D2D] flex-shrink-0"></iconify-icon>
          <div>
            <h3 class="font-semibold text-[#2D2D2D] mb-2">24/7 Customeer Support</h3>
            <p class="text-sm text-[#BDBDBD]">Lorem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#FFAE00] py-16">
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
          <div>
            <h3 class="text-2xl font-bold text-white mb-4">LOGO | FURNITURE SHOP</h3>
            <p class="text-white/90 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
          </div>
          
          <div>
            <h4 class="font-semibold text-white mb-4">CATEGORIES</h4>
            <ul class="space-y-2 text-white/90 text-sm">
              <li><a href="#" class="hover:text-white">All Products</a></li>
              <li><a href="#" class="hover:text-white">Furniture</a></li>
              <li><a href="#" class="hover:text-white">Lightning</a></li>
              <li><a href="#" class="hover:text-white">Beds</a></li>
              <li><a href="#" class="hover:text-white">Bathroom</a></li>
              <li><a href="#" class="hover:text-white">New Arrival Products</a></li>
            </ul>
          </div>
          
          <div>
            <h4 class="font-semibold text-white mb-4">CONTACT US</h4>
            <ul class="space-y-3 text-white/90 text-sm">
              <li class="flex items-center gap-2">
                <iconify-icon icon="mdi:phone" width="20"></iconify-icon>
                <span>098-7654-321</span>
              </li>
              <li class="flex items-center gap-2">
                <iconify-icon icon="mdi:instagram" width="20"></iconify-icon>
                <span>@furniture_shop</span>
              </li>
              <li class="flex items-center gap-2">
                <iconify-icon icon="mdi:facebook" width="20"></iconify-icon>
                <span>Furniture Shop</span>
              </li>
              <li class="flex items-center gap-2">
                <iconify-icon icon="mdi:map-marker" width="20"></iconify-icon>
                <span>123 ABC LOREM IPSUM</span>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="border-t border-white/20 pt-8 flex justify-between items-center text-white/80 text-sm">
          <p>Copyright © 2021 | <span class="text-white">ALL RIGHTS RESERVED</span></p>
          <div class="flex gap-4">
            <a href="#" class="hover:text-white">Terms of Use</a>
            <a href="#" class="hover:text-white">Privacy Policy</a>
          </div>
        </div>
      </div>
    </footer>

  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
  </body>
</html>