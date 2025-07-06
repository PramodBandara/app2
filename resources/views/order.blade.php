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
    
</head>
<body class="bg-white h-screen overflow-hidden text-gray-900 font-[Inter]">
  <div class="flex flex-col h-full">

    <!-- Header -->
    <header class="text-center py-4 border-b">
      <h1 class="text-2xl font-bold">Select Your Order Option</h1>
    </header>

    <!-- Main content area with cards and summary side by side -->
    <form method="POST" action="{{ url('placeorder') }}" class="flex flex-1 overflow-hidden">
    @csrf
      <!-- Cards -->
      <div class="grid grid-cols-3 gap-4 p-4 overflow-y-auto w-3/4">
        <!-- Option 1 -->
        <div class="bg-white border rounded-lg p-3 flex flex-col">
          <img src="{{ asset('media/option1.jpg') }}" alt="🛠️ Broken Part Recovery" class="rounded mb-2 h-24 object-cover">
          <h3 class="text-sm font-semibold mb-1">🛠️ Broken Part Recovery</h3>
          <p class="text-xs text-gray-600 mb-2">Expert repair of cracks, chips, and broken bat sections.</p>
          <label class="mt-auto inline-flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" name="options[]" value="🛠️ Broken Part Recovery">
            <span class="text-xs">Select</span>
          </label>
        </div>
        <!-- Option 2 -->
        <div class="bg-white border rounded-lg p-3 flex flex-col">
          <img src="{{ asset('media/option2.jpg') }}" alt="🔁 Handle Replacing" class="rounded mb-2 h-24 object-cover">
          <h3 class="text-sm font-semibold mb-1">🔁 Handle Replacing</h3>
          <p class="text-xs text-gray-600 mb-2">Replace damaged handles with premium grips.</p>
          <label class="mt-auto inline-flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" name="options[]" value="🔁 Handle Replacing">
            <span class="text-xs">Select</span>
          </label>
        </div>
        <!-- Option 3 -->
        <div class="bg-white border rounded-lg p-3 flex flex-col">
          <img src="{{ asset('media/option3.jpg') }}" alt="🛢️ Bat Oiling" class="rounded mb-2 h-24 object-cover">
          <h3 class="text-sm font-semibold mb-1">🛢️ Bat Oiling</h3>
          <p class="text-xs text-gray-600 mb-2">Condition the blade to prevent dryness and cracking.</p>
          <label class="mt-auto inline-flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" name="options[]" value="🛢️ Bat Oiling">
            <span class="text-xs">Select</span>
          </label>
        </div>
        <!-- Option 4 -->
        <div class="bg-white border rounded-lg p-3 flex flex-col">
          <img src="{{ asset('media/option4.jpg') }}" alt="🧵 Bat Binding" class="rounded mb-2 h-24 object-cover">
          <h3 class="text-sm font-semibold mb-1">🧵 Bat Binding</h3>
          <p class="text-xs text-gray-600 mb-2">Protect bat edges and reduce splits.</p>
          <label class="mt-auto inline-flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" name="options[]" value="🧵 Bat Binding">
            <span class="text-xs">Select</span>
          </label>
        </div>
        <!-- Option 5 -->
        <div class="bg-white border rounded-lg p-3 flex flex-col">
          <img src="{{ asset('media/option5.jpg') }}" alt="⚒️ Bat Knock" class="rounded mb-2 h-24 object-cover">
          <h3 class="text-sm font-semibold mb-1">⚒️ Bat Knock</h3>
          <p class="text-xs text-gray-600 mb-2">Prepare bat face for gameplay durability.</p>
          <label class="mt-auto inline-flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" name="options[]" value="⚒️ Bat Knock">
            <span class="text-xs">Select</span>
          </label>
        </div>
        <!-- Option 6 -->
        <div class="bg-white border rounded-lg p-3 flex flex-col">
          <img src="{{ asset('media/card2new.jpg') }}" alt="🧼 Bat Cleaning" class="rounded mb-2 h-24 object-cover">
          <h3 class="text-sm font-semibold mb-1">🧼 Bat Cleaning</h3>
          <p class="text-xs text-gray-600 mb-2">Deep clean to restore shine and hygiene.</p>
          <label class="mt-auto inline-flex items-center space-x-2">
            <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600" name="options[]" value="🧼 Bat Cleaning">
            <span class="text-xs">Select</span>
          </label>
        </div>
      </div>

      <!-- Summary -->
      <aside class="w-1/4 border-l p-4 flex flex-col justify-between bg-gray-50">
        <div>
          <h2 class="text-lg font-semibold mb-3">Your Selection Summary</h2>
          <ul id="selection-summary" class="text-xs space-y-1 overflow-y-auto max-h-64 pr-1">
            <li class="text-gray-400 italic">No options selected yet.</li>
          </ul>
        </div>
        <div class="mt-4">
          <button type="submit" class="block w-full bg-black text-white py-2 text-sm rounded hover:bg-gray-800 transition-all">Continue</button>
        </div>
      </aside>
    </form>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const summaryList = document.getElementById('selection-summary');
      const checkboxes = document.querySelectorAll('input[type="checkbox"]');

      checkboxes.forEach(cb => {
        cb.addEventListener('change', () => {
          const selected = Array.from(checkboxes)
            .filter(box => box.checked)
            .map(box => {
              const card = box.closest('.flex.flex-col');
              const title = card.querySelector('h3')?.innerText || box.value;
              return title;
            });

          summaryList.innerHTML = selected.length > 0
            ? selected.map(val => `<li>✔ ${val}</li>`).join('')
            : '<li class="text-gray-400 italic">No options selected yet.</li>';
        });
      });
    });
  </script>
</body>
</html>