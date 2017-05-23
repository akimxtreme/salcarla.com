<?php include_once("functions.php"); ?>
<?php head(); ?>
<?php menu(); ?>
<!-- Portfolio Projects -->
<section id="inner-headline">
	<div class="container">
		<div class="row" style="margin-bottom:0px;">
			<div class="col-lg-12">
				<h1>Products</h1>				
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<?php category_menu('todos'); ?>
		<div class="row">
			<div class="col-lg-12">
				<!--<h4 class="heading">Products</h4>-->
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