<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="bg-blue-500 p-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex-shrink-0">
                <h1 class="text-white text-lg font-semibold">My Social Network</h1>
            </div>
            <div class="flex-1 ml-4">
                <form>
                
                    <div class="relative">
                        <input type="text" name="search" id="search" placeholder="Search" class="bg-white border-2 border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:border-blue-500">
                        <button type="submit" class="absolute inset-y-0 right-0 top-0 bg-blue-500 text-white font-semibold px-4 py-2 rounded-md">Search</button>
                    </div>
                </form>
            </div>
            <div class="flex-shrink-0">
                 <form action="/home" method="GET">
                    @csrf
                <button class="bg-white text-blue-500 font-semibold px-4 py-2 rounded-md">Login</button>
           </form>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-8">
        <!-- Your content here -->
    </div>
</body>
</html>
