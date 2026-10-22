<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{-- Protecção contra clickJacking --}}
    {!! header('X-Frame-Options: SAMEORIGIN') !!}

    <meta name="description" content="">
    <meta name="author" content="">

        <link rel="icon" type="image/png" href="/site/img/logo/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/site/img/logo/favicon.svg" />
    <link rel="shortcut icon" href="/site/img/logo/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/site/img/logo/apple-touch-icon.png" />
    <link rel="manifest" href="/site/img/logo/site.webmanifest" />

    <title>@yield('titulo') - Conferência Nacional da Juventude Angolana</title>
    <!-- Simple bar CSS -->


    {{-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}


    <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <!-- Icons CSS -->


     <!-- plugins:css -->
     <link rel="stylesheet" href="/new-template/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
     <link rel="stylesheet" href="/new-template/vendors/iconfonts/ionicons/dist/css/ionicons.css">
     <link rel="stylesheet" href="/new-template/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
     <link rel="stylesheet" href="/new-template/vendors/css/vendor.bundle.base.css">
     <link rel="stylesheet" href="/new-template/vendors/css/vendor.bundle.addons.css">
     <!-- endinject -->

     <link rel="stylesheet" href="/new-template/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
     <!-- plugin css for this page -->
     <link rel="stylesheet" href="/new-template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
     <link rel="stylesheet" href="/new-template/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css">
     <!-- End plugin css for this page -->

     <!-- inject:css -->
     <link rel="stylesheet" href="/new-template/css/shared/style.css">
     <!-- endinject -->

     <!-- Layout styles -->
     <link rel="stylesheet" href="/new-template/css/demo_1/style.css">
     <!-- End Layout styles -->

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>


    {{-- Editor de Texto Ckeditor --}}
    <script src="/ckeditor/ckeditor.js"></script>



</head>

<body class="vertical light">
    <div class="container-scroller">

        @include('layouts._includes.dashboard.Navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
