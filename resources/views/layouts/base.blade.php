<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>MyBiz Bootstrap Theme</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="maria gkioka, Μαρία Γκιώκα, ψυχολόγος">

    <link href="https://../fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="/css/flexslider.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body id="top" data-spy="scroll">
    <!--top header-->

    <header id="home">

        @include('partials.top_nav')
        <!--main-nav-->

        @include('partials.nav')

    </header>
    @if(Session::has('message'))
        <div class="alert alert-info" style="text-align: center;">
            {{Session::get('message')}}
        </div>
    @endif
    @if(Session::has('error_message'))
        <div class="alert alert-danger" style="text-align: center;">
            {{Session::get('error_message')}}
        </div>
    @endif

    @yield('content')

    <!--client-->
<!--     <div id="client">
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-md-2">
                    <span></span><img src="images/client/client1.png" alt="">
                </div>

                <div class="col-sm-4 col-md-2">
                    <span></span><img src="images/client/client2.png" alt="">
                </div>

                <div class="col-sm-4 col-md-2">
                    <span></span><img src="images/client/client3.png" alt="">
                </div>

                <div class="col-sm-4 col-md-2">
                    <span></span><img src="images/client/client4.png" alt="">
                </div>

                <div class="col-sm-4 col-md-2">
                    <span></span><img src="images/client/client5.png" alt="">
                </div>

                <div class="col-sm-4 col-md-2">
                    <span></span><img src="images/client/client6.png" alt="">
                </div>

            </div>
        </div>
    </div> -->

    @include('partials.footer')

    @include('partials.bottom_footer')



    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.flexslider.js"></script>
    <script src="/js/jquery.inview.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
    <script src="/js/script.js"></script>

</body>

</html>
