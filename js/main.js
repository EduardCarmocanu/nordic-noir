"use strict";
document.addEventListener("DOMContentLoaded", function() {
    
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

