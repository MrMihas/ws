<?php 


/*

Template Name: Поповнення

 */



 ?>



<?php get_header(); ?>

<?php include 'menu.php'; ?>



<div class="container-fluid wrapp_offers">


  <div class="container">
              <header class="header_offers">
                <h1> Поповнення</h1>
              </header>


  


    <div class="row">
<p style="text-indent: 42px; font-size: 18px;font-family: 'Roboto'; padding:12px; text-align:justify;">
Тепер Ви можете поповнювати свiй рахунок в будь який зручний для Вас час.
 Зарахування коштiв на Ваш баланс проходить миттєво.
  Для поповнення потрiбно знати номер свого особового рахунку.
   <b>Номер свого рахунку (UID)</b> Ви можете побачити в <a href="#0">особистому кабiнетi</a> 
   або запитати у <b>оператора за номером 123456</b>.	</p>



<?php $args = array(
  'sort_order'   => 'ASC',
  'sort_column'  => 'post_title',
  'hierarchical' => 1,
  'child_of'     => 138,
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
			 <div class="img_box">
				  <?php the_post_thumbnail('post-preview'); ?>
			 </div>
  
        


  
          <div class="card-body_offers">
  
           <h5 class="card-title"><?php the_title(); ?></h5>
  
<!--   
                <span class="card-text"> <?php the_excerpt(); ?> </span> -->
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


<?php get_footer();?>

  
