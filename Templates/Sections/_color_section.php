 <section class="color-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form>
          <input type="text" class="form-control" name="" id="ticket_price"  value="<?= $trip_id['boarding_price'] ?>">
        </form>
        <div class="seat-color mb-3 mt-2">
            <div class=" py-2 px-1 ">
              <div class="color red mx-auto"></div>
              <small class="seat-colors ">selected seat</small>
            </div>
            <div class=" py-2 px-1 border-start ">
              <div class="color green mx-auto"></div>
              <small class="seat-colors">booked seat</small>
            </div>
            <div class=" py-2 px-1 border-start ">
              <div class="color grey mx-auto"></div>
              <small class="seat-colors">empty seat</small>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $trip_id['boarding_price'] ?>