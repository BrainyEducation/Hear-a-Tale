<?php
require_once ('functions2.php');
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<html lang="en-gb">
	<head>
		<title>Hear a Tale</title>
		<meta charset="utf-8" />
		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/cssjs.php');
		?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="jquery.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="javascript/owl.carousel.min.css">
		<link rel="stylesheet" href="javascript/owl.theme.default.min.css">
		<script src="javascript/owl.carousel.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.owl-carousel').owlCarousel({
					autoWidth : true,
					nav : false,
					dots : false
				})

				//$(document).ready(function() {
					
					//$(".carousel_item").each(function(i, obj){
						//window.prompt(obj.css('width'));
						//obj.css('width', 150);
					//});
					
				//});

			});
		</script>
	</head>
	<body>
		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/slidingpanel.php');
		?>
		<div id="page_wrapper">
			<header id="header" class="style2">
				<div class="container" style="width:90%; height:90%;">
					<!-- logo -->
					<div id="logo" style="position:absolute;">
						<a href="http://www.gru.edu/"> <img src="http://www.gru.edu/images/logo.png" alt="Georgia Regents University" style="width:100%; " /> </a>
					</div>
					<!-- end topnav // left aligned -->
					<?php
					include ($_SERVER['DOCUMENT_ROOT'] . '/search.php');
					?>
					<nav id="main_menu" style="margin:auto; ">
						<ul class="sf-menu clearfix">
							<?php
							include ($_SERVER['DOCUMENT_ROOT'] . '/mainmenu.php');
							?>
						</ul>
					</nav>
					<!-- end main_menu -->
				</div>
			</header>
			<div id="page_header" class="gradient bottom-shadow" style="min-height:150px; height:150px; width:100%;">
				<div class="bgback bg3" style="background-image:url(images/bookbanner.jpg);
				background-position:center top ; background-repeat:no-repeat no-repeat; background-size:cover;"></div>
				<div class="container" style="padding:70px 0 0;">
					<div class="row">
						<div class="span12">
							<div class="header-titles">
								<a href="index.php"><h2>Audiobooks</h2></a>
							</div>
						</div>

					</div><!-- end row -->
				</div>

				<div class="shadowUP"></div>
			</div>
			<section id="content">
				<div class="container">
					<div class="mainbody">
						<div class="row" style="margin-bottom:0; padding:20px 0; background:url('http://www.gru.edu/images/pagebg.png') repeat-x top transparent">
							<div style="clear: both;"></div>
							<div class="center">

								<div class="carousel">
									<div class="carousel title">
										<a href='childrenslist.php'>Children's</a>
									</div>
									<?php titleCarousel("Children"); ?>
								</div>
								<br />

								<div class="carousel">
									<div class ="carousel title">
										<a href='adultlist.php'>Students and Adults</a>
									</div>
									<?php authorCarousel("Students and Adults"); ?>
								</div>
								<br />

								<div class="carousel">
									<div class ="carousel title">
										<a href='southernlist.php'>Southern Literature</a>
										</legend>
										<?php authorCarousel("Southern Literature"); ?>
									</div>

								</div>
							</div>
							<!-- end row -->
						</div>
					</div>
					<!-- end mainbody -->
					<?php
					include ($_SERVER['DOCUMENT_ROOT'] . '/footer.php');
					?>
			</section>
		</div>

	</body>
</html>