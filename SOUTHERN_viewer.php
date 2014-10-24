<?php
require_once ('functions2.php');

$url = $_GET['url'];
$sourceCategory = $_GET['cat'];

$play = NULL;

if($url != ""){
	ensureDataLoaded();

	foreach ($data as $work) {
		if ($work['FileLocation'] == $url) {
			$play = $work;
			break;
		}
	}

	$previousVideo = NULL;
	$nextVideo = NULL;

	$otherParts = getAllPartsOutOfPool($play['Title'], getAllInCategory("Southern Literature"));
	if(count($otherParts) > 1){
		$thisPart = $play['Chapter'];
		for($i = 0; $i < count($otherParts); $i++){
			if($thisPart == $otherParts[$i]['Chapter']){
				if($i != 0) $previousVideo = $otherParts[$i - 1];
				if($i != (count($otherParts) - 1)) $nextVideo = $otherParts[$i + 1];
			}
		}
	}

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
		if($play != null && $play['Title'] != "") echo "<title>" . $play['Title'] . " - Hear a Tale</title>";
		else echo "<title>Not Found - Hear a Tale</title>";
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalHeader.php');
		?>

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
				background-color: rgba(222, 222, 222, 0)
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

				api.bind("finish", function() {

					<?php
					if($nextVideo != NULL){
						if(strpos($sourceCategory, '/Stories') == FALSE){
					?>

					window.location.href = "video.php?url=<?php echo $nextVideo['FileLocation'];?>&cat=<?php echo $sourceCategory;?>"

					<?php
						}
					}
					?>

				});

			});
		</script>



	</head>

	<body>

		<?php
		include ($_SERVER['DOCUMENT_ROOT'] . '/globalBody.php');
		?>


<div class="span9" style="margin-left:5px; margin-right:5px;">
	<div style="clear: both;"></div>

	<?php
		if(preg_match('/(?i)msie [1]/',$_SERVER['HTTP_USER_AGENT'])) {
	?>

	<div style="margin-top:20px; margin-left:0; width:80%;" class="IE-warning">
	<b>
		The version of Internet Explorer you are using may not support Hear a Tale's video player.<br>
		Please consider using a more reliable web browser:<br>
		<a href="https://www.google.com/chrome/browser/">
			<img src="http://icons.iconarchive.com/icons/google/chrome/128/Google-Chrome-icon.png">
		</a>
		<a href="https://www.mozilla.org/en-US/firefox/new/">
			<img src="http://img2.wikia.nocookie.net/__cb20090607180304/gta/pl/images/4/49/Firefox_(logo).png">
		</a>

	</b>
	</div>

	<?php } ?>

	<?php	if($play != null){  ?>

		<p style="font-size:200%; line-height:110%;"><b> <?php echo $play['Title'] . ($play['Chapter'] != "" ? ", " . $play['Chapter'] : "")?> </b></p>
		<p class="lightLink" style="font-size:175%;">
			<?php
			$exploded = explode("/", $work['Category']);
			$type = $exploded[2];
			?>
			<a href='SOUTHERN_home.php?type=<?php echo $type; ?>'>
				<?php echo "Southern " . $type; ?>
			</a>
		</p>
		<p class="lightLink" style="font-size:175%;"> by
			<a href='SOUTHERN_author.php?author=<?php echo $play['Author']; ?>'>
				<?php echo convertAuthorName($play['Author']); ?>
			</a>
		</p>
		<br>

		<?php if(substr($url, -4) === ".mp3"){ ?>
			<div style='width:300px; height:auto; background-color:#dddddd;'>

				<img style='width=auto; height:auto; display: table; margin:0 auto;' src="Thumbnails/<?php echo $play['ThumbnailImage']; ?>">

			</div>
		<?php } ?>

		<div data-swf="//releases.flowplayer.org/5.4.6/flowplayer.swf"
		class="flowplayer fixed-controls no-toggle play-button color-light"
		data-ratio="0.5625" data-embed="false">
			<?php if(substr($url, -4) === ".mp3"){ ?>
			<audio controls preload="auto">
				<source type="audio/mp3" src="http://podcasting.gcsu.edu/4DCGI/Podcasting/GRU/Episodes/<?php echo $url;	?>" >
			</audio>
			<?php } else { ?>
			<video preload="auto">
				<source type="video/mp4" src="http://podcasting.gcsu.edu/4DCGI/Podcasting/GRU/Episodes/<?php echo $url;	?>"/>
			</video>
			<?php } ?>
		</div>

		<?php if($previousVideo != null || $nextVideo != null){ ?>

			<table style="width:300px; margin-top: 20px;">
				<tr align="center">
					<?php if($previousVideo != null){ ?>
					<td>
						<a href="SOUTHERN_viewer.php?url=<?php echo $previousVideo['FileLocation']; ?>">
							<img src="images/section_icons/arrow_left.png">
						</a>
					</td>
					<?php } ?>
					<?php if($nextVideo != null){ ?>
						<td>
							<a href="SOUTHERN_viewer.php?url=<?php echo $nextVideo['FileLocation']; ?>">
								<img src="images/section_icons/arrow_right.png">
							</a>
						</td>
					<?php } ?>
				</tr>

				<tr align="center">
					<?php if($previousVideo != null){ ?>
					<td>
						<a href="SOUTHERN_viewer.php?url=<?php echo $previousVideo['FileLocation']; ?>">
							<?php echo $previousVideo['Chapter']; ?>
						</a>
					</td>
					<?php } ?>
					<?php if($nextVideo != null){ ?>
						<td>
							<a href="SOUTHERN_viewer.php?url=<?php echo $nextVideo['FileLocation']; ?>">
								<?php echo $nextVideo['Chapter']; ?>
							</a>
						</td>
					<?php } ?>
				</tr>
			</table>

		<?php } ?>

<?php
	} else error404('video');
	include ($_SERVER['DOCUMENT_ROOT'] . '/globalFooter.php');
?>
