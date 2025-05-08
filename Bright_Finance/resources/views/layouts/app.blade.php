<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>BF : Bright Finance</title>

       
       
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyArzK51VRL8TSsogYorIWfABATu31EpTz0",
  authDomain: "bright-finance.firebaseapp.com",
  projectId: "bright-finance",
  storageBucket: "bright-finance.appspot.com",
  messagingSenderId: "713846949395",
  appId: "1:713846949395:web:2f92bffe30b5eeb8f661e6",
  measurementId: "G-R2KVHCNSK0"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
    </script>
          
  
       
    </head>
    <body class="bg-gray-200  responsive" >
        <div class="container-fluid  ">
            <div class="row">
                <div class="col-12">
                  
                    <nav class="navbar navbar-expand-lg navbar-fixed-top bg-gradient-info border-radius-lg   shadow-dark mt-4 py-2 end-0 ">

                        <div class="container-fluid py-1 px-3">
                            
                                <div class="navbar-brand">
                                    <span class="navbar-logo img">
                                        <a href="javascript:;" class="nav-link  text-body p-0" id="navbarBlur">
                                            <img src="assets/images/Bright v4.png" class="img" alt="Bright Finance" style="height: 4.3rem;">
                                        </a>
                                    </span>

                                </div>


                                <button class="navbar-toggler text-success shadow-light ms-2" type="button" data-bs-toggle="collapse" data-bs-target="navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon mt-2">
                                      <span class="navbar-toggler-bar bar1"></span>
                                      <span class="navbar-toggler-bar bar2"></span>
                                      <span class="navbar-toggler-bar bar3"></span>
                                    </span>
                                  </button>


                             <div class="collapse navbar-collapse" id="navigation">

                                <ul class="navbar-nav mx-auto navbar-text text-uppercase text-end">
                                   
                                
                                </ul>

                                <ul class="navbar-nav   text-uppercase" data-app-modern-menu="true">

                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="/">
                                        <span  class="mbri-home mbr-iconfont mbr-iconfont-btn">   {{ __('') }}</span>
                                        </a>
                                        </li>

                                    <li class="nav-item">
                                        <a class="nav-link bg-gradient-light  link d-flex align-items-center me-4" href="/features">
                                        <span  class="mbri-features mbr-iconfont mbr-iconfont-btn">   {{ __('
                                            ') }}</span>
                                        </a>
                                        </li>
                                    
                                            <li class="nav-item">
                                        <a class="nav-link bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="/About"><span
                                                class="mobi-mbri mobi-mbri-info mbr-iconfont mbr-iconfont-btn"> {{ __('')
                                                }}</span> </a>
                                    </li>

                                
                                    <li class="nav-item">
                                        <a class="nav-link bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="/Contact"><span
                                                class="mobi-mbri mobi-mbri-phone mbr-iconfont mbr-iconfont-btn"> {{ __('')
                                                }}</span> </a>
                                    </li>
                                    
                                    @if (Route::has('login'))
                                    <li class="nav-item"tooltip=" login" >
                                        <a class="nav-link bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="{{ route('login') }}"><span
                                                class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"> {{ __('')
                                                }}</span> </a>
                                    </li>
                                    @endif

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link link
                                        text-white display-4" href="{{ route('register') }}"><span
                                                class="mobi-mbri mobi-mbri-contact-form mbr-iconfont mbr-iconfont-btn">{{ __('
                                                Sign Up') }}</span> </a>
                                    </li>



                                    @endif
                                    @else
                                    
                                    <li class="nav-item">
                                        <a class="btn bg-gradient-light btn btn-link mb-0 btn-md d-flex me-4" href="/home">
                                        <span  class="mbri-desktop mbr-iconfont mbr-iconfont-btn">   {{ __('Dashboard') }}</span>
                                        </a>
                                        </li>

                                        <li class="nav-item">
                                        <a class="btn bg-gradient-light   btn-md link d-flex align-items-center me-4" href="/transactions">
                                        <span  class="mbri-cash mbr-iconfont mbr-iconfont-btn">   {{ __('Transactions Management') }}</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="btn bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="/budgets">
                                        <span  class="mbri-folder mbr-iconfont mbr-iconfont-btn">   {{ __('Budget Management') }}</span>
                                        </a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="btn bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="{{ route('Goals.Matter') }}">
                                        <span  class="mbri-target mbr-iconfont mbr-iconfont-btn">   {{ __('Goal Management') }}</span>
                                        </a>
                                        </li>
                                       
                                       
                                        <li class="nav-item">
                                        <a class="btn bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="{{ route('Report.spending') }}">
                                        <span  class="mbri-pages mbr-iconfont mbr-iconfont-btn">   {{ __('Personal Reports') }}</span>
                                        </a>
                                        </li>

                                        <li class="nav-item item-group">
                                        <a class="btn bg-gradient-light btn  btn-md link d-flex align-items-center me-4" href="{{ route('profile.index') }}">
                                        <span  class="mbri-image-gallery mbr-iconfont mbr-iconfont-btn">   {{ __('My Profile') }}</span>
                                        </a>
                                        </li>




                                        <li class="nav-item ">
                                            <a id="navbarDropdown" class="nav-link link dropdown-toggle"   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre  ref="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Log Out
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class=" show dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest

                                    



                                </ul>
                             
                               

                             </div>
                        </div>
                           

                    </nav>
                  

                      <!-- Navbar -->
      



                </div>

            </div>
        </div>
       
                
        <main  class="col-12 py-6">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
   
            @yield('content')


        </main>

        <footer class="bottom-0">
            <section data-bs-version="5.1" class="footer3 cid-tFrUpHHGnk mbr-reveal" once="footers" id="footer3-g">
            
                
            
                
            
                <div class="container-fluid">
                    <div class="media-container-row align-center mbr-white">
                        
                        <div class="row social-row">
                            <div class="social-list align-right pb-2">
                                
                                
                                
                                
                                
                                
                            <div class="soc-item">
                                    <a href="/" target="_blank">
                                        <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="/7" target="_blank">
                                        <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="/" target="_blank">
                                        <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="/" target="_blank">
                                        <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div></div>
                        </div>
                        <div class=" row-copirayt">
                            <p style="text-align: center; color: white; margin-bottom: auto;" class="mbr-text mb-0 mbr-fonts-style mbr-white display-4 align-center display-7">
                                © Copyright Bright Finance. All Rights Reserved.
                                <!-- Used Mobrise Assest -->
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            
            </footer>


 <!--   Core JS Files   -->
 <script src="../assets/js/core/popper.min.js"></script>
 <script src="../assets/js/core/bootstrap.min.js"></script>
 <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
 <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
 <script>
   var win = navigator.platform.indexOf('Win') > -1;
   if (win && document.querySelector('#sidenav-scrollbar')) {
     var options = {
       damping: '0.5'
     }
     Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
   }
 </script>
 <!-- Github buttons -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
 <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>


     
              
    </body>
</html>
