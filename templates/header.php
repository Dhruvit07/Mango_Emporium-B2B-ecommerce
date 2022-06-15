<?php
require 'C:/xampp/htdocs/project-1/includes/path-config.inc.php';
// define( 'ROOT_DIR', dirname(__FILE__) );
// session_start();
if (!defined("MYSITE")) {
	header("location: ../public/404");
}
$_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require 'C:/xampp/htdocs/project-1/src/process/category.process.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Mango Emporium</title>
	<link rel="icon" type="image/x-icon" href="<?php echo $htmlPath; ?>/resources/img/favicon.png">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- <link type="text/css" rel="stylesheet" href="<?php echo $htmlPath; ?>/resources/css/bootstrap.css" /> -->
	<link type="text/css" rel="stylesheet" href="<?php echo $htmlPath; ?>/resources/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?php echo $htmlPath; ?>/resources/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo $htmlPath; ?>/resources/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?php echo $htmlPath; ?>/resources/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo $htmlPath; ?>/resources/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo $htmlPath; ?>/resources/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

		a {
			color: black;
			all: unset;
		}
	</style>
</head>

<body>
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> <?php echo $contact['contact']; ?></a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $contact['email']; ?></a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> <?php echo $contact['address']; ?></a></li>
				</ul>
				<ul class="header-links pull-right">
					<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
					<?php if (isset($_SESSION['loggedin'])) { ?>
						<li><a href="<?php echo $htmlPath; ?>/public/user/?profile"><i class="fa fa-user-o"></i> My Account</a></li>
					<?php } else { ?>
						<li><a href="<?php echo $htmlPath; ?>/public/auth/?register"><i class="fa fa-user-o"></i> Join here</a></li>
						<li><a href="<?php echo $htmlPath; ?>/public/auth/"><i class="fa fa-user-o"></i> Sign in</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-6" style="margin: 0 25%;">
						<!-- <div class="header-logo" style="margin: 0 25%;"> -->
						<a href="#" class="logo ">
							<img style="margin: 0 auto;height:100px;width:300px;object-fit:cover;" class="img-responsive" src="<?php echo $htmlPath; ?>/resources/img/logo.png" alt="">
						</a>
						<!-- </div> -->
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-12" style="margin: 20px; position: absolute; top: 40%; left: 0%; right: 0%;transform: translateY(-40%);">
						<div class="header-search col-md-12">
							<form>
								<select class="input-select " style="width:120px">
									<option value="0">Category</option>
									<?php echo $searchBarCategoryOptionHTML; ?>
								</select>
								<input class="input" style="" placeholder="Search here">
								<button class="search-btn" style="width:100px;height:41px;text-align:center;margin-bottom:1px;">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="header-ctn">


						<!-- Menu Toogle -->
						<div class="menu-toggle">
							<a href="#">
								<i class="fa fa-bars"></i>
								<span>Menu</span>
							</a>
						</div>
						<!-- /Menu Toogle -->
					</div>
				</div>
				<!-- /ACCOUNT -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<?php
					if (strpos($_url, 'store') !== false) {
						echo '<li ><a href="' . $htmlPath . '/public">Home</a></li>
								<li class="active"><a href="' . $htmlPath . '/public/store/">Our Products</a></li>
								<li><a href="' . $htmlPath . '/public/category">Categories</a></li>
								<li><a href="' . $htmlPath . '/public/content">Content</a></li>';
					} else if (strpos($_url, 'category') !== false) {
						echo '<li ><a href="' . $htmlPath . '/public">Home</a></li>
							<li><a href="' . $htmlPath . '/public/store/">Our Products</a></li>
							<li class="active"><a href="' . $htmlPath . '/public/category">Categories</a></li>
							<li><a href="' . $htmlPath . '/public/content">Content</a></li>';
					} else if (strpos($_url, 'content') !== false) {
						echo '<li ><a href="' . $htmlPath . '/public">Home</a></li>
							<li><a href="' . $htmlPath . '/public/store/">Our Products</a></li>
							<li><a href="' . $htmlPath . '/public/category">Categories</a></li>
							<li class="active"><a href="' . $htmlPath . '/public/content">Content</a></li>';
					} else if (strpos($_url, 'public') !== false) {
						echo '<li class="active"><a href="' . $htmlPath . '/public">Home</a></li>
							<li><a href="' . $htmlPath . '/public/store/">Our Products</a></li>
							<li><a href="' . $htmlPath . '/public/category">Categories</a></li>
							<li><a href="' . $htmlPath . '/public/content">Content</a></li>';
					}
					?>


				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->