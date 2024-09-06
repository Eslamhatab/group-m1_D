<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Cdn & Link Styles  --}}
{{-- FontAwesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/website/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>

        {{-- Include Navbar --}}
        @include('website.includes.navbar')



        @section('main-content')
        @show




        {{-- Includes Footer --}}
        @include('website.includes.footer')

        {{-- Scripts Thems Shoppers --}}
        <script src="{{asset('assets/website/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/website/js/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/website/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/website/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/website/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/website/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/website/js/aos.js')}}"></script>
        <script src="{{asset('assets/website/js/main.js')}}"></script>

</body>
</html>
