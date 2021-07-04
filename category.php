<div class="categories">
	<h3>Categories</h3>
	<ul class="tree-list-pad">
	
	<?php 
			$result = mysql_query("select * from category");
			$row = mysql_fetch_row($result);
			
			while($row)
			{
			
	?>
	
		<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span><?php echo $row[1]; ?> </span></a></label>
			<ul>
			
			
					<li><input type="checkbox" id="item-0-0" /><a href="products.php?cid=<?php echo $row[0]; ?><?php echo $row1[1]; ?> </a></li>	
			<?php 
			
					$row1 = mysql_fetch_row($result1);
					}
			?>
				
			</ul>
		</li>
		<?php
			$row = mysql_fetch_row($result);
				}
		?>
	</ul>
</div>