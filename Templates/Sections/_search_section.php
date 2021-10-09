 <section id="search_section" class="search_section">
          <div class="mx-3">
            <div class="row">
              <div class="col-md-12">
                <div class="search-bar text-center  my-2">
                  <button type="button" class="btn toggle-btn rounded-circle">
                    <i class="fas fa-search "></i>
                  </button>

                  <form method="GET" class="form my-2" id="form" action="search.php">
                    <div class="form-search rounded-2 py-3 px-2">
                     <div class="form-floating">
                      <input type="text" class="form-control" name="from" id="from" placeholder="Kampala">
                      <label for="from" class="form-label">from</label>
                     </div>
                     <div class="mb-3 form-floating">
                      <input type="text" class="form-control" name="to" id="to" placeholder="Mbarara">
                      <label for="to" class="form-label">to</label>
                     </div>
                     <div class="mb-3 form-floating">
                        <input type="date" class="form-control" name="date" id="to" >
                        <label for="date" class="form-label">journey date</label>
                      </div>
                      <div class="my-2 d-flex justify-content-center">
                        <button type="submit"  class="btn submit-button form-control w-100 text-capitalize" id="bookBtn">Search buses</button>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>