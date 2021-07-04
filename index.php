<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Home Page 01</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <?php include('header.php'); ?>
    <!--End Main Header -->
    
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
                                    <?php 
                            include('conn.php'); 
                            $result = mysql_query("select * from slider");
                            $row = mysql_fetch_row($result);
                            
                            while($row)
                            {
                            
                        ?>
                        <div class="core-slider_item">
                                <img src="images/slider/<?php echo $row[1]; ?>" class="img-responsive" alt="">
                            </div>
                
                            <?php
                             $row = mysql_fetch_row($result);
                            }
                             ?>
            </div>

        <div class="bottom-box">
            <div class="auto-container clearfix">
                <ul class="contact-info">
                    <li><span>Phone :</span> (+84) 867-557-243</li>
                    <li><span>EMAIL :</span> <a href="#">Support@yourdomain.com</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- About Section -->
    <section class="about-section" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <h2>ABOUT <br> US</h2>
                        </div>
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight"><img src="images/resource/alphabet-image.png" alt=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="images/resource/image-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="title">
                                <h2>Any  Complexity <br>For Any Cat</h2>
                            </div>
                            <div class="text">Our company has many years experience and specializes in manufacturing, salling, serviceing and repairing cardan shafts (cardans) for various vehicles, technological equipment, tractor, special machinery and agricultural machinery of verious domestic and foreign manufacturers.</div>
                            <div class="link-box"><a href="about.php" class="theme-btn btn-style-one">About Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="upper-box" style="background-image: url(images/background/2.jpg);">
            <div class="auto-container">    
                <div class="sec-title text-center light">
                    <span class="float-text">Specialization</span>
                    <h2>Our Specialization</h2>
                </div>
            </div>
        </div>

        <div class="services-box">
            <div class="auto-container">
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Service Block -->
                    <!-- <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                
                            </div>
                        </div>
                    </div> -->

                    <!-- Service Block -->
                    <!-- <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.php">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Service Block -->
                   <!--  <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-1.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Architectural Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.php">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
 -->
                    <!-- Service Block -->
                   <!--  <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-2.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Interior Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.php">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Service Block -->
                   <!--  <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.php"><img src="images/resource/service-3.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.php">Corporate Design</a></h3>
                                <div class="text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.</div>
                                <div class="link-box">
                                    <a href="service-detail.php">Lorn More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
        <div class="outer-box" style="background-image: url(images/background/3.jpg);">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="row">
                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="14">0</span></div>
                                <h4 class="counter-title">Years of <br>Experience</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="237">0</span></div>
                                <h4 class="counter-title">Project <br>Taken</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>
                                <h4 class="counter-title">Twitter <br> Follower</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                                <h4 class="counter-title">Awards<br>won</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Project Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-right">
                <span class="float-text">Project</span>
                <h2>Our Project</h2>
            </div>
        </div>
        
        <div class="inner-container">
            <div class="projects-carousel owl-carousel owl-theme">
                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/1.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.php">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.php">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.php">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/4.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.php">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/5.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.php">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/3.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h4><a href="project-detail.php">Laxury Home <br>Project</a></h4>
                            <div class="btn-box">
                                <a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                            </div>
                            <span class="tag">Architecture</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Our Team</span>
                <h2>Profect Expert</h2>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.php"><img src="images/resource/team-1.jpg" alt=""></a></div>
                            <!-- <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul> -->
                            <h3 class="name"><a href="team.php">Scott Grey</a></h3>
                        </div>
                        <span class="designation">Architect</span>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.php"><img src="images/resource/team-2.jpg" alt=""></a></div>
                            <!-- <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul> -->
                            <h3 class="name"><a href="team.php">Russel Reed</a></h3>
                        </div>
                        <span class="designation">Project Manager</span>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="team.php"><img src="images/resource/team-3.jpg" alt=""></a></div>
                            <!-- <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul> -->
                            <h3 class="name"><a href="team.php">Cheryl Ray</a></h3>
                        </div>
                        <span class="designation">Interior Designer</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Testimonial Section -->
    <!-- <section class="testimonial-section">
        <div class="outer-container clearfix"> -->
            <!-- Title Column -->
            <!-- <div class="title-column clearfix">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">testimonial</span>
                        <h2>What Client Says</h2>
                    </div>
                    <div class="text">Looking at its layout. The point of using very profectly is that it has a more-or-less normal distribution of letters, as opposed</div>
                </div>
            </div> -->

            <!-- Testimonial Column -->
          <!--   <div class="testimonial-column clearfix" style="background-image: url(images/background/4.jpg);">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel owl-theme"> -->
                        <!-- Testimonial Block -->
                       <!--  <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div> -->

                        <!-- Testimonial Block -->
                        <!-- <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div> -->

                        <!-- Testimonial Block -->
                        <!-- <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="image-box"><img src="images/resource/thumb-1.jpg" alt=""></div>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</div>
                                <div class="info-box">
                                    <h4 class="name">Jane Smith</h4>
                                    <span class="designation">CEO, InDesign</span>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--End Testimonial Section -->

    
    <!--End News Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="inner-container">
            <div class="sponsors-outer">
                <div class="sec-title text-center">
                <h2>Our Sponsors</h2>
            </div>
                
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->


    <!-- Main Footer -->
    <?php include('footer.php'); ?>
    <!-- End Main Footer -->

</div>



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>


</html>