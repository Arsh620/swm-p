<x-app-layout>
    <div class="flex w-full">
        <!-- Include Sidebar -->
        <x-sidebar />

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 p-8">
            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-lg font-bold mb-2 text-green-700">Welcome</h3>
                    <p class="text-gray-700">You're logged in as <strong>{{ Auth::user()->name }}</strong></p>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-lg font-bold mb-2 text-green-700">Today's Collection</h3>
                    <p class="text-gray-700">Total collected waste: <strong>5.2 tons</strong></p>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-lg font-bold mb-2 text-green-700">Active Vehicles</h3>
                    <p class="text-gray-700">Total vehicles on duty: <strong>12</strong></p>
                </div>
            </div>

            <!-- Complaints -->
            <div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Recent Complaints</h3>
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-gray-700">No complaints reported today.</p>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
