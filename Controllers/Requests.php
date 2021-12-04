<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $error = '';
    if (isset($_POST['next'])) {
        $ticket_id = rand(time(),2000);
        $data = [
            "unique_id" => $ticket_id,
            "trip_id" => $_POST['trip'],
            "bus_id"  => $_POST['bus'],
            "selected_Seats"  => $_POST['selected_seats'],
            "total_seats" => $_POST['seats'],
            "total_price" => $_POST['price'],
            "status" => "pending" //booked
        ];
        //0708954909  
    
        if (empty($data['total_seats'])) {
            $errors = "Select your seat please";
        }
    
        if ($errors == "") {
            $result = $Requests->createRequests('requests',$data);
            if ($result) {
                header("location:./payment.php?pay=".$data['unique_id']."&trip_id=".$data['trip_id']);
            }else {
                die("failed");
            }
        } 
    }else {
        die('failed');
    }
    
}