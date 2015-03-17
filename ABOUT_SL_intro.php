<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/functions2.php');


?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
	<!--<![endif]-->
	<head>

		<title>Introduction - Southern Lit</title>
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
			<?php aboutHeaderSouthern("Introduction"); ?>
            <h1 style="width:100%; text-align:center;">Introduction</h1>
            <div style="width:80%; margin-left:10%; margin-right:10%;">
                <h3 style="width:100%; text-align:center; margin-bottom:-20px;">Support</h3>
                <a style="float:left;" href="http://watson-brown.org/"> <img src="images/supporters/watson%20brown.png"> </a>
                <p style="margin-top:20px; padding-left:235px;">This Southern literature audiobook website was made possible by a generous grant from the <a href="http://watson-brown.org/"><b>Watson Brown Foundation</b></a>.</p>
                <div style="clear: both;"></div>

                <h3 style="width:100%; text-align:center;">Selections</h3>
                <p style="margin-top:-10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Most of our Southern literature texts are at least several decades old, out of copyright, and free to reproduce.  Later material on our site, so far as we can tell, has also entered the public domain or we have permission to reproduce it.  If we’re mistaken please let us know and we’ll remove the material from the site.  We’re grateful that two excellent, award-winning contemporary authors (<a href="SOUTHERN_author.php?author=SHIVERS, Louise">Louise Shivers</a> and <a href="SOUTHERN_author.php?author=BRODAK, Molly">Molly Brodak</a>) have given us permission to use material recorded in their own voices. </p>
                
                <h4 style="text-align:right;">Continue to <a href="ABOUT_SL_voices.php">Voices</a></h3>
            </div>

		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
		?>
