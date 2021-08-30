<?php
include_once('Config.php');

$id = (int) $_GET['unique_id'];
$unique_id = $Seat->getTravelinfo($id);

$View->header();
require_once('Templates/Sections/_select_Seat_header.php');
require_once('Templates/Sections/_subtitle_section.php');
require_once('Templates/Sections/_color_section.php');
require_once('Templates/Sections/_seat_section.php');
$View->footer();
