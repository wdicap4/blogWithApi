<?php
include 'connection.php';
include 'header.php';
session_start();
?>



<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img class="logo-dark" src="./assets/img/logo-purple.png" srcset="./assets/img/logo-purple@2x.png 2x" alt="" />
              <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#!">WHAT WE DO?</a>

                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item"><a class="nav-link" href="#!">CHOOSE US?</a>

              </li>
              <li class="nav-item "><a class="nav-link " href="#!">SOLUTIONS</a>

              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="./blog.html">CASE STUDIES 1</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="./blog2.html">CASE STUDIES 2</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#!">WHO ARE WE?</a>

                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item"><a class="nav-link" href="./docs/index.html">WHO ARE WE?</a>

                <!--/.dropdown-menu -->
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-white rounded-pill">Free Trial</a>
              </li>
              <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white" data-image-src="./assets/img/photos/bg4.jpg">
      <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
        <div class="row gx-0 gy-12 align-items-center">
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-5 text-white">Crafting project specific solutions with expertise.</h1>
            <p class="lead fs-lg lh-sm mb-7 pe-xl-10">We’re a creative company that focuses on establishing long-term relationships with customers.</p>
            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Explore Now</a></span>
              <span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-5 offset-lg-1">
            <div class="basic-slider owl-carousel dots-over shadow-lg" data-nav="true" data-margin="5">
              <div class="item"><img src="./assets/img/photos/about21.jpg" srcset="./assets/img/photos/about21@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="item"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right"></i></a><img src="./assets/img/photos/about22.jpg" srcset="./assets/img/photos/about22@2x.jpg 2x" class="rounded" alt="" /></div>
              <div class="item"><img src="./assets/img/photos/about23.jpg" srcset="./assets/img/photos/about23@2x.jpg 2x" class="rounded" alt="" /></div>
            </div>
            <!-- /.basic-slider -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- /section -->

    <section class="wrapper bg-gray">
      <div class="container py-14 pt-md-0 pb-md-16">

        <!-- /.row -->
        <div class="row text-center">
          <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Blog</h2>

            <h3 class="display-4 mb-6">Check out some of our awesome projects with creative ideas and great design.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->

        <div class="container py-14 pt-md-0 pb-md-16">
          <div class="position-relative">
            <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
            <div class="carousel owl-carousel gap-small blog grid-view" data-margin="0" data-dots="true" data-autoplay="false" data-autoplay-timeout="5000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "3"}}'>
              
              <?php require_once("articles.php"); ?>
              <!-- calling for our template -->

            </div>
            <!-- /.owl-carousel -->
          </div>
          <!-- /.position-relative -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-navy text-inverse">
    <div class="container py-13 py-md-15">
      <div class="d-lg-flex flex-row align-items-lg-center">
        <h3 class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">Join our community by using our services and grow your business.</h3>
        <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap">Try It For Free</a>
      </div>
      <!--/div -->
      <hr class="mt-11 mb-12" />
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
            <p class="mb-4">© 2021 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="mailto:#">info@email.com</a><br /> +00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
            <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>