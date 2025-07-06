<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Modern Style</title>
    <!-- Tailwind CSS for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts - Inter for a clean, modern look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Apply the modern Inter font */
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen mb-15">
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

<video autoplay muted loop playsinline class="fixed top-0 left-0 w-full h-full object-cover z-[-1]">
  <source src="{{ url('media/finalcricket.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

    <!-- Main content card with a soft shadow and rounded corners -->
    <div class="w-full max-w-2xl mx-auto bg-black/80 shadow-xl rounded-2xl overflow-hidden mt-10">
        
        <!-- Full-width Information Column -->
        <div class="p-8 sm:p-12 text-white flex flex-col justify-center mt-20">
            <div>
                <header class="text-center">
                    <h1 class="text-3xl sm:text-4xl font-bold tracking-tight">Get in Touch</h1>
                    <p class="mt-3 text-base sm:text-lg text-blue-100 max-w-xl mx-auto">
                        We'd love to hear from you. Please contact us directly using the information below.
                    </p>
                </header>

                <!-- Contact Details -->
                <div class="mt-12 space-y-8">
                    <!-- Phone -->
                    <div class="flex flex-col sm:flex-row items-center text-center sm:text-left">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                            <i class="fas fa-phone text-3xl text-blue-200"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold">Phone</h2>
                            <a href="tel:+94112345678" class="text-lg text-blue-100 hover:text-white transition-colors">+94 72 806 7218 </a>
                        </div>
                    </div>
                    <!-- Email -->
                     <div class="flex flex-col sm:flex-row items-center text-center sm:text-left">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                            <i class="fas fa-envelope text-3xl text-blue-200"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold">Email</h2>
                            <a href="mailto:contact@yourdomain.com" class="text-lg text-blue-100 hover:text-white transition-colors">flashb20067@gmail.com</a>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="flex flex-col sm:flex-row items-center text-center sm:text-left">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-6">
                            <i class="fas fa-map-marker-alt text-3xl text-blue-200"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold">Address</h2>
                            <address class="mt-1 text-lg text-blue-100 not-italic">
                            No:1/40 Godapala,Kiwla, <br>
                            Matale 21000 central Province, Sri Lanka
                            </address>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="mt-12 pt-8 border-t border-blue-500 text-center">
                     <h2 class="text-xl font-semibold">Follow Us</h2>
                     <div class="mt-4 flex justify-center space-x-6">
                        <!-- WhatsApp -->
                        <a href="https://wa.me/94728067218" target="_blank" rel="noopener noreferrer" class="text-blue-200 hover:text-white transition-transform hover:scale-110">
                            <i class="fab fa-whatsapp text-3xl"></i>
                            <span class="sr-only">WhatsApp</span>
                        </a>
                        <!-- Instagram -->
                         <a href="https://www.instagram.com/flash_bat01/)
" target="_blank" rel="noopener noreferrer" class="text-blue-200 hover:text-white transition-transform hover:scale-110">
                            <i class="fab fa-instagram text-3xl"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <!-- Facebook -->
                         <a href="https://www.facebook.com/people/Flash-Bat/61550109510315/
" target="_blank" rel="noopener noreferrer" class="text-blue-200 hover:text-white transition-transform hover:scale-110">
                            <i class="fab fa-facebook text-3xl"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                     </div>
                </div>

            </div>
        </div>

        <!-- Full-width Map Column -->  

       
    </body>
    </html>
