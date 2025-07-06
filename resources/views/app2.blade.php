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
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style data-shopify="">
      @keyframes bounceSlow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
      }
      .animate-bounce-slow {
        animation: bounceSlow 2.5s ease-in-out infinite;
      }
      @keyframes softGlow {
        0%, 100% {
          box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        50% {
          box-shadow: 0 0 20px rgba(255, 255, 255, 0.4);
        }
      }
      .animate-soft-glow {
        animation: softGlow 2.5s ease-in-out infinite;
      }
      @keyframes marquee {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-10%); }
      }
      .animate-marquee {
        display: inline-flex;
        animation: marquee 15s linear infinite;
      }
      body {
  background-image: url('{{ url('media/101.jp') }}');
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
@keyframes cleanPulse {
          0% {
            filter: drop-shadow(0 0 0 rgba(0,0,0,0));
            transform: scale(1);
          }
          50% {
            filter: drop-shadow(0 0 20px rgba(0,0,0,0.6));
            transform: scale(1.02);
          }
          100% {
            filter: drop-shadow(0 0 0 rgba(0,0,0,0));
            transform: scale(1);
          }
        }
        .animate-glow {
          animation: cleanPulse 2.5s ease-in-out infinite;
        }
 /* Custom styles for a smoother experience */
 body {
            font-family: 'Inter', sans-serif;
        }
        .faq-answer {
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        .faq-answer.open {
            max-height: 1000px; /* Adjust as needed for your content */
            opacity: 1;
        }
        .icon-plus {
            transition: transform 0.3s ease-in-out;
        }
        .icon-minus {
            transition: transform 0.3s ease-in-out;
            transform: rotate(180deg);
        }
        .faq-item.open .icon-plus {
            transform: rotate(45deg);
        }


      
    </style>
    
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body class="bg-white">

<!-- Loading Screen -->
<div id="loadingScreen" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm">
  <div class="absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('{{ url('media/newloadinscreen.jpg') }}');"></div>
  <div class="z-10 flex flex-col items-center justify-center text-center">
    <img src="{{ url('media/newloadinscreen.jpg') }}" alt="Loading Logo" class="w-32 sm:w-48 rounded-full shadow-lg animate-pulse" />
    <div class="relative w-16 h-16 mt-8">
      <div class="absolute inset-0 rounded-full border-4 border-white animate-ping opacity-25"></div>
      <div class="absolute inset-0 rounded-full border-4 border-white opacity-40"></div>
    </div>
    <p class="text-white text-sm mt-6 tracking-widest uppercase animate-pulse">Loading FlashBat...</p>
  </div>
</div>


<div id="topMarquee" style="display: none;" class="w-full h-[1cm] bg-white text-black text-center overflow-hidden z-50 sticky top-0">
  <div class="flex whitespace-nowrap animate-marquee">
    <span class="px-2 mt-1 italic"> WELCOME TO FLASHBAT  WELCOME TO FLASHBAT  WELCOME TO FLASHBAT  WELCOME TO FLASHBAT</span><span class="px-2 mt-1 italic"> WELCOME TO FLASHBAT  WELCOME TO FLASHBAT  WELCOME TO FLASHBAT  WELCOME TO FLASHBAT</span>
  </div>
</div>
<div id="mainHeader" style="display: none;">
<header class="bg-white/35 shadow-black-xs backdrop-blur-md shadow-md sticky top-0 z-50 py-4 px-6 flex items-center justify-between">
    <div class="flex gap-4 items-center">
      <a href="{{ url('about') }}" data-text="About" class="px-6 py-2 text-sm font-semibold text-white bg-gradient-to-r from-black via-gray-800 to-black shadow-md hover:shadow-[0_4px_20px_rgba(255,255,255,0.4)] hover:scale-105 transition-transform duration-300 ease-in-out hover:underline hover:decoration-white hover:decoration-2 underline-offset-4"><span class="mix-text">About</span></a>
      <a href="{{url('contact')}}" data-text="Contact" class="px-6 py-2 text-sm font-semibold text-white bg-gradient-to-r from-black via-gray-800 to-black shadow-md hover:shadow-[0_4px_20px_rgba(255,255,255,0.4)] hover:scale-105 transition-transform duration-300 ease-in-out hover:underline hover:decoration-white hover:decoration-2 underline-offset-4"><span class="mix-text">Contact</span></a>
    </div>
    <div class="flex justify-center">
      <a href="/" class="block">
        <img src="{{url('media/logo1.jpeg')}}"  alt="app2 Logo" class="h-[2.6cm] w-auto max-h-[2.8cm] object-contain animate-glow">
      </a>
    </div>
    <div class="flex gap-4 items-center">
      <a href="{{url('work')}}" data-text="Work" class="px-6 py-2 text-sm font-semibold text-white bg-gradient-to-r from-black via-gray-800 to-black shadow-md hover:shadow-[0_4px_20px_rgba(255,255,255,0.4)] hover:scale-105 transition-transform duration-300 ease-in-out hover:underline hover:decoration-white hover:decoration-2 underline-offset-4"><span class="mix-text">Work</span></a>
      <a href="{{url('center')}}" data-text="Center" class="px-6 py-2 text-sm font-semibold text-white bg-gradient-to-r from-black via-gray-800 to-black shadow-md hover:shadow-[0_4px_20px_rgba(255,255,255,0.4)] hover:scale-105 transition-transform duration-300 ease-in-out hover:underline hover:decoration-white hover:decoration-2 underline-offset-4"><span class="mix-text">Center</span></a>
    </div>
  </header>
</div>






<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 mt-10 min-h-[600px] lg:min-h-[700px] mr-7 ml-7 rounded-2xl">
  <img src="{{url('media/newmainimage.jpg')}}" class="absolute inset-0 -z-10 w-full h-full object-cover object-center md:object-right rounded-2xl transition-transform duration-700 ease-in-out hover:scale-90 hover:blur-sm" />
  <img src="{{ url('media/2005.svg') }}" alt="FlashBat Text" class="absolute top-10 left-1/2 transform -translate-x-1/2 z-10 w-[80%] max-w-5xl pointer-events-none" />
  <div class="absolute left-1/2 transform -translate-x-1/2 z-20" style="top: calc(10rem + 5px);">
    <a href="{{ url('order') }}" class="px-10 py-3 text-lg font-bold text-white bg-black border border-white uppercase tracking-widest shadow-lg hover:shadow-[0_0_20px_rgba(255,255,255,0.6)] transition duration-500 no-underline animate-soft-glow">
      Place Order
    </a>
  </div>

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
      
      <dl class="mt-10 pt-56 sm:pt-64 lg:pt-80 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col-reverse gap-1">
        
          
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-black">Office locations</dt>
          <dd class="text-2xl sm:text-3xl lg:text-4xl font-semibold tracking-tight text-white">2</dd>
        </div>
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-black">Orders</dt>
          <dd class="text-2xl sm:text-3xl lg:text-4xl font-semibold tracking-tight text-white">100+</dd>
        </div>
       
        <div class="flex flex-col-reverse gap-1">
          <dt class="text-base/7 text-black">Experience
          </dt>
          <dd class="text-2xl sm:text-3xl lg:text-4xl font-semibold tracking-tight text-white">5years</dd>
        </div>
      </dl>
    </div>
  </div>
</div>





<div class="card-group mt-20 mb-3 rounded-2xl shadow-lg">
  <div class="card mr-5 ml-5 rounded-2xl shadow-lg">
    <img src="{{url('media/card1new.jpg')}}" class="card-img-top transition-transform duration-500 ease-in-out hover:scale-105" alt="...">
    <div class="card-body mr-5 ml-5 rounded-md">
      <h5 class="card-title"> Add Custom Stickers for Bat</h5>
      <p class="card-text">Personalize your bat with high-quality, weatherproof custom stickers designed to reflect your style and spirit.
      </p>
      <p class="card-text"><small class="text-body-secondary"></small></p>
    </div>
  </div>
  <div class="card  mr-5 ml-5  rounded-2xl ">
    <img src="{{url('media/card2new.jpg')}}" class="card-img-top transition-transform duration-500 ease-in-out hover:scale-105" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Full Cleaning Your Bat</h5>
      <p class="card-text">Bring back the shine! We deep clean your bat, removing dirt, sweat stains, and restoring its natural finish.</p>
      <p class="card-text"><small class="text-body-secondary"></small></p>
    </div>
  </div>
  <div class="card mr-5 ml-5 rounded-2xl ">
    <img src="{{url('media/card3new.jpg')}}" class="card-img-top transition-transform duration-500 ease-in-out hover:scale-105" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Modify Your Bat Various Profiles</h5>
      <p class="card-text">Customize your bat’s weight, balance, or spine to match your playing style — choose from multiple profile options.
      </p>
      <p class="card-text"><small class="text-body-secondary"></small></p>
    </div>
  </div>
</div>





<div id="google">
<!-- Elfsight Google Reviews | Untitled Google Reviews -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-11eb1637-13b2-4bef-b4fe-3a8fd7088712" data-elfsight-app-lazy></div>
</div>


 <!-- FAQ Section Container -->
 <div class="   " id="faq">
        <div class="w-full max-w-7xl mx-auto bg-white/75 rounded-2xl shadow-lg p-6 sm:p-8 lg:p-10">

            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Frequently Asked Questions</h1>
                <p class="text-gray-500 text-base sm:text-lg">Can't find the answer you're looking for? Feel free to <a href="{{url('contact')}}" class="text-indigo-600 font-medium hover:underline">contact us</a>.</p>
            </div>

            <!-- FAQ Items -->
            <div id="faq-container" class="space-y-4">

                <!-- FAQ Item 1 -->
                <div class="faq-item bg-white/25 border border-gray-200 rounded-lg">
                    <button class="faq-question w-full flex justify-between items-center text-left p-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 rounded-lg">
                        <span class="text-lg font-medium text-gray-900">What types of bat modifications do you offer?</span>
                        <span class="icon-container">
                            <svg class="icon-plus w-4 h-4 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer px-5 pb-5 text-gray-600">
                        <p>We offer profile reshaping, weight adjustment, edge enhancement, toe shaping, and more — all tailored to your playing style</p>
                    </div>
                </div>
                
                
                <!-- FAQ Item 2 -->
                <div class="faq-item bg-white/25 border border-gray-200 rounded-lg">
                    <button class="faq-question w-full flex justify-between items-center text-left p-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 rounded-lg">
                        <span class="text-lg font-medium text-gray-900">Will modifying my bat affect its performance or warranty?</span>
                        <span class="icon-container">
                            <svg class="icon-plus w-4 h-4 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer px-5 pb-5 text-gray-600">
                        <p>Modifications are designed to enhance performance. However, altering the bat may void manufacturer warranties — we’ll explain everything beforehand.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item bg-white/25 border border-gray-200 rounded-lg">
                    <button class="faq-question w-full flex justify-between items-center text-left p-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 rounded-lg">
                        <span class="text-lg font-medium text-gray-900">What payment methods do you accept?</span>
                        <span class="icon-container">
                             <svg class="icon-plus w-4 h-4 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer px-5 pb-5 text-gray-600">
                        <p>We accept cash,bank transfers, and mobile payments like FriMi, eZ Cash, and mCash.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item bg-white/25 border border-gray-200 rounded-lg">
                    <button class="faq-question w-full flex justify-between items-center text-left p-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 rounded-lg">
                        <span class="text-lg font-medium text-gray-900">How long does shipping take after modification?</span>
                        <span class="icon-container">
                             <svg class="icon-plus w-4 h-4 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </span>
                    </button>
                    <div class="faq-answer px-5 pb-5 text-gray-600">
                        <p>Once your bat is ready, local shipping usually takes 2–3 business days. International delivery takes 7–14 days, depending on the destination.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>









<footer class="bg-black text-white py-10 mt-16 mb-0">
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
        <li><a href="#faq" class="hover:text-white">Shipping Info</a></li>
        
        <li><a href="#faq" class="hover:text-white">Warranty</a></li>
        <li><a href="#faq" class="hover:text-white">FAQs</a></li>
      </ul>
    </div>
    <div>
      <h3 class="text-lg font-semibold mb-2">Follow Us</h3>
      <ul class="space-y-1 text-sm text-gray-400">
        <li><a href="https://www.instagram.com/flash_bat01/)
" class="hover:text-white">Instagram</a></li>
        <li><a href="https://www.facebook.com/people/Flash-Bat/61550109510315/
" class="hover:text-white">Facebook</a></li>
        <li><a href="https://www.tiktok.com/@flashbat?_t=ZS-8wF8bQUkUwU&_r=1)
" class="hover:text-white">Tiktok</a></li>
      </ul>
    </div>
  </div>
  <div class="text-center text-sm text-gray-500 mt-8">
    2025 <a href="https://www.instagram.com/flash_bat01/" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-white transition duration-300 hover:scale-105">
            <span class="bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 bg-clip-text text-transparent drop-shadow-[0_0_6px_rgba(255,100,255,0.6)]">
              CodedStyle{}
            </span>
          </a> All rights reserved.
  </div>
</footer>
<script>
  window.addEventListener('load', () => {
    const loader = document.getElementById('loadingScreen');
    const header = document.getElementById('mainHeader');
    const topMarquee = document.getElementById('topMarquee');
    if (loader) {
      setTimeout(() => {
        loader.style.display = 'none';
        if (header) header.style.display = 'block';
        if (topMarquee) topMarquee.style.display = 'block';
      }, 2000);
    }
  });

   // JavaScript for the accordion functionality
   document.addEventListener('DOMContentLoaded', function () {
            const faqContainer = document.getElementById('faq-container');

            faqContainer.addEventListener('click', function (e) {
                // Find the closest faq-question button
                const questionButton = e.target.closest('.faq-question');
                if (!questionButton) return;

                const faqItem = questionButton.parentElement;
                const answer = faqItem.querySelector('.faq-answer');
                const icon = faqItem.querySelector('.icon-plus');

                // Toggle the 'open' class on the item and answer
                const isOpen = faqItem.classList.toggle('open');
                
                // Close all other open items
                const allFaqItems = faqContainer.querySelectorAll('.faq-item');
                allFaqItems.forEach(item => {
                    if (item !== faqItem && item.classList.contains('open')) {
                        item.classList.remove('open');
                        item.querySelector('.faq-answer').classList.remove('open');
                    }
                });

                // Set the state for the clicked item
                if (isOpen) {
                    answer.classList.add('open');
                } else {
                    answer.classList.remove('open');
                }
            });
        });
</script>
<script>
  // Scrambling animation on hover
  document.querySelectorAll('.mix-text').forEach(el => {
    const originalText = el.textContent;
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    el.parentElement.addEventListener('mouseenter', () => {
      let iterations = 0;
      const interval = setInterval(() => {
        el.textContent = originalText
          .split('')
          .map((char, i) => {
            if (i < iterations) return originalText[i];
            return chars[Math.floor(Math.random() * chars.length)];
          })
          .join('');
        if (iterations >= originalText.length) clearInterval(interval);
        iterations += 1/2;
      }, 40);
    });
    el.parentElement.addEventListener('mouseleave', () => {
      el.textContent = originalText;
    });
  });
</script>
</body>
</html>