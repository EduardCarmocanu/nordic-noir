"use strict";
document.addEventListener("DOMContentLoaded", function() {
    
    var sideShow = false;
    $("#hamburger").addEventListener('click', function () {

        if (sideShow){
            $('#sideNav').style.right = '-100vw';
        }else{
            $('#sideNav').style.right = '0vw';
        }
        sideShow = !sideShow;
    });

});

