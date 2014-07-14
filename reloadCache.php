<?php

require_once ('functions2.php');

session_start();
$_SESSION['HearATaleContent'] = getDataFromSQL();
println("Session data reloaded, local database updated.");

?>