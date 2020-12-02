
<?php 

/*

Template Name: category

 */


 ?>


<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>





<div class="container-fluid wrapp_offers">


  <div class="container">
              <header class="header_offers">
                <h1> АКЦІЇ</h1>
              </header>


  
    <div class="row">

<?php $args = array(
  'sort_order'   => 'ASC',
  'sort_column'  => 'post_title',
  'hierarchical' => 1,
  'child_of'     => 20,
  'parent'       => -1,
  'post_type'    => 'page',
  'post_status'  => 'publish',
); 
$pages = get_pages( $args );
foreach( $pages as $post ){
  setup_postdata( $post );
  ?>


      <div class="col-lg-4">
  
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
wp_reset_postdata(); ?>





    
    </div>
  </div>
</div>





<?php include 'footer.php'; ?>