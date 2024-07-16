<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home | Perpustakaan</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <style>
      .logo img {
    max-width: 100%;
    height: auto;
}

.menu-area {
    display: flex;
    justify-content: center;
}

.menu-area-main {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
}

.menu-area-main li {
    margin: 0 15px;
}

.menu-area-main a {
    text-decoration: none;
    color: #000;
    font-size: 16px;
    font-weight: 600;
}

.menu-area-main .active a {
    color: #007bff; /* Highlight color for active link */
}

.nav-item.dropdown .dropdown-menu {
    min-width: 150px;
    text-align: left;
}

.nav-item.dropdown .dropdown-menu a {
    padding: 10px;
    display: block;
    color: #000;
}

.nav-item.dropdown .dropdown-menu a:hover {
    background-color: #f8f9fa;
}

.avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 8px;
}

   </style>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p><i class="fa-solid fa-phone">+6281350343047</i></p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="{{ route('dashboard') }}"><img src="images/logo.jpg" alt="logo" class="img-fluid"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main d-flex justify-content-between align-items-center">
                                    <li class="active">
                                        <a href="{{ route('dashboard') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('book') }}">Book</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('galery') }}">Galery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    @auth
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('images/fotoUser.jpg') }}" alt="{{ Auth::user()->name }}" class="avatar">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <!-- Dropdown menu items -->
                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profil</a>
                                            <div class="dropdown-divider"></div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </div>
                                    </li>
                                    @else
                                    <li class="mean-last"><a href="#contact">Signup</a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
               <img class="first-slide" src="images/library1.jpg" alt="First slide" style="width: 100%; height: 750px;">
                  <div class="container">
                     <div class="carousel-caption relative" style="color: white;">
                        <h1 style="color: white;">Selamat <strong class="white_bold">Datang </strong><br>
                           <strong class="yellow_bold">di<br> Perpustakaan </strong></h1>
                        <p style="color: white;" >"Jatuh cinta dengan pengetahuan dan inspirasi yang tak terbatas dalam setiap halaman buku" </p>
                        <a  href="#">see more Products</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
               <img class="second-slide" src="images/library2.jpg" alt="Second slide" style="width: 100%; height: 750px;">
                  <div class="container">
                     <div class="carousel-caption relative">
                     <h1 style="color: white;">Selamat <strong class="white_bold">Datang </strong><br>
                           <strong class="yellow_bold">di<br> Perpustakaan </strong></h1>
                        <p style="color: white;" >"Temukan dunia pengetahuan dan petualangan literasi<br>
                         di perpustakaan kami yang penuh inspirasi dan inovatif." </p>
                        <a  href="#">see more Products</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
               <img class="third-slide" src="images/library5.jpg" alt="Third slide" style="width: 100%; height: 750px;">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1 style="color: white;">Selamat <strong class="white_bold">Datang </strong><br>
                           <strong class="yellow_bold">di <br> Perpustakaan </strong></h1>
                        <p style = "color: white";> "Temukan inspirasi baru dalam setiap halaman di perpustakaan kami." </p>
                        <a  href="#">see more Products</a>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-left'></i>
            </a>
            
         </div>

      </section>



<!-- CHOOSE  -->
      <div class="whyschose">
         <div class="container">

            <div class="row">
               <div class="col-md-7 offset-md-3">
                  <div class="title">
                     <h2>Why <strong class="black">choose us</strong></h2>
                     <span>Fastest repair service with best price!</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="choose_bg">
         <div class="container">
            <div class="white_bg">
            <div class="row">
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/1.png"/></i>
                     <h3>Data recovery</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/2.png"/></i>
                     <h3>Computer repair</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/3.png"/></i>
                     <h3>Mobile service</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/4.png"/></i>
                     <h3>Network solutions</h3>
                     <p>Perspiciatis eos quos totam cum minima autPerspiciatis eos quos</p>
                  </div>
               </dir>
               <div class="col-md-12">
                  <a class="read-more">Read More</a>
               </div>
            </div>
         </div>
       </div>
      </div>
<!-- end CHOOSE -->

      <!-- service --> 
      <div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Service <strong class="black">Process</strong></h2>
                     <span>Easy and effective way to get your device repair</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service1.png"/></i>
                     <h3>Fast service</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service2.png"/></i>
                     <h3>Secure payments</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service3.png"/></i>
                     <h3>Expert team</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service4.png"/></i>
                     <h3>Affordable services</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service5.png"/></i>
                     <h3>90 Days warranty</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service6.png"/></i>
                     <h3>Award winning</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->

      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Buku <strong class="black">Terpopuler</strong></h2>
                     <span>Jelajahi Koleksi Pilihan Terbaik Kami, beberapa buku ini wajib anda baca.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/psikologi.jpg"/></i>
                     <h3>The neuropsycology</h3>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/programming.jpg"/></i>
                     <h3>Beginning Programming</h3>
                  
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/metodologi.jpeg"/></i>
                     <h3>Metodologi Penelitian</h3>
                    
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/onepiece.jpg"/></i>
                     <h3>One Piece</h3>
                  
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/cerita.jpg"/></i>
                     <h3>100 Cerita Raykat Indonesia</h3>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/datamining.jpeg"/></i>
                     <h3>Data Mining</h3>
                     
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/Algoritma.jpeg"/></i>
                     <h3>Algorithms to Live By</h3>
                  
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="images/Artifical_Intelligence.jpg"/></i>
                     <h3>Artificial Intelligence In Practice</h3>
                     
                  </div>
               </div>
               
            </div>
         </div>
         <div class="Clients_bg_white">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title">
                        <h3>What Clients Say?</h3>
                     </div>
                  </div>
               </div>
               <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#client_slider" data-slide-to="0" class="active"></li>
          <li data-target="#client_slider" data-slide-to="1"></li>
          <li data-target="#client_slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption text-bg">
               <div class="img_bg">
                  <i><img src="images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                <div class="img_bg">
                  <i><img src="images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                 <div class="img_bg">
                  <i><img src="images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                <p>You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
               
              </div>
            </div>
          </div>
        </div>
        
      </div>

            </div>
         </div>

         <div class="container">
            <div class="yellow_bg">
            <div class="row">
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <div class="yellow-box">
                     <h3>REQUEST A FREE QUOTE<i><img src="icon/calll.png"/></i></h3>
                     
                     <p>Get answers and advice from people you want it from.</p>
                  </div>
               </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <div class="yellow-box">
                     <a href="#">Get  Quote</a>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </div>

      <!-- end our product -->
      <!-- map -->
      <div class="container-fluid padi">
         <div class="map">
            <img src="images/maps.jpg" alt="img"/>
         </div>
      </div>
      <!-- end map --> 
      <!--  footer --> 




      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                     </ul>
                  </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>conatct us</h3>
                     <span>123 Second Street Fifth Avenue,<br>
                       Landak, Kalimantan Barat<br>
                        +6281350342047</span>
                  </div>
               </div>

                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                         <li> <a href="#">About us</a></li>
                         <li> <a href="#">Terms and conditions</a></li>
                         <li> <a href="#">Privacy policy</a></li>
                         <li> <a href="#">News</a></li>
                          <li> <a href="#">Contact us</a></li>
                     </ul>
                  </div>
               </div>

                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>service</h3>
                      <ul class="lik">
                    <li> <a href="#"> Data recovery</a></li>
                         <li> <a href="#">Computer repair</a></li>
                         <li> <a href="#">Mobile service</a></li>
                         <li> <a href="#">Network solutions</a></li>
                          <li> <a href="#">Technical support</a></li>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>About lighten</h3>
                     <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                  </div>
               </div>
            </div>
         </div>
            <div class="copyright">
               <p> &copy; 2024 Virgilius Dalta Suprias Nandigna. All rights reserved.</p>
            </div>
         
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>