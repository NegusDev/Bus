<?php
include_once('Config.php');
include('Controllers/Search.php');


$trips = $Bus->getAllBusTrip();

$View->header();
require_once('Templates/Sections/_home_header.php');
require_once('Templates/Sections/_search_section.php');
require_once('Templates/Sections/_businfo_section.php');
$View->footer();
