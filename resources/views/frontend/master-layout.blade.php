<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nova Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="page-index">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="d-flex align-items-center">Canadim</h1>
        </a>
  
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="{{ route('home') }}" class="active">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('team') }}">Team</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('admin.login') }}">Admin Login</a></li>
            <li><a href="{{ route('user.login.form') }}">User Login</a></li>
            
          </ul>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->

    @yield('content')

      <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Canadim</span>
            </a>
            <p>Canadim is a Canadian Immigration Law Firm based in Montreal, Quebec, and is widely considered one of the most well-respected immigration law firms in Canada. Our philosophy is simple. Work hard for our clients to achieve the best possible immigration results!</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="{{ route('home') }}">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('about') }}">About us</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('services') }}">Services</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('tos') }}">Terms of service</a></li>
              <li><i class="bi bi-dash"></i> <a href="{{ route('p.policy') }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Express Entry Department.</li>
              <li><i class="bi bi-check-circle-fill"></i> International Student Program.</li>
              <li><i class="bi bi-check-circle-fill"></i> Family Sponsorship Department.</li>
              <li><i class="bi bi-check-circle-fill"></i> Business Department.</li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Canadim</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Devloped by <a class="text-primary" href="https://Jakariya.dev/">Jakariya.dev</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer --><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.j') }}s"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>