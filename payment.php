<?php

include_once('Config.php');

$request_id = (int) $_GET['pay'];
$pay = $Requests-> getRequestsById($request_id);


$View->header();
require_once("Templates/Sections/_payment_header.php");
require_once("Templates/Sections/_payment_methods.php");
$View->footer();