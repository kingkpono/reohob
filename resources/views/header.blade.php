<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Reohob</title><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLibre+Baskerville:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/furniture-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body>
    <div class="header--sidebar"></div>
    <!--  Header-->
    <header class="header" data-sticky="true">
      <div class="header__top">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p><i class="furniture-market"></i>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions"><a href="#">info@reohob.com</a>
                    <div class="btn-group ps-dropdown"><button class="btn btn-lg btn-reohob">Get Quote</button>
                      <!--ul class="dropdown-menu">
                        <li><a href="#">English <img src="images/flag/usa.svg" alt=""></a></li>
                        <li><a href="#">Japanese <img src="images/flag/japan.svg" alt=""></a></li>
                      </ul-->
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="index.html"><img src="images/logo.png" alt=""></a>
              <ul class="main-menu menu">
                <li class="{{ Request::path() == '/' ? 'current-menu-item menu-item-has-children' : 'menu-item-has-children has-mega-menu' }}"><a href="/">Home</a>
                     
                </li>
                <li class="{{ Request::path() == 'product-list' ? 'current-menu-item menu-item-has-children' : 'menu-item-has-children has-mega-menu' }}"><a href="product-list">Products</a>
                </li>
                <li class="{{ Request::path() == 'services' ? 'current-menu-item menu-item-has-children' : 'menu-item-has-children has-mega-menu' }}"><a href="services">Services</a>
                  
                </li>
                <li class="{{ Request::path() == 'initiative' ? 'current-menu-item menu-item-has-children' : 'menu-item-has-children has-mega-menu' }}"><a href="initiative">Initiative</a></li>
                <li class="{{ Request::path() == 'about' ? 'current-menu-item menu-item-has-children' : 'menu-item-has-children has-mega-menu' }}"><a  href="about">About</a></li>
                <li class="{{ Request::path() == 'support' ? 'current-menu-item menu-item-has-children' : 'menu-item-has-children has-mega-menu' }}"><a href="support">Support</a></li>
              </ul>
          <div class="menu-toggle"><span></span></div>
          <div class="ps-cart">
           
          <form class="ps-form--search" action="do_action" method="post"><i class="furniture-search"></i>
            <input class="form-control" type="text" placeholder="Find product">
            <button>Search</button>
          </form>
        </div>
      </nav>
    </header>