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
<body>
<div class="min-h-screen bg-gray-100 py-8 px-4 font-[Inter]">
  <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800"> flash bat order details</h1>
    <div class="overflow-x-auto">@foreach ($users as $user)
      <table class="min-w-full border border-gray-300 divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">full name</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">email <address></address></th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">whatsapp number</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">street name</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">zip code</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">provine</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">additional note</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Order Options</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
         
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2">{{ $user->name }}</td>
            <td class="px-4 py-2">{{ $user->email }}</td>
            <td class="px-4 py-2">{{ $user->phone }}</td>
            <td class="px-4 py-2">{{ $user->street }}</td>
            <td class="px-4 py-2">{{ $user->zipcode }}</td>
            <td class="px-4 py-2">{{ $user->province }}</td>
            <td class="px-4 py-2">{{ $user->additionalnote }}</td>
            <td class="px-4 py-2">{{ $user->orderoption}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>