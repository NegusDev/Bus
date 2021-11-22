<?php
include_once('Config.php');
include('Controllers/Search.php');

$View->header();
require_once('Templates/Sections/_home_header.php');
require_once('Templates/Sections/_search_section.php');
echo $search['content'];
$View->footer();