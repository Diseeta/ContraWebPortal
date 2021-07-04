<?php 
include('conn.php'); ?>

<header class="main-header header-style-one">
        <div class="auto-container">
            <div class="header-lower">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="index-2.php"><img src="images/logo-2.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">Home</a></li>
                                        
                                    </li>
                                    <li class="dropdown"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.php">About Company</a></li>
                                            
                                            <li><a href="team.php">Our Perfect Expert</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="service-detail.php">Services</a>
                                        
                                    </li>
                                    <li><a href="projects.php">Projects</a></li>
                                   
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>                                        
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
                                            
                                            <!-- <li><a href="shoping-cart.php">Cart Page</a></li>
                                            <li><a href="checkout.php">Checkout Page</a></li> -->
                                           
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="career.php">Career</a></li>
                                    <li><a href="login.php">Log in</a></li>
                                    
                        </nav><!-- Main Menu End-->                        

                        <!-- Outer Box-->
                        <div class="outer-box">
                            <!--Search Box-->
                           <!--  <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="#">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>