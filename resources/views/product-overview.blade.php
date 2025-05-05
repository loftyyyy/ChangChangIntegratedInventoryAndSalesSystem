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
            <li class="border-b-2 border-blue-600 text-blue-600 pb-2 font-semibold">Overview</li>
            <a href="product-transaction"><li class="text-gray-500 hover:text-black cursor-pointer pb-2">Transactions</li></a>
            <li class="text-gray-500 hover:text-black cursor-pointer pb-2">History</li>
        </ul>
        </nav>

                <!-- Details Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left Section (Item Info) -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Item Info -->
                    <section>
                    <h2 class="text-l font-bold mb-2">Item Information</h2>
                    <div class="grid grid-cols-1 gap-y-2 text-sm text-gray-700">
                        <div><strong>SKU:</strong> P001</div>
                        <div><strong>Unit:</strong> box</div>
                        <div><strong>Dimensions:</strong> 12 in x 12 in x 12 in</div>
                        <div><strong>Weight:</strong> 45 g</div>
                        <div><strong>UPC:</strong> 123456</div>
                        <div><strong>EAN:</strong> 0123456789016</div>
                        <div><strong>MPN:</strong> WOL-5WK-45K0-J01</div>
                        <div><strong>ISBN:</strong> 978-1-23456-789-0</div>
                        <div><strong>Manufacturer:</strong> Nestle Philippines</div>
                        <div><strong>Brand:</strong> Bearbrand</div>
                        <div><strong>Created Source:</strong> User</div>
                        <div><strong>Inventory Account:</strong> Inventory Asset</div>
                        <div><strong>Inventory Valuation:</strong> FIFO (First In First Out)</div>
                        <div><strong>Description:</strong> milk</div>
                    </div>
                    </section>

                    <!-- Purchase Info -->
                    <section>
                    <h2 class="text-l font-bold mb-2">Purchase Information</h2>
                    <div class="text-sm text-gray-700 space-y-1">
                        <div><strong>Cost Price:</strong> Php 45.00</div>
                        <div><strong>Purchase Account:</strong> Cost of Goods Sold</div>
                        <div><strong>Description:</strong> milk</div>
                    </div>
                    </section>

                    <!-- Sales Info -->
                    <section>
                    <h2 class="text-l font-bold mb-2">Sales Information</h2>
                    <div class="text-sm text-gray-700 space-y-1">
                        <div><strong>Selling Price:</strong> Php 50.00</div>
                        <div><strong>Sales Account:</strong> Sales</div>
                        <div><strong>Description:</strong> milk</div>
                    </div>
                    </section>

                </div>

                <!-- Right Section (Stock & Image) -->
                <aside class="space-y-6">
                    <img src="images/bearbrand-logo.png"
                        alt="Bearbrand Logo"
                        class="w-32 h-32 object-contain mx-auto">

                    <div class="text-sm text-gray-700">
                    <p><strong>Opening Stock:</strong> 12.00</p>
                    </div>

                    <!-- Accounting Stock -->
                    <div class="bg-gray-100 p-4 rounded">
                    <h3 class="text-sm font-bold mb-2">Accounting Stock</h3>
                    <p><strong>Stock on Hand:</strong> 12.00</p>
                    <p><strong>Committed Stock:</strong> 0.00</p>
                    <p><strong>Available for Sale:</strong> 12.00</p>
                    </div>

                    <!-- Physical Stock -->
                    <div class="bg-gray-100 p-4 rounded">
                    <h3 class="text-sm font-bold mb-2">Physical Stock</h3>
                    <p><strong>Stock on Hand:</strong> 12.00</p>
                    <p><strong>Committed Stock:</strong> 0.00</p>
                    <p><strong>Available Stock:</strong> 12.00</p>
                    </div>

                    <!-- Reorder Point -->
                    <div class="text-sm text-gray-700">
                    <p><strong>Reorder Point:</strong> 12.00</p>
                    </div>
                </aside>
                </div>

               <!-- Chart Section -->
                    <section class="mt-8 bg-white border rounded p-4">
                    <div class="flex justify-between items-start">
                        <h2 class="text-sm font-bold mb-4">Sales Order Summary (In PHP)</h2>
                        <div class="relative">
                        <button class="text-sm text-gray-600 hover:text-black focus:outline-none flex items-center">
                            This Month
                            <svg class="w-4 h-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Chart Placeholder -->
                        <div class="flex-1 relative">
                        <div class="border h-60 rounded flex items-center justify-center text-gray-400 text-sm">
                            No data found.
                        </div>
                        <!-- Axis (mockup) -->
                        <div class="absolute top-0 left-0 h-full w-full pointer-events-none">
                            <div class="h-full px-6 py-4 text-xs text-gray-300">
                            <div class="flex flex-col justify-between h-full">
                                <span>5 K</span>
                                <span>4 K</span>
                                <span>3 K</span>
                                <span>2 K</span>
                                <span>1 K</span>
                                <span>0</span>
                            </div>
                            </div>
                            <div class="absolute bottom-0 left-12 right-0 text-[10px] text-gray-400 flex justify-between px-6">
                            <span>01 Apr</span><span>07</span><span>13</span><span>19</span><span>25</span><span>30</span>
                            </div>
                        </div>
                        </div>

                        <!-- Summary Card -->
                        <div class="w-full md:w-48 border-l md:pl-4 pt-4 md:pt-0">
                        <h3 class="text-xs font-semibold mb-2 text-gray-600">Total Sales</h3>
                        <div class="border rounded p-2 text-sm flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                            <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                            <span class="text-gray-700">Direct Sales</span>
                            </div>
                            <span class="font-medium text-gray-700">PHP0.00</span>
                        </div>
                        </div>
                    </div>
                    </section>

        </main>


</x-header>
