<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Furniture Shop</title>
    @vite('resources/css/app.css')
  </head>
  <body class="font-primary">

  <header class="header relative">
    <img src="{{ asset('img/bg-hero-home.png') }}" class="w-full object-cover object-center h-screen absolute inset-0 -z-10">


      <nav class="flex justify-between items-center bg-white md:bg-transparent md:text-white md:mx-20 py-5 px-5 relative">
        <div class="font-bold text-2xl flex items-center md:mx-0">
          <h1 class="hidden md:flex">LOGO</h1>
          <iconify-icon icon="ci:hamburger-lg" class="md:hidden" width="30" height="30"></iconify-icon>
        </div>

        <ul class="absolute top-15 left-0 right-0 space-y-5 py-5 text-black md:text-white bg-white md:bg-transparent px-5 md:static md:flex md:justify-between md:items-center md:gap-5 md:space-y-0">
          <li><a href="">Discover</a></li>
          <li><a href="">Collections</a></li>
          <li><a href="">Inspirations</a></li>
          <li><a href="">Contact</a></li>
        </ul>
        <div class="flex gap-5 items-center">
          <a href="#">
            <iconify-icon icon="mdi:cart" width="26"></iconify-icon>
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
      </nav>
      
      <section id="Hero" class="text-white flex flex-col justify-center items-center mx-5 md:mx-0 my-15 space-y-7">
        <h1 class="text-center text-4xl sm:max-w-xl sm:text-5xl md:text-6xl md:max-w-3xl mx-auto font-semibold">Redifine Your <span class="text-[#FFCD29]">Style</span> Elevate Your Confidence</h1>
        <p class="text-center max-w-md mx-auto text-sm sm:text-md md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est cupiditate delectus id tenetur necessitatibus excepturi debitis tempora! Adipisci, nisi suscipit.</p>
        <div class="flex gap-5 justify-center items-center">
          <button class="bg-[#FFCD29] px-5 py-1 rounded">SHOP NOW</button>
          <button class="bg-[#7EC26D] px-5 py-1 rounded">SHOP NOW</button>
        </div>
        <a href="" class="my-5">
          <iconify-icon icon="mdi:arrow-bottom-circle-outline" width="60"></iconify-icon>
        </a>
      </section>
    </header>     
    
    <section id="category" class="py-50 md:py-30">
      {{-- Judul --}}
      <h1 class="text-center text-5xl mb-20">CATEGORY</h1>
        <div class="flex flex-wrap justify-center items-center gap-5 sm:mx-8">

          {{-- Categori 1 --}}
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="material-symbols:chair-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">CHAIR</p>
          </a>

          {{-- categori 2 --}}
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="material-symbols:table-bar-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">TABLE</p>
          </a>

          {{-- Categori 3 --}}
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="mdi:sofa-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">SOFA</p>
          </a>

          {{-- Categori 4 --}}
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="mdi:lamp-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">LAMP</p>
          </a>

          {{-- Categori 5 --}}
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="material-symbols:bed-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">BED</p>
          </a>

        </div>
    </section>
    
    <!-- Promotional Banners -->
    <section id="promotions" class="py-10 max-w-5xl mx-auto px-5">
      <div class="grid md:grid-cols-2 gap-4">
        <!-- Banner 1 -->
        <div class="relative rounded-lg shadow-xl h-64 bg-auto bg-center object-center object-cover" style="background-image: url({{ asset('img/diskon1.png') }});">
          <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center backdrop-brightness-75">
            <p class="text-lg font-bold">UP SALE <span class="text-[#FFAE00]">30%</span></p>
            <h2 class="text-2xl md:text-3xl font-bold">Minimalis & Modern</h2>
            <p class="text-sm my-2 text-white mx-auto">Get 30% off all minimalist and modern furniture.</p>
            <button class="bg-white mt-1 text-[#2D2D2D] px-6 py-2 rounded w-fit mx-auto text-sm font-semibold hover:bg-gray-100 transition">Shop Now</button>
          </div>
        </div>
        
        <!-- Banner 2 -->
        <div class="relative rounded-lg shadow-xl h-64 bg-auto bg-center object-center object-cover"   style="background-image: url({{ asset('img/diskon2.png') }});">
          <div class="absolute inset-0 flex flex-col justify-center ms-5 text-white">
            <p class="text-bold font-bold">UP SALE <span class="text-[#FFAE00]">30%</span></p>
            <h2 class="text-2xl md:text-3xl font-bold mb-1">Lamp Collection</h2>
            <p class="text-sm my-2 max-w-sm text-white/80">Brighten up your room with new lamps and save 30%!</p>
            <button class="bg-[#7EC26D] mt-2 text-white px-6 py-2 rounded w-fit text-sm font-bold hover:bg-[#6eb35b] transition">Shop Now</button>
          </div>
        </div>
      </div>
      
      <!-- Banner 3 -->
      <div class="relative bg-white rounded-lg shadow-xl h-64 mt-4 bg-auto bg-center object-center object-cover border-l border-r border-t border-gray-300" style="background-image: url({{ asset('img/diskon3.png') }});">
        <div class="absolute inset-0 ms-5 flex flex-col justify-center">
          <p class="text-lg font-semibold mb-2 text-[#5B5353]">UP SALE <span class="text-[#FFAE00]">30%</span></p>
          <h2 class="text-2xl md:text-3xl font-bold mb-2 text-[#5B5353]">Save An Extra <span class="text-[#FF5555]">45%</span></h2>
          <p class="text-sm mb-4 max-w-sm text-[#5B5353]">Shop now and enjoy an additional 45% discount!</p>
          <button class="bg-[#FF5555] text-white px-6 py-2 rounded w-fit text-sm font-bold hover:bg-[#ff4040] transition">Shop Now</button>
        </div>
      </div>
    </section>

    <!-- Popular Products -->
    <section id="products" class="py-20 max-w-5xl mx-auto px-4">
      <div class="flex justify-between items-center mb-10">
        <h2 class="text-xl md:text-3xl font-semibold text-[#2D2D2D]">Popular Products</h2>
        <a href="{{ url('products') }}" class="text-sm md:text-md text-[#BDBDBD] hover:text-[#FFAE00] transition">See All</a>
      </div>

      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          @foreach ($products as $product)
          @if($product->rate >= 4.5)
              <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                  POPULAR
              </div>
              @endif
            
              <div class="bg-white rounded-lg shadow-xl overflow-hidden transition-transform md:hover:scale-90">
                <div class="relative p-4">
                  <button class="absolute top-1 left-0 p-2 text-gray-600">
                      <iconify-icon icon="mdi:cart-outline" width="24" height="24"></iconify-icon>
                  </button>
                  <div class="flex justify-center items-center h-40">
                    @if($product->image_url)
                      <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="max-w-full max-h-full object-contain">
                    @else
                      <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-400 text-sm">No Image</span>
                      </div>
                    @endif
                  </div>
                </div>
                <div class="p-4">
                  <div class="flex justify-between items-center">
                      <h3 class="text-sm font-medium text-gray-800">{{ $product->name }}</h3>
                      <div class="flex items-center mt-1">
                          <iconify-icon icon="material-symbols:star" class="text-yellow-300" width="24" height="24"></iconify-icon>
                          <span class="font-semibold ml-1 text-gray-600">{{ $product->rate }}</span>
                      </div>
                  </div>
                  <span class="text-sm text-gray-500 font-medium">{{$product->category}}</span>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-lg font-bold">${{ number_format($product->price, 2) }}</span>
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-4 py-1  rounded-full text-xs">
                    BUY NOW
                    </button>
                  </div>
                </div>
              </div>
          @endforeach
       </div>
    </section>

    <!-- Mega Sale Banners -->
    <section id="mega-sale" class="py-10 max-w-[68rem] mx-auto px-4">
      <div class="grid md:grid-cols-12 gap-4">
        <!-- Mega Sale 1 -->
        <div class="relative md:col-span-7 bg-[#4A5F6A] rounded-lg h-64 bg-center object-center object-cover" style="background-image: url({{ asset('img/diskon4.png') }});">
          <div class="absolute inset-0 ms-5 flex flex-col justify-center text-white">
            <p class="text-md font-bold">MEGA SALE <span class="text-[#FFAE00]">65% OFF</span></p>
            <h2 class="text-2xl md:text-3xl font-bold">New Sofa Collections</h2>
            <p class="text-[0.8rem] sm:text-sm md:text-sm mb-3 text-white/80">Lorem ipsum dolor sit amet consectetur adipisicing</p>
            <button class="bg-white text-[#2D2D2D] px-6 py-2 rounded w-fit text-sm font-bold hover:bg-gray-100 transition">Shop Now</button>
          </div>
        </div>
        
        <!-- Mega Sale 2 -->
        <div class="relative md:col-span-5 bg-[#2D3234] rounded-lg h-64 bg-auto bg-center object-center object-cover" style="background-image: url({{ asset('img/diskon5.png') }});">
          <div class="absolute inset-0 ms-5 flex flex-col justify-center text-white">
            <p class="text-md font-bold">MEGA SALE <span class="text-[#FFAE00]">65% OFF</span></p>
            <h2 class="text-2xl md:text-3xl font-bold">Chair Collection</h2>
            <p class="text-[0.8rem] sm:text-sm md:text-sm mb-3 text-white/80">Lorem ipsum dolor sit amet consectetur adipisicing</p>
            <button class="bg-[#7EC26D] text-white px-6 py-2 rounded w-fit text-sm font-bold hover:bg-[#6eb35b] transition">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-20 max-w-[68rem] mx-auto px-4">
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
    <footer class="bg-[#e39d07] py-16">
      <div class="max-w-[80rem] mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 justify-items-center mb-8">
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