<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SWM System - Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white-700 text-black px-6 py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="{{ url('/') }}">SWM System</a>
            </div>

            <div class="space-x-4">
                @auth
                <!-- Logout Button (inside a form for POST request) -->
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-white text-black-700 px-4 py-2 rounded hover:bg-gray-200 font-semibold">
                        Logout
                    </button>
                </form>
                @else
                <!-- Show login/register if not authenticated -->
                <a href="{{ route('login') }}" class="bg-white text-black-700 px-4 py-2 rounded hover:bg-gray-200 font-semibold">Login</a>
                <a href="{{ route('register') }}" class="bg-white text-black-700 px-4 py-2 rounded hover:bg-gray-200 font-semibold">Register</a>
                @endauth
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="bg-green-600 text-white py-20">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Smart Waste Management</h1>
            <p class="text-lg md:text-xl mb-6">Clean. Track. Report. Empower your city with SWM System.</p>
            <a href="{{ route('register') }}" class="bg-white text-green-700 px-6 py-3 rounded font-semibold hover:bg-gray-100">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Key Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-semibold mb-2">Zone Management</h3>
                    <p class="text-gray-600">Manage and track waste zones efficiently.</p>
                </div>
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-semibold mb-2">Vehicle Tracking</h3>
                    <p class="text-gray-600">Real-time tracking of garbage vehicles.</p>
                </div>
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-semibold mb-2">Complaint Handling</h3>
                    <p class="text-gray-600">Log and resolve public complaints quickly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-6 text-center">
        &copy; {{ date('Y') }} SWM System. All rights reserved.
    </footer>

</body>

</html>