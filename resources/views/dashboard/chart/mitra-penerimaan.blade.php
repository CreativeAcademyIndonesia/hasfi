<div class=" w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 col-span-4">

    <div class="flex justify-between items-start w-full">
        <div class="flex-col items-center">
            <div class="flex items-center mb-1">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Penerimaan Mitra</h5>
                <i data-popover-target="chart-info" data-popover-placement="bottom"
                    class="fas fa-info-circle w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ms-1"
                    aria-hidden="true"></i>
                <div data-popover id="chart-info" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Informasi</h3>
                        <p>Berikut merupakan data Penerimaan mitra.</p>
                    </div>
                    <div data-popper-arrow></div>
                </div>
            </div>
            <button id="datePenerimaanMitra" data-dropdown-toggle="dateRangeDropdownPenerimaanMitra"
                data-dropdown-ignore-click-outside-class="datepicker" type="button"
                class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">31
                Nov - 31 Dev <i class="fas fa-chevron-down w-3 h-3 ms-2" aria-hidden="true"></i>
            </button>
            <div id="dateRangeDropdownPenerimaanMitra"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 lg:w-96 dark:bg-gray-700 dark:divide-gray-600">
                <div class="p-3" aria-labelledby="datePenerimaanMitra">
                    <div date-rangepicker datepicker-autohide class="flex items-center">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="far fa-calendar w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"></i>
                            </div>
                            <input name="start" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Start date">
                        </div>
                        <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <i class="far fa-calendar w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"></i>
                            </div>
                            <input name="end" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="End date">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end items-center">
            <button id="widgetPenerimaanMitra" data-dropdown-toggle="widgetDropdownPenerimaanMitra" data-dropdown-placement="bottom"
                type="button"
                class="inline-flex items-center justify-center text-gray-500 w-8 h-8 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm">
                <i class="fas fa-ellipsis-h w-3.5 h-3.5 text-gray-800 dark:text-white" aria-hidden="true"></i>
                <span class="sr-only">Open dropdown</span>
            </button>
            <div id="widgetDropdownPenerimaanMitra"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="widgetPenerimaanMitra">
                    <li>
                        <a href="#"
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <i class="fas fa-download w-3 h-3 me-2" aria-hidden="true"></i>Download data
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Line Chart -->
    <div class="py-6" id="chart-mitra-penerimaan"></div>

    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
        <div class="flex justify-between items-center pt-5">
            <!-- Button -->
            <button id="mitraPenerimaanAnalytics" data-dropdown-toggle="lastDropdownPenerimaanMitra"
                data-dropdown-placement="bottom"
                class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                type="button">
                Last 7 days
                <i class="fas fa-chevron-down w-2.5 m-2.5 ms-1.5" aria-hidden="true"></i>
            </button>
            <div id="lastDropdownPenerimaanMitra"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="mitraPenerimaanAnalytics">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                            7 days</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                            30 days</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                            90 days</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                Data Mitra
                <i class="fas fa-chevron-right w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>
