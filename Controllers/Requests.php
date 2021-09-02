<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $error = '';
    if (isset($_POST['next'])) {
        $random_id = rand(time(),2000);
        $data = [
            "unique_id" => $random_id,
            "trip_id" => $_POST['trip'],
            "bus_id"  => $_POST['bus'],
            "total_seats" => $_POST['seats'],
            "total_price" => $_POST['price'],
            "status" => "pending" //booked
        ];
    
        if (empty($data['total_seats'])) {
            $errors = "Select your seat please";
        }
    
        if ($errors == "") {
            $result = $Requests->createRequests('requests',$data);
            if ($result) {
                header("location:./payment.php?pay=".$data['unique_id']);
            }else {
                die("failed");
            }
        } 
    }else {
        die('failed');
    }
    
}