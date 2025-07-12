<!-- resources/views/components/sidebar.blade.php -->

<aside class="w-72 bg-white text-gray-800 min-h-screen shadow-lg p-4" x-data>
    <!-- Title -->
    <div class="text-green-700 text-2xl font-extrabold mb-6">BUNDU <span class="text-gray-900">SWM</span></div>

    <!-- Main Navigation -->
    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-2">Main Navigation</p>

    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}"
       class="flex items-center px-4 py-2 rounded hover:bg-green-100 mb-1 {{ request()->is('dashboard') ? 'bg-green-100 text-green-700 font-semibold' : '' }}">
        <i class="mr-2">📊</i> Dashboard
    </a>

    <!-- Consumer Details Collapsible -->
    <div x-data="{ open: {{ request()->is('consumer*') ? 'true' : 'false' }} }" class="mb-2">
        <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 rounded hover:bg-green-100 font-medium {{ request()->is('consumer*') ? 'bg-green-100 text-green-700 font-semibold' : '' }}">
            <span><i class="mr-2">👥</i> Consumer Details</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" class="pl-8 mt-2 space-y-1" x-cloak>
            <a href="{{ route('consumer.create') }}" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Add Consumer</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Add Renter</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Consumer Deactivate</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Consumer List</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Consumer Payment</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Edit Consumer Details</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Get GEO Location</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Transaction Deactivate</a>
            <a href="#" class="block px-2 py-1 rounded hover:bg-green-50 text-sm">Upload Photo</a>
        </div>
    </div>

    <!-- Other Sections -->
    <a href="#" class="flex items-center px-4 py-2 rounded hover:bg-green-100 mb-1"><i class="mr-2">🗂️</i> File Permission</a>
    <a href="#" class="flex items-center px-4 py-2 rounded hover:bg-green-100 mb-1"><i class="mr-2">⚙️</i> Master</a>
    <a href="#" class="flex items-center px-4 py-2 rounded hover:bg-green-100 mb-1"><i class="mr-2">📄</i> Reports</a>
    <a href="#" class="flex items-center px-4 py-2 rounded hover:bg-green-100"><i class="mr-2">📘</i> User Manual</a>
</aside>
