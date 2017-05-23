<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Ollas y Sartenes</h1>				
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
                        echo '<h4 class="title_projects">Línea Agata</h4>';
						producto(
							'Sartenes SALCAR <br>Agata Antiadherentes',
							'img/productos/ollas-sartenes/SAL-FPAGATA-NS.jpg',
							'',
							'<small>SAL-FPAGATA-NS</small><br>&raquo; Presentación individual en los siguientes
tamaños: 18, 20, 22, 24, 26 y 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'
							);
                        
						producto(
							'Plancha Cuadrada SALCAR Agata Antiadherente',
							'img/productos/ollas-sartenes/SAL-FPSAGATA28-NS.jpg',
							'',
							'<small>SAL-FPSAGATA28-NS</small><br>&raquo; Tamaño: 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'
							);
						producto(
							'Wok SALCAR <br>Agata Antiadherente',
							'img/productos/ollas-sartenes/SAL-WKAGATA28-NS.jpg',
							'',
							'<small>SAL-WKAGATA28-NS</small><br>&raquo; Tamaño: 28 x 8 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'
							);	
						producto(
							'Juego de Ollas SALCAR Agata Antiadherente 8 piezas	',
							'img/productos/ollas-sartenes/SAL-CWAGATA08-NS.jpg',
							'',
							'<small>SAL-CWAGATA08-NS</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'
							);	
						producto(
							'Juego de Ollas SALCAR Agata Antiadherente 9 piezas',
							'img/productos/ollas-sartenes/SAL-CWAGATA09-NS.jpg',
							'',
							'<small>SAL-CWAGATA09-NS</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'
							);
						producto(
							'Juego de Ollas SALCAR Agata Antiadherente 10 piezas',
							'img/productos/ollas-sartenes/SAL-CWAGATA10-NS.jpg',
							'',
							'<small>SAL-CWAGATA10-NS</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'
							);
						producto(
							'Sartenes SALCAR <br>Agata Cerámica',
							'img/productos/ollas-sartenes/SAL-FPAGATA-CC.jpg',
							'',
							'<small>SAL-FPAGATA-CC</small><br>&raquo; Presentación individual en los siguientes tamaños: 18, 20, 22, 24, 26 y 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Wok SALCAR <br>Agata Cerámica',
							'img/productos/ollas-sartenes/SAL-WKAGATA28-CC.jpg',
							'',
							'<small>SAL-WKAGATA28-CC</small><br>&raquo; Tamaño: 28 x 8 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Plancha Cuadrada SALCAR <br>Agata Cerámica',
							'img/productos/ollas-sartenes/SAL-FPSAGATA28-CC.jpg',
							'',
							'<small>SAL-FPSAGATA28-CC</small><br>&raquo; Tamaño: 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Juego de Ollas SALCAR <br>Agata Cerámica 8 piezas',
							'img/productos/ollas-sartenes/SAL-CWAGATA08-CC.jpg',
							'',
							'<small>SAL-CWAGATA08-CC</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Juego de Ollas SALCAR <br>Agata Cerámica 10 piezas',
							'img/productos/ollas-sartenes/SAL-CWAGATA10-CC.jpg',
							'',
							'<small>SAL-CWAGATA10-CC</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'							
							);
                        echo '<h4 class="title_projects">Línea Ebano</h4>';
						producto(
							'Sartenes SALCAR <br>Ebano Antiadherentes',
							'img/productos/ollas-sartenes/SAL-FPEBANO-NS.jpg',
							'',
							'<small>SAL-FPEBANO-NS</small><br>&raquo; Presentación individual en los siguientes tamaños: 18, 20, 22, 24, 26 y 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Plancha Cuadrada SALCAR <br>Ebano Antiadherente',
							'img/productos/ollas-sartenes/SAL-FPSEBANO28-NS.jpg',
							'',
							'<small>SAL-FPSEBANO28-NS</small><br>&raquo; Tamaño: 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Wok SALCAR <br>Ebano Antiadherente',
							'img/productos/ollas-sartenes/SAL-WKEBANO28-NS.jpg',
							'',
							'<small>SAL-WKEBANO28-NS</small><br>&raquo; Tamaño: 28 x 8 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Juego de Ollas SALCAR Ebano Antiadherente de 8 piezas',
							'img/productos/ollas-sartenes/SAL-CWEBANO08-NS.jpg',
							'',
							'<small>SAL-CWEBANO08-NS</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Juego de Ollas SALCAR Ebano Antiadherente de 10 piezas',
							'img/productos/ollas-sartenes/SAL-CWEBANO10-NS.jpg',
							'',
							'<small>SAL-CWEBANO10-NS</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'							
							);
						producto(
							'Sartenes SALCAR <br>Ebano Cerámica',
							'img/productos/ollas-sartenes/SAL-FPEBANO-CC.jpg',
							'',
							'<small>SAL-FPEBANO-CC</small><br>&raquo; Presentación individual en los siguientes tamaños: 18, 20, 22, 24, 26 y 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'
							);						
						producto(
							'Plancha Cuadrada SALCAR <br>Ebano Cerámica',
							'img/productos/ollas-sartenes/SAL-FPSEBANO28-CC.jpg',
							'',
							'<small>SAL-FPSEBANO28-CC</small><br>&raquo; Tamaño: 28 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'
							);
						producto(
							'Wok SALCAR <br>Ebano Cerámica',
							'img/productos/ollas-sartenes/SAL-WKEBANO28-CC.jpg',
							'',
							'<small>SAL-WKEBANO28-CC</small><br>&raquo; Tamaño: 28 x 8 cm.<br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; 2mm de espesor.'
							);
						producto(
							'Juego de Ollas SALCAR Ebano Cerámica 8 piezas',
							'img/productos/ollas-sartenes/SAL-CWEBANO08-CC.jpg',
							'',
							'<small>SAL-CWEBANO08-CC</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'
							);
						producto(
							'Juego de Ollas SALCAR <br>Ebano Cerámica 10 piezas',
							'img/productos/ollas-sartenes/SAL-CWEBANO10-CC.jpg',
							'',
							'<small>SAL-CWEBANO10-CC</small><br>&raquo; Fácil de limpiar.<br>&raquo; No se pegan los alimentos.<br>&raquo; Tapa de vidrio.<br>&raquo; 2mm de espesor.'
							);
                        echo '<h4 class="title_projects">Línea Acero</h4>';
						producto(
							'Juego de Ollas SALCAR <br>en Acero 12 piezas',
							'img/productos/ollas-sartenes/SAL-CWSS12BCG24.jpg',
							'',
							'<small>SAL-CWSS12BCG24</small><br>&raquo; Fácil de limpiar.<br>&raquo; Tapa de vidrio.<br>&raquo; 0.5 mm de espesor.<br>&raquo; Acero inoxidable / Asas de acero.<br>&raquo; 1 (un) bowl y 1 (un) colador.'
							);
						producto(
							'Juego de Ollas SALCAR <br>en Acero 12 piezas',
							'img/productos/ollas-sartenes/SAL-CWSS12G26.jpg',
							'',
							'<small>SAL-CWSS12G26</small><br>&raquo; Fácil de limpiar.<br>&raquo; Tapa de vidrio.<br>&raquo; 0.5 mm de espesor.<br>&raquo; Acero inoxidable.<br>&raquo; Asas de acero.'
							);
						producto(
							'Juego de Ollas SALCAR <br>en Acero 15 piezas',
							'img/productos/ollas-sartenes/SAL-CWSS15UTG24.jpg',
							'',
							'<small>SAL-CWSS15UTG24</small><br>&raquo; Fácil de limpiar / Tapa de vidrio.<br>&raquo; 0.5 mm de espesor.<br>&raquo; Acero inoxidable / Asas de acero.<br>&raquo; 2 (dos) conservadores y 4 (cuatro) utensilios en acero.'
							);
						producto(
							'Juego de Ollas SALCAR <br>en Acero 12 piezas',
							'img/productos/ollas-sartenes/SAL-CWSS12G22.jpg',
							'',
							'<small>SAL-CWSS12G22</small><br>&raquo; Fácil de limpiar.<br>&raquo; Tapa de vidrio.<br>&raquo; 0.4 mm de espesor.<br>&raquo; Acero inoxidable<br>&raquo; Asas de bakelita.'
							);
						producto(
							'Juego de Ollas SALCAR Tapa de Acero 12 piezas',
							'img/productos/ollas-sartenes/SAL-CWSS12BK22.jpg',
							'',
							'<small>SAL-CWSS12BK22</small><br>&raquo; Fácil de limpiar.<br>&raquo; Tapa de acero.<br>&raquo; 0.4 mm de espesor.<br>&raquo; Acero inoxidable<br>&raquo; Asas de bakelita.'
							);
						producto(
							'Juego de Ollas SALCAR <br>en Acero 10 piezas',
							'img/productos/ollas-sartenes/SAL-CWSS12BK22.jpg',
							'',
							'<small>SAL-CWSS12BK22</small><br>&raquo; Fácil de limpiar.<br>&raquo; Tapa de acero.<br>&raquo; 0.5 mm de espesor.<br>&raquo; Acero inoxidable<br>&raquo; Asas de acero.'
							);
						producto(
							'Colador <br>SALCAR',
							'img/productos/ollas-sartenes/SAL-CWSSCS.jpg',
							'',
							'<small>SAL-CWSSCS</small><br>&raquo; Fácil de limpiar.<br>&raquo; Tapa de acero.<br>&raquo; 0.5 mm de espesor.<br>&raquo; Acero inoxidable<br>&raquo; Asas de bakelita.'
							);
						producto(
							'Vaporera <br>SALCAR',
							'img/productos/ollas-sartenes/SAL-CWSSVPG.jpg',
							'',
							'<small>SAL-CWSSVPG</small><br>&raquo; Fácil de limpiar.<br>&raquo; Tapa de acero.<br>&raquo; 0.5 mm de espesor.<br>&raquo; Acero inoxidable<br>&raquo; Asas de bakelita.'
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