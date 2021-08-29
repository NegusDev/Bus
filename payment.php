<?php

include_once('Config.php');


$View->header();
require_once("Templates/Sections/_payment_header.php");
require_once("Templates/Sections/_payment_methods.php");
$View->footer();