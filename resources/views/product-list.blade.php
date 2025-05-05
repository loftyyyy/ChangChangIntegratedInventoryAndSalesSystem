<x-header>
<div class="flex p-10 -mt-8">


 
 <main class="flex-1 pr-4 space-y-6 overflow-x-hidden">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">

    <div class="w-full p-4">
  <div class="flex items-center justify-between">
    
    <!-- Left: Category Dropdown -->
    <ul class="flex items-center space-x-4">
      <li class="list-none relative">
        <button type="button"
          class="flex items-center p-2 text-base text-black transition duration-150 rounded-lg hover:bg-black dark:text-black dark:hover:bg-gray-700 group"
          aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
          <span class="flex-1 text-left whitespace-nowrap">
            Category
          </span>
          <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <ul id="dropdown-example" class="hidden absolute right-0 mt-2 py-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded shadow-md space-y-2">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">Products</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">Billing</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">Invoice</a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- Right: New Button --> 
    <div class="flex items-center space-x-2">
    <a href="new-item " class="flex items-center p-2 text-gray-900 rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
      <i class="fa-solid fa-plus text-black dark:text-black group-hover:text-black dark:group-hover:text-black mr-2"></i>New 
    </a>

    <button type="button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
      <i class="fa-solid fa-list text-black dark:text-black group-hover:text-black dark:group-hover:text-black mr-2"></i> 
    </button>

    <button type="button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
      <i class="fa-solid fa-th text-black dark:text-black group-hover:text-black dark:group-hover:text-black mr-2"></i> 
    </button>
     

  <button type="button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
      <i class="fa-solid fa-ellipsis-vertical text-black dark:text-black group-hover:text-black dark:group-hover:text-black mr-2"></i> 
    </button>
  </div>  

  </div>
</div>

<!-- Inventory Table -->
    <div class="mt-6 overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-800 bg-white rounded-lg shadow">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300">
        <tr>
            <th scope="col" class="px-4 py-3 rounded-tl-lg">
            <input type="checkbox">
            </th>
            <th scope="col" class="px-4 py-3">Name</th>
            <th scope="col" class="px-4 py-3">SKU (ID)</th>
            <th scope="col" class="px-4 py-3">Stock on Hand</th>
            <th scope="col" class="px-4 py-3">Reorder Level</th>
            <th scope="col" class="px-4 py-3 rounded-tr-lg">Status</th>
        </tr>
        </thead>
    <tbody>
      <!-- Row 1 -->
      <tr class="border-b hover:bg-gray-50">
        <td class="px-4 py-3">
          <input type="checkbox">
        </td>
        <td class="flex items-center px-4 py-3 space-x-3">
          <img src="https://i.imgur.com/1W5c1TV.png" alt="Bearbrand Milk" class="w-10 h-10 rounded-md">
          <span class="text-blue-600 hover:underline cursor-pointer">Bearbrand Milk</span>
        </td>
        <td class="px-4 py-3">P001</td>
        <td class="px-4 py-3">45.00</td>
        <td class="px-4 py-3">12.00</td>
        <td class="px-4 py-3 text-green-500 font-medium">ACTIVE</td>
      </tr>
      <!-- Row 2 -->
      <tr class="hover:bg-gray-50">
        <td class="px-4 py-3">
          <input type="checkbox">
        </td>
        <td class="flex items-center px-4 py-3 space-x-3">
          <img src="https://i.imgur.com/TkQGzu2.png" alt="Nescafe Coffee" class="w-10 h-10 rounded-md">
          <span class="text-blue-600 hover:underline cursor-pointer">Nescafe Coffee</span>
        </td>
        <td class="px-4 py-3">P002</td>
        <td class="px-4 py-3">45.00</td>
        <td class="px-4 py-3">12.00</td>
        <td class="px-4 py-3 text-green-500 font-medium">ACTIVE</td>
      </tr>
    </tbody>
  </table>
</div>

    
    


 </div>
</main> 
</div>
</x-header>