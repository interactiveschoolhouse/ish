<?php require "/code/startup.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - Interactive School House</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">
  
  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/default.css" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper version3">

  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header-wrapper headerV3">
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar top-fixed clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>

      <!-- TOP INFO BAR -->
      <div class="top-info-bar bg-color-7 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                <li><i class="fa fa-phone bg-color-2" aria-hidden="true"></i> +1 234 567 8900</li>
                <li><i class="fa fa-clock-o bg-color-6" aria-hidden="true"></i> Open: 9am - 6pm</li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li><i class="fa fa-globe bg-color-4" aria-hidden="true"></i></li>
                <li class="LanguageList">
                  <select name="guiest_id1" id="guiest_id1" class="select-drop">
                    <option value="0"><i class="fa fa-globe bg-color-4" aria-hidden="true"></i> Language</option>
                    <option value="1">English</option>
                    <option value="2">Spanish</option>
                    <option value="3">Hindi</option>            
                  </select>
                </li>
                <li><i class="fa fa-unlock-alt bg-color-5" aria-hidden="true"></i> <a href='#loginModal' data-toggle="modal" >Login</a><span>or</span><a href='#createAccount' data-toggle="modal">Create an account</a></li>
                <li class="cart-dropdown">
                  <a href="#" class="bg-color-6 shop-cart" >
                    <i class="fa fa-shopping-basket " aria-hidden="true"></i>
                    <span class="badge bg-color-1">3</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><i class="fa fa-shopping-basket " aria-hidden="true"></i>3 items in your cart</li>
                    <li>
                      <a href="single-product.html">
                        <div class="media">
                          <div class="media-left">
                            <img src="img/home/cart/cart-img.png" alt="cart-Image">
                          </div>
                          <div class="media-body">
                            <h4>Barbie Racing Car</h4>
                            <div class="price">
                              <span class="color-1">$50</span>
                            </div>
                            <span class="amount">Qnt: 1</span>
                          </div>
                        </div>
                      </a>
                      <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
                    </li>
                    <li>
                      <a href="single-product.html">
                        <div class="media">
                          <div class="media-left">
                            <img src="img/home/cart/cart-img.png" alt="cart-Image">
                          </div>
                          <div class="media-body">
                            <h4>Barbie Racing Car</h4>
                            <div class="price">
                              <span class="color-1">$50</span>
                            </div>
                            <span class="amount">Qnt: 1</span>
                          </div>
                        </div>
                      </a>
                      <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
                    </li>
                    <li>
                      <a href="single-product.html">
                        <div class="media">
                          <div class="media-left">
                            <img src="img/home/cart/cart-img.png" alt="cart-Image">
                          </div>
                          <div class="media-body">
                            <h4>Barbie Racing Car</h4>
                            <div class="price">
                              <span class="color-1">$50</span>
                            </div>
                            <span class="amount">Qnt: 1</span>
                          </div>
                        </div>
                      </a>
                      <span class="cancel"><i class="fa fa-close" aria-hidden="true"></i></span>
                    </li>
                    <li>
                      <span class="cart-total">Subtotal</span>
                      <span class="cart-price">$150</span>
                      <div class="cart-button">
                        <button type="button" class="btn btn-primary" onclick="location.href='checkout-step-1.html';">Checkout</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='cart-page.html';">View Cart</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php require "/controls/navbar.php" ?>
    </header>

    <?php require "/controls/banner.php" ?>

    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix aboutSchool">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 col-xs-12">
            <img src="img/home/about-school.png" alt="image" class="img-responsive">
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-xs-12">
            <div class="schoolInfo">
              <h2>Wellcome to kidz school</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="color-3">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              <ul class="list-unstyled">
                <li><i class="fa fa-check" aria-hidden="true"></i> Vestibulum iaculis quam ac libero volutpat placerat.</li>
                <li><i class="fa fa-check" aria-hidden="true"></i> Phasellus sit amet risus fringilla, aliquet lacus vel, suscipit lorem.</li>
                <li><i class="fa fa-check" aria-hidden="true"></i> Etiam suscipit velit et tellus bibendum interdum.</li>
              </ul>
              <a href="about_us.html" class="btn btn-primary">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COLOR SECTION -->
    <section class="colorSection full-width clearfix bg-color-4 servicesSection">
      <div class="container">
        <div class="sectionTitle text-center alt">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>Our Services</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>
         
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-cutlery bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Delicious Food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-heart bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Love &amp; Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-shield bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Meny Sports</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 hidden-xs">
            <div class="text-center">
              <img src="img/home/services.png" alt="image">
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-car bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Transportation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-graduation-cap bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Experience Teachers</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-leaf bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">Physical Activity</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix eventSection" id="ourEvents">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Our Events</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
          
        <div class="row">
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-1">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="img/home/event/event-1.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Curabitur tempor metus.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-event-left-sidebar.html" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-2">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="img/home/event/event-2.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Aenean vel leo vitae sem.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-green">
                  <li><a href="single-event-left-sidebar.html" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-3">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="img/home/event/event-3.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Nunc suscipit sem et.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-red">
                  <li><a href="single-event-left-sidebar.html" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12 block">
            <div class="media eventContent bg-color-4">
              <a class="media-left" href="single-event-left-sidebar.html">
                <img class="media-object" src="img/home/event/event-4.jpg" alt="Image">
                <span class="sticker-round">10 <br>July</span>
              </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="single-event-left-sidebar.html">Suspendisse eleifend ipsum.</a></h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-calendar-o" aria-hidden="true"></i>Age 2 to 4 Years</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                <ul class="list-inline btn-sky">
                  <li><a href="#" class="btn btn-primary">read more</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- COLOR SECTION -->
    <section class="colorSection full-width clearfix bg-color-6 teamSection">
      <div class="container">
        <div class="sectionTitle text-center alt">
          <h2>
            <span class="shape shape-left"></span>
            <span>Meet Our Staff</span>
            <span class="shape shape-right"></span>
          </h2>
        </div>
          
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel teamSlider">
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-1.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Smith</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-2.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-3.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-4.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-1.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-2.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-3.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="teamContent">
                  <div class="teamImage">
                    <img src="img/home/team/team-4.jpg" alt="img" class="img-circle">
                    <div class="maskingContent">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="teachers-details.html">Amanda Stone</a></h3>
                    <p>English Teacher</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section class="mainContent full-width clearfix testimonialArea">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Testimonials</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row testimonial-grid">
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-1">
              <span class="userSign border-color-1"><i class="fa fa-quote-left color-1" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-2">
              <span class="userSign border-color-2"><i class="fa fa-quote-left color-2" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-3">
              <span class="userSign border-color-3"><i class="fa fa-quote-left color-3" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-4">
              <span class="userSign border-color-4"><i class="fa fa-quote-left color-4" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-5">
              <span class="userSign border-color-5"><i class="fa fa-quote-left color-5" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-6">
              <span class="userSign border-color-6"><i class="fa fa-quote-left color-6" aria-hidden="true"></i></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <h3>Physical Activity <br> <small>Sarah’s Father</small></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COUNT UP SECTION-->
    <section class="countUpSection">
      <div class="container">
        <div class="sectionTitleSmall">
          <h2>Some Fun Facts</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
        </div>
          
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">179</div>
              <div class="counterInfo bg-color-1">Events Held</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">579</div>
              <div class="counterInfo bg-color-2">Happy Funs</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">279</div>
              <div class="counterInfo bg-color-3">happy clients</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">479</div>
              <div class="counterInfo bg-color-4">hours support</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PRICE SECTION -->
    <section class="whiteSection full-width clearfix">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Pricing Table</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
          
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricingTable">
              <div class="priceUper">
              <div class="priceTitle alt bg-color-1"><h3>Morning Session</h3></div>
                <div class="priceInfo alt p-n bg-color-1"><img src="img/home/news/news-1.jpg" class="img-responsive"></div>
              </div>
              <div class="priceLower">
                <ul class="list-unstyled priceOffer">
                  <li><i class="fa fa-birthday-cake color-1" aria-hidden="true"></i> 2 Meals/Day</li>
                  <li><i class="fa fa-medkit color-1" aria-hidden="true"></i> Medical Assistance</li>
                  <li><i class="fa fa-paint-brush color-1" aria-hidden="true"></i> Drowing &amp; Dancing</li>
                  <li><i class="fa fa-taxi color-1" aria-hidden="true"></i> Free Transport</li>
                </ul>
                <div class="priceBtn">
                  <a href="checkout-step-1.html" class="btn btn-primary bg-color-1">Choose Plan</a>
                  <h4 class="color-1">$69 <br><small>Per Month</small></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricingTable">
              <div class="priceUper">
              <div class="priceTitle alt bg-color-2"><h3>Weekly Session</h3></div>
                <div class="priceInfo alt p-n bg-color-2"><img src="img/home/news/news-2.jpg" class="img-responsive"></div>
              </div>
              <div class="priceLower">
                <ul class="list-unstyled priceOffer">
                  <li><i class="fa fa-birthday-cake color-2" aria-hidden="true"></i> 2 Meals/Day</li>
                  <li><i class="fa fa-medkit color-2" aria-hidden="true"></i> Medical Assistance</li>
                  <li><i class="fa fa-paint-brush color-2" aria-hidden="true"></i> Drowing &amp; Dancing</li>
                  <li><i class="fa fa-taxi color-2" aria-hidden="true"></i> Free Transport</li>
                </ul>
                <div class="priceBtn">
                  <a href="checkout-step-1.html" class="btn btn-primary bg-color-2">Choose Plan</a>
                  <h4 class="color-2">$69 <br><small>Per Month</small></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricingTable">
              <div class="priceUper">
              <div class="priceTitle alt bg-color-3"><h3>Fullday Session</h3></div>
                <div class="priceInfo alt p-n bg-color-3"><img src="img/home/news/news-3.jpg" class="img-responsive"></div>
              </div>
              <div class="priceLower">
                <ul class="list-unstyled priceOffer">
                  <li><i class="fa fa-birthday-cake color-3" aria-hidden="true"></i> 2 Meals/Day</li>
                  <li><i class="fa fa-medkit color-3" aria-hidden="true"></i> Medical Assistance</li>
                  <li><i class="fa fa-paint-brush color-3" aria-hidden="true"></i> Drowing &amp; Dancing</li>
                  <li><i class="fa fa-taxi color-3" aria-hidden="true"></i> Free Transport</li>
                </ul>
                <div class="priceBtn">
                  <a href="checkout-step-1.html" class="btn btn-primary bg-color-3">Choose Plan</a>
                  <h4 class="color-3">$69 <br><small>Per Month</small></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MAP AREA SECTION -->
    <section class="mapArea">
      <div id="map"></div>
    </section>

    <?php require "/controls/footer.php"; ?>

  </div>

  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>

  <!-- LOGIN MODAL -->
  <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">Login</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="User name">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group formField">
                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Log in">
              </div>
              <div class="form-group formField">
                <p class="help-block"><a href="#">Forgot password?</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CREATE ACCOUNT MODAL -->
  <div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">Create  an account</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="User name">
              </div>
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Re-Password">
              </div>
              <div class="form-group formField">
                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Register">
              </div>
              <div class="form-group formField">
                <p class="help-block">Allready have an account? <a href="#">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/isotope/isotope.min.js"></script>
  <script src="plugins/isotope/jquery.fancybox.pack.js"></script>
  <script src="plugins/isotope/isotope-triger.js"></script>
  <script src="plugins/countdown/jquery.syotimer.js"></script>
  <script src="plugins/google-custom-map/google-map.js"></script>
  <?php require "/controls/googleMaps.php" ?>
  <script src="plugins/velocity/velocity.min.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>