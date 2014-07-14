<?php
require_once ('functions2.php');

$category = $_GET['cat'];

$data = getAllInCategory($category);

$categoryExploded = explode("/", $category);
$categoryName = $categoryExploded[sizeof($categoryExploded) - 1];
$thumbnailCat = "section_icons/" . str_replace(" ", "_", str_replace("/", "!", $category)) . ".png";

$superCat = NULL;
$thumbnailSuperCat;
if(sizeof($categoryExploded) === 3){
	$superCat = $categoryExploded[1];
	$thumbnailSuperCat = "section_icons/Children!" . str_replace(" ", "_", str_replace("/", "!", $superCat)) . ".png";
}



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

			<?php
			if(count($data) == 0){
				error404('category');
			}else{
			?>

			<h1><strong><i>
				<?php
					if($superCat != NULL){
						echo "<a href='category.php?cat=Children/" . $superCat . "'><div>";
						if(file_exists($thumbnailSuperCat)) echo "<img style='padding-right:5px' src= ". $thumbnailSuperCat . ">";
						echo $superCat . ": </a>";
					}
					echo $categoryName;
					if(file_exists($thumbnailCat)) echo "<img style='padding-right:5px;' src= ". $thumbnailCat . ">";
				?>
			</i></strong></h1></br>

			<?php

			foreach($data as $work){
				if(!categoryEqual($work['Category'], $category)) continue;
				echo "<div style='padding-left: 105px; padding-bottom: 5px;'>";
				echo "<div style='float:left;'>";
				echo "<a href='video.php?url=" . $work['FileLocation'] . "&cat=" . $work['Category'] . "'>";
				echo '<img style="height: 135px; width: auto; padding-right: 5px;" src="Thumbnails/' . str_replace("\\", "/", $work['ThumbnailImage']) . '">';
				echo "</div>";
				echo "<div style='width:550px; height: 135px; display: table-cell; vertical-align: middle;'>";
				echo "<h3 style='margin-bottom:0px; padding-top:0px; margin-top:-10px; float:left;'>" . $work['Title'] . "</h3></a>";
				if($work["Length"] != "") echo "<div style='padding-left: 5px; display: table-cell;'> <b>[</b>" . $work['Length'] . "<b>]</b></div>";
				echo "<div style='clear:both; padding-left: 15px; text-align:justify; width:450px;'>";
				echo $work['Description'];
				echo "</div></div></div>";
			}

			?>


		<?php
		}
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
		?>
