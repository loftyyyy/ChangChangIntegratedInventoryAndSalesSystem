<x-header>
<div class="flex p-6">
    
    <!-- Sidebar -->
        <aside class="w-64 bg-white shadow h-screen p-6">
        <div class="mb-6 flex items-center justify-between">
            <h2 class="text-lg font-semibold">All Items</h2>
            <a href="new-item"class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">+ New</a>
        </div>

        <ul class="space-y-4">
            <!-- Item 1 -->
            <li class="flex items-start justify-between">
                <label class="flex items-start space-x-3">
                <input type="checkbox" class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <div>
                    <p class="font-medium text-sm">Bearbrand Milk</p>
                    <span class="text-gray-500 text-xs">SKU: P001</span>
                </div>
                </label>
                <span class="text-sm font-semibold">Php 50.00</span>
            </li>

            <!-- Item 2 -->
            <li class="flex items-start justify-between">
                <label class="flex items-start space-x-3">
                <input type="checkbox" class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <div>
                    <p class="font-medium text-sm">Nescafe Coffee</p>
                    <span class="text-gray-500 text-xs">SKU: P002</span>
                </div>
                </label>
                <span class="text-sm font-semibold">Php 50.00</span>
            </li>
            </ul>

        </aside>


        <!-- Main Content -->
        <main class="flex-1 p-6 bg-white space-y-8">

        <!-- Header -->
        <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold">Bearbrand Milk</h1>
        <div class="flex items-center gap-2">
            <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded">Active</span>
            <button class="text-sm bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded">Adjust Stock</button>
            <button class="text-xl px-2">⋮</button>
        </div>
        </div>

        <!-- Tabs -->
        <nav>
        <ul class="flex border-b space-x-6 text-sm">
            <a href="product-overview"><li class="text-gray-500 hover:text-black cursor-pointer pb-2">Overview</li></a>
            <li class="border-b-2 border-blue-600 text-blue-600 pb-2 font-semibold">Transactions</li>
            <li class="text-gray-500 hover:text-black cursor-pointer pb-2">History</li>
        </ul>
        </nav>

        <!-- Filter & Table Section -->
            <div class="space-y-4">
            <!-- Filters -->
            <div class="flex items-center gap-4">
                <div>
                <label class="text-sm font-medium text-gray-700">Filter By:</label>
                <select class="ml-2 text-sm border rounded px-3 py-1 bg-white">
                    <option>Sales Orders</option>
                    <!-- Add more options as needed -->
                </select>
                </div>
                <div>
                <label class="text-sm font-medium text-gray-700">Status:</label>
                <select class="ml-2 text-sm border rounded px-3 py-1 bg-white">
                    <option>All</option>
                    <option>SOLD</option>
                    <option>Returned</option>
                    <!-- Add more statuses if needed -->
                </select>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border-t text-sm text-left text-gray-700">
                <thead class="bg-gray-50">
                    <tr>
                    <th class="px-4 py-2 font-medium text-gray-600 whitespace-nowrap">Date</th>
                    <th class="px-4 py-2 font-medium text-gray-600 whitespace-nowrap">Sales Order#</th>
                    <th class="px-4 py-2 font-medium text-gray-600 whitespace-nowrap">Quantity Sold</th>
                    <th class="px-4 py-2 font-medium text-gray-600 whitespace-nowrap">Price</th>
                    <th class="px-4 py-2 font-medium text-gray-600 whitespace-nowrap">Total</th>
                    <th class="px-4 py-2 font-medium text-gray-600 whitespace-nowrap">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">19 Apr 2025</td>
                    <td class="px-4 py-2">SO-00001</td>
                    <td class="px-4 py-2">2.00</td>
                    <td class="px-4 py-2">PHP 50.00</td>
                    <td class="px-4 py-2">PHP 100.00</td>
                    <td class="px-4 py-2 text-green-600 font-semibold">SOLD</td>
                    </tr>
                    <!-- Additional rows can go here -->
                </tbody>
                </table>
            </div>
            </div>


               


        </main>


</x-header>
