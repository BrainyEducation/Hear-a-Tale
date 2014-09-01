<?php

$dataLoaded = false;
$data;

function println($text) {
	echo $text . "<br/>";
}

function readyHTML($text) {
	return utf8_decode(htmlentities($text));
}

function getDataFromSheet() {
	$url = "https://docs.google.com/spreadsheet/pub?key=0AgqQsk5IC_NSdHI3MC03emJTSHMwbWVvRTFCTWt0blE&output=csv";
    $file = fopen($url, 'r');
	$data = array();
	fgetcsv($file, ","); //skip the first line
    while (($col = fgetcsv($file, ",")) != false) {
  		$work = array();
		$work['Title'] = $col[0];
		$work['FileLocation'] = $col[1];
		$work['Author'] = $col[5];
		$work['Length'] = $col[6];
		$work['Words'] = $col[7];
		$work['Target'] = $col[8];
		$work['Chapter'] = $col[9];
		$work['ThumbnailImage'] = str_replace("\\", "/", $col[10]);
		$work['Description'] = $col[11];
		$category = "";
		for($x = 2; $x <= 4; $x++){
			if($col[$x] != ""){
				if($x != 2) $category .= "/";
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

function getAllByAuthor($author){
	ensureDataLoaded();
	global $data;
	$matches = array();
	$titles = array();
	foreach ($data as $work){
		if($work['Author'] == $author && !in_array($work['Title'], $titles)){
			array_push($matches, $work);
			array_push($titles, $work['Title']);
		}
	}
	return $matches;
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
		if ($work['ThumbnailImage'] == "" || $work['Title'] == "" || $work['FileLocation'] == ""){
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
		if ($work['ThumbnailImage'] == "" || $work['Title'] == "" || $work['FileLocation'] == "" || getimagesize('Thumbnails/' . str_replace("\\", "/", $work['ThumbnailImage']))[1] > 120){
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
		echo '<a href="adult/workslist.php?author=' . $work['Author'] . '">' . PHP_EOL;
		echo '<img src="Thumbnails/' . str_replace("\\", "/", $work['ThumbnailImage']) . '">' . PHP_EOL;
		echo '<div class="carousel_text">' . readyHTML($work['Author']) . '</div>' . PHP_EOL;
		echo '</a>' . PHP_EOL;
		echo '</div>' . PHP_EOL;
	}
	echo '</div>' . PHP_EOL;
}

function error404($what){
	$emotes = array(":(",":o",":O","D:",":c",":$","ಠ_ಠ", "(>_<)", "(?_?)", "(-_-)", "(~_~)", "(╯°□°）╯︵ ┻━┻", ":(", "ლ(ಠ益ಠლ)﻿");
	$error = "<div style='text-align:center;'> <br><h3>The <i>" . $what . "</i> you were looking for could not be found...<br><br>";
	$error .= $emotes[rand(0, count($emotes)) - 1];
	$error .= "<br><br>Please go back and try again!</p></h3> </div><br><br><br>";
	$error .= "<table style='width:100%;'>
		<tr align='center'>
			<td><a href='children.php'><img src='images/section_icons/Children.png'></a></td>
			<td><a href='category.php?cat=Children/Rhymes'><img src='images/section_icons/Children!Rhymes.png'></a></td>
			<td><a href='category.php?cat=Children/Stories'><img src='images/section_icons/Children!Stories.png'></a></td>
			<td><a href='category.php?cat=Children/Rhymes and Stories'><img src='images/section_icons/Children!Rhymes_and_Stories.png'></a></td>
		<tr>
		<tr align='center' valign='top'>
			<td>Children's Section</td>
			<td>Rhymes</td>
			<td>Stories</td>
			<td>Rhymes and Stories</td>
		</tr>
	</table>";
	echo $error;
}

function aboutHeader($currentPage){
	echo "<table class='header' style='width:100%;'>";
		echo "<tr align='center' valign='top'>";
			echo ($currentPage == "Introduction" ? "<td class='selected'>" : "<td>");
				echo "<a href=ABOUT_intro.php><img src='images/section_icons/Children.png'><br><b>Introduction</b></a></td>";
			echo ($currentPage == "To Parents" ? "<td class='selected'>" : "<td>");
				echo "<a href=ABOUT_parents.php><img src='images/about/parents.png'><br><b>To Parents</b></a></td>";
			echo ($currentPage == "To Teachers" ? "<td class='selected'>" : "<td>");
				echo "<a href=ABOUT_teachers.php><img src='images/about/teachers.png'><br><b>To Teachers</b></a></td>";
			echo ($currentPage == "Why Classic Stories Matter" ? "<td class='selected'>" : "<td>");
				echo "<a href=ABOUT_why.php><img src='images/about/why.png'><br><b>Why Classic Stories Matter</b></a></td>";
			echo ($currentPage == "History of the Project" ? "<td class='selected'>" : "<td>");
				echo "<a href=ABOUT_history.php><img src='images/about/history.png'><br><b>History of the Project</b></a></td>";
			echo ($currentPage == "More Information" ? "<td class='selected'>" : "<td>");
				echo "<a href=ABOUT_more.php><img src='images/about/more.png'><br><b>More Information</b></a></td>";
		echo "</tr>";
	echo "</table><br>";
}

?>
