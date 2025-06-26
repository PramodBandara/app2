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
  
</head>
<body>
<video autoplay muted loop playsinline class="fixed top-0 left-0 w-full h-full object-cover z-[-1]">
  <source src="{{ url('media/finalcricket.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>
<section class="bg-white  py-20 px-6 ">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center ">
    <!-- Image -->
    <div>
      <img src="{{ url('media/slide2.jpg') }}" alt="About Flashbats" class="rounded-xl shadow-lg w-full object-cover">
    </div>

    <!-- Text -->
    <div>
      <h2 class="text-4xl font-bold text-gray-900 mb-4">About Flashbats</h2>
      <p class="text-gray-600 text-lg mb-6 leading-relaxed">
        Flashbats is built by players, for players. We craft premium cricket bats with unmatched balance and explosive power. Whether you play at the club or in the streets, our mission is to elevate your game.
      </p>
      <p class="text-gray-600 text-base mb-6">
        All our bats are hand-pressed and tested by real cricketers. Backed by passion, driven by performance.
      </p>
      <a href="/contact" class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded hover:bg-blue-700 transition">
        Get in Touch
      </a>
    </div>
  </div>
</section>
    
</body>
</html>