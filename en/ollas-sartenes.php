<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Cookware & Fry Pan</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<?php category_menu('ollas-sartenes'); ?>
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Productos</h4>-->
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<?php
						// producto($title,$imgSmall,$imgBig,$description)
                        echo '<h4 class="title_projects">Agata line</h4>';
						producto(
							'Fry Pan SALCAR <br>Agata Nonstick',
							'img/productos/ollas-sartenes/SAL-FPAGATA-NS.jpg',
							'',
							'<small>SAL-FPAGATA-NS</small><br>&raquo; Individual presentation in the following sizes:
7”, 8”, 9”, 9.5”, 10”, 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'
							);
						producto(
							'Square Griddle SALCAR <br>Agata Nonstick',
							'img/productos/ollas-sartenes/SAL-FPSAGATA28-NS.jpg',
							'',
							'<small>SAL-FPSAGATA28-NS</small><br>&raquo; Size: 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'
							);
						producto(
							'Wok SALCAR <br>Agata Nonstick',
							'img/productos/ollas-sartenes/SAL-WKAGATA28-NS.jpg',
							'',
							'<small>SAL-WKAGATA28-NS</small><br>&raquo; Size: 11” x 3”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'
							);	
						producto(
							'Cookware Set SALCAR <br>Agata Nonstick 8 pieces',
							'img/productos/ollas-sartenes/SAL-CWAGATA08-NS.jpg',
							'',
							'<small>SAL-CWAGATA08-NS</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'
							);	
						producto(
							'Cookware Set SALCAR <br>Agata Nonstick 9 pieces',
							'img/productos/ollas-sartenes/SAL-CWAGATA09-NS.jpg',
							'',
							'<small>SAL-CWAGATA09-NS</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'
							);
						producto(
							'Cookware Set SALCAR <br>Agata Nonstick 10 pieces',
							'img/productos/ollas-sartenes/SAL-CWAGATA10-NS.jpg',
							'',
							'<small>SAL-CWAGATA10-NS</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'
							);
						producto(
							'Fry Pan SALCAR <br>Agata Ceramic',
							'img/productos/ollas-sartenes/SAL-FPAGATA-CC.jpg',
							'',
							'<small>SAL-FPAGATA-CC</small><br>&raquo; Individual presentation in the following sizes: 7”, 8”, 9”, 9.5”, 10”, 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Wok SALCAR <br>Agata Ceramic',
							'img/productos/ollas-sartenes/SAL-WKAGATA28-CC.jpg',
							'',
							'<small>SAL-WKAGATA28-CC</small><br>&raquo; Size: 11” x 3”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Square Griddle SALCAR <br>Agata Ceramic',
							'img/productos/ollas-sartenes/SAL-FPSAGATA28-CC.jpg',
							'',
							'<small>SAL-FPSAGATA28-CC</small><br>&raquo; Size: 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Cookware Set SALCAR <br>Agata Ceramic 8 pieces',
							'img/productos/ollas-sartenes/SAL-CWAGATA08-CC.jpg',
							'',
							'<small>SAL-CWAGATA08-CC</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Cookware Set SALCAR Agata Ceramic 10 pieces',
							'img/productos/ollas-sartenes/SAL-CWAGATA10-CC.jpg',
							'',
							'<small>SAL-CWAGATA10-CC</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'							
							);
                        echo '<h4 class="title_projects">Ebano line</h4>';
						producto(
							'Fry Pan SALCAR <br>Ebano Nonstick',
							'img/productos/ollas-sartenes/SAL-FPEBANO-NS.jpg',
							'',
							'<small>SAL-FPEBANO-NS</small><br>&raquo; Individual presentation in the following sizes: 7”, 8”, 9”, 9.5”, 10”, 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Square Griddle SALCAR <br>Ebano Nonstick',
							'img/productos/ollas-sartenes/SAL-FPSEBANO28-NS.jpg',
							'',
							'<small>SAL-FPSEBANO28-NS</small><br>&raquo; Size: 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Wok SALCAR <br>Ebano Nonstick',
							'img/productos/ollas-sartenes/SAL-WKEBANO28-NS.jpg',
							'',
							'<small>SAL-WKEBANO28-NS</small><br>&raquo; Size: 11” x 3”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Cookware Set SALCAR <br>Ebano Nonstick 8 pieces',
							'img/productos/ollas-sartenes/SAL-CWEBANO08-NS.jpg',
							'',
							'<small>SAL-CWEBANO08-NS</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Cookware Set SALCAR <br>Ebano Nonstick 10 pieces',
							'img/productos/ollas-sartenes/SAL-CWEBANO10-NS.jpg',
							'',
							'<small>SAL-CWEBANO10-NS</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'							
							);
						producto(
							'Fry Pan SALCAR <br>Ebano Ceramic',
							'img/productos/ollas-sartenes/SAL-FPEBANO-CC.jpg',
							'',
							'<small>SAL-FPEBANO-CC</small><br>&raquo; Individual presentation in the following sizes: 7”, 8”, 9”, 9.5”, 10”, 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'
							);						
						producto(
							'Square Griddle SALCAR <br>Ebano Ceramic',
							'img/productos/ollas-sartenes/SAL-FPSEBANO28-CC.jpg',
							'',
							'<small>SAL-FPSEBANO28-CC</small><br>&raquo; Size: 11”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'
							);
						producto(
							'Wok SALCAR <br>Ebano Ceramic',
							'img/productos/ollas-sartenes/SAL-WKEBANO28-CC.jpg',
							'',
							'<small>SAL-WKEBANO28-CC</small><br>&raquo; Size: 11” x 3”.<br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; 2mm tickness.'
							);
						producto(
							'Cookware Set SALCAR <br>Ebano Ceramic 8 pieces',
							'img/productos/ollas-sartenes/SAL-CWEBANO08-CC.jpg',
							'',
							'<small>SAL-CWEBANO08-CC</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'
							);
						producto(
							'Cookware Set SALCAR <br>Ebano Ceramic 10 pieces',
							'img/productos/ollas-sartenes/SAL-CWEBANO10-CC.jpg',
							'',
							'<small>SAL-CWEBANO10-CC</small><br>&raquo; Easy to clean.<br>&raquo; Foods do not stick.<br>&raquo; Glass lid.<br>&raquo; 2mm tickness.'
							);
                        echo '<h4 class="title_projects">Steel line</h4>';
						producto(
							'Cookware Set SALCAR <br>Steel 12 pieces',
							'img/productos/ollas-sartenes/SAL-CWSS12BCG24.jpg',
							'',
							'<small>SAL-CWSS12BCG24</small><br>&raquo; Easy to clean.<br>&raquo; Glass lid.<br>&raquo; 0.5 mm thick.<br>&raquo; Stainless steel / Steel handles.<br>&raquo; 1 (one) bowl and 1 (one) strainer'
							);
						producto(
							'Cookware Set SALCAR <br>Steel 12 pieces',
							'img/productos/ollas-sartenes/SAL-CWSS12G26.jpg',
							'',
							'<small>SAL-CWSS12G26</small><br>&raquo; Easy to clean.<br>&raquo; Glass lid.<br>&raquo; 0.5 mm thick.<br>&raquo; Stainless steel.<br>&raquo; Steel handles.'
							);
						producto(
							'Cookware Set SALCAR <br>Steel 15 pieces',
							'img/productos/ollas-sartenes/SAL-CWSS15UTG24.jpg',
							'',
							'<small>SAL-CWSS15UTG24</small><br>&raquo; Easy to clean / Glass lid.<br>&raquo; 0.5 mm thick.<br>&raquo; Stainless steel / Steel handles.<br>&raquo; 2 (two) conservatives and 4 (four) steel utensils.'
							);
						producto(
							'Cookware Set SALCAR <br>Steel 12 pieces',
							'img/productos/ollas-sartenes/SAL-CWSS12G22.jpg',
							'',
							'<small>SAL-CWSS12G22</small><br>&raquo; Easy to clean.<br>&raquo; Glass lid.<br>&raquo; 0.4 mm thick.<br>&raquo; Stainless steel.<br>&raquo; Bakelite handles.'
							);
						producto(
							'Cookware Set SALCAR <br>Steel Lid 12 pieces',
							'img/productos/ollas-sartenes/SAL-CWSS12BK22.jpg',
							'',
							'<small>SAL-CWSS12BK22</small><br>&raquo; Easy to clean.<br>&raquo; Steel lid.<br>&raquo; 0.4 mm thick.<br>&raquo; Stainless steel.<br>&raquo; Bakelite handles.'
 							);
						producto(
							'Cookware Set SALCAR <br>Steel 10 pieces',
							'img/productos/ollas-sartenes/SAL-CWSS10S24.jpg',
							'',
							'<small>SAL-CWSS10S24</small><br>&raquo; Easy to clean.<br>&raquo; Steel lid.<br>&raquo; 0.5 mm thick.<br>&raquo; Stainless steel.<br>&raquo; Steel handles.'
 							);
						producto(
							'Strainer <br>SALCAR',
							'img/productos/ollas-sartenes/SAL-CWSSCS.jpg',
							'',
							'<small>SAL-CWSSCS</small><br>&raquo; Easy to clean.<br>&raquo; Steel lid.<br>&raquo; 0.5 mm thick.<br>&raquo; Stainless steel.<br>&raquo; Bakelite handles.'
							);
						producto(
							'Steamer <br>SALCAR',
							'img/productos/ollas-sartenes/SAL-CWSSVPG.jpg',
							'',
							'<small>SAL-CWSSVPG</small><br>&raquo; Easy to clean.<br>&raquo; Glass lid.<br>&raquo; 0.5 mm thick.<br>&raquo; Stainless steel.<br>&raquo; Bakelite handles.'
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