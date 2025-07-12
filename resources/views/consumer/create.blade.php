<x-app-layout>
    <div class="flex w-full">
        <!-- Include Sidebar -->
        <x-sidebar />

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 p-6">
            <div class="max-w-7xl mx-auto bg-white shadow rounded p-6">
                <h2 class="text-xl font-bold text-purple-700 mb-4 flex items-center">
                    <span class="mr-2">👤</span> Add Consumer
                </h2>

                <form action="#" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div>
                            <label class="block font-semibold">Ward No. <span class="text-red-600">*</span></label>
                            <select name="ward" class="w-full border px-3 py-2 rounded" required>
                                <option value="">Select Ward</option>
                            </select>

                            <label class="block mt-4 font-semibold">Consumer Name <span class="text-red-600">*</span></label>
                            <input type="text" name="name" class="w-full border px-3 py-2 rounded" required>

                            <label class="block mt-4 font-semibold">P.S</label>
                            <input type="text" name="ps" class="w-full border px-3 py-2 rounded">

                            <label class="block mt-4 font-semibold">Qtr. No./House No.</label>
                            <input type="text" name="house_no" class="w-full border px-3 py-2 rounded">

                            <label class="block mt-4 font-semibold">Locality</label>
                            <input type="text" name="locality" class="w-full border px-3 py-2 rounded">

                            <label class="block mt-4 font-semibold">Consumer Category <span class="text-red-600">*</span></label>
                            <select name="category" class="w-full border px-3 py-2 rounded" required>
                                <option value="">SELECT CATEGORY</option>
                            </select>
                        </div>

                        <!-- Right Column -->
                        <div>
                            <label class="block font-semibold">Holding No.</label>
                            <input type="text" name="holding_no" class="w-full border px-3 py-2 rounded">

                            <label class="block mt-4 font-semibold">Mobile No. <span class="text-red-600">*</span></label>
                            <input type="text" name="mobile" class="w-full border px-3 py-2 rounded" required>

                            <label class="block mt-4 font-semibold">Landmark</label>
                            <input type="text" name="landmark" class="w-full border px-3 py-2 rounded">

                            <label class="block mt-4 font-semibold">Address <span class="text-red-600">*</span></label>
                            <textarea name="address" class="w-full border px-3 py-2 rounded" required></textarea>

                            <label class="block mt-4 font-semibold">Pincode</label>
                            <input type="text" name="pincode" class="w-full border px-3 py-2 rounded">

                            <label class="block mt-4 font-semibold">Consumer Type <span class="text-red-600">*</span></label>
                            <select name="type" class="w-full border px-3 py-2 rounded" required>
                                <option value="">SELECT</option>
                            </select>
                        </div>
                    </div>

                    <!-- Generate Demand Section -->
                    <div class="mt-8 border-t pt-6 border-gray-300 bg-gray-100 px-4 py-4 rounded">
                        <h3 class="text-md font-semibold text-gray-700 mb-4">🧾 Generate Demand</h3>

                        <label class="block font-semibold">Generate Demand From <span class="text-red-600">*</span></label>
                        <select name="demand_from" class="w-full border px-3 py-2 rounded" required>
                            <option value="">SELECT</option>
                        </select>
                    </div>

                    <!-- Submit -->
                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-green-600 text-white font-bold px-6 py-2 rounded hover:bg-green-700">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
