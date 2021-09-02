// let form = document.querySelector(".proceed form");
// let buttonPay = form.querySelector('.book-btn #buttonPay');

// form.onsubmit = (e) => {
//     e.preventDefault(); // preventing form from submitting
// }

// buttonPay.onclick = ()=> {
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "../Controllers/Requests.php", true);
//     xhr.onload = () => {
//         if (xhr.readyState === XMLHttpRequest.DONE){
//             if (xhr.status === 200) {
//                 let data = xhr.response;
//                 console.log(data);
//             }
//         }
//     }

//     let formData = new FormData(form);
//     xhr.send(formData);
// }











// $('#bookBtn').click(function() {
		
//     $.ajax({
//         url: "./select_seat.php",
//         method: "POST",
//         true
//     });
// });