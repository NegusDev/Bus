$(document).ready(function(){
	


	$('.search-bar').click(function(){
		$('#form').slideDown("slow");

		$('.toggle-btn').toggle(function() {

			$('.form').css('display', 'block');
			// console.log("uooo");
		});

		
	});

 	// AOS
	AOS.init();
});
