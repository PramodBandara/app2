<html>
  <head>
    <title>Before & After Work</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Mystery+Quest&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
  </head>
  <body>
  <header class="bg-white/35 shadow-black-xs backdrop-blur-md shadow-md sticky top-0 z-50 py-4 px-6 flex items-center justify-between">
    <div class="flex gap-6 items-center">
      <a href="{{ url('about') }}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">About</a>
      <a href="{{url('contact')}}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Contact</a>
    </div>
    <div class="flex justify-center">
      <a href="/" class="block">
        <img src="{{url('media/logo1.jpeg')}}"  alt="app2 Logo" class="h-[2.6cm] w-auto max-h-[2.8cm] object-contain animate-glow">
      </a>
    </div>
    <div class="flex gap-6 items-center">
      <a href="{{url('work')}}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Work</a>
      <a href="{{url('center')}}" class="text-white-700 hover:text-blue-600 hover:scale-125 font-semibold uppercase tracking-wide">Center</a>
    </div>
  </header>


    <section id="before-after" style="padding: 60px 20px; text-align: center;">
      <h2>Before & After Work🏏</h2>
      <p>See the transformation of our gear — 🧩from raw to game-ready🏆.</p>
      <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-top: 30px;">
        <div>
          <img src="{{('media/before..jpg')}}" alt="Before Work" style="width: 100%; max-width: 300px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
          <p style="margin-top: 10px;">Before❤️‍🔥</p>
        </div>
        <div>
          <img src="{{url('media/after.jpg')}}" alt="After Work" style="width: 100%; max-width: 300px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
          <p style="margin-top: 10px;">After</p>
        </div>
      </div>
    </section>
  </body>
</html>






















