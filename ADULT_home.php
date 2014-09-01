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


			<fieldset><legend>
					<a href='adult/adultlist.php'>Featured Authors</a>
			</legend></fieldset>
			<div style='width:100%; overflow:hidden;'>
			<?php	authorCarousel("Students and Adults"); ?>
			</div>
			</br>

			<fieldset><legend>
					All Authors
			</legend></fieldset>

			<?php
			$catData = getAllInCategory("Students and Adults");
			$workData = array();
			$authors = array();
			foreach($catData as $work){
				if($work['Author'] == "" || is_null($work['Author'])) continue;
				if(!in_array($work['Author'], $authors)){
					array_push($workData, $work);
					array_push($authors, $work['Author']);
				}
			}

			foreach($workData as $authorWork){

				?>

				<div class="authorCard">
					<img src="Thumbnails/<?php echo $authorWork['ThumbnailImage']; ?>">
					<div class="authorInfo">
					<h4 class="authorName"><?php echo $authorWork['Author'] ?></h4>
					<?php
						$works = getAllByAuthor($authorWork['Author']);
						shuffle($works);
						for($i = 0; $i <= min(2, count($works)); $i++){
							$work = $works[$i];
							echo "<p class='authorWork'><i>" . $work['Title'] . "</i></p>";
						}
					?>
					<p style='margin-top:10px; padding-left: 5px;'><b>See all</b></p>

				</div>
				</div>
				<div style="clear: both;"></div>

				<?php
			}

			?>


		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
		?>
