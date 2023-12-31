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
              <li><a href="#service">Services</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="{{ route('admin.login') }}">Admin Login</a></li>
              <li><a href="{{ route('user.form') }}">User Login</a></li>
              
            </ul>
          </nav><!-- .navbar -->
    
        </div>
      </header>
      <!-- End Header -->