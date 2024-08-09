import './bootstrap';
import '../css/app.css'; 
import 'flowbite';
// Import ApexCharts
import ApexCharts from 'apexcharts';

// Membuat ApexCharts tersedia secara global
window.ApexCharts = ApexCharts;
import './mitraAnalytics'


import { DataTable } from "simple-datatables";
// const dataTable = new DataTable("#default-table", {
//     searchable: false,
//     fixedHeight: true
// })
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();



const options = {
    colors: ["#1A56DB", "#31C48D", "#F05252"],
    series: [
      {
        name: "Pengiriman",
        color: "#1A56DB",
        data: [
          { x: "Jan", y: 231 },
          { x: "Feb", y: 122 },
          { x: "Mar", y: 63 },
          { x: "Apr", y: 421 },
          { x: "May", y: 122 },
          { x: "Jun", y: 323 },
          { x: "Jul", y: 111 },
          { x: "Aug", y: 231 },
          { x: "Sep", y: 122 },
          { x: "Oct", y: 63 },
          { x: "Nov", y: 421 },
          { x: "Dec", y: 122 },
        ],
      },
      {
        name: "Penerimaan",
        color: "#31C48D",
        data: [
          { x: "Jan", y: 232 },
          { x: "Feb", y: 113 },
          { x: "Mar", y: 341 },
          { x: "Apr", y: 224 },
          { x: "May", y: 522 },
          { x: "Jun", y: 411 },
          { x: "Jul", y: 243 },
          { x: "Aug", y: 232 },
          { x: "Sep", y: 113 },
          { x: "Oct", y: 341 },
          { x: "Nov", y: 224 },
          { x: "Dec", y: 522 },
        ],
      },
      {
        name: "Armada",
        color: "#F05252",
        data: [
          { x: "Jan", y: 232 },
          { x: "Feb", y: 113 },
          { x: "Mar", y: 341 },
          { x: "Apr", y: 224 },
          { x: "May", y: 522 },
          { x: "Jun", y: 411 },
          { x: "Jul", y: 243 },
          { x: "Aug", y: 232 },
          { x: "Sep", y: 113 },
          { x: "Oct", y: 341 },
          { x: "Nov", y: 224 },
          { x: "Dec", y: 522 },
        ],
      },
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
    legend: {
        show: true,
        position: "bottom",
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
  
  if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("column-chart"), options);
    chart.render();
  }
  