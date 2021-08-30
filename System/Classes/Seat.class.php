<?php

class Seat {
	public function getTravelinfo(int $bus_id):array {
		global $dbc;
		$sql = "SELECT * FROM travel_info WHERE unique_id = $bus_id ";
		$result = $dbc->query($sql) or die($dbc->error);
		if ($result->num_rows > 0) {
            while ($row =$result->fetch_assoc()) {
                $bus[] = $row;
            }
        }
        return $bus ?? [];
       // echo '<pre>',print_r($bus,true) ,'</prev>';
       // exit();
	}
}