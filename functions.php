<?php 
function head() {
echo '
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Grupo Salcar</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Sitio web de SALCAR INTERNACIONAL LLC, es una de las empresas que conforman el GRUPO SALCAR DE VENEZUELA, con más de 40 años de experiencia, dedicada a la Importación y Comercialización de Electrodomésticos y Artículos para el hogar en general." />
<meta name="author" content="SALCAR, IMPORTACION, COMERCIALIZACION, ELECTRODOMESTICOS, ARTICULOS, VAJILLAS, OLLAS, SARTENES, HOGAR, COCINA" />
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
							<span>&copy; 2015 Todos los Derechos Reservados - SALCAR INTERNACIONAL LLC | <a href="acerca-de-nosotros">Nosotros</a> | <a href="productos">Productos</a> | <a href="contacto">Contacto</a> | <i class="fa fa-phone"></i> +13053920071</span>
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
                    <a class="navbar-brand" href="principal"><img src="img/logo-salcar.png" style="width:50%;"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="principal">Inicio</a></li>
                        <li><a href="acerca-de-nosotros">Nosotros</a></li>
                        <!--<li><a href="productos">Productos</a></li>-->
                        <!--<li><a href="#">Categorias</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Productos <b class="fa fa-caret-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="electrodomesticos">Electrodomésticos</a></li>
                                <li><a href="ollas-sartenes">Ollas y Sartenes</a></li>                                              
                                <li><a href="vajillas">Vajillas</a></li>
                                <li><a href="catalogo">Catálogo</a></li>
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
                        <li><a href="contacto">Contacto</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Idioma <b class="fa fa-caret-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="principal"><img style="width:20px;" src="img/flag/flag-espania.jpg"> Español</a></li>
                                <li><a href="home"><img style="width:20px;" src="img/flag/flag-eeuu.png"> Ingles</a></li>                                             
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
        <a class="btn btn-default '. $uno .'" href="electrodomesticos" role="button">Electrodomésticos</a>
        <a class="btn btn-default '. $dos .'" href="ollas-sartenes" role="button">Ollas y Sartenes</a>
        <a class="btn btn-default '. $tres .'" href="vajillas" role="button">Vajillas</a>
        <a class="btn btn-default '. $cuatro .'" href="productos" role="button">Todos</a>
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