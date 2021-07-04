<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- project-detail27:14-->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Project Detail</title>
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
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Project Detail</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Project Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Detail Section-->
    <section>
       
            <?php 
                            include('conn.php');
                            $id = $_POST['id']; 
                            $result = mysql_query("select * from projects");
                            $row = mysql_fetch_row($result);
            ?>
            <div>
                <center><h1><?php echo $row[1]; ?></h1></center>
                <br>
            </div>
            <div class="auto-container">
                <!-- Upper Box -->
                <div class="upper-box">
                    <!--Project Tabs-->
                    <div class="project-tabs tabs-box clearfix">
                        <!--Tab Btns-->
                        <!--Tabs Container-->
                        <div class="tabs-content">
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="tab-1">
                                <center><img src="images/resource/<?php echo $row[2]; ?>" class="img-responsive" alt=""></center>
                                
                            </div>

                            
                        </div>
                    </div>
                </div>
                
                <!--Lower Content-->
                <div class="lower-content"> 
                    <div class="row clearfix">
                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <br>
                                <h2>Project Descripation</h2>
                                <p><!-- Well we’re movin’ on up to the east side. To a deluxe apartment in the sky. The weather started getting rough – the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow would be lost. We’re gonna do it. On your mark get set and go now. Got a dream and we just know now we’re gonna make our dream come true. I have always wanted to have a neighbor just like you. I’ve always wanted to live in a neighborhood with you. --><?php echo $row[4]; ?></p> 
                                <br>
                                <h4>Project Challenge</h4>
                                <p><!-- It’s time to put on makeup. It’s time to dress up right. It’s time to raise the curtain on the Muppet Show tonight. The mate was a mighty sailin’ man the Skipper brave and sure. --><?php echo $row[5]; ?></p>
                                <!-- <ul class="list-style-one">
                                    <li>Five passengers set sail that day for a three hour</li>
                                    <li>Till the one day when the lady met this fellow</li>
                                    <li>Family that’s the way we all became the brady</li>
                                    <li>Champion the cause of the innocent career</li>
                                    <li>Now were up in the big leagues getting’ turn</li>
                                    <li>The powerless in a world of criminals operate</li>
                                </ul> -->
                                <!-- <h4>What We Did</h4>
                                <p>Then along come two they got nothin’ but their jeans. Texas tea. Knight Rider: A shadowy flight into the dangerous world of a man who does not exist. The first mate and his Skipper too will do their very best to make the tropic island nest.</p>
                                <h4>RESULT</h4>
                                <p>That’s just a little bit more than the law will allow. We’re gonna do it. On your mark get set and go now. Got a dream and we just know now we’re gonna make our dream come true. Makin their way the only way they know how. That’s just a little bit more than the law will allow.</p> -->
                            </div>
                        </div>
                       
                        <!--Info Column-->
                        <div class="info-column col-lg-4 col-md-12 col-sm-12 ">
                            <div class="inner-column wow fadeInRight">
                                 <br>
                                <h3>Project Information</h3>
                                <!-- <p>These men promptly escaped from a maximum security stockade to the Los Angeles underground. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you. Well the first thing you know ol' Jeds a mil lionaire infolk said Jed move away.</p> -->
                                <ul class="info-list">
                                    <li><strong>Client :</strong> <?php echo $row[6]; ?></li>
                                    <li><strong>Location :</strong> <?php echo $row[7]; ?></li>
                                    <li><strong>Type: :</strong> <?php echo $row[3]; ?></li>
                                    <li><strong>Duration :</strong> <?php echo $row[8]; ?></li>
                                    <li><strong>Date :</strong> <?php echo $row[10]; ?></li>
                                    <li><strong>Value :</strong> <?php echo $row[11]; ?></li>
                                    <li><strong>Architect :</strong><?php echo $row[9]; ?></li>
                                </ul>
                                <br>
                                <!--Help Box-->
                                <div class="help-box-two">
                                    <div class="inner">
                                        <span class="title">Quick Contact</span>
                                        <h2>Get Solution</h2>
                                        <div class="text">Contact us at the Interior office nearest to you or submit a business inquiry online.</div>
                                        <a class="theme-btn btn-style-two" href="contact.php">Contact</a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
             <?php
                $row = mysql_fetch_row($result);
            
            ?>
            </div>
        </div>
    </section>
    <!--End Portfolio Details-->

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

<!-- project-detail27:18-->
</html>