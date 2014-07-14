<?php
require_once ('functions2.php');

$url = $_GET['url'];
$sourceCategory = $_GET['cat'];

$play = NULL;

ensureDataLoaded();

foreach ($data as $work) {
	if ($work['FileLocation'] == $url) {
		$play = $work;
		break;
	}
}

if (play != NULL && $sourceCategory == NULL) {
	$array = explode(";", $play['Category']);
	$category1 = explode("/", $array[0]);
	$sourceCategory = $category1[0];
}
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

		<!-- flowplayer imports -->
		<link rel="stylesheet" type="text/css" href="//releases.flowplayer.org/5.4.6/skin/minimalist.css">
		<style>
			.flowplayer {
				width: 80%;
				background-color: #222;
				background-size: cover;
				max-width: 800px;
			}
			.flowplayer .fp-controls {
				background-color: rgba(235, 245, 255, 0.4)
			}
			.flowplayer .fp-timeline {
				background-color: rgba(187, 220, 252, 0.5)
			}
			.flowplayer .fp-progress {
				background-color: rgba(71, 166, 255, 1)
			}
			.flowplayer .fp-buffer {
				background-color: rgba(156, 207, 255, 1)
			}
			.flowplayer {
				background-image: url("https://farm4.staticflickr.com/3169/2972817861_73ae53c2e5_b.jpg")
			}
		</style>
		<script src="//releases.flowplayer.org/5.4.6/flowplayer.min.js"></script>
		<!-- end flowplayer imports -->
		<!-- flowplayer javascript customization -->
		<script>
			flowplayer(function(api, root) {

				api.bind("ready", function() {

					api.resume();

				});

			});
		</script>

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

								<?php	if($play != null){	?>

								<div data-swf="//releases.flowplayer.org/5.4.6/flowplayer.swf"
								class="flowplayer fixed-controls no-toggle play-button color-light"
								data-ratio="0.5625" data-embed="false">
									<video preload="none">
										<source type="video/mp4" src="http://podcasting.gcsu.edu/4DCGI/Podcasting/GRU/Episodes/<?php echo $play['FileLocation'] ?>"/>
									</video>
								</div>

								<div class="carousel">
									<div class="carousel title">
										<a href='childrenslist.php'>
											</br>More from <?php echo $sourceCategory ?>:
										</a>
									</div>
									<?php titleCarousel($sourceCategory); ?>
								</div>
								<br/>

								<?php 	} else { ?>

								The video "<?php echo $videoTitle ?>" could not be found. Please go back and try again.

								<?php	} ?>
							</div>
							<!-- end row -->
						</div>
					</div>
					<!-- end mainbody -->
			</section>
		</div>

	</body>
</html>