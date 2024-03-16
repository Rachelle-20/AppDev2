<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICE</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto p-4">
    <div class="p-4">
      <h2 class="text-center mb-4 text-xl font-semibold">LOGIN FORM</h2>
      <form action="/register" method="POST" class="flex flex-col space-y-4">
        @csrf
        <input type="Email" placeholder="Email" class="border p-2">
        <input type="password" placeholder="Password" class="border p-2">
        <div class="flex justify-center">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
