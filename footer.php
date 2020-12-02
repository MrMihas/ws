
<footer>


<!-- Start SiteHeart code -->
<script>
(function(){
var widget_id = 902202;
_shcp =[{widget_id : widget_id}];
var lang =(navigator.language || navigator.systemLanguage 
|| navigator.userLanguage ||"en")
.substr(0,2).toLowerCase();
var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
var hcc = document.createElement("script");
hcc.type ="text/javascript";
hcc.async =true;
hcc.src =("https:"== document.location.protocol ?"https":"http")
+"://"+ url;
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
<!-- End SiteHeart code -->
	




<div class="footer_container container">
           
            <div class="row justify-content-start">
              
               <div class="col-lg-4">
                <div class="about_block_footer">
                   
                   <div class="logo">
                       <a href="#"> <?php the_custom_logo();?></a>
                   </div>
                   <p>
                       <?php the_field('about', 18); ?>
                        <a href="/договір/"  style="color: #2a4e8c;"  >Публічний договір</a>
                   </p>
                   
                   <small>
                   &#9400 Web-Service | Усі права захищено  2008 - <?php echo date(Y); ?>
                   </small>
                   
                </div>
                </div>
                
                
                
                
                <div class="col-lg-5">
                <div class="adress_block_footer">
                    <adress><i class="fa fa-map-marker" aria-hidden="true"></i>
                      <?php  the_field('address', 18); ?>
                    </adress> 
                    <br>
                       <br>
                        <p> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_field('time', 18); ?> </p>

                    
                </div>
                </div>
                
                
                
                
                
                <div class="col-lg-3">
                <div class="contact_block_footer">
                
                         <p>
                       <a href="tel:<?php the_field('phones_1', 18);  ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('phones_1', 18);?></a>
                      </p>
                       
                       <p>
                         <a href="tel:<?php  the_field('phones_2', 18);?>"><i class="fa fa-phone" aria-hidden="true"></i><?php  the_field('phones_2', 18);?></a>
                     </p>
                       
                       <p>
                        <a href="tel:<?php  the_field('phones_3', 18); ?>">Viber / Telegram  <i class="fa fa-mobile" aria-hidden="true"></i><?php  the_field('phones_3', 18);?></a>
                      </p>
                      
                        <p>
                    <a href="tel:<?php  the_field('phones_3', 18);?>"><i class="fa fa-mobile" aria-hidden="true"></i><?php  the_field('phones_3', 18);?></a>
                      </p>
                      
                      <p>
                          <a href="mailto:<?php the_field('email', 18);  ?>"> <i class="fa fa-envelope-o" aria-hidden="true"> </i> <?php the_field('email', 18); ?>  </a>
                          
                      </p>
                </div>

                <small class="copyright">
                       &#9400 Web-Service | Усі права захищено  2008 - <?php echo date(Y); ?>
                   </small>
                </div>
            </div>
        </div>
</footer>


<div class="modal">
  <div class="modal-content">
    <div class="close">&times;</div>
    <h4>Заявка на підключення</h4>
    <p>*Залиште свої контактні дані </p>
    <div class="modal-form">
<?php  ?>
<!-- echo do_shortcode('[contact-form-7 id="92" title="Контактна форма 1"]'); -->

    </div>
  </div>
</div>



<!-- <script src="jquery/jquery-3.3.1.min.js"></script> -->
<!-- <script
  src="https://code.jquery.com/jquery-2.2.4.js"></script> -->
<!-- <script src="js/main.js"></script> -->
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<!-- <script src="js/snap.svg-min.js"></script> -->
<!-- <script src="js/js.js"></script> -->
<?php wp_footer(); ?>


<script>
   $("#dropdown_btn").click(function(){
    $("#submenu").slideToggle(500);
   })
</script>

<script>
    $('.slider').slick({
  autoplay: true,
  speed: 800,
  lazyLoad: 'progressive',
  arrows: false,
  dots: true,
}).slickAnimation();
  
</script>
 

<script>


$('.menu-btn').on('click', function(e) {
  e.preventDefault();
  $('.top-nav_menu').toggleClass('menu_active');
  $('.content').toggleClass('content_active');
})


	

  
  var link = $('.menu-btn');
  var link_active = $('.menu-btn_active');
  
  link.click(function(){
    link.toggleClass('menu-btn_active');
  });
  link_active.click(function(){
    link.removeClass('menu-btn_active');
  });

 

</script>

<script>



$(function() {
  $(".top-nav_menu").on('click', 'li a', function() {

    $(".link_active").removeClass('link_active');
      $(this).addClass('link_active');
  })
});
 

</script>

<script>
   mobile_menu.onclick = function responsiveMenu() {
   let m = document.getElementById('topNav');

  if(m.className === 'menu_block') {
    m.className += ' menu_block_mobile';
  } else{
    m.className === 'menu_block';
   }
 }

</script>




<script>
  function openTab(evt, cityTab) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityTab).style.display = "block";
    evt.currentTarget.className += " active";
}


document.getElementById("defaultOpen").click();





</script>





</body>
</html>