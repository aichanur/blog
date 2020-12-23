<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog Avenoel</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="http://127.0.0.1/blog_mvc/public/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="http://127.0.0.1/blog_mvc/public/css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="http://127.0.0.1/blog_mvc/public/css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		<div class="wrapper">
		
			<!-- header -->
			<header>
				<!-- navigation -->
				<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="accueil"><img class="img-responsive" src="http://127.0.0.1/blog_mvc/public/img/logo.png" alt="Logo" /></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="register">Signup</a></li>
								<li><a href="login">Login</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<!-- <li><a href="#event">Events</a></li> -->
										<li><a href="#blog">Our Articles</a></li>
										<li><a href="#subscribe">Subscribe</a></li>
										<li><a href="#team">Executive Team</a></li>
										<!-- <li><a href="#">One more separated link</a></li> -->
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>


			<?= $content ?>


<!-- footer -->
			<footer>
				<div class="container">
					<p><a href="#">Home</a> | <a href="#work">works</a> | <a href="#team">Team</a> | <a href="#contact">Contact</a></p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
					<!-- copy right -->
					<!-- This theme comes under Creative Commons Attribution 4.0 Unported. So don't remove below link back -->
					<p class="copy-right">Copyright &copy; 2020 <a href="#">Blog Avenoel</a> | Designed By Free Css template and Me, All rights reserved. </p>
				</div>
			</footer>

		</div>
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="http://127.0.0.1/blog_mvc/public/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="http://127.0.0.1/blog_mvc/public/js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="http://127.0.0.1/blog_mvc/public/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="http://127.0.0.1/blog_mvc/public/js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="http://127.0.0.1/blog_mvc/public/js/custom.js"></script>
	</body>	
</html>