<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Dinner Set</h1>				
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
							'Rounded Dinner Set <br>20 pieces in porcelain',
							'img/productos/vajillas/SAL-VAJI20R9-SAL-VAJI20R105.jpg',
							'',
							'<small>SAL-VAJI20R9 / SAL-VAJI20R105</small><br>&raquo; Tea cup&saucer 4+4 pcs.<br>&raquo; 7.5” Flat Plate 4 pcs.<br>&raquo; 8” Soup Plate 4 pcs.<br>&raquo; 9” Dinner Plate 4 pcs. (SAL-VAJI20R9)<br>&raquo; 10.5” Dinner Plate 4 pcs. (SAL-VAJI20R105)'
							);
						producto(
							'Square Dinner Set <br>20 pieces in porcelain',
							'img/productos/vajillas/SAL-VAJI20C.jpg',
							'',
							'<small>SAL-VAJI20C</small><br>&raquo; Tea cup&saucer 4+4 pcs.<br>&raquo; 7.5” Flat Plate 4 pcs.<br>&raquo; 8” Soup Plate 4 pcs.<br>&raquo; 10” Dinner Plate 4 pcs.'
							);
						
						// SAL-VAJI20R9-SAL-VAJI20R105											
						?>						
					</ul>
					</section>
				</div>
			</div>
		</div>
</div>
	</section>
<?php footer(); ?>