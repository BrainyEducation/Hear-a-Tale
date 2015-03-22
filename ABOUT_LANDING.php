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
		<title>About - Hear a Tale</title>
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

            <h1>About the Site</h1>
            <p style="font-size:150%;">Choose a section to learn more.</p><br>
            <table style="width:100%" style="text-align: center;">
            <tr align='center'>
                <td valign="top">   
                    <a href="ABOUT_intro.php">
                        <img style="width:100%" src="images/about/landing/children.jpg">
                        <h3>Children's Section</h3>
                    </a>
                </td> <td valign="top">
                        <img style="width:100%" src="images/about/landing/students.jpg">
                        <h3 style="margin-bottom:-20px;">Students and Adults</h3>
                        <br>(Coming Soon)
                </td> <td valign="top">
                    <a href="ABOUT_SL_intro.php">
                        <img style="width:100%" src="images/about/landing/southern.jpg">
                        <h3>Southern Literature</h3>
                    </a>
                </td>
            </tr>
            </table>
            
            <br><br><br>
            <p align="right" style="font-size:120%;">
                <b>Project Director</b><br>Walter Evans<br><br><b>Lead Developer</b><br>Cal Stephens
            </p>
            

		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
		?>
