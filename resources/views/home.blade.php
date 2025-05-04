<x-header :title="'Home'">

    <!-- Profile section -->
    <div class="relative flex items-center p-4 border border-gray-200 shadow bg-cover bg-center overflow-hidden" style="background-color: rgba(255, 255, 255, 0.8);">
        <!-- Background layer -->
        <div class="absolute inset-0 bg-cover bg-center opacity-40" style="background-image: url('images/small-background.png'); z-index: 0;"></div>

        <!-- Foreground content -->
        <div class="relative z-10 flex items-center">
            <img src="images/profile-icon.png" alt="Picture nako" class="w-12 h-12 rounded-full border-2 border-gray-300 dark:border-gray-600 mr-4">
            <div class="flex flex-col">
                <h2 class="text-lg font-semibold text-black">Hello, CHARISSE PRIEGO</h2>
                <p class="text-black">Changchang Store IMS/SMS</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-5 gap-4 p-4">
        <div class="col-span-3">
            <div class="max-w-3xl mx-auto rounded-lg overflow-hidden shadow border border-gray-200">
                <!-- Header -->
                <div class="bg-blue-400 text-black p-4 text-sm font-semibold">
                    Sales Activity
                </div>

                <!-- Content -->
                <div class="bg-white grid grid-cols-4 text-center divide-x divide-gray-200 p-4">
                    <!-- Today Sales -->
                    <div>
                        <div class="text-2xl font-bold text-blue-500">₱5,200</div>
                        <div class="text-gray-500 text-sm">Peso</div>
                        <div class="mt-2 text-xs text-gray-600 flex items-center justify-center gap-1">
                            <span>⚙</span>
                            TODAY SALES
                        </div>
                    </div>

                    <!-- Items Sold -->
                    <div>
                        <div class="text-2xl font-bold text-green-500">45</div>
                        <div class="text-gray-500 text-sm">Products</div>
                        <div class="mt-2 text-xs text-gray-600 flex items-center justify-center gap-1">
                            <span>⚙</span>
                            ITEMS SOLD
                        </div>
                    </div>

                    <!-- Transactions -->
                    <div>
                        <div class="text-2xl font-bold text-green-500">5</div>
                        <div class="text-gray-500 text-sm">Qty</div>
                        <div class="mt-2 text-xs text-gray-600 flex items-center justify-center gap-1">
                            <span>⚙</span>
                            TRANSACTIONS
                        </div>
                    </div>

                    <!-- Void -->
                    <div>
                        <div class="text-2xl font-bold text-red-500">10</div>
                        <div class="text-gray-500 text-sm">Qty</div>
                        <div class="mt-2 text-xs text-gray-600 flex items-center justify-center gap-1">
                            <span>✖</span>
                            VOID
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-2">
            <div class="rounded-lg shadow-md overflow-hidden">
                <div class="bg-purple-400">
                    <h2 class="text-black text-sm font-semibold p-4">Inventory Summary</h2>
                </div>
                <div class="bg-white px-4 py-3 text-sm space-y-4">
                    <div class="flex justify-between">
                        <span class="text-gray-500">QUANTITY IN HAND</span>
                        <span class="font-semibold text-gray-800">100</span>
                    </div>
                    <hr />
                    <div class="flex justify-between">
                        <span class="text-gray-500">QUANTITY TO BE RECEIVED</span>
                        <span class="font-semibold text-gray-800">25</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-2">
            <div class="rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-400">
                    <h2 class="text-black text-sm font-semibold p-4">Item Details</h2>
                </div>
                <div class="bg-white p-4 flex justify-between items-center">
                    <!-- Left Side -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-red-500 text-sm">Low Stock Items</span>
                            <span class="text-red-500 font-semibold">0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 text-sm">All Item Groups</span>
                            <span class="text-black font-semibold">0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 text-sm">All Items</span>
                            <span class="text-black font-semibold">0</span>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-l h-auto mx-4"></div>

                    <!-- Right Side (Active Items Circle Placeholder) -->
                    <div class="flex flex-col items-center justify-center text-xs text-gray-400">
                        <span class="text-gray-600 mb-2 font-semibold">Active Items</span>
                        <div class="w-20 h-20 flex items-center justify-center rounded-full border-[6px] border-gray-200 text-center">
                            <span class="text-[10px] text-center leading-tight">No Active Items</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-3">
            <div class="rounded-lg shadow-md overflow-hidden">
                <!-- Header -->
                <div class="bg-amber-400 flex justify-between items-center">
                    <h2 class="text-black text-sm font-semibold p-4">Top Selling Items</h2>
                    <span class="text-sm text-gray-800">This Month <span class="text-xs">&#9662;</span></span>
                </div>

                <!-- Content -->
                <div class="bg-white flex justify-center items-center h-40 px-4 py-6 text-sm text-gray-400 text-center">
                    No items were invoiced in this time frame
                </div>
            </div>
        </div>

        <div class="col-span-1">
            <!-- Purchase Order Card -->
            <div class="bg-white rounded-lg shadow-lg">
                <!-- Header -->
                <div class="flex justify-between items-center bg-green-400 text-black rounded-t-lg">
                    <h2 class="font-semibold p-4">Purchase Order</h2>
                    <div class="text-sm cursor-pointer">
                        This Month <span class="text-blue-800">▾</span>
                    </div>
                </div>

                <!-- Body -->
                <div class="flex flex-col items-center justify-center px-4 py-6 space-y-4">
                    <div class="text-sm text-gray-600">Quantity Ordered</div>
                    <div class="text-2xl text-blue-500 font-semibold">0</div>

                    <hr class="w-full border-t border-gray-200" />

                    <div class="text-sm text-gray-600">Total Cost</div>
                    <div class="text-xl text-blue-500 font-bold">PHP0.00</div>
                </div>
            </div>
        </div>

        <div class="col-span-4">
            <!-- Sales History Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Header -->
                <div class="flex justify-between items-center bg-sky-300 rounded-t-lg">
                    <h2 class="text-black font-semibold p-4">Sales History</h2>
                    <div class="text-sm text-black cursor-pointer">
                        This Month <span class="text-blue-800">▾</span>
                    </div>
                </div>

                <!-- Table Head -->
                <div class="bg-gray-100 text-sm text-gray-600 font-semibold px-4 py-2 grid grid-cols-6">
                    <div>Channel</div>
                    <div>Draft</div>
                    <div>Confirmed</div>
                    <div>Packed</div>
                    <div>Shipped</div>
                    <div>Invoiced</div>
                </div>

                <!-- Table Body (Empty State) -->
                <div class="flex justify-center items-center h-40 text-gray-400 text-sm">
                    No sales were made in this time frame
                </div>
            </div>
        </div>

        <div class="col-span-5">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="flex justify-between items-center bg-indigo-200 rounded-t-xl">
                    <h2 class="text-sm font-semibold text-gray-800 p-4">Sales Order Summary (in PHP)</h2>
                    <div class="text-sm text-gray-600 mr-2">This Month</div>
                </div>
                <div class="p-4 flex flex-col md:flex-row">
                    <!-- Chart area -->
                    <div class="flex-1">
                        <div class="h-64 flex items-center justify-center text-gray-400 text-sm border border-dashed border-gray-200 rounded-lg">
                            No data found.
                        </div>
                        <div class="flex justify-between text-xs text-gray-500 mt-2 px-2">
                            <span>01 Mar</span>
                            <span>05 Mar</span>
                            <span>09 Mar</span>
                            <span>13 Mar</span>
                            <span>17 Mar</span>
                            <span>21 Mar</span>
                            <span>25 Mar</span>
                            <span>29 Mar</span>
                            <span>31 Mar</span>
                        </div>
                    </div>
                    <!-- Total Sales -->
                    <div class="md:w-48 mt-6 md:mt-0 md:ml-6">
                        <h3 class="text-sm font-medium text-gray-600 mb-2">Total Sales</h3>
                        <div class="flex items-center bg-blue-50 border border-blue-200 rounded-md px-3 py-2">
                            <div class="h-3 w-3 bg-cyan-400 rounded-full mr-2"></div>
                            <div>
                                <p class="text-xs text-gray-500">DIRECT SALES</p>
                                <p class="text-lg font-semibold text-gray-700">PHP0.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-header>