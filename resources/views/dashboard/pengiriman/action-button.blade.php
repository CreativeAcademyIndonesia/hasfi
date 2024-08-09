<button type="button"  id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="p-2.5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-grip-vertical"></i></button>
                                        
<!-- Dropdown menu -->
<div id="dropdownDivider" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
      <li>
        <button data-modal-target="edit" data-modal-toggle="edit"  class="block w-full text-start px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</button>
      </li>
      <li>
        <button type="button" data-modal-target="detail" data-modal-toggle="detail" class="w-full text-start block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Details</button>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Track Status</a>
      </li>
    </ul>
    <div class="py-2">
      <button type="button" onclick="deleteData()" class="w-full text-start block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</button>
    </div>
</div>

@include('dashboard.pengiriman.modal-edit')
@include('dashboard.pengiriman.modal-detail')