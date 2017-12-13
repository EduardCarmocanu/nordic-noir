"use strict";

var toursData;
var currentTourPrice = 0;
var currentNumberOfPeople = 1;
var tour;

// Instantiates a new XMLHttpRequest
var xhttp = new XMLHttpRequest();
// Binds annoymous function to the state change event
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        
        // Parses the JSON reponse
        toursData = JSON.parse(this.responseText);
        
        // Call function once the request has completed
        setUpTours();
        
    }
}
// Opens a get request for the tours data controller
xhttp.open('GET', '/admin/controllers/tours_data_controller.php', true);
// Send the request
xhttp.send();


function setUpTours() {
    var tours = $('.tour');
    var tourNames = $('.tour-name');
    
    for(var i = 0; i < tours.length; i++) {
        // Binds function to each tour
        tours[i].addEventListener('click', openTour);
        // Checks if tours data and image url exists
        if (toursData[i] && toursData[i].hasOwnProperty('image_url')) {
            // Formats the url
            toursData[i].image_url = toursData[i].image_url.replace('../', "");
            // Sets up the tour background image
            tours[i].style.backgroundImage = "url(" + toursData[i].image_url + ")"
            // Sets up the tours titled
            tourNames[i].innerHTML = toursData[i].title;
        }
    }
    // Binds function to close button
    $('#close-modal').addEventListener('click', function () {
        // Hides the modal
        $('#tours-modal').style.display = "none";
    });
    // Binds price incrementation and decrementation functions to buttons
    $('#decrement').addEventListener('click', decrement);
    $('#increment').addEventListener('click', increment);
}

function openTour (el) {
    
    // Gets the data for the clicked tour
    tour = toursData[parseInt(el.target.getAttribute('id'))];
    // Sets initial price for the tour
    currentTourPrice = parseInt(tour.price);
    // Sets the intial number of people
    currentNumberOfPeople = 1;
    
    // Replaces new lines with <br> tags
    tour.content = tour.content.replace(/(\n)+/g, '<br />');
    tour.aditional_info = tour.aditional_info.replace(/(\n)+/g, '<br />');
    
    // Formats the url to math the path of the image
    tour.thumbnail_url = tour.thumbnail_url.replace('../', '');
    
    
    // Displays data on the modal
    $('#tour-content p').innerHTML = tour.content;
    $('#tour-title').innerHTML = tour.title;
    $('#additional-info h6').innerHTML = tour.aditional_info;
    $('#tour-image').innerHTML = "<img src=" + tour.thumbnail_url + ">"
    $('#total-price').innerHTML = currentTourPrice + ' DKK';
    $('#number-of-people').innerHTML = currentNumberOfPeople;
    
    // Displays the modal
    $('#tours-modal').style.display = "block";
}
function increment() {
    if (currentNumberOfPeople < 30) {
        
        // Adds the base tours price per person to the current tours price
        currentTourPrice += parseInt(tour.price);
        // Increments the number of people by 1
        currentNumberOfPeople++;
        
        // Displays the updated data
        $('#total-price').innerHTML = currentTourPrice + ' DKK';
        $('#number-of-people').innerHTML = currentNumberOfPeople;
    }
}
function decrement () {
    if (currentNumberOfPeople > 1) {
        
        // Substracts the base tours price per person from the current tours price
        currentTourPrice -= tour.price;
        // Decrements the current number of people by 1
        currentNumberOfPeople--;
        
        // Displays the updated data
        $('#total-price').innerHTML = currentTourPrice + ' DKK';
        $('#number-of-people').innerHTML = currentNumberOfPeople;
    }
}