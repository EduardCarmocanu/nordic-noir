"use strict";
document.addEventListener("DOMContentLoaded", function() {
    
    /*
    * REMOVED FOR TESTING
    */
    
    // var sideShow = false;
    // $("#hamburger").addEventListener('click', function () {
    //     if (sideShow){
    //         $('#sideNav').style.right = '-100vw';
    //     }else{
    //         $('#sideNav').style.right = '0vw';
    //     }
    //     sideShow = !sideShow;
    // });


    // Check to see if element exists

    /*
    * Get all the elements that have the 'trigger' attribute
    */
    var triggerPoints = $('*[trigger]');
    var nav = $('nav')[0];

    function setNavigationBar() {
        for (var i = 0; i < triggerPoints.length; i++) {
            if (window.pageYOffset > triggerPoints[i].offsetTop) {
                // Sets the value of the trigger attribute to the background color
                nav.style.backgroundColor = triggerPoints[i].getAttribute('trigger');
            }
        }
    }
    window.addEventListener('scroll', setNavigationBar);

});

