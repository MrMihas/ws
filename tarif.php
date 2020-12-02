<?php 


/*

Template Name: Тарифи

 */


 ?>


<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>


<div class="container-fluid tarif_block_main ">
	<div class="container">
		<div class="col-md-8 offset-md-2 tarif_block_title">
			<h1>Тарифні плани*</h1>
					<small>(для фізичних осіб)</small>
			<p>
				<strong>*Всі тарифні плани авансові</strong>: <br> працюють тільки в разі наявності коштів на особовому рахунку абонента. <br>Списання коштів виконується рівними частинами кожен день.
			</p>

		</div>

					<header class="sity_tarif">
				<h2>Для багатоквартирних будинків</h2>
			</header>	
		<div class="row ">


			<div class="col-lg-4 offset-lg-1">
				<div class="economy">
				    
				    <div class="overlay_tarif">
	
	<a data-target="tarif" href="#0" class="btn-primary btn tarif_btn">Підключитись</a>

</div>
				    
					<div class="tarif_title">
						<h2>Економний </h2>
					</div>
					<div class="cost">
						<span> <?php the_field('econom'); ?></span><br><small>грн/міс</small>
					</div>
					<div class="speed">
							<span>30 </span> <br><small>Мбіт/сек</small>
					</div>
	
					<div class="limits">
						<span>Обсяг тарифу : </span>
						<h4> НЕОБМЕЖЕНО</h4>
					</div>
	
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-4 offset-lg-1">
				<div class="standart">
				    
				    				    <div class="overlay_tarif">
	
	<a data-target="tarif" href="#0" class="btn-primary btn tarif_btn">Підключитись</a>

</div>
					<div class="tarif_title">
						<h2>Стандарт </h2>
					</div>
						<div class="cost">
						<span><?php the_field('standart'); ?></span>
						<br>
						<small>грн/міс</small>
					</div>
					<div class="speed">
							<span>50 </span><br> <small>Мбіт/сек</small>
					</div>
	
					<div class="limits">
						<span>Обсяг тарифу : </span>
						<h4> НЕОБМЕЖЕНО</h4>
					</div>
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-4 offset-lg-1">
				<div class="comfort">
				    				    <div class="overlay_tarif">
	
	<a data-target="tarif" href="#0" class="btn-primary btn tarif_btn">Підключитись</a>

</div>
				    
					<div class="tarif_title">	
						<h2>Комфорт </h2>
					</div>
						<div class="cost">
						<span><?php the_field('comfort'); ?></span><br><small>грн/міс</small>
					</div>
					<div class="speed">
							<span>70 </span> <br><small>Мбіт/сек</small>
					</div>
	
					<div class="limits">
						 <span>Обсяг тарифу : </span>
						<h4>НЕОБМЕЖЕНО</h4>
					</div>
				</div>
			</div>
			<!-- /.col-lg-3 -->
			<div class="col-lg-4 offset-lg-1">
				<div class="premium">
				    				    <div class="overlay_tarif">
	
	<a data-target="tarif" href="#0" class="btn-primary btn tarif_btn">Підключитись</a>

</div>
				    
					<div class="tarif_title">
						<h2>Преміум </h2>
					</div>
						<div class="cost">
						<span><?php the_field('premium'); ?></span><br><small>грн/міс</small>
					</div>
					<div class="speed">
							<span>100 </span> <br><small>Мбіт/сек</small>
					</div>
	
					<div class="limits">
						<span>Обсяг тарифу : </span>
						<h4> НЕОБМЕЖЕНО</h4>
					</div>
				</div>
			</div>
			<!-- /.col-lg-3 -->
	
					</div>

				<!-- row -->

			

<div class="radio_block">
						<header class="sity_tarif">
					<h2>Для приватних будинків (по радіоканалу)</h2>
				</header>	
	
	<div class="row">
					<div class="col-lg-4">
							<div class="premium left_overlay">
							    <div class="overlay_tarif">
	
	<a data-target="tarif" href="#0" class="btn-primary btn tarif_btn">Підключитись</a>

</div>
					<div class="tarif_title">
						<h2>Економ <i class="fa fa-wifi" aria-hidden="true"></i></h2>
					</div>
						<div class="cost">
						<span><?php the_field('econom_radio'); ?></span><br><small>грн/міс</small>
					</div>
					<div class="speed">
							<span>4 </span><br> <small>Мбіт/сек</small>
					</div>
	
					<div class="limits">
						<span>Обсяг тарифу : </span>
						<h4> НЕОБМЕЖЕНО</h4>
					</div>
				</div>
					</div>
					<!-- /.col-md-4 -->
					<div class="col-lg-4">
							<div class="premium">
							    <div class="overlay_tarif bottom_overlay">
	
	<a data-target="tarif" href="#0" class="btn-primary btn tarif_btn">Підключитись</a>

</div>
					<div class="tarif_title">
						<h2>Стандарт <i class="fa fa-wifi" aria-hidden="true"></i></h2>
					</div>
						<div class="cost">
						<span><?php the_field('standart_radio'); ?></span><br><small>грн/міс</small>
					</div>
					<div class="speed">
							<span>6 </span> <br><small>Мбіт/сек</small>
					</div>
	
					<div class="limits">
						<span>Обсяг тарифу : </span>
						<h4> НЕОБМЕЖЕНО</h4>
					</div>
				</div>
					</div>
					<!-- /.col-md-4 -->
					<div class="col-lg-4">
							<div class="premium right_overlay">
							    <div class="overlay_tarif">
	
	<a data-target="tarif" href="#0" class="btn-primary btn tarif_btn">Підключитись</a>

</div>
					<div class="tarif_title">
						<h2>Преміум <i class="fa fa-wifi" aria-hidden="true"></i></h2>
					</div>
						<div class="cost">
						<span><?php the_field('premium_radio'); ?></span><br><small>грн/міс</small>
					</div>
					<div class="speed">
							<span>8 </span> <br><small>Мбіт/сек</small>
					</div>
	
					<div class="limits">
						<span>Обсяг тарифу : </span>
						<h4> НЕОБМЕЖЕНО</h4>
					</div>
				</div>
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.row -->
			</div>

	
	</div>
	
	
	</div>




	





















 

<?php include 'footer.php'; ?>