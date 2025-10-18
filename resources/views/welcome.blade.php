<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <h1 class="text-center text-3xl py-20">CATEGORY</h1>
        <div class="md:flex md:justify-evenly md:items-center">
          <div class="text-center shadow">
            <iconify-icon icon="material-symbols:chair-outline" width="58" height="58"></iconify-icon>
            <p class="text-lg">CHAIR</p>
          </div>
          <div class="text-center">
            <iconify-icon icon="material-symbols:table-bar-outline" width="58" height="58"></iconify-icon>
            <p class="text-lg">TABLE</p>
          </div>
          <div class="text-center">
            <iconify-icon icon="mdi:sofa-outline" width="58" height="58"></iconify-icon>
            <p class="text-lg">SOFA</p>
          </div>
          <div class="text-center">
            <iconify-icon icon="mdi:lamp-outline" width="58" height="58"></iconify-icon>
            <p class="text-lg">LAMP</p>
          </div>
          <div class="text-center">
            <iconify-icon icon="material-symbols:bed-outline" width="58" height="58"></iconify-icon>
            <p class="text-lg">BED</p>
          </div>
        </div>
    </section>
  
  

  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
  </body>
</html>