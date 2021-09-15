 <section class="bus-section">
          <div class="container">
            <div class="row ">
              <div class="col-12">
              <div class="proceed">
              <form method="POST"> 
                <input type="hidden" name="trip" value="<?= $trip['trip_id'] ?>">
                <input type="hidden" name="bus" value="<?= $trip['bus_id'] ?>">
                <p class="text">You have selected</p>
                <textarea class="count" id="count" name="seats">0</textarea> 
                <p>seats for Ugx</p>
                <textarea class="total" name="price" id="total">0</textarea>

                <input type="hidden" name="selected_seats" value="" id="selected_seats">

                

                <div class="whole-bus mt-4 ">
                  <div class="row-header d-flex justify-content-around align-items-center mb-0 mt-3">
                    <p class="bg-danger text-center">RIGHT ROW</p>
                    <p class="bg-primary text-center">MIDDLE ROW</p>
                    <p class="bg-success text-center">LEFT ROW</p>
                  </div>

                  <div class="clearfix">
                    <div class="row g-1 seat-rows">
                      <?php
                        $seat_count = 0;
                        $seat_row_count = 0;
                        foreach ($seats as $seat) {
                          $seat_count++;
                          $seat_row_count++;
                          $class = 'btn-primary';

                          if ($seat['status'] == true) {
                            $class = 'btn-success';
                          }

                          echo '<div class="col-1">
                          <div class="seat btn btn-sm ' . $class.' w-100" value="' . $seat['id'] . '">' . $seat['id'] . '</div>
                        
                          </div>';
                          if ($seat_row_count == 3) {
                            echo '<div class="col-2"></div>';
                            $seat_row_count = 0;
                          }

                          if ($seat_count == 6) {
                              echo '<div class="col-12"></div>';
                              $seat_count = 0;
                          }
                        }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="book-btn d-flex justify-content-center">
              <button type="submit" name="next" id="buttonPay" class="py-2 px-5">Next<i class="fas fa-long-arrow-alt-right ms-2"></i></button>
            </div>
            </form>
            </div>
          </div>
          
</section>