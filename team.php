<?php
$n_equipe='active';

    include('header.php')
?>
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center text-light bg-cover" style="background-image: url(assets/img/principal.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Membres de notre équipe</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Acceuil</a></li>
                        <li class="active">Notre équipe</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Team
    ============================================= -->
    <div class="team-area mar-top-less default-padding bottom-less">
        <div class="container">
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/zekou.png" alt="Thumb">
                                <?php
                                    include('social.php')
                                ?>
                            </div>
                            <div class="info">
                                <h4>Zekou Romaric</h4>
                                <span>Experte en numerique</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
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
                                <img src="assets/img/junior.png" alt="Thumb">
                                <?php
                                    include('social.php')
                                ?>
                            </div>
                            <div class="info">
                                <h4>Junior William</h4>
                                <span>Designer graphique</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/eunice.png" alt="Thumb">
                                <?php
                                    include('social.php')
                                ?>
                            </div>
                            <div class="info">
                                <h4>Kouakou Eunice</h4>
                                <span>Experte en référencement</span>
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
                                <img src="assets/img/Franck.png" alt="Thumb">
                               <?php
                                    include('social.php')
                                ?>
                            </div>
                            <div class="info">
                                <h4>Franck Donald</h4>
                                <span>Expert en technologie</span>
                            </div>
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