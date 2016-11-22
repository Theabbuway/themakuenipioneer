

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>makuenipioneer</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="makuenipioneer, steel works makueni, welding makueni, Android Compatible ,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="/js/responsiveslides.min.js"></script>
</head>
<body>
<!--header-->
<div class="ban-top">
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
				<!-- Collect the nav links, forms, and other content for toggling  *href=/about*-->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="/">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="#">About</a></li>
					<li class=" menu__item"><a class="menu__link" href="/gallery">Gallery</a></li>
					<li class=" menu__item"><a class="menu__link" href="/contact">contact</a></li>

					@if(Auth::check())
						  <li class=" menu__item"><a class="menu__link" href="/panel">Admin</a></li>
					@endif
				  </ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<a href="/register">SIGN UP TODAY</a>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //header -->
<!-- banner-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-6 header_left">
			<h1><a href="/">THE MAKUENI PIONEER</a></h1>
		</div>
		<div class="col-md-6 header_right">
			<ul>
				<li><i class="glyphicon glyphicon-phone"></i>CALL US TODAY<span>+254 706 478119</span></li>
				<li><i class="glyphicon glyphicon-envelope"></i>MAIL US TODAY<span><a href="mailto:makuenipioneer@gmail.com">makuenipioneer@gmail.com</a></span></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-bot -->

@yield('content')

<div class="contact">
	<div class="container">
		<div class="col-md-4 contact-left">
			<h2><a href="/">MAKUENIPIONEER</a></h2>
			<p>Creating purpose built products for duty driven people</p>
			<ul class="fb_icons2">
				<li><a class="fb" href="#"></a></li>
				<li><a class="twit" href="#"></a></li>
				<li><a class="goog" href="#"></a></li>
				<li><a class="pin" href="#"></a></li>
				<li><a class="drib" href="#"></a></li>
			</ul>
		</div>
		<div class="col-md-3 contact-mid">
			<h3>Navigation</h3>
			<ul>
				<li><a href="/"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>About</a></li>
				<li><a href="/contact"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Contact</a></li>
			</ul>
		</div>
		<div class="col-md-5 mail_right">
			<h3>Quick Contact Us</h3>
				<form role="form" method="POST" action="{{ action('ContactController@store') }}">
					{!! csrf_field() !!}
					<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea name="message"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit Now">

				</form>
		</div>
		<div class="clearfix"></div>
		<p class="footer">&copy; 2016 Makuenipioneer. All Rights Reserved | Design by <a href="https://github.com/Theabbuway">the_abbu_way</a></p>
	</div>
</div>
<!-- //contact -->
<script type="text/javascript" src="/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>