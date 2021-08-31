const bookBtn = document.getElementById('bookBtn');

bookBtn.onload = ()=> {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./select_seat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE){
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    xhr.send();
}











// $('#bookBtn').click(function() {
		
//     $.ajax({
//         url: "./select_seat.php",
//         method: "POST",
//         true
//     });
// });