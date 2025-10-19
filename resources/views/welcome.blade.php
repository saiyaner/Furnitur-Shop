<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>

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
          <a href="#">
            <iconify-icon icon="mdi:user" width="26"></iconify-icon>
          </a>
        </div>
      </nav>
      
      <section id="Hero" class="text-white flex flex-col justify-center items-center mx-5 md:mx-0 my-15 space-y-7">
        <h1 class="text-center text-4xl sm:max-w-xl sm:text-5xl md:text-6xl md:max-w-2xl mx-auto font-semibold">Redifine Your <span class="text-[#FFCD29]">Style</span> Elevate Your Confidence</h1>
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
      <h1 class="text-center text-5xl mb-20">CATEGORY</h1>
        <div class="flex flex-wrap justify-center items-center gap-10 sm:mx-8">
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="material-symbols:chair-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">CHAIR</p>
          </a>
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="material-symbols:table-bar-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">TABLE</p>
          </a>
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="mdi:sofa-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">SOFA</p>
          </a>
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="mdi:lamp-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">LAMP</p>
          </a>
          <a href="#" class="shadow-xl border border-gray-300 px-15 py-5 text-center rounded-md group hover:bg-[#ffcd29] transition ease-in-out">
            <iconify-icon icon="material-symbols:bed-outline" class="text-gray-500 group-hover:text-white" width="58" height="58"></iconify-icon>
            <p class="text-lg font-bold group-hover:text-white">BED</p>
          </a>
        </div>
    </section>

    <section id="cta">
      <div class="grid grid-cols-12 mx-34 gap-3">
        <a href="#" class="col-span-6 relative">
          <img src="{{ asset('img/image-cta-1.2-home.png') }}" alt="" class="absolute inset-0 -z-10 w-full h-80 object-center object-cover rounded-xl">
          <div class="flex flex-col justify-center items-center space-y-2 mt-20">
            <h1 class="text-white font-semibold text-lg">UP SALE <span class="text-[#ffcd29]">30%</span></h1>
            <h1 class="text-white font-bold text-2xl">MINIMALIST & MODERN</h1>
            <p class="text-white max-w-sm text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, doloribus!</p>
            <button class="bg-white text-black font-semibold px-5 py-1 rounded">Shop Now</button>
          </div>
        </a>
        <a href="#" class="col-span-6 relative">
          <img src="{{ asset('img/image-cta-1.1-home.png') }}" alt="" class="absolute inset-0 -z-10 w-full h-80 object-center object-cover rounded-xl">
          <div class=" space-y-2 mt-20 ms-5">
            <h1 class="text-white font-semibold text-lg">UP SALE <span class="text-[#ffcd29]">30%</span></h1>
            <h1 class="text-white font-bold text-2xl">LAMP COLLECTION</h1>
            <p class="text-white max-w-sm">Lorem ipsum, dolor sit amet consectetur adipisicing</p>
            <button class="bg-[#7ec26d] text-white font-semibold px-5 py-1 rounded">Shop Now</button>
          </div>
        </a>
        <a href="#" class="col-span-12 relative">
          <img src="{{ asset('img/image-cta-1.3-home.png') }}" alt="" class="absolute top-19 left-0 right-0 bottom-0 -z-10 border-l rounded-l-xl border-l-gray-200">
          <div class=" space-y-2 mt-45 ms-5">
            <h1 class="text-[#5B5353] font-semibold text-lg">UP SALE <span class="text-[#ffcd29]">30%</span></h1>
            <h1 class="text-[#5B5353] font-bold text-2xl">Save An Extra <span class="text-red-500">45%</span></h1>
            <p class="text-[#5B5353] max-w-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dicta culpa beatae odio, ipsa eius.</p>
            <button class="bg-red-500 text-white font-semibold px-5 py-1 rounded">Shop Now</button>
          </div>
        </a>
      </div>
    </section>

    
  

  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
  </body>
</html>