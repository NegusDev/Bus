$(document).ready(function(){
	$('.search-bar button').click(function(){
		$('#form').slideDown("slower");
			// $('.form').css('display', 'block');
	});

	AOS.init();
});



const wholeBus = document.querySelector('.whole-bus');
const seats = document.querySelectorAll('.seat:not(.booked)');
const count = document.getElementById('count');
const total = document.getElementById('total'); 
const amount = document.getElementById('ticket_price');

populateUI();

let ticketPrice = +amount.value;


// UPDATE TOTAL AND COUNT ID
function updateSelectedcount() {
	const selectedSeats = document.querySelectorAll('.whole-bus .seat.selected');

	let seatIds = [];

// STORING INTO LOCAL STORAGE
	const seatIndex = [...selectedSeats].map(function(seat) {
		seatIds.push(seat.getAttribute('value'));
		return [...seats].indexOf(seat);
	});
	
	localStorage.setItem('selectedSeats', JSON.stringify(seatIndex));

	const selectedSeatsCount = selectedSeats.length;

	count.innerText = selectedSeatsCount;
	total.innerText = selectedSeatsCount * ticketPrice;

	document.getElementById("selected_seats").setAttribute('value', seatIds.toString());

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