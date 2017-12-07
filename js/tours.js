"use strict";

document.addEventListener("DOMContentLoaded", function() {


    var tours;
    var currentTourPrice = 0;


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            tours = JSON.parse(this.responseText);
            console.log(tours);

        }
    }
    xhttp.open('GET', '/admin/controllers/tours_data_controller.php', true);
    xhttp.send();


        
    
    function openTour (el) {
         
        var tour = tours[parseInt(el.target.getAttribute('id'))];

        tour.content = tour.content.replace(/(\n)+/g, '<br />');
        tour.aditional_info = tour.aditional_info.replace(/(\n)+/g, '<br />');
        tour.thumbnail_url = tour.thumbnail_url.replace('../', '');
        console.log(tour.thumbnail_url);

        $('#tours-modal').style.display = "block";

        $('#tour-content p').innerHTML = tour.content;
        $('#tour-title').innerHTML = tour.title;
        $('#additional-info h6').innerHTML = tour.aditional_info;
        $('#tour-image').innerHTML = "<img src=" + tour.thumbnail_url + ">"
        currentTourPrice = tour.price;

    }
    function closeModal() {
        $('#tours-modal').style.display = "none";
    }


    

    var tours = $('.tour');
    for(var i = 0; i < tours.length; i++) {
        tours[i].addEventListener('click', openTour);
    }
    $('#close-modal').addEventListener('click', closeModal);
    
});