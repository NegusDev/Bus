 <section class="pay-method-section">
          <div class="container">
            <div class="row ">
              <div class="col-12 col-md-6 justify-content-center">
                 <div class="list-group pay-methods my-3">
                  <a href="#" class="list-group-item list-group-item-action disabled fw-bold bg-dark tex-white" tabindex="-1" aria-disabled="true">Choose a payment method</a>
                  <button type="button" class="list-group-item list-group-item-action"><i class="fab fa-cc-amazon-pay me-2"></i>Airtel Money</button>
                  <button type="button" class="list-group-item list-group-item-action"><i class="fab fa-cc-amex me-2"></i>MTN Mobile Money</button>
                  <button type="button" class="list-group-item list-group-item-action"><i class="fab fa-cc-visa me-2"></i>Visa card</button>
                </div>
                <div class="travel-summary">
                  <h5 class="text-center pt-2">Travel summary</h5>
                  <hr class="m-0">
                  <div class="subtitle-travel ">
                    <h6>Kampala to Gulu, Tuesday</h6>
                    <h6>Gagga Coaches at 09:45AM</h6>
                  </div>
                  <p class="text-black-50  mb-0">1 person travelling</p>
                  <hr class="m-0">
                  <ul class="mb-0">
                    <li class="m-1">John Doe</li>
                  </ul>
                  <hr class="m-0">
                  <p class="d-flex justify-content-end total">Total: UGX<span><?= $pay['total_price']  ?></span></p>
                </div>

               
              </div>
            </div>
            <div class="book-btn d-flex justify-content-center">
              <a href="payment.html" class="py-2 px-5">Pay Now</a>
            </div>
          </div>
        </section>