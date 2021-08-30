<?php
declare(strict_types=1);
include_once('Config.php');

$bus_id = (int) $_GET['id'];
$id = $Bus->getBusById($bus_id);

$View->header();
require_once('Templates/Sections/_select_Seat_header.php');
require_once('Templates/Sections/_subtitle_section.php');
require_once('Templates/Sections/_color_section.php');
require_once('Templates/Sections/_seat_section.php');
$View->footer();
