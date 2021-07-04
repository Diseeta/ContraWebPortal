<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- checkout27:41-->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Checkout</title>
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
                    <h1>Check Out</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.php">Home</a></li>
                    <li>Check Out</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--CheckOut Page-->
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li><span class="fa fa-window-maximize"></span>Returning customer? <a href="#">Click here to login</a></li>

                <li><span class="fa fa-window-maximize"></span>Have a coupone? <a href="#">Click here to enter your code</a></li>
            </ul>
            
            <!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="#">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <h3>Billing Details</h3>
                            </div>

                            <div class="row clearfix">
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Last Name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Company Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Country</div>
                                    <select>
                                        <option>Pakistan</option>
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>Usa</option>
                                    </select>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                </div>

                                <div class="form-group col-md-12 col-sm-12">
                                    <input type="text" name="field-name" value="" placeholder="Apartment,suite,unit etc. (optional)">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Postcode/ ZIP</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Create An Account?</label>
                                    <div class="text">Create an account by entering the information below. if you are a returning custoer please login at the top of the page.</div>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label"><span>Account Password</span></div>
                                    <input type="password" name="field-name" value="" placeholder="Password">
                                </div>
                                
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <h3>Ship to a different address?</h3>
                            </div>
                            
                            <div class="row clearfix">
                            
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Last Name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 ">
                                    <div class="field-label">Company Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 ">
                                    <div class="field-label">Country</div>
                                    <select>
                                        <option>Pakistan</option>
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>Usa</option>
                                    </select>
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 ">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                    
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 ">
                                   <input type="text" name="field-name" value="" placeholder="Apartment,suite,unit etc. (optional)">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 ">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Postcode/ ZIP</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 ">
                                    <div class="field-label">Other Notes</div>
                                    <textarea class="" placeholder="Notes about your order,e.g. special notes for delivery." ></textarea>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
            <!--End Checkout Details-->
            
            <!--Order Box-->
            <div class="order-box">
                <div class="sec-title">
                    <h2>Your Order</h2>
                </div>
                <div class="title-box clearfix">
                    <div class="col">PRODUCT</div>
                    <div class="col">TOTAL</div>
                </div>
                <ul>
                    <li class="clearfix"><strong>Patient Ninja 1</strong><span>$35.00</span></li>
                    <li class="clearfix">SUBTOTAL<span>$35.00</span></li>
                    <li class="clearfix">SHIPPING<span class="free">Free Shipping</span></li>
                    <li class="clearfix">TOTAL<span>$35.00</span></li>
                </ul>
            </div>
            <!--End Order Box-->
            
            <!--Payment Box-->
            <div class="payment-box">
                <div class="upper-box">
                    
                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-2" checked>
                                    <label for="payment-2"><strong>Direct Bank Transfer</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1">
                                    <label for="payment-1"><strong>Check Payments</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Cash on Delivery</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-4">
                                    <label for="payment-4"><strong>PayPal</strong><span class="image"><img src="images/resource/paypal.jpg" alt="" /></span></label>
                                    <a href="#" class="what-paypall">What is PayPal?</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lower-box text-right">
                    <a href="#" class="theme-btn btn-style-one">Place Order</a>
                </div>
            </div>
            <!--End Payment Box-->
        </div>
    </div>
    <!--End CheckOut Page-->

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

<!-- checkout27:42-->
</html>