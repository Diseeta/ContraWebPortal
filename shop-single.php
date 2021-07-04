<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- shop-single27:38-->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Shop Single</title>
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
                    <h1>Shop Single</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Shop Single</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12">
                    <div class="shop-single">
                        <div class="product-details">
                            <?php
                                            
                                            $pid=$_GET['pid'];   
                    
                                                $result = mysql_query("select * from product where pid=$pid");
                                                $row = mysql_fetch_row($result);
                            ?>
                            
                            <!--Basic Details-->
                            <div class="basic-details">
                                <div class="row clearfix">


                                    <div class="image-column col-md-6 col-sm-12">
                                        <li data-thumb="images/resource/<?php echo $row[6]; ?>">
                                                <div> <img src="images/resource/<?php echo $row[6]; ?>" data-imagezoom="true"> </div>
                                            </li>
                                       <!--  <figure class="image-box"><a href="images/resource/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/resource/3.jpg" alt=""></a></figure> -->
                                    </div>
                                    <div class="info-column col-md-6 col-sm-12">
                                        <div class="details-header">
                                           <h4> <?php echo $row[3]; ?> </h4>
                                            
                                            <div class="item-price">Rs. <?php echo $row[4]; ?></div>
                                        </div>

                                        <div class="text"><p><span>Quick Overview : </span> <?php echo $row[5]; ?> </p></div>

                                        <h6>Available Quantity : <?php echo "<script> var qq=$row[9]; </script>";
                                                                    $qa = $row[9];
                                                                    echo $row[9]; ?></h6>

                                        <div class="other-options clearfix">
                                            <div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div>
                                            <button type="button" class="theme-btn btn-style-one add-to-cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Basic Details-->
                            
                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">
                                
                                    <!--Tab Btns-->
                                    <!-- <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn">Descripton</li>
                                        <li data-tab="#prod-reviews" class="tab-btn active-btn">Review (3)</li>
                                    </ul>
                                     -->
                                    <!--Tabs Container-->
                                   
                                        
                                        <!--Tab-->
                                        
                                            <!--Reviews Container-->
                                            
                                                <!--Comment Box-->
                                                
                                            
                                            <!-- Comment Form -->
                                            
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <!--End Product Info Tabs-->
                        </div>
                    </div>
                </div>

                
                <!--Sidebar Side-->
                
                        
                        <!-- Search -->
                        
                        
                        <!--Blog Category Widget-->
                        
                        
                        <!-- Price Filters -->
                        
                        
                        <!-- Top Related Posts -->
                        
                            
                            
                        </div>  
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->
    
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
<script src="js/jquery-ui.js"></script> 
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

<!-- shop-single27:40-->
</html>