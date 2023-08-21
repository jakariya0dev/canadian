@extends('frontend.master-layout')

@section('content')



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Canadian
            Immigration
            Made Simple</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Founded in 2001, the Canadim Law Firm is widely considered one of the most respected immigration law firms in Canada. We have earned our reputation as a world class law firm by providing dedication and personalized service to each and every unique case before us.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="btn-get-started">01789654123</a>
            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Free consultation</span></a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>
        </div>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Powerful Features for <br>Your Business</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                  <span>Sit amet consectetur adipisicing</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <span>Ipsum Rerum Explicabo</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-database-2-line" style="color: #47aeff;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                  <span>Sit amet consectetur adipisicing</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <span>Ipsum Rerum Explicabo</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-base-station-line" style="color: #ff5828;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div><!-- End Icon List Item-->
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="{{ asset('frontend/assets/img/iphone.png') }}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
              <a href="#about" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>

        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/construction.png') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: 1900$</span>
                <span class="post-author"> / Duty: 6 Hours</span>
              </div>
              <Construction class="post-title">Construction Worker</h3>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/mall.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: 2200$</span>
                <span class="post-author"> / Duty: 6 Hours</span>
              </div>
              <h3 class="post-title">Shoping Mall</h3>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/shafe.png') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: 2100$</span>
                <span class="post-author"> / Duty: 6 Hours</span>
              </div>
              <h3 class="post-title">Coffee Shop</h3>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/driver.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: Salary: 2500$</span>
                <span class="post-author"> / Duty: 2500$</span>
              </div>
              <h3 class="post-title">Car Driving</h3>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/packaging.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: 2000$</span>
                <span class="post-author"> / Duty: 6 Hours</span>
              </div>
              <Construction class="post-title">Packaging Worker</h3>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/welder.png') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: 2300$</span>
                <span class="post-author"> / Duty: 6 Hours</span>
              </div>
              <h3 class="post-title">Welder/Welding</h3>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/electrician.png') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: 2400$</span>
                <span class="post-author"> / Duty: 6 Hours</span>
              </div>
              <h3 class="post-title">Electricity Wearing</h3>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('frontend/assets/img/services/plumber.png') }}" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Salary: Salary: 2500$</span>
                <span class="post-author"> / Duty: 2200$</span>
              </div>
              <h3 class="post-title">Plumber & Pipe Fitter</h3>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->



@endsection