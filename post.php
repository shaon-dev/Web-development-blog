<?php include "inc/header.php"  ?>

<?php include "inc/slider.php"  ?>
<?php include "config/config.php"  ?>
<?php include "lib/Database.php"  ?>


<?php
 $db = new Database();
 if(!isset($_GET['id'])||($_GET['id'])){
	//header(string: "Location:404.php");
	echo "";
	
}else{
	$id = $_GET['id'];
	
}

 
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
<?php

$query = "select *from tbl_post";

$post = $db -> select ($query);

if($post){
	
	while($result=$post->fetch_assoc()){
	
?>		
		
		
		
			<div class="about">
				<h2><a href="post.php?id=<?php echo $result ['id']?>"><?php echo $result ['title']?></h2>
				<h4><?php echo $result ['time']?> <a href="#"><?php echo $result ['author']?></h4>
				<img src="images/post2.png" alt="MyImage"/>
				<p> <?php echo $result ['body']?></p>
				
				<div class="relatedpost clear">
					<h2>Related articles</h2>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				</div>
	</div>
<?php }?><!--end while loop-->
	<?php }else {}?>
		</div>
		<?php include "inc/sidebar.php"?>
	</div>
<?php include "inc/footer.php"?>