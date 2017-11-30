"use strict";
document.addEventListener("DOMContentLoaded", function() {
    // var triggerPoints = $('*[trigger]');
    // var nav = $('nav')[0];
    
    // function setNavigationBar() {
    //     for (var i = 0; i < triggerPoints.length; i++) {
    //         if (window.pageYOffset > triggerPoints[i].offsetTop) {
    //             // Sets the value of the trigger attribute to the background color
    //             nav.style.backgroundColor = triggerPoints[i].getAttribute('trigger');
    //         }
    //     }
    // }
    // window.addEventListener('scroll', setNavigationBar);
    
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

