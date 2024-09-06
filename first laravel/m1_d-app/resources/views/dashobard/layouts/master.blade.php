<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <!-- Favicons -->
        <link href="{{asset('assets/dashboard/assets/img/favicon.png')}}" rel="icon">
        <link href="{{asset('assets/dashboard/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/dashboard/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/dashboard/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
        <link href="{{asset('assets/dashboard/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
        <link href="{{asset('assets/dashboard/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/dashboard/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('assets/dashboard/assets/css/style.css')}}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
        @include('dashobard.includes.top-bar')
        @include('dashobard.includes.side-bar')

        @section('main-content')
        @show

        @include('dashobard.includes.footer')

                <!-- Vendor JS Files -->
        <script src="{{asset('assets/dashboard/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/vendor/chart.js')}}/chart.umd.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/vendor/quill/quill.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('assets/dashboard/assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('assets/dashboard/assets/js/main.js')}}"></script>
    </body>
</html>
