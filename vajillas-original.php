<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Vajillas</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<?php category_menu('vajillas'); ?>
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Productos</h4>-->
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<?php
						// producto($title,$imgSmall,$imgBig,$description)
						producto(
							'Vajilla Redondeada 20 piezas',
							'img/productos/vajillas/V002V-copy.jpg',
							'',
							'Vajilla Redondeada 20 (veinte) piezas para 4 (cuatro) personas en porcelana. (Plato llano 9¨)<br>SAL-VAJI20R105: Vajilla Redondeada 20 (veinte) piezas para 4 (cuatro) personas en porcelana. (Plato llano 10.5¨)'
							);
						producto(
							'Vajilla Cuadrada 20 piezas',
							'img/productos/vajillas/V003V-copy.jpg',
							'',
							'Vajilla Cuadrada 20 (veinte) piezas para 4 (cuatro) personas en porcelana. (Plato llano 10.5¨)'
							);											
						?>						
					</ul>
					</section>
				</div>
			</div>
		</div>
</div>
	</section>
<?php footer(); ?>