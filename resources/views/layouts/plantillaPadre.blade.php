<!DOCTYPE html>
<html>
<head>
	
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href=" {{ asset('css/bootstrap.css') }} " rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/pignose.layerslider.css') }} " rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
@yield('css')

<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/simpleCart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
@yield('js')
</head>
<body>
<!-- header -->

<!-- //header -->
<!-- header-bot -->
<div class="mt-0 pt-0 ">
	<div class="container" >
		<div class="col-md-4 header-left" >
			<h1><a href="/"><img src="images/logo.png" style="width: 84%; " alt=".."></a></h1>
		</div>
		<div class="col-md-4 header-middle " style="display: flex; justify-content: center;">
			<img src="images/logo2.png" alt=".." style="width: 15%;"  />
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
        <li><a href="https://www.facebook.com/"><img  src="/images/iconos/fa.svg" alt="-"/></a></li>
        <li><a href="https://twitter.com/?lang=es"><img  src="/images/iconos/tw.svg" alt="-"/></a></li>
        <li><a href="https://www.youtube.com/"><img  src="/images/iconos/yo.svg" alt="-"/></a></li>
        <li><a href="https://api.whatsapp.com/send?phone=593983825594&text=Hola"><img  src="/images/iconos/wh.svg" alt="-"/></a></li>
        <li><a href="https://www.facebook.com/"><img  src="/images/iconos/te.svg" alt="-"/></a></li>
		<li><a href="https://www.tiktok.com/"><img  src="/images/iconos/ti.svg" alt="-"/></a></li>
		
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top ">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list d-inline-block" >
					<li class="active menu__item menu__item--current"><a class="menu__link" href="/">Inicio <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bicicletas <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="/bicicletas"><img src="images/b1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Mostrar Todas</a></li>
											<li><a href="mens.html">Montañeras</a></li>
											<li><a href="mens.html">De ruta</a></li>
											<li><a href="mens.html">Hibridas</a></li>
											<li><a href="mens.html">BMX</a></li>
											<li><a href="mens.html">Electricas</a></li>
											
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Caballeros</a></li>
											<li><a href="mens.html">Damas</a></li>
											<li><a href="mens.html">Niños</a></li>
											
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accesorios <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">LLantas</a></li>
											<li><a href="womens.html">Cadenas</a></li>
											<li><a href="womens.html">Asientos</a></li>
											<li><a href="womens.html">Pedales</a></li>
											<li><a href="womens.html">Frenos</a></li>
										
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Volantes</a></li>
											<li><a href="womens.html">Suspensiones</a></li>
											<li><a href="womens.html">Cambios</a></li>
											
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text " style="">
										<a href="/bicicletas"><img src="images/accesories.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="/nosotros">Nosotros</a></li>
					<li class=" menu__item"><a class="menu__link" href="/contact">Contactos</a></li>
			
					<li class=" menu__item"><a class="menu__link" href="/videos">Videos</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			
			<div class="cart box_1" >
						
						
						<h3><a href="#" class="text-white">
							12 nov 2022<br>

							Proximos Eventos
						</a></h3>
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>


<!-- //content -->
@yield('root')
<!-- content-->

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="images/logo.png" alt="-"  style="width: 70%"/></a></h2>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus rem facilis repellat ex veritatis, quibusdam ipsum adipisci, sint nam laborum blanditiis sed ipsa consectetur provident doloribus labore? Culpa, tempore nulla.</p>
		</div>
		<div class="col-md-9 footer-right">

			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="/">Inicio</a></li>
						<li><a href="#">Ver Productos</a></li>
						<li><a href="#">Videos</a></li>
						<li><a href="#">Bicicletas</a></li>
						<li><a href="#">Accesorios</a></li>
						<li><a href="#">Contactos</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4> Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Dirección : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : info@example.com</li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Telefono : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Posts</h4>
					<ul>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2022 Probicis. Todos los derechos reservados | Diseñado por <a href="https://www.facebook.com/profile.php?id=100008055761343">Leonel Sandoval</a></p>
	</div>
</div>
<!-- //footer -->

<div class="ir-arriba" style="position: fixed; bottom: 0; left: 50%; opacity: 50%;">
	<img   src="images/iconos/up.png" alt="-"  width="30%;" />
</div>
<script>
	$(document).ready(function(){
		$('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			},2000);

		});

	})
</script>


</body>
</html>