<x-header>
<body class="bg-gray-50 p-10">

<div class="w-full mt-10 mb-10 mx-auto  bg-white p-10 rounded shadow">
    <h1 class="text-xl font-bold mb-4">Point of Sale</h1>

    <!-- Customer Info -->
    <div class="grid grid-cols-1 gap-4 mb-6">
      <div>
        <label class="block text-sm font-medium">Customer Name</label>
        <input type="text" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" value="Ken Savellino">
      </div>
      <div>
        <label class="block text-sm font-medium">Receipt Date</label>
        <input type="date" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" value="2025-04-25">
      </div>
      <div>
        <label class="block text-sm font-medium">Sales Receipt#</label>
        <input type="text" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" value="SR-00002">
      </div>
      <div>
        <label class="block text-sm font-medium">Salesperson</label>
        <select class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
          <option>Select or Add Salesperson</option>
        </select>
      </div>
    </div>

    <!-- Item Table -->
    <div class="overflow-auto mb-6">
      <table class="min-w-full text-sm text-left border">
        <thead class="bg-gray-100">
          <tr>
            <th class="p-2 border">Item Details</th>
            <th class="p-2 border">Quantity</th>
            <th class="p-2 border">Rate</th>
            <th class="p-2 border">Tax</th>
            <th class="p-2 border">Amount</th>
            <th class="p-2 border">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-2 border">
              <div class="font-medium">Bearbrand Milk</div>
              <div class="text-xs text-gray-500">SKU: P001</div>
            </td>
            <td class="p-2 border text-center">1.00</td>
            <td class="p-2 border">50.00</td>
            <td class="p-2 border">vat [12%]</td>
            <td class="p-2 border">50.00</td>
            <td class="p-2 border text-center text-red-500 cursor-pointer">&times;</td>
          </tr>
          <tr>
            <td class="p-2 border">
              <div class="font-medium">Nescafe Coffee</div>
              <div class="text-xs text-gray-500">SKU: P002</div>
            </td>
            <td class="p-2 border text-center">1.00</td>
            <td class="p-2 border">55.00</td>
            <td class="p-2 border">vat [12%]</td>
            <td class="p-2 border">55.00</td>
            <td class="p-2 border text-center text-red-500 cursor-pointer">&times;</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Totals -->
    <div class="grid grid-cols-2 gap-4 mb-6">
      <div class="space-y-2">
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Add New Row</button>
        <button class="bg-blue-100 text-blue-700 px-4 py-2 rounded">Add Items in Bulk</button>
      </div>
      <div class="bg-gray-50 p-4 rounded border">
        <div class="flex justify-between mb-2"><span>Sub Total</span><span>160.00</span></div>
        <div class="flex justify-between mb-2"><span>VAT [12%]</span><span>19.20</span></div>
        <div class="flex justify-between mb-2 font-semibold"><span>Total (PHP)</span><span>179.20</span></div>
      </div>
    </div>

    <!-- Notes -->
    <div class="mb-6">
      <label class="block text-sm font-medium">Customer Notes</label>
      <textarea class="mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
    </div>

    <!-- Terms & Footer -->
    <div class="grid grid-cols-2 gap-6 text-xs text-gray-600 mb-6">
      <div>
        <h3 class="font-semibold mb-2">Terms & Conditions</h3>
        <p>By using this inventory system, you agree to follow all rules...</p>
      </div>
      <div>
        <h3 class="font-semibold mb-2">Attach Files</h3>
        <input type="file" class="block w-full text-sm">
        <p class="text-gray-400">Max 5 files, 10MB each</p>
      </div>
    </div>

    <!-- Payment Details -->
    <div class="grid grid-cols-2 gap-4 mb-6">
      <div>
        <label class="block text-sm font-medium">Payment Mode</label>
        <input type="text" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" value="Cash">
      </div>
      <div>
        <label class="block text-sm font-medium">Deposit To</label>
        <input type="text" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" value="Petty Cash">
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex justify-end space-x-2">
      <button class="bg-blue-600 text-white px-4 py-2 rounded">Save and Send</button>
      <button class="bg-gray-200 text-black px-4 py-2 rounded">Cancel</button>
    </div>
  </div>
  </body>
</x-header>