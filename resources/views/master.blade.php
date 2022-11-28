<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('../screen/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('../screen/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('../screen/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('../screen/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">SPA</span> Center</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="price.html" class="nav-item nav-link">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="appointment.html" class="dropdown-item">Appointment</a>
                            <a href="opening.html" class="dropdown-item">Open Hours</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary d-none d-lg-block">Book Now</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">SPA</span> Center</h1>
                    </a>
                    <p>Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                                <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Our Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Body Massage</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Stone Therapy</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Facial Therapy</a>
                                <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Skin Care</a>
                                <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Nail Care</a>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Newsletter</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0 text-white">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('../screen/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('../screen/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('../screen/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('../screen/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('../screen/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('../screen/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('../screen/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('../screen/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('../screen/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('../screen/js/main.js')}}"></script>
</body>

</html>

<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    <!-- icon bostrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('../screen/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js.map">

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="{{asset('../screen/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('../screen/css/responsive.css')}}" rel="stylesheet" />
  </head>

  <body>
    <!-- <div class="hero_area"> -->
      <div>
      <!-- header section strats -->
      <header class="header_section"  style="background: chocolate;">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}">
              <span>
                Tuấn Media
              </span>
            </a>

            <div class="navbar-collapse" id="">
              <div
                class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center mt-3"
              >
                <form class="form-inline mb-3 mb-lg-0 ">
                  <button
                    class="btn  my-sm-0 nav_search-btn"
                    type="submit"
                  ></button>
                </form>
                <ul class="navbar-nav  mr-5">
                  <li class="nav-item mr-5">
                    @if(Auth::user() != null)
                    <a class="nav-link">
                      <span>
                        {{ ucfirst(Auth()->user()->name) }}
                      </span>
                    </a>
                    <a href="{{ url('/logout') }}">
                      Đăng xuất
                    </a>
                    @else
                    <a class="nav-link" href="{{ url('/login') }}">
                      <span>
                        Login
                      </span>
                    </a>
                    @endif
                  </li>
                </ul>
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a href="{{ url('/') }}">Home</a>
                  <a href="about.html">About</a>
                  <a href="feature.html">Features</a>
                  <a href="{{ url('/blog') }}">Blog</a>
                  <a href="contact.html">Contact Us</a>
                  <a href="{{ url('/quanly') }}">admin</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    <!-- contents -->
    @yield('content')
    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container info_content">
        <div>
          <div class="row">
            <div class="col-md-4">
              <div class="d-flex">
                <h5>
                  New software
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex">
                <h5>
                  The Services
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum dolor
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sit amet, consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing elit,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sed do eiusmod
                    </a>
                  </li>
                  <li>
                    <a href="">
                      tempor incididunt
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex">
                <h5>
                  Contact Us
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum
                    </a>
                  </li>
                  <li>
                    <a href="">
                      dolor sit amet,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing
                    </a>
                  </li>
                  <li>
                    <a href="">
                      elit, sed do eiusmod
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline"
        >
          <div class="social-box">
            <a href="">
              <img src="{{asset('../screen/../../screen/images/fb.png')}}" alt="" />
            </a>

            <a href="">
              <img src="{{asset('../screen/../../screen/images/twitter.png')}}" alt="" />
            </a>
            <a href="">
              <img src="{{asset('../screen/../../screen/images/linkedin1.png')}}" alt="" />
            </a>
            <a href="">
              <img src="{{asset('../screen/../../screen/images/instagram1.png')}}" alt="" />
            </a>
          </div>
          <div class="form_container mt-5">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input
                type="email"
                placeholder="Enter Your email"
                id="subscribeMail"
              />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        &copy; 2019 All Rights Reserved. Design by
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="../../screen/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../../screen/js/bootstrap.js"></script>

    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }
    </script>
  </body>
</html>
