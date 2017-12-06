<?php

if(isset($_GET['tour'])){
        $_SESSION['tour'] = $_GET['tour']; 
    }else{
        $_SESSION['tour'] = 0;
    }
    
    if(isset($_GET['logout'])){
        $CLogin->logout();
    }

    if(isset($_GET['addtour'])){
        if($CLogin->userLogged()){
            $DBC->createTour();
        }else{
            $CLogin->checkIfHeaders("/");
        }
    }

    if(isset($_GET['deletetour'])){
        if($CLogin->userLogged()){
            $DBC->deleteTour($_GET['deletetour']);
        }else{
            $CLogin->checkIfHeaders("/");
        }
    }

    ?>