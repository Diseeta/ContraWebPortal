

<?php 
												
	$cid=$_GET['cid'];
	
	$result = mysql_query("select * from product where cat_id=$cid ");
	$row = mysql_fetch_row($result);
	
	
	while($row)
	{
												
?>

 <div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="images/resource/product-1.jpg<?php echo $row[6]; ?>" alt="" />
                                        <div class="overlay-box">
                                            <ul class="cart-option">
                                                <li><a href="shop-single.php?pid=<?php echo $row[0]; ?>"><span class="fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php 
                                        if($row[9] <= 0)
                                        {

                                    ?>

                                    <!-- <div>
                                        <p>Out of stock</p>
                                    </div> -->

                                    <?php } ?>
                                    <div class="lower-content">
                                        <h3><a href="shop-single.php?pid=<?php echo $row[0]; ?>"><h6><a href="single.php?pid=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a></h6></a></h3>
                                        <div class="price">Rs.<?php echo $row[3]; ?></div>

                                       
                                        <div class="clearfix">
                                            <div class="pull-left">
                                               
                                                <a class="add-cart" href="cart_proc.php?pid=<?php echo $row[0]; ?>&qty=1">
                                                    <span class="fa fa-cart-plus">
                                                    </span>Add To Cart</a>
                                                    <?php  ?>
                                            </div>
                                            
                                        </div>

                                        <?php 
			
										$row = mysql_fetch_row($result);
										}
									?>
                                        
                                    </div>
                                </div>
                            </div>