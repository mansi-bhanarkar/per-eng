<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect engineer</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/materialdesignicons/materialdesignicons.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <!-- Page Specific JS -->
    <!-- <script src="{{ asset('assets/js/main.js')}}"></script> -->
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}">
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
</head>

<body id="home-page">

@include('frontend.partial.header')
@yield('content')

@include('frontend.partial.footer')
@yield('script')
</body>
</html>