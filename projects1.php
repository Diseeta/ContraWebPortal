<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- projects27:09-->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Projects</title>
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
    <!--<div class="preloader"></div>-->
    
        <!-- Main Header-->
    <?php include('header.php'); ?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Projects</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section -->
    <section class="projects-section alternate">
        <div class="auto-container">
             <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <!-- <div class="filters text-center clearfix">                     
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        <li class="filter" data-role="button" data-filter=".commercial">COMMERCIAL</li>
                        <li class="filter" data-role="button" data-filter=".landescape">LANDESCAPE</li>
                        <li class="filter" data-role="button" data-filter=".interior">INTERIOR</li>
                        <li class="filter" data-role="button" data-filter=".architecture">ARCHITECTURE</li>
                    </ul>                                                  
                </div> -->
                                            
                <div class="filter-list row">
                    <!-- Project Block -->
                    <div class="project-block all mix interior architecture landescape col-lg-4 col-md-6 col-sm-12">
                        <?php 
                            include('conn.php'); 
                            $result = mysql_query("select * from projects");
                            
                            //$row = mysqli_fetch_row($result);
                            $n=mysql_num_rows($result);
                                    for ($i=0; $i <$n ; $i++) { 
                                    $row=mysql_fetch_array($result);
                        ?>
                        <div class="image-box">
                            <img src="images/resource/<?php echo $row[2]; ?>" class="img-responsive" alt="">
                            <div class="overlay-box">
                                <h4><a href="project-detail.php"><?php echo $row[1]; ?> <br>Project</a></h4>
                                <div class="btn-box">
                                    
                                </div>
                                <span class="tag"><?php echo $row[9]; ?></span>
                            </div>
                            <br>
                        
                        </div>
                    </div>
                <?php } ?>
                    <!-- Project Block -->
                    <!--<div class="project-block all mix landescape architecture col-lg-8 col-md-6 col-sm-12">
                        <div class="image-box">
                            <img src="images/resource/<?php// echo $row[2]; ?>" class="img-responsive" alt="">
                            <div class="overlay-box">
                                <h4><a href="project-detail.php"><?php //echo $row[1]; ?><br>Project</a></h4>
                                <div class="btn-box">
                                    <a href="images/resource/<?php //echo $row[2]; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag"><?php //echo $row[9]; ?></span>
                            </div>
                        </div>
                    </div> -->

                    <!-- Project Block -->
                    <!--<div class="project-block all mix landescape interior col-lg-6 col-md-6 col-sm-12">
                        <div class="image-box">
                           <img src="images/resource/<?php //echo $row[2]; ?>" alt="">
                            <div class="overlay-box">
                                <h4><a href="project-detail.php"><?php //echo $row[1]; ?><br>Project</a></h4>
                                <div class="btn-box">
                                    <a href="images/resource/<?php //echo $row[2]; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag"><?php //echo $row[9]; ?></span>
                            </div>
                        </div>
                    </div> -->

                    <!-- Project Block -->
                    <!--<div class="project-block all mix landescape commercial architecture col-lg-6 col-md-6 col-sm-12">
                        <div class="image-box">
                            <img src="images/resource/<?php //echo $row[2]; ?>" alt="">
                            <div class="overlay-box">
                                <h4><a href="project-detail.php"><?php //echo $row[1]; ?><br>Project</a></h4>
                                <div class="btn-box">
                                    <a href="images/resource/<?php //echo $row[2]; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag"><?php //echo $row[9]; ?></span>
                            </div>
                            
                        </div>
                    </div>-->

                    <!-- Project Block -->
                    <!-- <div class="project-block all mix landescape interior col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <img src="images/resource/<?php //echo $row[2]; ?>" alt="">
                            <div class="overlay-box">
                                <h4><a href="project-detail.php"><?php //echo $row[1]; ?><br>Project</a></h4>
                                <div class="btn-box">
                                    <a href="images/resource/<?php //echo $row[2]; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag"><?php //echo $row[9]; ?></span>
                            </div>
                        </div>
                    </div> -->

                    <!-- Project Block -->
                    <!-- <div class="project-block all mix landescape commercial interior col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <img src="images/resource/<?php //echo $row[2]; ?>" alt="">
                            <div class="overlay-box">
                                <h4><a href="project-detail.php"><?php //echo $row[1]; ?><br>Project</a></h4>
                                <div class="btn-box">
                                    <a href="images/resource/<?php //echo $row[2]; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag"><?php //echo $row[9]; ?></span>
                            </div>
                        </div>
                    </div> -->
                    <!-- Project Block -->
                 <!-- <div class="project-block all mix landescape interior col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/<?php //echo $row[2]; ?>" alt=""></figure>
                            <div class="overlay-box">
                                <h4><a href="project-detail.php"><?php //echo $row[1]; ?> <br>Project</a></h4>
                                <div class="btn-box">
                                    <a href="images/resource/<?php //echo $row[2]; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="project-detail.php"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag"><?php //echo $row[9]; ?></span>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

            <!--Post Share Options-->
           <!--  <div class="styled-pagination">
                <ul class="clearfix">
                    <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
                </ul>
            </div>
        </div>-->    
    </section>



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

<!-- projects27:14-->
</html>