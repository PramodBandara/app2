<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Mystery+Quest&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <style data-shopify="">
      @keyframes marquee {
        0%   { transform: translateX(0%); }
        100% { transform: translateX(-30%); }
      }

      .marquee-container {
        overflow: hidden;
        white-space: nowrap;
        box-sizing: border-box;
      }

      .marquee-track {
        display: inline-flex;
        animation: marquee 15s linear infinite;
      }

      .marquee-item {
        flex-shrink: 0;
        padding-right: 2rem;
      }
      body {
  background-image: url('{{ url('') }}');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  background-color: black
}
.fugaz-one-regular {
  font-family: "Fugaz One", sans-serif;
  font-weight: 400;
  font-style: normal;
}
.h1{
    font-family: 'semi bold', cursive;
    font-weight: 900;
    font-size: 8rem;
    line-height: 1.2;
    color: #ffffff;
}
.font-roboto {
  font-family: 'Roboto', sans-serif;
}



      
    </style>
    
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body >

<video autoplay muted loop playsinline class="fixed top-0 left-0 w-full h-full object-cover z-[-1]">
  <source src="{{ url('media/finalcricket.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

<div class="bg-black text-sky-500 h-16 flex items-center marquee-container">
  <div class="marquee-track text-lg font-medium font-eb-garamond italic tracking-wide">
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
  </div>
</div>

<header class="bg-white/35 shadow-black-xs backdrop-blur-md shadow-md sticky top-0 z-50 py-4 px-6 flex items-center justify-between">
  <div class="flex gap-6 items-center">
    <a href="{{ url('about') }}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">About</a>
    <a href="{{url('contact')}}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Contact</a>
  </div>

  <div class="flex justify-center">
    <a href="/" class="block">
      <img src="{{url('media/logo1dark.jpeg')}}"  alt="app2 Logo" class="h-40 w-auto">
       
    </a>
  </div>

  <div class="flex gap-6 items-center">
    <a href="{{url('work')}}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Work</a>
    <a href="{{url('center')}}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Center</a>
  </div>
</header>



<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 mt-10 min-h-[700px]">
  <img src="{{url('media/tetstedcopy.jpg')}}" class="absolute inset-0 -z-10 w-full h-full object-cover object-right md:object-center" />
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
    <div class="aspect-1097/845 w-[274.25px] bg-gradient-to-tr from-[#121416] to-[#525267] opacity-15" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
    <div class="aspect-1097/845 w-[274.25px] bg-gradient-to-tr from-[#121313] to-[#3c3b4b] opacity-15" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-black sm:grid-cols-2 md:flex lg:gap-x-10">
        <a href="google">Review us <span aria-hidden="true"></span></a>
      </div>
      <dl class="mt-10 pt-10 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-black">Office locations</dt>
          <dd class="text-3xl sm:text-4xl font-semibold tracking-tight text-white">12</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-black">Orders</dt>
          <dd class="text-3xl sm:text-4xl font-semibold tracking-tight text-white">300+</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-black">Hours per week</dt>
          <dd class="text-3xl sm:text-4xl font-semibold tracking-tight text-black">40</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-black">Paid time off</dt>
          <dd class="text-3xl sm:text-4xl font-semibold tracking-tight text-black">Unlimited</dd>
        </div>
      </dl>
    </div>
  </div>
</div>




<div class="card-group mt-20 mb-3 ">
  <div class="card mr-5 ml-5 ">
    <img src="{{url('media/card1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body mr-5 ml-5 rounded-md">
      <h5 class="card-title">ard title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card  mr-5 ml-5  rounded-md ">
    <img src="{{url('media/card2.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card mr-5 ml-5 rounded-md ">
    <img src="{{url('media/card3.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>





<div id="google">
<!-- Elfsight Google Reviews | Untitled Google Reviews -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-11eb1637-13b2-4bef-b4fe-3a8fd7088712" data-elfsight-app-lazy></div>
</div>












<footer class="bg-gray-900 text-white py-10 mt-16 mb-10">
  <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    <div>
      <h2 class="text-2xl font-bold mb-4">Flashbats</h2>
      <p class="text-sm text-gray-400">Elevate your cricket game with our handcrafted bats. Power, precision, perfection.</p>
    </div>
    <div>
      <h3 class="text-lg font-semibold mb-2">Links</h3>
      <ul class="space-y-1 text-sm text-gray-400">
        <li><a href="/about" class="hover:text-white">About</a></li>
        <li><a href="/contact" class="hover:text-white">Contact</a></li>
        <li><a href="/work" class="hover:text-white">Work</a></li>
        <li><a href="/center" class="hover:text-white">Center</a></li>
      </ul>
    </div>
    <div>
      <h3 class="text-lg font-semibold mb-2">Support</h3>
      <ul class="space-y-1 text-sm text-gray-400">
        <li><a href="#" class="hover:text-white">Shipping Info</a></li>
        <li><a href="#" class="hover:text-white">Returns</a></li>
        <li><a href="#" class="hover:text-white">Warranty</a></li>
        <li><a href="#" class="hover:text-white">FAQs</a></li>
      </ul>
    </div>
    <div>
      <h3 class="text-lg font-semibold mb-2">Follow Us</h3>
      <ul class="space-y-1 text-sm text-gray-400">
        <li><a href="#" class="hover:text-white">Instagram</a></li>
        <li><a href="#" class="hover:text-white">Facebook</a></li>
        <li><a href="#" class="hover:text-white">YouTube</a></li>
      </ul>
    </div>
  </div>
  <div class="text-center text-sm text-gray-500 mt-8">
    &copy; 2025 Flashbats. All rights reserved.
  </div>
</footer>
</body>
</html> 