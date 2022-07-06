<?php
$a_propos='active';

    include('header.php')
?>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center  text-light bg-cover" style="background-image: url(assets/img/principal.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>À propos de nous</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Acceuil</a></li>
                        <li class="active">À propos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
    ============================================= -->
    <div class="about-area overflow-hidden default-padding">
        <div class="container">
            <div class="about-items">
                <div class="row align-center">

                    <!-- Thumb -->
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="assets/img/us.png" alt="Thumb">
                        </div>
                    </div>
                    <!-- End Thumb -->

                    <div class="col-lg-6">
                        <div class="content">
                            <h4>À propos de nous</h4>
                            <h2>Nous intervenons dans tout les domaines du numerique</h2>
                            <p>
                                Nous prônons notre expertise dans le cadre d’un accompagnement complet pour votre direction. <br> L'hébergement, collocation des  infrastructures et applications d’entreprise sera a votre disposition<br>Nous assurons la continuité d’activité en renforçant la protection de vos données et infrastructures.

                            </p>
                            <div class="content-inner">
                                <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                                <div class="row align-center">
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>Des idées fraîches</li>
                                            <li>Conceptions uniques</li>
                                            <li>Métiers spécialisés</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h2>13 <span>années d'expérience</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Star Achivement
    ============================================= -->
    <div class="achivement-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 heading-side">
                    <h5>Experts dans le domaine du digital</h5>
                    <h2>Des solutions uniques pour votre entreprise </h2>
                    <p>
                        Assurance de la montée en compétence de vos équipes, utilisateurs et manager.
                    </p>
                </div>
                <div class="col-lg-6 right-content">
                    <div class="skill-items">
                        <!-- Progress Bar Start -->
                        <div class="progress-box">
                            <h5>Commercialisation</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="88">
                                    <span>88%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Assistance sociale</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="95">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Consultant</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="70">
                                    <span>70%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Progressbar -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Achivement Area -->

    <!-- Star Brand Area
    ============================================= -->
    <div class="brand-area bg-gray text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/11.png" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="brand-items">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h2>Depuis 2010, nous avons travaillé pour plus de 100 clients dans le monde</h2>
                        <p>
                            Dépenses en tant qu'élevage de matériel insisté pour être construit. Les méfiances continuelles se prononcent en écoutant à contrecoeur. La chose a du goût sur nous. Lui avait trouvé l'usage de la plaie espéré.
                        </p>
                        <a href="projects.php" class="btn-animation light border">Tout afficher<i class="arrow_right"></i></a>
                    </div>
                    <div class="col-lg-6 brand">
                        <div class="row">
                            <div class="col-lg-4"><img src="assets/img/bon.png" alt="Brand"></div>
                            <div class="col-lg-4"><img src="assets/img/bon1.png" alt="Brand"></div>
                            <div class="col-lg-4"><img src="assets/img/bon2.png" alt="Brand"></div>
                            <div class="col-lg-4"><img src="assets/img/bon3.png" alt="Brand"></div>
                            <div class="col-lg-4"><img src="assets/img/bon4.png" alt="Brand"></div>
                            <div class="col-lg-4"><img src="assets/img/bon5.png" alt="Brand"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->

    <!-- Star Team
    ============================================= -->
    <div class="team-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="heading-center text-center">
                        <h5>Membres de l'équipe</h5>
                        <h2>Rencontrez les membres de notre équipe professionnelle et experte</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/yabre.png" alt="Thumb">
                                <?php
                                    include('social.php')
                                ?>
                            </div>
                            <div class="info">
                                <h4>Yabre Mahamoud</h4>
                                <span>Fondateur et experte en marketing</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/florence.png" alt="Thumb">
                               <?php
                                    include('social.php')
                                ?>                            
                            </div>
                            <div class="info">
                                <h4>Koffi Florence</h4>
                                <span>Experte en marketing</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/junior.png" alt="Thumb">
                              <?php
                                    include('social.php')
                                ?>
                            </div>
                            <div class="info">
                                <h4>Junior William</h4>
                                <span>Designer graphique</span>
                            </div>
                            <br>
                            <a class="btn circle btn-md btn-theme effect" href="team.php">Voir tout <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->

    <?php
    include('footer.php')
?>