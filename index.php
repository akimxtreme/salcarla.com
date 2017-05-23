<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
	
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">                             
              <li>
                <img src="img/slides/slider-0.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Ollas y Sartenes</h3> 
					<p>Variedad en ollas, sartenes, planchas, Woks, entre otros.</p> 
					<a href="ollas-sartenes" class="btn btn-theme">Ver Productos</a>
                </div>
              </li>
              <li>
                <img src="img/slides/slider-1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Vajillas</h3> 
					<p>Redondeadas, Cuadradas, en Porcelana.</p> 
					<a href="vajillas" class="btn btn-theme">Ver Vajillas</a>
                </div>
              </li>
              <li>
                <img src="img/slides/slider-3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Electrodomésticos</h3> 
					<p>Batidoras, Cocinas Eléctricas, Licuadoras, entre otros.</p> 
					<a href="electrodomesticos" class="btn btn-theme">Ver Productos</a>
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<!--
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	-->
	<section id="content">
	<div class="container">
		<?php brands(); ?>
		<!--
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Electrodomésticos</h4>
								<div class="">
								<a target="_blank" href="archive/catalogo-salcar-2015-electrodomesticos-es.pdf"><img src="img/productos/producto-electrodomestico.jpg"></a>		
								</div>							
							</div>							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Ollas y Sartenes</h4>
								<div class="">
								<a target="_blank" href="archive/catalogo-salcar-2015-ollas-es.pdf"><img src="img/productos/producto-olla-2.jpg"></a>	
								</div>
							</div>							
						</div>
					</div>					
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Vajillas</h4>
								<div class="">
								<a target="_blank" href="archive/catalogo-salcar-2015-vajillas-es.pdf"><img src="img/productos/producto-vajilla.jpg"></a>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Todos</h4>
								<div class="">
								<a target="_blank" href="catalogo"><img src="img/productos/producto-otros.jpg"></a>
								</div>
							</div>							
						</div>
					</div>					
				</div>
			</div>
		</div>
		-->

		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Productos</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Producto # 1 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Electrodomésticos" href="electrodomesticos">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-electrodomestico.jpg" data-link="electrodomesticos" data-desc="">
							</div>
							<a href="electrodomesticos"><div class="title"><h3 class="text-center">Electrodomésticos</h3></div></a>
						</li>
						<!-- End Item Prducto # 1 -->

						<!-- Item Producto # 2 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Ollas y Sartenes" href="ollas-sartenes">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-olla-2.jpg" data-link="ollas-sartenes" data-desc="">
							</div>
							<a href="ollas-sartenes"><div class="title"><h3 class="text-center">Ollas y Sartenes</h3></div></a>
						</li>
						<!-- End Item Prducto # 2 -->

						<!-- Item Producto # 3 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Vajillas" href="vajillas">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-vajilla.jpg" data-link="vajillas" data-desc="">
							</div>
							<a href="vajillas"><div class="title"><h3 class="text-center">Vajillas</h3></div></a>
						</li>
						<!-- End Item Prducto # 3 -->

						<!-- Item Producto # 4 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Todos los Productos" href="catalogo" data-desc="">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-otros.jpg" data-link="catalogo" data-desc="">
							</div>
							<a href="catalogo"><div class="title"><h3 class="text-center">Catálogo</h3></div></a>
						</li>
						<!-- End Item Prducto # 4 -->
												
					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>
<?php footer(); ?>