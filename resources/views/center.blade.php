<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Location - Modern Style</title>
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
    <div class="w-full max-w-5xl mx-auto bg-white/50 shadow-xl rounded-2xl overflow-hidden md:grid md:grid-cols-2 mt-10">
        
        <!-- Left Column: Information -->
        <div class="p-8 sm:p-12 flex flex-col justify-center">
            <div>
                <header>
                    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-tight">Visit Our Office</h1>
                    <p class="mt-3 text-base sm:text-lg text-gray-600">We are conveniently located in the heart of Colombo. We look forward to welcoming you.</p>
                </header>

                <!-- Address Information -->
                <div class="mt-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Our Address</h2>
                            <address class="mt-1 text-base text-gray-600 not-italic">
                                123 Heritage Lane, Suite 45<br>
                                Colombo, Western Province, Sri Lanka
                            </address>
                        </div>
                    </div>
                </div>

                <!-- Get Directions Button -->
                <div class="mt-10">
                    <a href="https://www.google.com/maps/place/Flash+Bat/@7.4726987,80.6222621,873m/data=!3m1!1e3!4m14!1m7!3m6!1s0x3ae345e77c21f1ab:0x604f377ffb9d816c!2sFlash+Bat!8m2!3d7.4726987!4d80.624837!16s%2Fg%2F11lzm4d1l8!3m5!1s0x3ae345e77c21f1ab:0x604f377ffb9d816c!8m2!3d7.4726987!4d80.624837!16s%2Fg%2F11lzm4d1l8?entry=ttu" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-8 py-3 bg-black text-white font-semibold rounded-lg shadow-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300">
                        <span>Get Directions</span>
                        <i class="fas fa-arrow-right ml-3"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Column: Interactive Map -->
        <div class="w-full h-80 md:h-full bg-gray-200">
             <!-- Replace this iframe's 'src' with your own Google Maps embed code -->
             <iframe
                class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80383568729!2d79.82118580342468!3d6.921838237694348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1719437434551!5m2!1sen!2slk"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</body>
</html>
