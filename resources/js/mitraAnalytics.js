// import ApexCharts from 'apexcharts';
// const getChartOptions = () => {
//     return {
//       series: [52.8, 26.8, 20.4],
//       colors: ["#1C64F2", "#16BDCA", "#9061F9"],
//       chart: {
//         height: 420,
//         width: "100%",
//         type: "pie",
//       },
//       stroke: {
//         colors: ["white"],
//         lineCap: "",
//       },
//       plotOptions: {
//         pie: {
//           labels: {
//             show: true,
//           },
//           size: "100%",
//           dataLabels: {
//             offset: -25
//           }
//         },
//       },
//       labels: ["Direct", "Organic search", "Referrals"],
//       dataLabels: {
//         enabled: true,
//         style: {
//           fontFamily: "Inter, sans-serif",
//         },
//       },
//       legend: {
//         position: "bottom",
//         fontFamily: "Inter, sans-serif",
//       },
//       yaxis: {
//         labels: {
//           formatter: function (value) {
//             return value + "%"
//           },
//         },
//       },
//       xaxis: {
//         labels: {
//           formatter: function (value) {
//             return value  + "%"
//           },
//         },
//         axisTicks: {
//           show: false,
//         },
//         axisBorder: {
//           show: false,
//         },
//       },
//     }
//   }
  
//   if (document.getElementById("chart-mitra-pengiriman") && typeof ApexCharts !== 'undefined') {
//     const chart = new ApexCharts(document.getElementById("chart-mitra-pengiriman"), getChartOptions());
//     chart.render();
//   }
  
//   if (document.getElementById("chart-mitra-penerimaan") && typeof ApexCharts !== 'undefined') {
//     const chart2 = new ApexCharts(document.getElementById("chart-mitra-penerimaan"), getChartOptions());
//     chart2.render();
//   }
  