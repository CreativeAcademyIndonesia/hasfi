<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield("title") - {{env("APP_NAME")}}</title>


    <meta name="author" content="Creative Academy Indonesia - Agus sugandi">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Jasa logistik pelayaran terpercaya untuk pengiriman barang via laut. Solusi efisien dan aman untuk kebutuhan logistik maritim Anda." />
    <meta name="keywords" content="jasa logistik, pelayaran, pengiriman laut, logistik maritim, ekspedisi laut, cargo laut, shipping, freight forwarding" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('template/home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('template/home/css/style.css')}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>