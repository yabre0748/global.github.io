<?php 

$acceuil =(isset($acceuil)) ? $acceuil : 0;
$contact =(isset($contact)) ? $contact : 0;
$projet =(isset($projet)) ? $projet : 0;
$services =(isset($services)) ? $services : 0;
$a_propos =(isset($a_propos)) ? $a_propos : 0;
$n_equipe =(isset($n_equipe)) ? $n_equipe : 0;



 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Global Tech - Agence créative et numérique">

    <!-- ========== Page Title ========== -->
    <title>Global Tech - Agence créative et numérique</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon1.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader Start -->
    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>Global Tech</h2>
        </div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo2.png" class="logo" alt="Logo">
                     </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li>
                            <a href="index.php" class=" <?=$acceuil ?> " >Acceuil</a>
                            <li><a href="contact.php" class="<?=$contact ?>" >Contact</a></li>
                        
                        <li>
                            <a href="projects.php" class="<?=$projet ?>"  >Projet</a>
                        </li>
                        <li>
                            <a href="services.php" class="<?=$services ?>"  >Services</a>
                        </li>
                        <li >
                            <a href="about-us.php" class="<?=$a_propos ?>"   >A propos</a>
                        </li>
                        <li><a href="team.php" class="<?=$n_equipe  ?>">Notre equipe</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="icon_close"></i></a>
                <div class="widget">
                    <img src="assets/img/logo2.png" alt="Logo">
                    <p>
                       <strong>Contactez-nous pour plus d'informations.</strong>
                    </p>
                </div>
                <div class="widget address">
                    <div>
                        <ul>
                            <li>
                                <div class="content">
                                    <p>Address</p> 
                                    <strong>Abidjan, rue 12</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Email</p> 
                                    <strong>mahamoudyabre48@gmail.com</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Contact</p> 
                                    <strong>+225-07-4802-1168</strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget newsletter">
                    <h4 class="title">Abonnez-vous !</h4>
                    <form action="#">
                        <div class="input-group stylish-input-group">
                            <input type="email" placeholder="Entrer votre adresse mail" class="form-control" name="email">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="arrow_right"></i>
                                </button>  
                            </span>
                        </div>
                    </form>
                </div>
                <div class="widget social">
                    <ul class="link">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
