<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Rajapolah Motor - @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <!-- External CSS libraries -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/bootstrap-submenu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/slider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/magnific-popup.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/fonts/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/fonts/linearicons/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/bootstrap-select.min.css') }}">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/colors/default.css') }}" id="style_sheet">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('frontend/img/favicon-32x32.png') }}">
  <!-- Google fonts -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="{{ URL::asset('frontend/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
  <script src="{{ URL::asset('frontend/js/ie-emulation-modes-warning.js') }}"></script>
</head>

<body>
  <div class="page_loader"><img src="{{ URL::asset('frontend/img/loader.gif') }}" alt="Loader"></div>

  <!-- Top Header start -->
  <header class="top-header hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
          <div class="list-inline">
            <a href="tel:1-8X0-666-8X88"><i class="fa fa-phone"></i>Hubungi kami 087880092333<a>
                <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>admin@rajapolahmotor.com</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
          <ul class="social-list clearfix pull-right">
            <li>
              <a href="#" class="facebook-c">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#" class="twitter-c">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" class="instagram-c">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- Top Header end -->

  <!-- Main header start -->
  <header class="main-header">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="{{ url('/') }}" class="logo">
            <img src="{{ URL::asset('frontend/img/logos/green-light-logo.png') }}" alt="logo">
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
          <ul class="nav navbar-nav">
            <li class="dropdown active">
              <a href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="dropdown">
              <a href="{{ url('listmobil/grid/') }}">List Mobil</a>
            </li>
            <li class="dropdown">
              <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                Pages <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/comparison') }}">Perbandingan Mobil</a></li>
                <li><a href="{{ url('/brand') }}">Brand Mobil</a></li>
                <li><a href="{{ url('/simulasi_cicilan') }}">Simulasi Cicilan</a></li>
                <li><a href="{{ url('/faq') }}">Faq</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="{{ url('/blog') }}">Blog</a>
            </li>
            <li class="dropdown">
              <a href="{{ url('/contact') }}">Kontak Kami</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
            <li>
              <div class="navbar-search-box">
                <form class="navbar-search" method="GET">
                  <input type="search" placeholder="Search......" name="search" class="navbar-search-input" onkeyup="buttonUp();" required>
                  <button type="submit" class="navbar-search-submit">Go</button>
                  <span class="navbar-search-icon">
                    <i class="fa fa-search"></i>
                  </span>
                </form>
              </div>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- /.container -->
      </nav>
    </div>
  </header>
  <!-- Main header end -->


  <!-- ------------------------------------------------- start content ------------------------------------------------------ -->

  @yield('content')

  <!-- ------------------------------------------------- end content ------------------------------------------------------ -->

  <!-- Copy right start-->
  <div class="copy-right">
    <div class="container">
      <p>&copy; 2018 - Rajapolah Motor</p>
    </div>
  </div>
  <!-- Copy right end-->

  <script src="{{ URL::asset('frontend/js/jquery-2.2.0.min.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/bootstrap-slider.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/wow.min.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/jquery.scrollUp.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ URL::asset('frontend/js/bootstrap-submenu.js') }}"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="{{ URL::asset('frontend/js/ie10-viewport-bug-workaround.js') }}"></script>
  <!-- Custom javascript -->
  <script src="{{ URL::asset('frontend/js/app.js') }}"></script>
</body>

</html>