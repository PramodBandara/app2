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
  background-image: url('{{ url('media/mainimg2.jpg') }}');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
}
      
    </style>
    
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>

<div class="bg-black text-sky-500 h-16 flex items-center marquee-container">
  <div class="marquee-track text-lg font-medium font-eb-garamond italic tracking-wide">
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
    <div class="marquee-item px-6">FREE DELIVERY OVER £100 &nbsp;&nbsp;&nbsp; FREE RETURNS &nbsp;&nbsp;&nbsp; FREE ONE YEAR WARRANTY</div>
  </div>
</div>

<header class="bg-white shadow-md sticky top-0 z-50 py-4 px-6 flex items-center justify-between">
  <div class="flex gap-6 items-center">
    <a href="/about" class="text-gray-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">About</a>
    <a href="/contact" class="text-gray-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Contact</a>
  </div>

  <div class="flex justify-center">
    <a href="/" class="block">
      <img src="{{url('media/logo1.jpeg')}}"  alt="app2 Logo" class="h-40 w-auto">
       
    </a>
  </div>

  <div class="flex gap-6 items-center">
    <a href="/work" class="text-gray-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Work</a>
    <a href="/center" class="text-gray-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Center</a>
  </div>
</header>



<div class="container mx-auto px-4 py-8">
  <h1 class="text-4xl font-bold text-center mb-6">Welcome to Flashbats</h1>
  <p class="text-lg text-gray-700 text-center mb-8">Get yourself crease-ready with a brand new cricket bat. A budget-friendly cricket bat selection no matter what size you are after. From kids to adults, we’ve got you covered.</p>
  


</body>
</html> 