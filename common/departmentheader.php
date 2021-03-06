<?php header("Access-Control-Allow-Origin: https://calendar.google.com"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>City Hall Touch Screen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="City Hall Touch Screen">
    <meta name="keywords" content="City Hall Touch Screen">
    <meta name="author" content="Dustin Kollmorgen" />
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://eastonit18042.github.io/fonts/icomoon/style.css">

    <link rel="stylesheet" href="https://eastonit18042.github.io/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/css/jquery-ui.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/css/datatables.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/css/aos.css">

    <link rel="stylesheet" href="https://eastonit18042.github.io/css/style.css">
    <link rel="stylesheet" href="https://eastonit18042.github.io/css/customstyle.css">
    
  </head>
  <body class="inactivityTimerTrigger" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">
    
    <header class="site-navbar py-4 header-red site-navbar-target" role="banner" style="background-color: #690102;">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="https://eastonit18042.github.io/pages/home.php" class="nav-link">Home</a></li>
                <li><a href="https://eastonit18042.github.io/pages/departments.php" class="nav-link">Departments</a></li>
                <li><a href="https://eastonit18042.github.io/pages/easton.php" class="nav-link">Discover Easton</a></li>
                <li><a href="https://eastonit18042.github.io/pages/payments.php" class="nav-link">Payments</a></li>
                <li><a href="https://eastonit18042.github.io/pages/permits.php" class="nav-link">Permits</a></li>
                <li><a href="https://eastonit18042.github.io/pages/directory.php" class="nav-link">Directory</a></li>
                <li><a href="https://eastonit18042.github.io/pages/police.php" class="nav-link">Police</a></li>
                <li><a href="https://eastonit18042.github.io/pages/parking.php" class="nav-link">Parking</a></li>
                <li id="google_translate_element"></li>     
              </ul>
            </nav>
          </div>
          
        </div>
      <div id="google_translate_element"></div>
    </header>