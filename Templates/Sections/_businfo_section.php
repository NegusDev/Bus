 <!-- BUS SECTION -->
        <section class="bus mt-2">
          <div class="container">
            <small class="fw-bolder">Available deals today <i class="fas fa-angle-down"></i></small>
            <div class="row my-2">
              <div class="col-12 col-md-6">
                <?php foreach($trips as $trip) { ?>
                <div class=" busBox py-3 px-2 mb-5">
                  <div class="bus-info">
                    <div class="bus-name">
                       <h4 class="text-capitalize"><?= $trip['bus_name'] ?></h4>
                    </div>
                     <h3 class="d-flex align-items-center justify-content-center pay">UGX <?= $trip['boarding_price'] ?></h3>
                  </div>
                  
                    <hr class="m-0">
                 <!--  <div class="busImg float-start w-25 ">
                    <img src="assets/img/bus.jpg" class="img-field">                    
                  </div> -->

              
                  <div class="trip-info  ">

                    <div class="location d-flex justify-content-around text-capitalize">
                      <p class="from"><i class="fas fa-map-marker-alt me-2"></i><?= $trip['from_city'] ?></p>
                      <p class="transit"><i class="fas fa-long-arrow-alt-right"></i></p>
                      <p class="to"><?= $trip['to_city'] ?></p>
                    </div>
                    <div class="time d-flex justify-content-evenly m-0">
                      <p class="from-time"><Small><i class="fas fa-clock  fa-spin  me-2"></i><?= date('H:mA',strtotime($trip['boarding_time']))  ?></Small></p>
                      <p class="transit-time"><small>5hrs</small></p>
                      <p class="to-time"><small><?= date('H:mA', strtotime($trip['arrival_time'])) ?></small></p>
                    </div>
                    <div class="info d-flex justify-content-evenly">
                      <div class="departs">
                        <p class="text-center">Departs on <span class="text-center"><?=date('d-M-y', strtotime($trip['departure_date']))  ?> </p>
                      </div>
                      <div class="seats">
                        <p><?= $trip['seats_available'] ?> Available seats</p>
                      </div>

                    </div>
                    <div class="book-btn d-flex justify-content-center">
                      <a href=" <?php printf('%s?trip_id=%s','select_seat.php',$trip['unique_id']); ?>" class="py-2 px-5">Book now <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
                  <?php } ?>
              </div>
            </div>
          </div>
        </section>
        <!-- X BUS SECTION X -->