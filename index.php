<?php
require_once ('functions2.php');
?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
	<!--<![endif]-->
	<head>

		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalHeader.php');
		?>

	</head>

	<body>

		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalBody.php');
		?>

		<div class="span9" style="margin-left:5px; margin-right:5px;">

			<div style="clear: both;"></div>

			<fieldset><legend>
					<a href='children.php'><img style='height:50px' src='section_icons/Children.png'>Children's Section</a>
			</legend></fieldset>
			<div style='width:100%; overflow:hidden; margin-left:0 auto; margin-right: 0 auto;'>
			<?php	twoRowTitleCarousel("Children"); ?>
			</div>
			<br/>

			<fieldset><legend>
					<a href='adults.php'>Students and Adults</a>
			</legend></fieldset>
			<div style='width:100%; overflow:hidden;'>
			<?php	authorCarousel("Students and Adults"); ?>
			</div>
			<br/>

			<fieldset><legend>
					<a href='south.php'>Southern Literature</a>
			</legend></fieldset>
			<div style='width:100%; overflow:hidden;'>
			<?php	authorCarousel("Students and Adults/Southern Literature"); ?>
			</div>
			<br/>

		</div>

		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
		?>
