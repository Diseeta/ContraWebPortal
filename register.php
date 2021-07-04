<!DOCTYPE html>
<html lang="en">

<!-- login27:42-->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Login Page</title>
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
                    <h1>Register</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h2>Register</h2>
                    
                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <!--Login Form-->
                        <form action="register_process.php" method="POST" >
                            <div class="form-group">
                                <label>Enter Name</label>
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label>Enter Email Address</label>
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="Password" name="password" placeholder="Password" required>
                            </div>

                            <div class="form-group text-right">
                                <!-- <input type="submit" class="theme-btn btn-style-one"  name="submit-form"> --> 
                                <input type="submit" name="submit" value="Register" class="theme-btn btn-style-one">   
                            </div>
                            <a href="login.php" class="psw">Have an Account?</a>
                                </a>
                               
                        </form>      
                    </div>
                    <!--End Register Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Login Section-->

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

<!-- login27:42-->
</html>