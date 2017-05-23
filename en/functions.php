<?php 
function head() {
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Salcar Group</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="SALCAR INTERNATIONAL LLC is a company located in Miami with over 40 years experience in the Import and Sales of Appliances and Household items in general, with an assortment portfolio of different brands such as Oster, Samurai, Black & Decker, Hamilton Beach, Samsung, LG, Sony, among others" />
<meta name="author" content="Import, Commercialization, Articles, Homme, Kitchen, Appliances, Cookware and fry pan, Dinner set" />
<link rel="icon" href="img/mini-logo-salcar.png" type="image/x-icon" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>';
echo "
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77974219-1', 'auto');
  ga('send', 'pageview');

</script>
";
echo '
<div id="wrapper"> ';
}


function footer() {
	echo '
	</div>
	<footer>	
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="copyright">
						<p>
							<span>&copy; 2015 All rights reserved - SALCAR INTERNACIONAL LLC | <a href="about-us">About us</a> | <a href="products">Products</a> | <a href="contact-en">Contact</a> | <i class="fa fa-phone"></i> +13053920071</span>
						</p>                        
					</div>
				</div>
				<div class="col-lg-3">				
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html> ';

}


function menu() {
	echo '
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="index.html"><span>M</span>oderna</a>-->
                    <a class="navbar-brand" href="home"><img src="img/logo-salcar.png" style="width:50%;"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="home">Home</a></li>
                        <li><a href="about-us">About us</a></li>
                        <!--<li><a href="productos">Productos</a></li>-->
                        <!--<li><a href="#">Categorias</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Products <b class="fa fa-caret-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="appliances">Appliances</a></li>
                                <li><a href="cookware-and-fry-pan">Cookware & Fry Pan</a></li>                                              
                                <li><a href="dinner-set">Dinner Set</a></li>
                                <li><a href="catalog">Catalog</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="#">Distribuidores</a></li>-->
                        
                        <!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="components.html">Components</a></li>
								<li><a href="pricingbox.html">Pricing box</a></li>
                            </ul>
                        </li>
                    	
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        -->
                        <li><a href="contact-en">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Language <b class="fa fa-caret-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="principal"><img style="width:20px;" src="img/flag/flag-espania.jpg"> Spanish</a></li>
                                <li><a href="home"><img style="width:20px;" src="img/flag/flag-eeuu.png"> English</a></li>                                             
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header --> ';


}

function msn($text) {
echo '
<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong><i class="fa fa-envelope"></i></strong> '. $text .'
				</div>
';

}

function send($name, $email,$subject,$message){

define("WEBMASTER_EMAIL", 'name@email.com');

mail(WEBMASTER_EMAIL, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());
}


function producto($title,$imgSmall,$imgBig,$description) {
    if($imgBig ==""){ $imgBig = $imgSmall; }
    echo '
    <!-- Item Producto -->
    <li class="col-md-3 col-sm-6 col-xs-6 design" data-id="id-0" data-type="web">
        <div class="item-thumbs">
        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'. $title .'" href="'. $imgBig .'">
        <span class="overlay-img"></span>
        <span class="overlay-img-thumb font-icon-plus"></span>
        </a>
        <!-- Thumb Image and Description -->
        <img src="'. $imgSmall .'" data-link="" data-desc="'. $description .'">
        </div>
        <div class="title"><h3 class="text-center">'. $title .'</h3></div>
    </li>
    <!-- End Item Producto --> ';
}

function category_menu($category){
    $uno    = "";
    $dos    = "";
    $tres   = "";
    $cuatro = "";  
    switch ($category) {
        case 'electrodomesticos':
            $uno    = "active";
            break;
        case 'ollas-sartenes':
            $dos    = "active";
            break;
        case 'vajillas':
            $tres   = "active";
            break;
        case 'todos':
            $cuatro = "active";
            break;
    }
    echo '
    <div class="row" id="category" style="margin-top:15px;">        
        <a class="btn btn-default '. $uno .'" href="appliances" role="button">Appliances</a>
        <a class="btn btn-default '. $dos .'" href="cookware-and-fry-pan" role="button">Cookware & Fry Pan</a>
        <a class="btn btn-default '. $tres .'" href="dinner-set" role="button">Dinner Set</a>
        <a class="btn btn-default '. $cuatro .'" href="products" role="button">All</a>
    </div> ';


}

/*

*/

function brands(){
    echo '
        <div class="row brands">
        <div><img src="img/marcas/salcar.jpg" title="Salcar"></div>     
        <div><img src="img/marcas/black-and-decker.jpg" title="Back & Decker"></div>
        <!-- <div class="col-md-1"><img src="img/marcas/decocar.jpg" title="Decocar"></div> -->
        <div><img src="img/marcas/coleman.jpg" title="Coleman"></div>
        <!-- <div class="col-md-1"><img src="img/marcas/hyundai-electronics.jpg" title="Hyundai"></div> -->
        <div><img src="img/marcas/lg.jpg" title="LG"></div>
        <!-- <div class="col-md-1"><img src="img/marcas/manaplas.jpg" title="Manaplas"></div> -->
        <div><img src="img/marcas/oster-logo.jpg" title="Oster"></div>
        <div><img src="img/marcas/polimes.jpg" title="Polimes"></div>
        <div><img src="img/marcas/samsung.jpg" title="Samsung"></div>
        <div><img src="img/marcas/sony.jpg" title="Sony"></div>
        <!-- <div class="col-md-1"><img src="img/marcas/magefesa.jpg" title="Magefesa"></div> -->
        
    </div>  
    ';
}

?>