 <section id="search_section" class="search_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="search-bar text-center  my-2">
                  <button type="button" class="toggle-btn">
                    <i class="fas fa-search "></i>
                  </button>

                  <form method="GET" class="form my-2" id="form" action="index.php">
                    <div class="form-search mb-3">
                     <div class="form-floating">
                      <input type="text" class="form-control" name="from" id="from" placeholder="Kampala">
                      <label for="from" class="form-label">from</label>
                     </div>
                     <div class="mb-3 form-floating">
                      <input type="text" class="form-control" name="to" id="to" placeholder="Mbarara">
                      <label for="to" class="form-label">to</label>
                     </div>
                    </div>
                    <div class="form-search mb-3">
                       <div class="mb-3 form-floating">
                      <input type="date" class="form-control" name="date" id="to" >
                      <label for="to" class="form-label">journey date</label>
                     </div>
                    </div>

                    <div class="my-2 d-flex justify-content-center">
                      <button type="submit"  class="submit-button form-control w-50" id="bookBtn">Search buses</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>