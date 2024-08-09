@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@push('styles')
<style>
    
</style>
@endpush

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14 flex flex-col gap-4">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    {{-- @include('dashboard.carousel.carousel') --}}
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4 mb-4">
                <div class="col-span-12">
                    <div class="relative overflow-x-auto shadow-2xl sm:rounded-3xl bg-white border p-6 flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <h1 class="font-semibold text-2xl">Data Pengiriman</h1>
                            <div class="flex items-center gap-2">
  
                                  @include('dashboard.pengiriman.modal-add')
                                  @include('dashboard.pengiriman.modal-filter')
                                  
                            </div>
                        </div>
                        <div class="w-full h-[1px] rounded-sm bg-slate-200"></div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"   id="search-table">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Color
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Act
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">
                                        Silver
                                    </td>
                                    <td class="px-6 py-4">
                                        Laptop
                                    </td>
                                    <td class="px-6 py-4">
                                        $2999
                                    </td>
                                    <td class="px-6 py-4">
                                        @include('dashboard.pengiriman.action-button')
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
<script>
    if (document.getElementById("search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
        const dataTable = new simpleDatatables.DataTable("#search-table", {
            searchable: true,
            sortable: true
        });
    }

    $(document).ready(function() {
        $('.selectMitra').select2();
    });
    $(document).ready(function() {
        $('.selectMitra2').select2();
    });
</script>

<script>
    
    const options = {
    colors: ["#1A56DB"],
    series: [
        {
        name: "Pengiriman",
        color: "#1A56DB",
        data: [
            { x: "1", y: 231 },
            { x: "2", y: 122 },
            { x: "3", y: 63 },
            { x: "4", y: 421 },
            { x: "5", y: 122 },
            { x: "6", y: 323 },
            { x: "7", y: 111 },
            { x: "8", y: 232 },
            { x: "9", y: 113 },
            { x: "10", y: 341 },
            { x: "11", y: 224 },
            { x: "12", y: 522 },
            { x: "13", y: 411 },
            { x: "14", y: 243 },
            { x: "15", y: 180 },
            { x: "16", y: 290 },
            { x: "17", y: 350 },
            { x: "18", y: 275 },
            { x: "19", y: 310 },
            { x: "20", y: 195 },
            { x: "21", y: 280 },
            { x: "22", y: 330 },
            { x: "23", y: 215 },
            { x: "24", y: 260 },
            { x: "25", y: 370 },
            { x: "26", y: 295 },
            { x: "27", y: 185 },
            { x: "28", y: 340 },
            { x: "29", y: 205 },
            { x: "30", y: 270 }
        ],
        }
    ],
    chart: {
        type: "bar",
        height: "320px",
        fontFamily: "Inter, sans-serif",
        toolbar: {
        show: false,
        },
    },
    plotOptions: {
        bar: {
        horizontal: false,
        columnWidth: "70%",
        borderRadiusApplication: "end",
        borderRadius: 8,
        },
    },
    tooltip: {
        shared: true,
        intersect: false,
        style: {
        fontFamily: "Inter, sans-serif",
        },
    },
    states: {
        hover: {
        filter: {
            type: "darken",
            value: 1,
        },
        },
    },
    stroke: {
        show: true,
        width: 0,
        colors: ["transparent"],
    },
    grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
        left: 2,
        right: 2,
        top: -14
        },
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    xaxis: {
        floating: false,
        labels: {
        show: true,
        style: {
            fontFamily: "Inter, sans-serif",
            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
        }
        },
        axisBorder: {
        show: false,
        },
        axisTicks: {
        show: false,
        },
    },
    yaxis: {
        show: false,
    },
    fill: {
        opacity: 1,
    },
    }

    if(document.getElementById("monthly-pengiriman") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("monthly-pengiriman"), options);
    chart.render();
    }

</script>

<script>
    function deleteData(){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
        }
        });
    }
</script>
@endpush
