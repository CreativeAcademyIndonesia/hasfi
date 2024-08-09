@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@push('styles')
@endpush

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-12 gap-4 mb-4">
                @include('dashboard.chart.jumlah-pengiriman-penerimaan-yearly')
                @include('dashboard.chart.mitra-pengiriman')
                @include('dashboard.chart.mitra-penerimaan')
            </div>
            <div class="grid cols-1">
                <table id="search-table">
                    <thead>
                        <tr>
                            <th>
                                <span class="flex items-center">
                                    Company Name
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Ticker
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Stock Price
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Market Capitalization
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Inc.</td>
                            <td>AAPL</td>
                            <td>$192.58</td>
                            <td>$3.04T</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Microsoft Corporation
                            </td>
                            <td>MSFT</td>
                            <td>$340.54</td>
                            <td>$2.56T</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Alphabet Inc.</td>
                            <td>GOOGL</td>
                            <td>$134.12</td>
                            <td>$1.72T</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Amazon.com Inc.</td>
                            <td>AMZN</td>
                            <td>$138.01</td>
                            <td>$1.42T</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">NVIDIA Corporation</td>
                            <td>NVDA</td>
                            <td>$466.19</td>
                            <td>$1.16T</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Tesla Inc.</td>
                            <td>TSLA</td>
                            <td>$255.98</td>
                            <td>$811.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Meta Platforms Inc.</td>
                            <td>META</td>
                            <td>$311.71</td>
                            <td>$816.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Berkshire Hathaway Inc.
                            </td>
                            <td>BRK.B</td>
                            <td>$354.08</td>
                            <td>$783.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">TSMC</td>
                            <td>TSM</td>
                            <td>$103.51</td>
                            <td>$538.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">UnitedHealth Group
                                Incorporated</td>
                            <td>UNH</td>
                            <td>$501.96</td>
                            <td>$466.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Johnson & Johnson</td>
                            <td>JNJ</td>
                            <td>$172.85</td>
                            <td>$452.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">JPMorgan Chase & Co.
                            </td>
                            <td>JPM</td>
                            <td>$150.23</td>
                            <td>$431.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Visa Inc.</td>
                            <td>V</td>
                            <td>$246.39</td>
                            <td>$519.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Eli Lilly and Company
                            </td>
                            <td>LLY</td>
                            <td>$582.97</td>
                            <td>$552.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Walmart Inc.</td>
                            <td>WMT</td>
                            <td>$159.67</td>
                            <td>$429.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Samsung Electronics Co.,
                                Ltd.</td>
                            <td>005930.KS</td>
                            <td>$70.22</td>
                            <td>$429.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Procter & Gamble Co.
                            </td>
                            <td>PG</td>
                            <td>$156.47</td>
                            <td>$366.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Nestlé S.A.</td>
                            <td>NESN.SW</td>
                            <td>$120.51</td>
                            <td>$338.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Roche Holding AG</td>
                            <td>ROG.SW</td>
                            <td>$296.00</td>
                            <td>$317.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Chevron Corporation</td>
                            <td>CVX</td>
                            <td>$160.92</td>
                            <td>$310.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">LVMH Moët Hennessy Louis
                                Vuitton</td>
                            <td>MC.PA</td>
                            <td>$956.60</td>
                            <td>$478.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Pfizer Inc.</td>
                            <td>PFE</td>
                            <td>$35.95</td>
                            <td>$200.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Novo Nordisk A/S</td>
                            <td>NVO</td>
                            <td>$189.15</td>
                            <td>$443.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">PepsiCo, Inc.</td>
                            <td>PEP</td>
                            <td>$182.56</td>
                            <td>$311.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">ASML Holding N.V.</td>
                            <td>ASML</td>
                            <td>$665.72</td>
                            <td>$273.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">The Coca-Cola Company
                            </td>
                            <td>KO</td>
                            <td>$61.37</td>
                            <td>$265.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Oracle Corporation</td>
                            <td>ORCL</td>
                            <td>$118.36</td>
                            <td>$319.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Merck & Co., Inc.</td>
                            <td>MRK</td>
                            <td>$109.12</td>
                            <td>$276.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Broadcom Inc.</td>
                            <td>AVGO</td>
                            <td>$861.80</td>
                            <td>$356.00B</td>
                        </tr>
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Mastercard Incorporated
                            </td>
                            <td>MA</td>
                            <td>$421.44</td>
                            <td>$396.00B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        const getChartOptions = () => {
    return {
      series: [52.8, 26.8, 20.4],
      colors: ["#1C64F2", "#16BDCA", "#9061F9"],
      chart: {
        height: 420,
        width: "100%",
        type: "pie",
      },
      stroke: {
        colors: ["white"],
        lineCap: "",
      },
      plotOptions: {
        pie: {
          labels: {
            show: true,
          },
          size: "100%",
          dataLabels: {
            offset: -25
          }
        },
      },
      labels: ["Direct", "Organic search", "Referrals"],
      dataLabels: {
        enabled: true,
        style: {
          fontFamily: "Inter, sans-serif",
        },
      },
      legend: {
        position: "bottom",
        fontFamily: "Inter, sans-serif",
      },
      yaxis: {
        labels: {
          formatter: function (value) {
            return value + "%"
          },
        },
      },
      xaxis: {
        labels: {
          formatter: function (value) {
            return value  + "%"
          },
        },
        axisTicks: {
          show: false,
        },
        axisBorder: {
          show: false,
        },
      },
    }
  }
  
  if (document.getElementById("chart-mitra-pengiriman") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("chart-mitra-pengiriman"), getChartOptions());
    chart.render();
  }
  
  if (document.getElementById("chart-mitra-penerimaan") && typeof ApexCharts !== 'undefined') {
    const chart2 = new ApexCharts(document.getElementById("chart-mitra-penerimaan"), getChartOptions());
    chart2.render();
  }
  
    </script>
@endpush
