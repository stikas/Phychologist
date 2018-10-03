<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Μαρία Γκιόκα</title>
    <meta name="description" content="Το Κέντρο Συμβουλευτικής Υποστήριξης και Ψυχοκοινωνικής Έρευνας Mirroring παρέχει ολιστική θεραπευτική παρέμβαση και υποστήριξη σε εφήβους, ενήλικες και οικογένειες.">
    <meta name="keywords" content="maria gkioka, Μαρία Γκιόκα, ψυχολόγος, Κέντρο Συμβουλευτικής Υποστήριξης, Mirroring, Ψυχοκοινωνική Έρευνα">

    <link rel="stylesheet" href="/css/flexslider.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body id="top" data-spy="scroll">

    <header id="home">

        @include('partials.top_nav')

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

    @include('partials.footer', ['articles' => $articles])

    @include('partials.bottom_footer')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('js/share.js') }}"></script>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.flexslider.js"></script>
    <script src="/js/jquery.inview.js"></script>
    <script src="/js/script.js"></script>


</body>

</html>
