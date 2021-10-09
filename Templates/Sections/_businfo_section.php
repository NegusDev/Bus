<!-- BUS SECTION -->
<section class="bus mt-2">
  <div class="">
    <small class="fw-bolder mx-3">Available deals today <i class="fas fa-angle-down"></i></small>
    <div class="row my-2">
      <div class="col-12 col-md-4">
        <?php foreach($trips as $trip) { ?>
        <div class=" busBox py-3 px-2 m-3">
                <div class="bus-info">
                  <div class="bus-name">
                      <h6 class="text-capitalize fw-bold"><?= $trip['bus_name']?></h6>
                  </div>
                    <h6 class="d-flex align-items-center justify-content-center pay">UGX  <?= $trip['boarding_price']?></h6>
                </div>
                
                  <hr class="m-0">
              
                <div class="trip-info">
      
                  <div class="location d-flex justify-content-between text-capitalize">
                    <p class="from fw-bold"><i class="fas fa-map-marker-alt me-2"></i><?= $trip['from_city']?></p>
                    <p class="transit"><i class="fas fa-long-arrow-alt-right"></i></p>
                    <p class="to fw-bold"><?= $trip['to_city']?></p>
                  </div>
                  <div class="time d-flex justify-content-between m-0">
                    <p class="from-time"><Small><i class="fas fa-clock me-2"></i><?= date('H:mA',strtotime($trip['boarding_time']))?></Small></p>
                    <p class="transit-time"><small>5hrs</small></p>
                    <p class="to-time"><small> <?= date('H:mA', strtotime($trip['arrival_time']))?> </small></p>
                  </div>
                  <div class="info">
                    <div class="row">
                        <div class="col-6">
                            <div class="p-3 text-center departs rounded-2 text-white">
                                <div class="fw-bolder">Departure</div>
                                <div><?= date('d-M-y', strtotime($trip['departure_date']))?></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 text-center seats rounded-2 text-white">
                                <div class="text-truncate fw-bolder">Available</div>
                                <div> <?= $trip['seats_available'] ?> seats</div>
                            </div>
                        </div>
                    </div>                  
      
                  </div>
                  <div class=" text-center py-3">
                    <a href="./select_seat.php?trip_id=<?= $trip['trip_id'] ?>"  class="btn book-btn text-uppercase  w-100">Book Now <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
        </div>
          <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- X BUS SECTION X -->