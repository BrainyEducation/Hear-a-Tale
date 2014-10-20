<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/functions2.php');

$currentLetter = $_GET['letter'];

$origin = $_GET['origin'];
$type = $_GET['type'];

?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
	<!--<![endif]-->
	<head>
		<title>Students and Adults - Hear a Tale</title>
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
			<?php

			adultOriginHeader($origin == "" ? "All Origins" : $origin, $type);
			adultTypeHeader($type == "" ? "All Types" : $type, $origin);

			?>

			<?php

			$thisPage = "ADULT_home.php" . ($origin == "" ? "" : "?origin=" . $origin) . ($type == "" ? "" : ($origin == "" ? "?" : "&") . "type=" . $type);
			$title = ($origin == "" || $origin == "All Origins" ? "All " : explode(" ", $origin)[0] . " ") . ($type == "" || $type  == "All Types" ? "Literature" : $type);
			$allData = getAllInCategory("Students and Adults");
			$showAllAll = ($origin == "" || $origin == "All Origins") && ($type == "" || $type == "All Types");
			$catData = array();
			if($showAllAll) $catData = $allData;
			else{
				if($origin == "All Origins") $origin = "/";
				if($type == "All Types") $type = "/";
				foreach($allData as $work){
					if(strpos($work['Category'], $origin) != 0 && strpos($work['Category'], $type) != 0){
						array_push($catData, $work);
					}
				}
			}
			include ($_SERVER['DOCUMENT_ROOT'] . '/ADULT_body_generator.php');

			?>


		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
		?>
