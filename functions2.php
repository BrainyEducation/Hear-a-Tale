<?php

$dataLoaded = false;
$data;

function println($text) {
	echo $text . "<br/>";
}

function readyHTML($text) {
	return utf8_decode(htmlentities($text));
}

//loaded data from MySQL and returns it as an array
function getDataFromSheet() {
	$url = "https://docs.google.com/spreadsheet/pub?key=0AgqQsk5IC_NSdHI3MC03emJTSHMwbWVvRTFCTWt0blE&output=csv";
    $file = fopen($url, 'r');
	$data = array();
	fgetcsv($file, ","); //skip the first line
    while (($col = fgetcsv($file, ",")) != false) {
  		$work = array();
		$work['Author'] = $col[0];
		$work['Title'] = $col[1];
		$work['Chapter'] = $col[2];
		$work['FileLocation'] = $col[3];
		$work['ThumbnailImage'] = str_replace("\\", "/", $col[4]);
		$work['Description'] = $col[11];
		$work['Length'] = $col[9];
		$category = "";
		for($x = 5; $x <= 8; $x++){
			if($col[$x] != ""){
				if($x != 5) $category .= "/";
				$category .= $col[$x];
			} else continue;
		}
		$work['Category'] = $category;
		array_push($data, $work);
    }
    fclose($file);
	return $data;
}

function ensureDataLoaded() {
	global $dataLoaded, $data;
	if (!$dataLoaded) {
		//session_start();
		if (isset($_SESSION['HearATaleContent'])) {
			$GLOBALS['data'] = $_SESSION['HearATaleContent'];
			$dataLoaded = true;
		} else {
			$data = getDataFromSheet();
			$_SESSION['HearATaleContent'] = $data;
			$dataLoaded = true;
		}
	}
}

function getAllInCategory($query) {
	ensureDataLoaded();
	global $data;
	$matches = array();
	foreach ($data as $work) {
		//category is query or is in a subcategory of query
		if(categoryEqual($work['Category'], $query)){
			array_push($matches, $work);
		}
	}
	return $matches;
}

function categoryEqual($query, $against){
	return $query == $against || strpos($query, $against . '/') === 0;
}

function titleCarousel($category) {
	$data = getAllInCategory($category);
	shuffle($data);
	echo '<div class="owl-carousel">' . PHP_EOL;
	$max = 7;
	for ($x = 0; $x < min($max, count($data)); $x++) {
		$work = $data[$x];
		if ($work['ThumbnailImage'] == "" || $work['Title'] == ""){
			$max++;
			continue;
		}
		echo '<div class="carousel_item">' . PHP_EOL;
		echo '<a href="video.php?url=' . $work['FileLocation'] . '">' . PHP_EOL;
		echo '<img src="Thumbnails/' . str_replace("\\", "/", $work['ThumbnailImage']) . '">' . PHP_EOL;
		echo '<div class="carousel_text">' . readyHTML($work['Title']) . '</div>' . PHP_EOL;
		echo '</a>' . PHP_EOL;
		echo '</div>' . PHP_EOL;
	}
	echo '</div>' . PHP_EOL;
}

function twoRowTitleCarousel($category) {
	$data = getAllInCategory($category);
	shuffle($data);
	echo '<div class="owl-carousel">' . PHP_EOL;
	$max = 14;
	for ($x = 0; $x < min($max, count($data)); $x++) {
		$work = $data[$x];
		if ($work['ThumbnailImage'] == "" || $work['Title'] == "" || getimagesize('Thumbnails/' . str_replace("\\", "/", $work['ThumbnailImage']))[1] > 120){
			$max++;
			continue;
		}
		echo '<div class="carousel_item">' . PHP_EOL;
		echo '<a href="video.php?url=' . $work['FileLocation'] . '">' . PHP_EOL;
		echo '<img src="Thumbnails/' . str_replace("\\", "/", $work['ThumbnailImage']) . '">' . PHP_EOL;
		echo '<div class="carousel_text">' . readyHTML($work['Title']) . '</div>' . PHP_EOL;
		echo '</a>' . PHP_EOL;
		echo '</div>' . PHP_EOL;
		if(($x - ($max - 14)) == 6){
			echo '</div><div class="owl-carousel">';
		}
	}
	echo '</div>' . PHP_EOL;
}

function authorCarousel($category) {
	$catData = getAllInCategory($category);
	$data = array();
	$authors = array();
	foreach($catData as $work){
		if($work['Author'] == "" || is_null($work['Author'])) continue;
		if(!in_array($work['Author'], $authors)){
			array_push($data, $work);
			array_push($authors, $work['Author']);
		}
	}
	shuffle($data);
	echo '<div class="owl-carousel">' . PHP_EOL;
	for ($x = 0; $x < min(7, count($data)); $x++) {
		$work = $data[$x];
		if ($work['ThumbnailImage'] == "" || $work['Title'] == "")
			continue;
		echo '<div class="carousel_item">' . PHP_EOL;
		echo '<a href="video.php?url=' . $work['FileLocation'] . '">' . PHP_EOL;
		echo '<img src="Thumbnails/' . str_replace("\\", "/", $work['ThumbnailImage']) . '">' . PHP_EOL;
		echo '<div class="carousel_text">' . readyHTML($work['Author']) . '</div>' . PHP_EOL;
		echo '</a>' . PHP_EOL;
		echo '</div>' . PHP_EOL;
	}
	echo '</div>' . PHP_EOL;
}

function error404($what){
	$emotes = array(":(",":o",":O","D:",":c",":$","ಠ_ಠ", "(>_<)", "(?_?)", "(-_-)", "(~_~)", "(╯°□°）╯︵ ┻━┻", ":(", "ლ(ಠ益ಠლ)﻿", "( ͡° ͜ʖ ͡°)");
	$error = "<div style='text-align:center;'> <br><h3>The <i>" . $what . "</i> you were looking for could not be found...<br><br>";
	$error .= $emotes[rand(0, count($emotes)) - 1];
	$error .= "<br><br>Please go back and try again!</h3> </div><br><br>";
	echo $error;
}

?>
