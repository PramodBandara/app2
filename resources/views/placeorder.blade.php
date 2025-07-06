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
<body class="bg-gray-50 font-[Inter]">
  <div class="min-h-screen flex flex-col md:flex-row p-4 gap-4">
    <section class="flex-1 bg-white shadow-lg rounded-xl p-8">
      <form action="{{ url('admin') }}" method="POST" class="space-y-6">
        <input type="hidden" id="selectedOptionsInput" name="orderoption">
        @csrf
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <h2 class="text-2xl font-bold text-center text-gray-800">Place Your Order</h2>

        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
          <input type="text" id="name" name="name" class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <input type="email" id="email" name="email" class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="street" class="block text-sm font-medium text-gray-700">Street Name</label>
            <input type="text" id="street" name="street" class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div>
            <label for="zipcode" class="block text-sm font-medium text-gray-700">ZIP Code</label>
            <input type="tel" id="zipcode" name="zipcode" class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
        </div>

        <div>
          <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
          <input type="text" id="province" name="province" class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
          <label for="note" class="block text-sm font-medium text-gray-700">Additional Note</label>
          <textarea id="note" name="note" rows="3" class="mt-1 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div class="text-center">
          <button type="submit" class="w-full py-2 px-4 rounded-md font-semibold text-white bg-gradient-to-r from-black via-gray-800 to-black hover:from-orange-500 hover:via-yellow-500 hover:to-orange-600 shadow-md hover:shadow-orange-500/50 transition-all duration-500 ease-in-out transform hover:scale-105">
            Submit Order
          </button>
        </div>
      </form>
    </section>

    <aside class="w-full md:w-1/3 bg-white shadow-lg rounded-xl p-6">
      <h5 class="text-lg font-semibold mb-4">Selected Options Summary</h5>
      @if(!empty($options))
        <ul class="list-disc pl-5 text-gray-700 space-y-1" id="orderoption" name="orderoption">
          @foreach($options as $opt)
            <li>{{ $opt }}</li>
          @endforeach
        </ul>
      @else
        <p class="text-muted italic">No options selected.</p>
      @endif
    </aside>
  </div>
</body>
<script>
  $(document).ready(function () {
    $('form').on('submit', function () {
      const options = [];
      $('#orderoption li').each(function () {
        options.push($(this).text().trim());
      });
      $('#selectedOptionsInput').val(JSON.stringify(options));
    });
  });
</script>
</html>