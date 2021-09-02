<?php 

class Bus {

	public function getAllBusTrip() {
		global $dbc;
		$sql = "SELECT travel_info.*, bus.bus_name FROM travel_info
				INNER JOIN bus ON travel_info.bus_id = bus.bus_id  ";
		$result = $dbc->query($sql) or die($dbc->error);
		if ($result->num_rows > 0) {
			while ($row =$result->fetch_assoc()) {
				$buses[] = $row;
			}
		}

		return $buses ?? [];
		// echo '<pre>', print_r($buses,true), '</prev>';
  //       exit();

	}
	public function getBusById(int $trip_id): array {
		global $dbc;
		$sql = "SELECT * FROM `travel_info` WHERE `trip_id` = $trip_id";
		$result = $dbc->query($sql) or die($dbc->error);
		if ($result->num_rows > 0) {
            while ($row =$result->fetch_assoc()) {
                $bus = $row;
            }
        }
        return $bus ?? [];
	}

	// SEARCH TRIP 
	public function searchTrip() {
		global $dbc;
		$sql = "SELECT * FROM `travel_info` WHERE `from_city` LIKE '%' || `to_city` LIKE
				'%' || `departure_date` LIKE '%'";
		$result = $dbc->query($sql) or die($dbc->error);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$trip = $row;
			}
		}
		return $trip ?? [];
		// echo '<pre>', print_r($trip,true), '</prev>';
  //       exit();
	}
}