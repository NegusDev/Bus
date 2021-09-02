<?php

define ('BASE_DIR', __DIR__);
include('System/dbc.php');

// Models 
include(BASE_DIR . '/System/Classes/View.class.php');
include(BASE_DIR . '/System/Classes/Bus.class.php');
include(BASE_DIR . '/System/Classes/Requests.class.php');

$View = new View();
$Bus = new Bus();
$Requests = new Requests();
