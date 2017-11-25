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

    window.onscroll = function () {
        var secondSection = $('.second-section')[0];
        var nav = $('.navbar-items-wrapper')[0];

        if (window.scrollY + 35 > secondSection.offsetTop) {
            nav.style.color = '#171717';
        }
        else if (window.scrollY + 35 < secondSection.offsetTop) {
            nav.style.color = '#f8f8f8';
        }
    }
});

