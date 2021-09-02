<?php
include ('Config.php');
include ('Controllers/Requests.php');

$trip_id = (int) $_GET['trip_id'];
$trip = $Bus->getBusById($trip_id);




$View->header();
include ('Templates/Sections/_select_Seat_header.php');
include ('Templates/Sections/_subtitle_section.php');
include ('Templates/Sections/_color_section.php');
include ('Templates/Sections/_seat_section.php');
$View->footer();
