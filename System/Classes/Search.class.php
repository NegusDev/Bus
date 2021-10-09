<?php

class Search {

    public function search($from, $to, $date) {
        global $dbc; 
        $sql = "SELECT travel_info.*, bus.bus_name
                FROM `travel_info`
                LEFT JOIN bus ON travel_info.bus_id = bus.bus_id
                WHERE `from_city` LIKE '$from%' 
                AND `to_city` LIKE '$to%' AND `departure_date` LIKE '$date%' 
                LIMIT 12  ";
        $result = $dbc->query($sql) or die($dbc->error);
        if ($result->num_rows > 0) {
            while ($row =$result->fetch_assoc()) {
                $search[] = $row;
            }
        }
        return $search ?? [];
    }

    public function viewAllSearched(array $search):string {
        $html = '<div class="col-12 col-md-4">';
        if (empty($search)) {
            $html .= '<span>No results found</span>';
        }
        else {
            foreach ($search as $s) {
                $html .= '
                <div class=" busBox py-3 px-2 m-3">
                <div class="bus-info">
                  <div class="bus-name">
                      <h6 class="text-capitalize fw-bold">'.$s['bus_name'].'</h6>
                  </div>
                    <h6 class="d-flex align-items-center justify-content-center pay">UGX '. $s['boarding_price'].'</h6>
                </div>
                
                  <hr class="m-0">
              
                <div class="trip-info">
      
                  <div class="location d-flex justify-content-between text-capitalize">
                    <p class="from fw-bold"><i class="fas fa-map-marker-alt me-2"></i>'.$s['from_city'].'</p>
                    <p class="transit"><i class="fas fa-long-arrow-alt-right"></i></p>
                    <p class="to fw-bold">'.$s['to_city'].'</p>
                  </div>
                  <div class="time d-flex justify-content-between m-0">
                    <p class="from-time"><Small><i class="fas fa-clock me-2"></i>'.date('H:mA',strtotime($s['boarding_time'])).'</Small></p>
                    <p class="transit-time"><small>5hrs</small></p>
                    <p class="to-time"><small>'. date('H:mA', strtotime($s['arrival_time'])) .'</small></p>
                  </div>
                  <div class="info">
                    <div class="row">
                        <div class="col-6">
                            <div class="p-3 text-center departs rounded-2 text-white">
                                <div class="">Departure</div>
                                <div>'.date('d-M-y', strtotime($s['departure_date'])).'</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 text-center seats rounded-2 text-white">
                                <div class="text-truncate">Available</div>
                                <div>'. $s['seats_available'].' seats</div>
                            </div>
                        </div>
                    </div>                  
      
                  </div>
                  <div class=" text-center py-3">
                    <a href="./select_seat.php?trip_id='. $s['trip_id'].'"  class="btn book-btn text-uppercase  w-100">Book Now <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
                ';
            }
            $html .= '</div>';
        }
        return $html;
    }

}