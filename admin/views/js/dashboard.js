"use strict";
document.addEventListener("DOMContentLoaded", function() {


    $('#coverPhotoDiv').on('click',function(){
        $('#inputPhoto').trigger('click');
    });

    $('#inputPhoto').on('click',function(e){
        e.stopImmediatePropagation();       
    });

    $('#inputPhoto').on('change', function(e){
        var reader = new FileReader();
        reader.onload = function(event){
            $('#coverPhotoDiv img').attr('src', event.target.result);
            console.log(event.target);
        };
        reader.readAsDataURL(e.target.files[0]);
    });


    $('#thumbnailPhotoDiv').on('click',function(){
        $('#inputPhoto2').trigger('click');
    });

    $('#inputPhoto2').on('click',function(e){
        e.stopImmediatePropagation();       
    });

    $('#inputPhoto2').on('change', function(e){
        var reader = new FileReader();
        reader.onload = function(event){
            $('#thumbnailPhotoDiv img').attr('src', event.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });

/*
        $('#coverPhotoDiv').on('click',function(){
            $('#filePhoto').trigger('click'); 
        });

        $('#filePhoto').on('click',function(e){
            e.stopImmediatePropagation();            
        });

        $('.photo').on('click','#coverPhotoDiv',function(){
            var imageLoader = $('#filePhoto');
            $('#filePhoto').on('change', handleImage(), false);
        });



        function handleImage(e){
            var reader = new FileReader();
            console.log("reader");
            reader.onload = function(event){
                $('#imageHere').append('<img src=""/>');
                $('.uploader img').attr('src', event.target.result);
            }
            reader.readAsDataURL(e.target.files);
        }*/
/*

$('#filePhoto').on('click',function(e){
    e.stopImmediatePropagation();            
});

$('#coverPhotoDiv').on('click',function(e){
    e.stopImmediatePropagation();            
});

    var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        $('#imageHere').append('<img src=""/>');
        $('.uploader img').attr('src',event.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
}
*/
});

