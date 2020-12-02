<?php 
/* Template Name: Технології */
 ?>

<?php get_header(); ?>
	
	<?php include 'menu.php'; ?>


<div class="container tech">
  <div class="row">
    <div class="col-lg-12">
     <section>
					 <?php the_post_thumbnail('big-photo', ''); ?>
				</section>
    </div>
    <div class="col-lg-12">
		<h2>
			<?php the_title(); ?>
		</h2>
      <p>
		  <?php the_content();?>
		</p>
    </div>
  </div>
</div>


<style>
	body{
background: #f3f3f3;
	}
	
	.top-nav{
		background: transparent;
	}
	
	.tech section{
		text-align:center;
		margin-top:-14px;
		position:relative;
	}
	
	.tech section img{
		width:80% !important;
	}
	
	.tech .row h2{
		width:100%;
		margin-top:2rem;
		text-align:center;
		text-transform:uppercase;
		font-family:'Roboto', sans-serif;
		font-weight: 600;
		color: #666;
		letter-spacing:3px;
	}
	
	.tech .row p {
		text-indent:42px;
		font-family:'Helvetica', sans-serif;
		padding:15px;
		margin-top:-2rem;
		text-align:justify;
	}
	
	
	@media(max-width: 992px){
		.tech section img{
		width:100% !important;
		height: auto !important;
	
	}
	}
	
</style>

<?php get_footer(); ?>