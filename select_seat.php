<?php
include ('Config.php');
include ('Controllers/Requests.php');

$trip_id = (int) $_GET['trip_id'];
$trip = $Bus->getBusById($trip_id);
$no_of_Seats = 72;
$seats = [];

for ($i=1; $i<=$no_of_Seats; $i++) {
    $seats[$i] = [
        'id'=> $i, 'status'=> false
    ];  
}

$seats[35]['status'] = true;
$seats[30]['status'] = true;
$seats[15]['status'] = true;

$View->header();
include ('Templates/Sections/_select_Seat_header.php');
include ('Templates/Sections/_subtitle_section.php');
include ('Templates/Sections/_color_section.php');
include ('Templates/Sections/_seat_section.php');
$View->footer();
