<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="font-sans overflow-auto min-h-screen">

 <div class="p-4 bg-gray-200">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex-shrink-0">
                 <form action="/desk" method="GET">
                <button class="text-lg font-semibold">DeskSync</button>
</form>
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
                <button class="bg-red-500 text-white-100 font-semibold px-4 border-2 border-gray-300 rounded-md py-2">Logout</button>
           </form>
            </div>
</div>
</div>

<div class="container mx-auto px-4 p-4 bg-yellow-100">
    <h1 class="text-2xl font-bold text-gray-800 mb-1">Good Morning, Andrey</h1>
    <p class="text-gray-600 mb-4">Have a nice day ahead!</p>

    <!-- Booking Status -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="p-1">
            <h2 class="text-lg font-bold text-gray-800 mb-3 flex justify-between">Booking Status<a href="#" class="text-blue-500 text-sm font-medium mb-3 mt-2">VIEW ALL</a></h2>

            <div class="mb-4 bg-gray-100 shadow-lg p-3 rounded-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2 flex justify-between">Desk 1<p class="text-gray-600 text-sm font-medium">PENDING</p></h3>
                <p class="text-gray-600 text-sm">December 10, 2023</p>
                <p class="text-gray-600 text-sm">7:30am - 10:00pm</p>

            </div>
            <div class="mb-4 bg-gray-100 shadow-lg p-3 rounded-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2 flex justify-between">Desk 2<p class="text-gray-600 text-sm font-medium">PENDING</p></h3>
                <p class="text-gray-600 text-sm">December 12, 2023</p>
                <p class="text-gray-600 text-sm">2:30pm - 10:00pm</p>
            </div>
            <div class="mb-4 bg-gray-100 shadow-lg p-3 rounded-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-2 flex justify-between">Desk 3<p class="text-gray-600 text-sm font-medium">PENDING</p></h3>
                <p class="text-gray-600 text-sm">December 13, 2023</p>
                <p class="text-gray-600 text-sm">7:30am - 10:00pm</p>
            </div>
        </div>

        <!-- Calendar -->
        <div class="bg-gray-200 rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-bold text-gray-800 mb-1">Today is Monday</h2>
            <div>
                <p class="text-gray-600 text-sm mb-4">Here are the available desks for this day.</p>
                <p class="text-gray-600 text-sm font-bold">December 2023</p>

                <!-- Calendar Table -->
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 shadow-lg p-3 rounded-lg p-6 mt-4 flex justify-between mb-7">
        <p class="text-gray-600 text-2xl font-bold">Today is a nice day to be productive.</p>
        <form method="POST" action="/demo"> <!-- Laravel route to store bookings -->
            @csrf
            <button type="submit" class="bg-blue-500 text-white px-8 py-2 rounded-lg lg:w-auto">Book now</button> <!-- Set a fixed width for the button -->
        </form>
    </div>

    <!-- Available Desks -->
    <h2 class="text-lg font-bold text-gray-800 mb-2">Available Desks</h2>
    <div class="p-0 mt-4">
        <div class="grid grid-cols-2 md:grid-cols-4 justify-between gap-5">
            <!-- You can add more desks here -->
            <div class="mb-1 bg-gray-100 shadow-lg p-2 rounded-lg text-lg font-bold"><img src="image/disney.jpg" alt="Feature 1" class="w-full h-4/5 mb-2">Desk 1</div>
            <div class="mb-1 bg-gray-100 shadow-lg p-2 rounded-lg text-lg font-bold"><img src="images/Feature1.jpeg" alt="Feature 1" class="w-full h-4/5 mb-2">Desk 2</div>
            <div class="mb-1 bg-gray-100 shadow-lg p-2 rounded-lg text-lg font-bold"><img src="images/Feature1.jpeg" alt="Feature 1" class="w-full h-4/5 mb-2">Desk 3</div>
            <div class="mb-1 bg-gray-100 shadow-lg p-2 rounded-lg text-lg font-bold"><img src="images/Feature1.jpeg" alt="Feature 1" class="w-full h-4/5 mb-2">Desk 4</div>
        </div>
    </div>

    <script>
        function createCalendar(year, month) {
            const calendarDiv = document.getElementById('calendar');
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const firstDayOfMonth = new Date(year, month, 1).getDay();

            let html = '<table class="w-full border-collapse border border-gray-300 mt-4"><thead><tr>';
            const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            for (let day of daysOfWeek) {
                html += `<th class="p-2 border border-gray-300">${day}</th>`;
            }

            html += '</tr></thead><tbody>';

            let dayCounter = 1;

            for (let i = 0; i < 6; i++) {
                html += '<tr>';
                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < firstDayOfMonth) {
                        html += '<td class="p-2 border border-gray-300"></td>';
                    } else if (dayCounter <= daysInMonth) {
                        html += `<td class="p-2 border border-gray-300">${dayCounter}</td>`;
                        dayCounter++;
                    }
                }
                html += '</tr>';
            }

            html += '</tbody></table>';

            calendarDiv.innerHTML = html;
        }

        createCalendar(2023, 11); // December is represented by 11 (0-based index)
    </script>


</body>

</html>
