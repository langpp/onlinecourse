<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/magnific-popup.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{url('/css/meanmenu.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/nice-select.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/odometer.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/style.css')}}">
  <link rel="stylesheet" href="{{url('/css/responsive.css')}}">
  <link rel="stylesheet" href="{{url('/css/custom.css')}}">
  <link rel="icon" type="image/png" href="{{url('/img/favicon.png')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>@yield('title')</title>
  <script src="{{url('/js/jquery.min.js')}}"></script>
  <script src="{{url('/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('/js/meanmenu.min.js')}}"></script>
  <script src="{{url('/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('/js/wow.min.js')}}"></script>
  <script src="{{url('/js/nice-select.min.js')}}"></script>
  <script src="{{url('/js/magnific-popup.min.js')}}"></script>
  <script src="{{url('/js/jarallax.min.js')}}"></script>
  <script src="{{url('/js/appear.min.js')}}"></script>
  <script src="{{url('/js/odometer.min.js')}}"></script>
  <script src="{{url('/js/form-validator.min.js')}}"></script>
  <script src="{{url('/js/contact-form-script.js')}}"></script>
  <script src="{{url('/js/ajaxchimp.min.js')}}"></script>
  <script src="{{url('/js/custom.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if(\Session::has('alert'))
  <script type="text/javascript">swal('Notifikasi', "{{Session::get('alert')}}", "error");</script>
  @endif
  @if(\Session::has('alert-success'))
  <script type="text/javascript">swal('Notifikasi', "{{Session::get('alert-success')}}", "success");</script>
  @endif
</head>
<body>
  <div class="loader-wrapper">
    <div class="loader">
      <div class="dot-wrap">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
  </div>

  <!-- <div class="modal-newsletter-area">
    <div class="modal fade" id="exampleModal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-bs-dismiss="modal">
            <i class="bx bx-x"></i>
          </button>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5 col-sm-5 p-0">
                <div class="newsletter-img">
                  <img src="{{url('/img/newsletter-img.jpg')}}" alt="Image">
                </div>
              </div>
              <div class="col-lg-7 col-sm-7 pl-0">
                <div class="modal-newsletter-wrap">
                  <h3>Subscribe to our newsletter</h3>
                  <p>Sign up for our mailing list to get the latest updates & offers.</p>
                  <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
                    <button class="default-btn" type="submit">
                      Subscribe Now
                    </button>
                    <div id="validator-newsletter-2" class="form-result"></div>
                    <div class="agree-label">
                      <input type="checkbox" id="chb1">
                      <label for="chb1">
                        Do not show this popup again
                      </label>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="navbar-area navbar-area-two">

    <div class="mobile-nav">
      <a href="{{url('/')}}" class="logo">
        <img src="{{url('/img/logo.png')}}" alt="Logo">
      </a>
    </div>

    <div class="main-nav">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md">
          <a class="navbar-brand" href="index.html">
            <img src="{{url('/img/logo.png')}}" alt="Logo">
          </a>
          <div class="collapse navbar-collapse mean-menu">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link active">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/course')}}" class="nav-link">
                  Courses
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/contact')}}" class="nav-link">Contact</a>
              </li>
            </ul>

            <div class="others-option">
              <div class="option-item">
                <i class="search-btn bx bx-search"></i>
                <i class="close-btn bx bx-x"></i>
                <div class="search-overlay search-popup">
                  <div class='search-box'>
                    <form class="search-form" action="{{url('/search')}}" method="GET">
                      <input class="search-input" name="cari" placeholder="Search" type="text">
                      <button class="search-button" type="submit"><i class="bx bx-search"></i></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="register">
                <a href="{{url('/auth')}}" class="default-btn">
                  Login
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  @yield('container')

  <footer class="footer-top-area pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget">
            <h3>Find Us</h3>
            <ul class="address">
              <li class="location">
                <i class="bx bxs-location-plus"></i>
                6890 Blvd, The Bronx, NY 1058 New York, USA
              </li>
              <li>
                <i class="bx bxs-envelope"></i>
                <a href="#"><span class="__cf_email__" data-cfemail="84ece1e8e8ebc4e1e0f1ebeaaae7ebe9">[email&#160;protected]</span></a>
                <a href="#"><span class="__cf_email__" data-cfemail="e39396818f8a80a38687968c8dcd808c8e">[email&#160;protected]</span></a>
              </li>
              <li>
                <i class="bx bxs-phone-call"></i>
                <a href="#">+1 (514) 312-5678</a>
                <a href="#">+1 (514) 312-6688</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget">
            <h3>Useful links</h3>
            <ul class="link">
              <li>
                <a href="#">All Courses</a>
              </li>
              <li>
                <a href="#">About us</a>
              </li>
              <li>
                <a href="#">Help (FAQ)</a>
              </li>
              <li>
                <a href="#">Terms & Conditions</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget">
            <h3>Top online courses</h3>
            <ul class="link">
              <li>
                <a href="#">AI for everyone</a>
              </li>
              <li>
                <a href="#">Networks and deep learning</a>
              </li>
              <li>
                <a href="#">Learning with python</a>
              </li>
              <li>
                <a href="#">Financial markets</a>
              </li>
              <li>
                <a href="#">Speak English professionally</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget">
            <h3>Popular subjects</h3>
            <ul class="link">
              <li>
                <a href="#">Data science</a>
              </li>
              <li>
                <a href="#">Computer science</a>
              </li>
              <li>
                <a href="#">Business and Management</a>
              </li>
              <li>
                <a href="#">Business and Management</a>
              </li>
              <li>
                <a href="#">Nature & Environment</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <footer class="footer-bottom-area">
    <div class="container">
      <div class="copyright-wrap">
        <p>
          Copyright <i class="bx bx-copyright"></i>2021 Designed By
          <a href="#" target="blank">Kampusbiner.com</a>
        </p>
      </div>
    </div>
  </footer>

  <div class="go-top">
    <i class='bx bx-chevrons-up'></i>
    <i class='bx bx-chevrons-up'></i>
  </div>
</body>
</html>