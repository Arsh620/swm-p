<!-- resources/views/components/layout/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'SWM System') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-green-700 text-white px-6 py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="{{ url('/') }}">SWM System</a>
            </div>

            <div class="space-x-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-white text-green-700 px-4 py-2 rounded hover:bg-gray-200 font-semibold">
                        Logout
                    </button>
                </form>
                @else
                <a href="{{ route('login') }}" class="bg-white text-green-700 px-4 py-2 rounded hover:bg-gray-200 font-semibold">Login</a>
                <a href="{{ route('register') }}" class="bg-white text-green-700 px-4 py-2 rounded hover:bg-gray-200 font-semibold">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex min-h-screen">
        {{ $slot }} {{-- Dashboard content will now take full width --}}
    </main>

</body>
</html>
