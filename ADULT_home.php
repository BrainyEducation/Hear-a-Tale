<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/functions2.php');

$currentLetter = $_GET['letter'];

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

			<fieldset>
				<legend>
					<div style="display:inline-block;"> All Authors </div>
					<h6 style="display:inline-block;"><div class="letterPicker">
						<?php
							$letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
							foreach($letters as $letter){
								if($currentLetter == $letter){
									echo $letter;
								} else{
									echo "<a href='ADULT_home.php?letter=" . $letter . "'>" . $letter . "</a>";
								}
								if($letter != "Z") echo " · ";
							}
						?>
					</div></h6>
				</legend>

			</fieldset>

			<?php
			$catData = getAllInCategory("Students and Adults");
			$workData = array();
			$authors = array();
			foreach($catData as $work){
				if($work['Author'] == "" || is_null($work['Author'])) continue;
				if(!in_array($work['Author'], $authors)){
					if($currentLetter == "" || strpos($work['Author'], $currentLetter) === 0){
						array_push($workData, $work);
						array_push($authors, $work['Author']);
					}

				}
			}
			if(count($workData) === 0){
				echo "There are no authors under <i>" . $currentLetter . "</i>.";
			}
			foreach($workData as $authorWork){

				?>

				<div class="authorCard">
					<a href="ADULT_author.php?author=<?php echo $authorWork['Author']; ?>">
						<img src="Thumbnails/<?php echo $authorWork['ThumbnailImage']; ?>">
					</a>
					<div class="authorInfo">
					<h4 class="authorName">
						<a href="ADULT_author.php?author=<?php echo $authorWork['Author']; ?>">
							<?php echo $authorWork['Author'] ?>
						</a>
					</h4>
					<?php
						$works = getAllByAuthor($authorWork['Author']);
						shuffle($works);
						for($i = 0; $i <= min(2, count($works)); $i++){
							$work = $works[$i];
							echo "<p class='authorWork'><a href='ADULT_viewer.php?url=" . $work['FileLocation'] . "'><i>" . $work['Title'] . "</i></a></p>";
						}
					?>
					<p style='margin-top:10px; padding-left: 5px;'>
						<a href="ADULT_author.php?author=<?php echo $authorWork['Author']; ?>">
							<b>See all</b>
						</a>
					</p>

				</div>
				</div>
				<div style="clear: both;"></div>

				<?php
			}

			?>


		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
		?>
