<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Dec 2022 12:18:08 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-585NKBP');</script>
    <!-- End Google Tag Manager -->
    <title>@yield('title') -  Jobish Provider</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-submenu.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/slick.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('css/skins/midnight-blue.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dosis%7CMontserrat:200,300,400,500,600,700,800,900%7CNunito+Sans:200,300,400,600,700,800,900">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-585NKBP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Main header start -->
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="index-2.html">
                <img src="{{ asset('img/logos/black-logo.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="dashboard.html" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="employer-dashboard-post-job.html" class="nav-link">Post a Job</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-manage-candidate.html" class="nav-link">Manage Candidate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-manage-job.html" class="nav-link">Manage Jobs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-messages.html" class="nav-link">Messages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-transaction.html" class="nav-link">Transaction</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-change-password.html" class="nav-link">Change Password</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-edit-profile.html" class="nav-link">Edit Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index-2.html" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/avatar/avatar-1.jpg" alt="avatar">
                                    Hi, {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="employer-dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="employer-dashboard-messages.html">Messages</a>
                                    <a class="dropdown-item" href="employer-dashboard-edit-profile.html">Edit profile</a>
                                    <a class="dropdown-item" href="index-2.html">Logout</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="employer-dashboard-post-job.html" class="btn btn-theme btn-md"><i class="flaticon-plus"></i> Post a Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <!-- We will paste here condition if current user id provider then  show
                        provider sidebar otherwise show seeker sidebar
                    -->
                    @if(Auth::user()->type == 0)
                        @include('layouts.sidebar.provider')
                    @elseif(Auth::user()->type == 1)
                        @include('layouts.sidebar.seeker')
                    @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                 @yield('content')
            </div>
        </div>    
    </div>
</div>
<!-- Dashbord end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="{{ asset('js/jquery-2.2.0.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script  src="{{ asset('js/bootstrap-submenu.js')}}"></script>
<script  src="{{ asset('js/rangeslider.js')}}"></script>
<script  src="{{ asset('js/jquery.mb.YTPlayer.js')}}"></script>
<script  src="{{ asset('js/bootstrap-select.min.js')}}"></script>
<script  src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<script  src="{{ asset('js/jquery.scrollUp.js')}}"></script>
<script  src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script  src="{{ asset('js/leaflet.js')}}"></script>
<script  src="{{ asset('js/leaflet-providers.js')}}"></script>
<script  src="{{ asset('js/leaflet.markercluster.js')}}"></script>
<script  src="{{ asset('js/moment.min.js')}}"></script>
<script  src="{{ asset('js/daterangepicker.min.js')}}"></script>
<script  src="{{ asset('js/dropzone.js')}}"></script>
<script  src="{{ asset('js/slick.min.js')}}"></script>
<script  src="{{ asset('js/jquery.filterizr.js')}}"></script>
<script  src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script  src="{{ asset('js/jquery.countdown.js')}}"></script>
<script  src="{{ asset('js/maps.js')}}"></script>
<script  src="{{ asset('js/app.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<!-- Custom javascript -->
<script  src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>
</body>

<!-- Mirrored from theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Dec 2022 12:18:09 GMT -->
</html>
