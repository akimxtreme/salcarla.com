<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Appliances</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<?php category_menu('electrodomesticos'); ?>
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Productos</h4>-->
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<?php
						// producto($title,$imgSmall,$imgBig,$description)
						producto(
							'Mini Food <br>Chopper',
							'img/productos/electrodomesticos/SAL-FP375.jpg',
							'',
							'<small>SAL-FP375</small><br>&raquo; 1.5 cup Bowl Capacity.<br>&raquo; Stainless Steel slicing and shredding disc.<br>&raquo; Chopping and mixing blade.<br>&raquo; Mixer.<br>&raquo; Food chute with pusher'
							);
						producto(
							'Black Hand Mixer SALCAR <br>5 speed',
							'img/productos/electrodomesticos/SAL-BATM002.jpg',
							'',
							'<small>SAL-BATM002</small><br>&raquo; One-touch beater eject.<br>&raquo; Chrome beaters and dough hooks.<br>&raquo; 240W power.'
							);
						producto(
							'White Hand Mixer SALCAR <br>5 speed',
							'img/productos/electrodomesticos/SAL-BATM001.jpg',
							'',
							'<small>SAL-BATM001</small><br>&raquo; One-touch beater eject.<br>&raquo; Chrome beaters and dough hooks.<br>&raquo; 240W power.'
							);
						producto(
							'White Stand Mixer SALCAR <br>5 speed',
							'img/productos/electrodomesticos/SAL-BATP001.jpg',
							'',
							'<small>SAL-BATP001</small><br>&raquo; Plastic Bowl<br>&raquo; One-touch beater eject.<br>&raquo; Chrome beaters and dough hooks.<br>&raquo; 300W power.'
							);
						producto(
							'White Stand Mixer SALCAR <br>5 speed',
							'img/productos/electrodomesticos/SAL-BATP003.jpg',
							'',
							'<small>SAL-BATP003</small><br>&raquo; Steel Bowl<br>&raquo; One-touch beater eject.<br>&raquo; Chrome beaters and dough hooks.<br>&raquo; 300W power.'
							);
						producto(
							'Black Stand Mixer SALCAR <br>5 speed',
							'img/productos/electrodomesticos/SAL-BATP002.jpg',
							'',
							'<small>SAL-BATP002</small><br>&raquo; Plastic Bowl<br>&raquo; One-touch beater eject.<br>&raquo; Chrome beaters and dough hooks.<br>&raquo; 300W power.'
							);
						producto(
							'Black Stand Mixer SALCAR <br>5 speed',
							'img/productos/electrodomesticos/SAL-BATP004.jpg',
							'',
							'<small>SAL-BATP004</small><br>&raquo; Steel Bowl<br>&raquo; One-touch beater eject.<br>&raquo; Chrome beaters and dough hooks.<br>&raquo; 300W power.'
							);
						producto(
							'Electric Kitchen SALCAR <br>1 burner',
							'img/productos/electrodomesticos/SAL-COCIE001.jpg',
							'',
							'<small>SAL-COCIE001</small><br>&raquo; Durable stainless steel heating element.<br>&raquo; Thermostatic control from simmer to boil.<br>&raquo; Durable and easy clean spray plastic finishing.<br>&raquo; Compact and portable.<br>&raquo; Household use only.'
							);
						producto(
							'Electric Kitchen SALCAR <br>2 burners',
							'img/productos/electrodomesticos/SAL-COCIE002.jpg',
							'',
							'<small>SAL-COCIE002</small><br>&raquo; Durable stainless steel heating element.<br>&raquo; Thermostatic control from simmer to boil.<br>&raquo; Durable and easy clean spray plastic finishing.<br>&raquo; Compact and portable.<br>&raquo; Household use only.'
							);
						producto(
							'Chrome Blender SALCAR <br>5 speed',
							'img/productos/electrodomesticos/SAL-LICS001.jpg',
							'',
							'<small>SAL-LICS001</small><br>&raquo; Glass jar with 1.5 liters capacity.<br>&raquo; Stainless steel blade.<br>&raquo; 500W Power.'
							);
						producto(
							'Chrome Blender SALCAR <br>12 speed',
							'img/productos/electrodomesticos/SAL-LICS002.jpg',
							'',
							'<small>SAL-LICS002</small><br>&raquo; Glass jar with 1.5 liters capacity.<br>&raquo; Stainless steel blade.<br>&raquo; 800W Power.'
							);
						producto(
							'Blender SALCAR Plastic <br>Base Black 2 speed',
							'img/productos/electrodomesticos/SAL-LICP003.jpg',
							'',
							'<small>SAL-LICP003</small><br>&raquo; Plastic jar with 1.5 liters capacity.<br>&raquo; 450W Power.'
							);
						producto(
							'Blender SALCAR Plastic Base White 2 speed',
							'img/productos/electrodomesticos/SAL-LICP004.jpg',
							'',
							'<small>SAL-LICP004</small><br>&raquo; Plastic jar with 1.5 liters capacity.<br>&raquo; 450W Power.'
							);
						/*
						producto(
							'',
							'img/productos/electrodomesticos/.jpg',
							'',
							'<small></small><br>&raquo; <br>&raquo; <br>&raquo; '
							);
						*/														
						
						?>					
					</ul>
					</section>
				</div>
			</div>
		</div>
</div>
	</section>
<?php footer(); ?>