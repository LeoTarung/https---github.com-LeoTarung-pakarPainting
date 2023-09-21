<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Sistem Pakar | {{ $title }}</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/user/img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="/UI/CSS/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="/user/css/animate.css">
    <link rel="stylesheet" href="/user/css/LineIcons.css">
    <link rel="stylesheet" href="/user/css/owl.carousel.css">
    <link rel="stylesheet" href="/user/css/owl.theme.css">
    <link rel="stylesheet" href="/user/css/magnific-popup.css">
    <link rel="stylesheet" href="/user/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/user/css/main.css">    
    <link rel="stylesheet" href="/user/css/responsive.css">

  </head>
  
  <body>
    @include('partial.navUser')
    @yield('contentUser')
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <footer>
                  <div class="site-info text-center">
                    <p>Copyright 2023</p>
                  </div>                     
      </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/user/js/jquery-min.js"></script>
    <script src="/user/js/popper.min.js"></script>
    {{-- <script src="/user/js/bootstrap.min.js"></script> --}}
    <script src="/UI/JS/bootstrap523.js"></script>
    <script src="/user/js/owl.carousel.js"></script>      
    <script src="/user/js/jquery.nav.js"></script>    
    <script src="/user/js/scrolling-nav.js"></script>    
    <script src="/user/js/jquery.easing.min.js"></script>     
    <script src="/user/js/nivo-lightbox.js"></script>     
    <script src="/user/js/jquery.magnific-popup.min.js"></script>     
    <script src="/user/js/form-validator.min.js"></script>
    <script src="/user/js/contact-form-script.js"></script>   
    <script src="/user/js/main.js"></script>
    
  </body>
</html>