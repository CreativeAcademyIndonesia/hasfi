
{{-- <button type="button" data-modal-target="detail" data-modal-toggle="detail" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Tambah Pengiriman</button> --}}

<!-- Main modal -->
<div id="detail" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    detail Data Pengiriman
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="detail">
                    <i class="fas fa-times"></i>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4">
                <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex w-full justify-between">
                            <span>Title</span>
                            <span>Value</span>
                        </div>
                    </li>
                    <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex w-full justify-between">
                            <span>Title</span>
                            <span>Value</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> 