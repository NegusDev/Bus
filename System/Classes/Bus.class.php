<?php 

class Bus {

	public function getAllBusTrip() {
		global $dbc;
		$sql = "SELECT * FROM travel_info";
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
}