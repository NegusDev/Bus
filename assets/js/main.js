$(document).ready(function(){
	$('.search-bar').click(function(){
		// $('#form').slideDown("slow");
		$('.toggle-btn').toggle(function() {
			$('.form').css('display', 'block');
			// console.log("uooo");
		});

		
	});



 	// AOS
	AOS.init();
});



const wholeBus = document.querySelector('.whole-bus');
const seats = document.querySelectorAll('.bus-row .seat:not(.booked)');
const count = document.getElementById('count');
const total = document.getElementById('total'); 
const amount = document.getElementById('ticket_price');

populateUI();

let ticketPrice = +amount.value;


// UPDATE TOTAL AND COUNT ID
function updateSelectedcount() {
	const selectedSeats = document.querySelectorAll('.bus-row .seat.selected');


// STORING INTO LOCAL STORAGE
	const seatIndex = [...selectedSeats].map(function(seat) {
		return [...seats].indexOf(seat);
	});
	
	localStorage.setItem('selectedSeats', JSON.stringify(seatIndex));

	const selectedSeatsCount = selectedSeats.length;

	count.innerText = selectedSeatsCount;
	total.innerText = selectedSeatsCount * ticketPrice;
}


// GET DATA FROM LOCAL STORAGE
function populateUI() {
	const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

	if (selectedSeats !== null && selectedSeats.length > 0){
		seats.forEach((seat, index) => {
			if (selectedSeats.indexOf(index) > -1) {
				seat.classList.add('selected');
			}
		});
	}
}



wholeBus.addEventListener('click', (e) =>{
	if (e.target.classList.contains('seat') && !e.target.classList.contains('booked')) {
		e.target.classList.toggle('selected');
	}

	updateSelectedcount();

});