<?php 

/*

Template Name: single

 */


 ?>




<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>





<div class="container-fluid wrapp_offers">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<header class="offersPage_title">
					<h1><?php the_title(); ?></h1>
				</header>
				<hr>
			</div>
			<div class="col-lg-6 offset-md-3">
				<section class="offersPage_img">
					 <?php the_post_thumbnail('post-preview', ''); ?>
				</section>
			</div>
			<div class="col-lg-12">
				<section class="offersPage_text">
					 <?php the_content(); ?>
				</section>
			</div>
		</div>
	</div>
</div>




<?php include 'footer.php'; ?>



	