<?php 


/*

Template Name: Налаштування

 */



 ?>





<?php get_header(); ?>

<?php include 'menu.php'; ?>


<div class="container">
  
        
        <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Помилки з'єднання
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
     
     
      <div class="card-body">
       
<div class="setup_p">

            <div class="error_1">
                <span >Помилка 676 </span> 
                <br>
                <span style="font-size: 16px;">Лінія зайнята</span>
                    <p> Перевстановіть з'єднання і спробуйте ще раз.</p>
                </div>


        <div class="error_1">
            <span>Помилка 678 </span>
            <br>
                <span style="font-size: 16px;">Bіддалений комп'ютер не відповів вчасно</span>
                <p> Якщо з'єднання не проходить і видається діагностика <b>"Помилка 678"</b>, спробуйте скинути системні дані мережних підключень наступним чином: <b>"Пуск" -> "Виконати", введіть команду "netsh interface ip reset log.txt"</b>.</p>
        </div>
        
        
        
     <div class="error_1">
        
                <span>Помилка 691 </span>
                <br>
                   <span style="font-size: 16px;">Hеправильне ім'я користувача або пароля</span>
            <p>Перевірте правильність набору виданого вам логіна і пароля, зверніть увагу на регістр, і на розкладку клавіатури.</p>
         </div>
        


             <div class="error_1">
        <span>Помилка 769</span>
        <br>
        <span style="font-size: 16px;">Зазначенe призначення не досяжно</span>

        <p> 
Швидше за все у Вас відключена мережева карта. 
Що б включити мережеву карту потрібно:
Правою клавішею ведмедики натискаєте на "Мій комп'ютер" або відкриваєте "Панель управління" і заходите в "Параметри системи", у вкладці вибираєте "Властивості" і натискаєте.
З'явитися вікно "Параметри системи" далі вибираєте вкладку "Обладнання" і натискаєте на "Диспечер пристроїв".
У списку шукайте "Мережеві карти" (Мережевий адаптер, Мережеві плати), натискаєте зліва на значок "+", відкривається список встановлених на ваш комп'ютер мережевих карт, вибираєте свою мережеву карту.
Натискаєте правою клавішею мишки на мережеву карту і у вкладці натискаєте на "Задіяти".
           </p>
                </div>
          </div>
      </div>
    </div>
  </div>




  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Рекомендовані антивіруси
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body" >
        <a href="https://eset.ua/" class="antivirus eset" target="_blank"> </a>
        
        <br>
        
         <a href="http://www.greatis.com/unhackme/ru/download.htm" class="antivirus unhack" target="_blank"></a>
        
      </div>
    </div>
  </div>





  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Тестування швидкості
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
           <a href="http://speedtest.net/" class="speedtest" target="_blank"></a>

      
           <a href="https://2ip.ua/ua/services/ip-service/speedtest" class="iplogo" target="_blank"></a>
      </div>

    </div>
  </div>





  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Налаштування PPPoE
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body last_tab container">


        <div class="row">
          <div class="col-lg-4 "> <?php include 'modalXP.php'; ?></div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4 "> <?php include 'modalSeven.php'; ?></div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4 "><?php include 'modalEight.php'; ?></div>
         
        </div>
        <!-- /.row -->

     
        
     

      

      </div>
 </div>
    </div>
  </div>
  
</div>
        
    





<?php get_footer(); ?>

