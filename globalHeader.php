		<title>Hear a Tale</title>
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<meta charset="utf-8" />
		<?php
			include ($_SERVER['DOCUMENT_ROOT'] . '/cssjs.php');
		?>
		<style type="text/css">
			html {
				overflow-x: hidden;
				padding: 0 !important;
				margin: 0px !important;
			}
			.fullwidthbanner-container {
				width: 100% !important;
				position: relative;
				padding: 0;
				max-height: 700px !important;
				overflow: hidden;
			}
			.header-titles h2 a {
				color: fff;
			}
			.header-titles h2 a:hover {
				color: ccc;
			}
		</style>
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
					items: 7,
					autoWidth : false,
					nav : false,
					dots : false
				})
			});
		</script>
