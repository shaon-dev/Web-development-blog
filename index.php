<?php include "inc/header.php"  ?>

<?php include "inc/slider.php"  ?>
<?php include "config/config.php"  ?>
<?php include "lib/Database.php"  ?>

<?php
 $db = new Database();



?>




	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
		
		
		
<?php

$query = "select *from tbl_post limit 3";

$post = $db -> select ($query);

if($post){
	
	while($result=$post->fetch_assoc()){
	
	
	

?>
			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result ['id']?>"><?php echo $result ['title']?></a></h2>
				<h4><?php echo $result ['time']?> <a href="#"><?php echo $result ['author']?></a></h4>
				 <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				<p>
                    <?php echo $result ['body']?>
                </p>
				<div class="readmore clear">
                    <a href="post.php?id=<?php echo $result ['id']?>">Read More</a>
				</div>
			</div>
<?php }?><!--end while loop-->
	<?php }else {}?>

		</div>

	<?php include "inc/sidebar.php"?>		
		</div>

	

<?php include "inc/footer.php"?>