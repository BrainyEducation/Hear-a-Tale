<?php

session_start();

require_once('functions.php');

if (!isset($_SESSION['matrix'])) {
    loadData();
}

function getPlaylist($section) {
    $playlist = "";
    foreach ($_SESSION['matrix'] as $story) {
        if (strtolower($story[8]) == strtolower($section)) {
            $playlist .= "'" . $story[4] . "', ";
        }
    }
    return substr($playlist, 0, strlen($playlist) - 2);
}

$playlist = getPlaylist('Nursery Rhymes (Volland)');
var_dump($playlist);
?>
