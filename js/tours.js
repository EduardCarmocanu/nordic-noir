"use strict";

document.addEventListener("DOMContentLoaded", function() {


    function getToursData() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200) {
                // process data to be used for filling up the modal
                return JSON.parse(this.responseText)
            }
        }
        xhr.open('GET', 'dataResponse.php', true);
        xhr.send();
    }
    // var toursData = getToursData();
    
    var modalActive = false;
    function toggleTour () {
        if (!modalActive) {
            $('#tours-modal').style.display = "block";
        }
        else {
            $('#tours-modal').style.display = "none";
        }
        modalActive = !modalActive;
    }
    
    var tours = $('.tour');
    for(var i = 0; i < tours.length; i++) {
        tours[i].addEventListener('click', toggleTour);
    }
    $('#close-modal').addEventListener('click', toggleTour);

});