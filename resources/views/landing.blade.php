<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hot Desk Booking System</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <header class="bg-gray-800 text-white py-4 px-6 flex justify-between items-center">
    <img src="{{ asset('images/Services.png') }}" alt="Logo" class="h-12">
    <div class="auth-buttons flex gap-4">
      <form action="/login" method="POST">
        @csrf
        <button class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
      </form>
      <form action="/register" method="POST">
        @csrf
        <button class="btn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Register</button>
      </form>
    </div>
  </header>

  <div class=" bg-blue-100 main-content flex justify-center items-center h-screen">
    <div class="text-center">
      <h1 class="text-4xl font-bold mb-4">Welcome to the Hot Desk Booking System</h1>
      <p class="mb-8">Book your hot desk easily and efficiently with our user-friendly system.</p>
      <div class="flex justify-around">
        <div class="bg-white bg-opacity-20 rounded-lg p-4 w-1/3 m-2">
          <h2 class="font-semibold text-lg mb-2">Secure and hassle-free desk reservations</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white bg-opacity-20 rounded-lg p-4 w-1/3 m-2">
          <h2 class="font-semibold text-lg mb-2">Real-time availability updates</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white bg-opacity-20 rounded-lg p-4 w-1/3 m-2">
          <h2 class="font-semibold text-lg mb-2">Flexible booking options</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-gray-800 text-white py-4 text-center">
    &copy; 2023 Hot Desk Booking System. All rights reserved.
  </footer>

</body>
</html>
