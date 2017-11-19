"use strict";
document.addEventListener("DOMContentLoaded", function() {
    let sideShow = false;
    $("#hamburger").click(function () {
        if (sideShow){
            $('#sideNav').css('right','-100vw');
        }else{
            $('#sideNav').css('right','0');
        }
        sideShow = !sideShow;
    });

});

