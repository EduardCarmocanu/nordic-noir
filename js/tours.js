"use strict";

document.addEventListener("DOMContentLoaded", function() {
    
    
    var tours;
    var currentTourPrice = 0;
    var numberOfPeople = 1;
    var tour;
    
    
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
        
        tour = tours[parseInt(el.target.getAttribute('id'))];
        currentTourPrice = parseInt(tour.price);
        numberOfPeople = 1;
        
        tour.content = tour.content.replace(/(\n)+/g, '<br />');
        tour.aditional_info = tour.aditional_info.replace(/(\n)+/g, '<br />');
        tour.thumbnail_url = tour.thumbnail_url.replace('../', '');
        
            
        $('#tour-content p').innerHTML = tour.content;
        $('#tour-title').innerHTML = tour.title;
        $('#additional-info h6').innerHTML = tour.aditional_info;
        $('#tour-image').innerHTML = "<img src=" + tour.thumbnail_url + ">"
        $('#total-price').innerHTML = currentTourPrice + ' DKK';
        $('#number-of-people').innerHTML = numberOfPeople;
        
        
        $('#tours-modal').style.display = "block";
        
    }
    
    function increment() {
        if (numberOfPeople < 30) {
            
            currentTourPrice += parseInt(tour.price);
            numberOfPeople++;
            
            $('#total-price').innerHTML = currentTourPrice + ' DKK';
            $('#number-of-people').innerHTML = numberOfPeople;
        }
    }
    function decrement () {
        if (numberOfPeople > 1) {
            
            currentTourPrice -= tour.price;
            numberOfPeople--;
            
            $('#total-price').innerHTML = currentTourPrice + ' DKK';
            $('#number-of-people').innerHTML = numberOfPeople;
        }
    }
    
    var tours = $('.tour');
    for(var i = 0; i < tours.length; i++) {
        tours[i].addEventListener('click', openTour);
    }
    
    $('#close-modal').addEventListener('click', function () {
        $('#tours-modal').style.display = "none";
    });
    $('#decrement').addEventListener('click', decrement);
    $('#increment').addEventListener('click', increment);
    
});