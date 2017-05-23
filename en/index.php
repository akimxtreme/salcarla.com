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
                    <h3>Cookware & Fry Pan</h3> 
					<p>Steel Cookware set, Ceramic Cookware set...</p> 
					<a href="cookware-and-fry-pan" class="btn btn-theme">Cookware & Fry Pan</a>
                </div>
              </li>
              <li>
                <img src="img/slides/slider-1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Dinner Set</h3> 
					<p>Dinner set  Square, in porcelain ...</p> 
					<a href="dinner-set" class="btn btn-theme">Dinner Set</a>
                </div>
              </li>
              <li>
                <img src="img/slides/slider-3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Appliances</h3> 
					<p>Hand Mixer, Stand Mixer, Chrome blender...</p> 
					<a href="appliances" class="btn btn-theme">Appliances</a>
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
								<a target="_blank" href="catalog"><img src="img/productos/producto-otros.jpg"></a>
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
				<h4 class="heading">Products</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Producto # 1 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Appliances" href="appliances">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-electrodomestico.jpg" data-link="appliances" data-desc="">
							</div>
							<a href="appliances"><div class="title"><h3 class="text-center">Appliances</h3></div></a>
						</li>
						<!-- End Item Prducto # 1 -->

						<!-- Item Producto # 2 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Cookware & Fry Pan" href="cookware-and-fry-pan">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-olla-2.jpg" data-link="cookware-and-fry-pan" data-desc="">
							</div>
							<a href="cookware-and-fry-pan"><div class="title"><h3 class="text-center">Cookware & Fry Pan</h3></div></a>
						</li>
						<!-- End Item Prducto # 2 -->

						<!-- Item Producto # 3 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Dinner Set" href="dinner-set">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-vajilla.jpg" data-link="dinner-set" data-desc="">
							</div>
							<a href="dinner-set"><div class="title"><h3 class="text-center">Dinner Set</h3></div></a>
						</li>
						<!-- End Item Prducto # 3 -->

						<!-- Item Producto # 4 -->
						<li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
							<div class="item-thumbs">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap" data-fancybox-group="gallery" title="Catalog" href="catalog" data-desc="">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/productos/producto-otros.jpg" data-link="catalog" data-desc="">
							</div>
							<a href="catalog"><div class="title"><h3 class="text-center">Catalog</h3></div></a>
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