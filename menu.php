<div class="container-fluid top-navig">
  <header class="container">
    <div class="row align-items-center">
 <div class="col-lg-auto">
          <div class="logo">
            <a href="#0"> <?php the_custom_logo(); ?> </a>
         <!--     class="mobile_logo" alt="logotype"> -->
          </div>
        </div>



      <div class="col-lg">
          <div class="phones">
          
          
            <a href="tel:<?php  the_field('phones_3', 18); ?>">Viber / Telegram <i class="fa fa-mobile" aria-hidden="true"></i><?php  the_field('phones_3', 18); ?></a>
<!-- 
               <a href="tel:<?php  the_field('phones_2', 18); ?>"><i class="fa fa-mobile" aria-hidden="true"></i><?php  the_field('phones_2', 18); ?></a>
            
            <a href="tel:<?php  the_field('phones_1', 18); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php  the_field('phones_1', 18); ?></a>  -->
            <!-- the_field('phone_number_1', 26); -->
     
          
        </div>
      </div>
      <!-- /.col-md -->
      <div class="col-lg">
          <div class="cabinet">
          
          <a href="http://stat.ws.net.ua"><i class="fa fa-sign-in " aria-hidden="true"></i>В особистий кабінет</a>
        </div>
  
      </div>
      <!-- /.col-md -->
    </div>
  </header>
</div>
<!-- navigation -->



<nav class="container">
    <div class="top-nav">
      <div class="row ">
       
        <!-- /.col-md -->
        <div class="col-lg-12">

           <ul class="top-nav_menu">



    <?php wp_nav_menu( array(
  'menu'            => 'top_menu',  
  'container'       => 'ul', 
  'container_class' => 'top-nav_menu', 
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<li id="%1$s" class="%2$s">%3$s</li>',
  'depth'           => 0,
  'walker'          => '',
) ); ?>
 
            <!--
            <li><a href="index.php" class="link_active">Головна</a></li>
             <li><a href="tarif.php">Тарифи</a></li>
              <li><a href="servises.php">Послуги</a></li>
            <li><a href="settings.php">Налаштування</a></li>
            <li><a href="offers.php">Акції</a></li>
            <li><a href="#0">Новини</a></li>
            <li><a href="#0">Договір</a></li>
            <li><a href="#0">Контакти</a></li>

 -->



            <!-- mobile_tel -->
            <!-- <li> <a class="mobile_tel mobile_cab" href="http://stat.ws.net.ua"><i class="fa fa-sign-in " aria-hidden="true"></i>Oсобистий кабінет</a></li>

            <li><a class="mobile_tel" href="tel:+380414342982 "><i class="fa fa-phone" aria-hidden="true"></i>4-29-82</a></li>

            <li>   <a  <a class="mobile_tel" href="tel:+380938717952"><i class="fa fa-mobile" aria-hidden="true"></i>(093)871-79-52</a></li>
            
            <li><a class="mobile_tel" href="tel:+380978717952"><i class="fa fa-mobile" aria-hidden="true"></i>(097) 871-79-52</a></li> -->

          <a class="menu-btn" href="#0"><span></span></a>
          </ul>

<?php   wp_reset_postdata(); ?> 


        </div>
        <!-- /.col-md -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.top-nav -->
  </nav>