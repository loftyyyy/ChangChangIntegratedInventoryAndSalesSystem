<x-header>

    <div class="p-10">
        <div class="bg-white rounded-xl shadow-md p-6">
            <form class="space-y-6">
                <!-- Top Section: Type, Name, SKU, Unit, Image Upload -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="flex flex-col">
                      
                        <h1 class=" text-2xl font-bold">Add new item</h1>
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium mb-2">Name*</label>
                            <input type="text" value="Bearbrand Milk" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                        </div>
                        <!-- SKU -->
                        <div>
                            <label class="block text-sm font-medium mb-2 mt-2">SKU</label>
                            <input type="text" value="P001" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                        </div>
                        <!-- Unit -->
                        <div>
                            <label class="block text-sm font-medium mb-2 mt-2">Unit*</label>
                            <select class="w-full border border-gray-300 rounded-lg px-3 py-2">
                                <option>Select or type to add</option>
                            </select>
                        </div>
                        <!-- Returnable Item -->
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" checked class="w-4 h-4 mt-2">
                                <span class="ml-2 text-sm mt-2">Returnable Item</span>
                            </label>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-4 mt-4 w-80 flex flex-col ml-24">
                        <label class="block text-sm font-medium mb-1 p-2">Upload Images</label>
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5A5.5 5.5 0 0 0 5.207 5.021A4 4 0 0 0 5 13h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500">You can add up to 15 images, each not exceeding 5 MB</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                </div>

                <!-- Dimensions and Weight -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Dimensions</label>
                        <div class="flex space-x-2">
                            <input type="text" value="12" class="w-22 border border-gray-300 rounded-lg px-2 py-1" />
                            <input type="text" value="12" class="w-22 border border-gray-300 rounded-lg px-2 py-1" />
                            <input type="text" value="12" class="w-22 border border-gray-300 rounded-lg px-2 py-1" />
                            <select class="border border-gray-300 rounded-lg px-2 py-1">
                                <option>cm</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Weight</label>
                        <div class="flex space-x-2">
                            <input type="text" value="45" class="w-20 border border-gray-300 rounded-lg px-2 py-1" />
                            <select class="border border-gray-300 rounded-lg px-2 py-1">
                                <option>g</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Manufacturer Details -->
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-10">
                    <div>
                        <label class="block text-sm font-medium mb-1">Manufacturer</label>
                        <select class="w-92 border border-gray-300 rounded-lg px-3 py-2">
                            <option>Nestle Philippines</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Brand</label>
                        <select class="w-92 border border-gray-300 rounded-lg px-3 py-2">
                            <option>Bearbrand</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">MPN</label>
                        <input type="text" value="WOL-SWK-45KG-J01WOL-" class="w-92 border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">UPC</label>
                        <input type="text" value="123456" class="w-92 border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">EAN</label>
                        <input type="text" value="0123456789016" class="w-92 border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">ISBN</label>
                        <input type="text" value="978-1-23456-789-0" class="w-92 border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                </div>

                <!-- Sales and Purchase Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                    <!-- Sales Info -->
                    <div>
                        <h3 class="font-semibold mb-2 text-xl">Sales Information</h3>
                        <label class="block text-sm font-medium mb-1">Selling Price*</label>
                        <input type="text" value="PHP 50" class="w-92 border border-gray-300 rounded-lg px-3 py-2 mb-2" />
                        <label class="block text-sm font-medium mb-1">Account*</label>
                        <select class="w-92 border border-gray-300 rounded-lg px-3 py-2 mb-2">
                            <option>Sales</option>
                        </select>
                        <label class="block text-sm font-medium mb-1">Description</label>
                        <textarea class="w-92 border border-gray-300 rounded-lg px-3 py-2 mb-2">45g tetra pack, full cream, shelf-stable milk. Ideal for daily retail.</textarea>
                        <label class="block text-sm font-medium mb-1">Tax</label>
                        <select class="w-92 border border-gray-300 rounded-lg px-3 py-2">
                            <option>Select a Tax</option>
                        </select>
                    </div>
                    <!-- Purchase Info -->
                    <div>
                        <h3 class="font-semibold mb-2 text-xl">Purchase Information</h3>
                        <label class="block text-sm font-medium mb-1">Cost Price*</label>
                        <input type="text" value="PHP 85" class="w-92 border border-gray-300 rounded-lg px-3 py-2 mb-2" />
                        <label class="block text-sm font-medium mb-1">Account*</label>
                        <select class="w-92 border border-gray-300 rounded-lg px-3 py-2 mb-2">
                            <option>Cost of Goods Sold</option>
                        </select>
                        <label class="block text-sm font-medium mb-1">Description</label>
                        <textarea class="w-92 border border-gray-300 rounded-lg px-3 py-2 mb-2">1L tetra pack, full cream, shelf-stable milk. Ideal for daily retail.</textarea>
                        <label class="block text-sm font-medium mb-1">Tax</label>
                        <select class="w-92 border border-gray-300 rounded-lg px-3 py-2">
                            <option>Select a Tax</option>
                        </select>
                    </div>
                </div>

                <!-- Inventory Tracking -->
                <div>
                    <h3 class="font-semibold mb-2 text-xl">Track Inventory for this item</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">Inventory Account*</label>
                            <select class="w-92 border border-gray-300 rounded-lg px-3 py-2">
                                <option>Inventory Asset</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Inventory Valuation Method*</label>
                            <select class="w-92 border border-gray-300 rounded-lg px-3 py-2">
                                <option>FIFO (First In First Out)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Opening Stock</label>
                            <input type="text" value="10 boxes" class="w-92 border border-gray-300 rounded-lg px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Opening Stock Rate per Unit</label>
                            <input type="text" value="" class="w-92 border border-gray-300 rounded-lg px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Reorder Point</label>
                            <input type="text" value="5 boxes" class="w-92 border border-gray-300 rounded-lg px-3 py-2" />
                        </div>
                    </div>
                </div>

                <!-- Save and Cancel Buttons -->
                <div class="flex justify-end space-x-4 mt-6">
                    <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Save</button> 
            </form>
        </div>
    </div>
</div>
</x-header>
