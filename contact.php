<?php
$contact='active';
    include('header.php')
?>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area  bg-cover text-center text-light" style="background-image: url(assets/img/principal.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contactez-nous</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Acceuil</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Contact Area
    ============================================= -->
    <div class="contact-area overflow-hidden default-padding">
        <div class="container">
            <div class="contact-items">
                <!-- Fixed BG -->
                <div class="fixed-bg left">
                    <img src="assets/img/shape/39.png" alt="Shape">
                </div>
                <!-- Fixed BG -->
                <div class="row align-center">
                
                    <div class="col-lg-6 contact-box">
                        <div class="form-items">
                            <h2>Vous pouvez nous contacter pour tout vos préoccupation et vos besoins!</h2>
                            <form action="assets/mail/contact.php" novalidate method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Nom complet" type="text" required="">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required="">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Télephone" type="text" required="">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Parlez-nous de vos projets, préoccupations ou besoins "></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="btn-animation dark border" type="submit" name="submit" id="submit">
                                            Envoyez le Message <i class="arrow_right"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 left-info">
                        <div class="info-items text-light">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info">
                                    <h5>Localisation</h5>
                                    <p>
                                        Abidjan, Koumassi <br> Avenue 5, rue 12
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="info">
                                    <h5>Appelez ce numéro pour plus d'informations</h5>
                                    <p>
                                        +225-07-4802-1168
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info">
                                    <h5>Envoyez un courier électronique</h5>
                                    <p>
                                        mahamoudyabre48@gmail.com
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <ul class="social">
                                <li><a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="www.linkedin.fr"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="www.behance.fr"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.ci/maps/search/Carrefour+Apr%C3%A8s+Barrage+top+batiment,+Abidjan/@5.3479375,-4.0281361,12z?hl=fr"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->

<?php
    include('footer.php')
?>