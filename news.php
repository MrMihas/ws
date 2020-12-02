<?php 


/*

Template Name: новини

 */


 ?>

 <?php get_header(); ?>
<?php include 'menu.php'; ?>








<div class="container">
	<div class="row">



<?php 


$posts = get_posts( array(
	'numberposts' => 5,
	'tag'    => 'News',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => false, 
) );

$posts = get_posts( $args );

foreach( $posts as $post ){
	setup_postdata($post);
	?>




 <div class="col-lg-6">
  
         <div class="card" >
  
         <?php the_post_thumbnail('post-preview', ''); ?>


  
          <div class="card-body_offers">
  
           <h5 class="card-title"><?php the_title(); ?></h5>
  
  
                <span class="card-text"> <?php the_excerpt(); ?> </span>
                   <a href=" <?php the_permalink(); ?>" class="btn btn-primary">Детальніше</a>
           </div>
          </div>   
  
        </div>



	<?php
}

wp_reset_postdata(); 


?>



	</div>

</div>





		





 <?php get_footer(); ?>