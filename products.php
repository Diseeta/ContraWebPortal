<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- shop27:33-->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Shop Page</title>
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
                    <h1>Shop</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Shop</li>
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
                    <div class="our-shop">
                        <div class="row clearfix">
                            <?php 
                            include('conn.php'); 
                            $result = mysql_query("select * from product");
                            
                            //$row = mysqli_fetch_row($result);
                            $n=mysql_num_rows($result);
                            for ($i=0; $i <$n ; $i++) { 
                                    $row=mysql_fetch_array($result);
                        ?>
                            <!--Shop Item-->
                            <div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/<?php echo $row[5]; ?>" alt="" />
                                        <div class="overlay-box">
                                            <ul class="cart-option">
                                                <li><a href="shop-single.php?pid=<?php echo $row[0]; ?>"><span class="fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    <!-- <div>
                                        <p>Out of stock</p>
                                    </div> -->

                                    
                                    <div class="lower-content">
                                        <h3><a href="shop-single.php?pid=<?php echo $row[0]; ?>"><h6><a href="single.php?pid=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a></h6></a></h3>
                                        <div class="price">Rs.<?php echo $row[3]; ?></div>

                                       
                                        <div class="clearfix">
                                            <div class="pull-left">
                                               
                                                <a class="add-cart" href="cart_proc.php?pid=<?php echo $row[0]; ?>&qty=1">
                                                    <span class="fa fa-cart-plus">
                                                    </span>Add To Cart</a>
                                                    
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                            
                            <!--Shop Item-->
                            <!--<div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/1.jpg" alt="" />
                                        <div class="overlay-box">
                                            <ul class="cart-option">
                                                <li><a href="shop-single.php"><span class="fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="shop-single.php">Happy Ninja</a></h3>
                                        <div class="price">$18.00</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <a class="add-cart" href="shop-single.php"><span class="fa fa-cart-plus"></span>Add To Cart</a>
                                            </div>
                                            <div class="pull-right">
                                                <--Rating-->
                                                <!--<div class="rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>-->
                            
                            <!--Shop Item-->
                            <!--<div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/3.jpg" alt="" />
                                        <div class="overlay-box">
                                            <ul class="cart-option">
                                                <li><a href="shop-single.php"><span class="fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="shop-single.php">Patient Ninja</a></h3>
                                        <div class="price">$35.00</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <a class="add-cart" href="shop-single.php"><span class="fa fa-cart-plus"></span>Add To Cart</a>
                                            </div>
                                            <div class="pull-right">-->
                                                <!--Rating-->
                                                <!--<div class="rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>-->
                            
                            <!--Shop Item-->
                            <!--<div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/4.jpg" alt="" />
                                        <div class="overlay-box">
                                            <ul class="cart-option">
                                                <li><a href="shop-single.php"><span class="fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="shop-single.php">Ninja Silhouette</a></h3>
                                        <div class="price">$20.00</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <a class="add-cart" href="shop-single.php"><span class="fa fa-cart-plus"></span>Add To Cart</a>
                                            </div>
                                            <div class="pull-right">-->
                                                <!--Rating-->
                                                <!--<div class="rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>-->
                            
                            <!--Shop Item-->
                            <!--<div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/5.jpg" alt="" />
                                        <div class="overlay-box">
                                            <ul class="cart-option">
                                                <li><a href="shop-single.php"><span class="fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="shop-single.php">Premium Quality</a></h3>
                                        <div class="price">$35.00</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <a class="add-cart" href="shop-single.php"><span class="fa fa-cart-plus"></span>Add To Cart</a>
                                            </div>
                                            <div class="pull-right">
                                                <--Rating-->
                                                <!--<div class="rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!-Shop Item-->
                            
                            <!--Shop Item-->
                            <!--<div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/9.jpg" alt="" />
                                        <div class="overlay-box">
                                            <ul class="cart-option">
                                                <li><a href="shop-single.php"><span class="fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="shop-single.php">Ship Your Idea</a></h3>
                                        <div class="price"><span class="discount">$15.00</span>$12.00</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <a class="add-cart" href="shop-single.php"><span class="fa fa-cart-plus"></span>Add To Cart</a>
                                            </div>
                                            <div class="pull-right">
                                                <--Rating-->
                                                <!--<div class="rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        Post Share Options-->
                        <!-- <div class="styled-pagination">
                            <ul class="clearfix">
                                <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
                            </ul>
                        </div> -->
                    <!--</div>
                </div>
                
                <-Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12">
                    <aside class="sidebar">
                        
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search ..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h3>Categories</h3>
                                <div class="separater"></div>
                            </div>
                            <ul class="cat-list">
                                <?php 
                                    
                                                    $result = mysql_query("select * from category");
                                                    $row = mysql_fetch_row($result);
                                
                                                    while($row)
                                                    {
                
                                                    ?>
                                                        <li><a href="products.php?id=<?php echo $row[0]; ?>"><?php echo $row[1]; ?></a></li>
                                                        
                                                    <?php 
            
                                                        $row = mysql_fetch_row($result);
                                                    }
                                                ?>
            
                            </ul>
                        </div>
                        
                        <!-- Price Filters -->
                        <!-- <div class="sidebar-widget price-filters rangeslider-widget">
                            <div class="sidebar-title">
                                <h3>Filter By Price</h3>
                                <div class="separater"></div>
                            </div>
                            <div class="range-slider-one clearfix">
                                <div class="price-range-slider"></div>
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <a href="#" class="theme-btn btn-style-one">Filtter</a>
                                    </div>
                                    <div class="pull-right">
                                        <div class="title">Price:</div>
                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- Top Related Posts -->
                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title">
                                <h3>Popular Products</h3>
                                <div class="separater"></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.php"><img src="images/resource/products/prod-thumb-1.jpg" alt=""></a></figure>
                                <h4><a href="shop-single.php">Woo Album #4</a></h4>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="price">$9.00</div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.php"><img src="images/resource/products/prod-thumb-2.jpg" alt=""></a></figure>
                                <h4><a href="shop-single.php">Happy Ninja</a></h4>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="price">$ 18.00</div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.php"><img src="images/resource/products/prod-thumb-3.jpg" alt=""></a></figure>
                                <h4><a href="shop-single.php">Ninja Silhouette</a></h4>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="price">$20.00</div>
                            </div>
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
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

<!-- shop27:38-->
</html>