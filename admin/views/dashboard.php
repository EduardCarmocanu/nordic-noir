
<header>

<?php
    echo'<p>'.$_SESSION['logged']['user_name'].'</p>';
    include('logout.html');
?>
</header>

<main>

<?php
//adding the controllers
require_once('controllers/Dashboard_controller.php');

$DBC = new Dashboard_controller();
$tours = $DBC->tours;
?>
    <section class="left-side-bar">

    <?php
    foreach($tours as $key => $value){
    ?>
        <div class="each-tour">
            <div>
                <img src="http://nordicnoirtours.com/wp-content/uploads/2014/05/4438_The-Oeresund-Bridge_Henrik-Stenberg-1024x812.jpg" alt=" <?php $DBC->printOut($value['image_url']); ?> ">
            </div>
            <h4><?php $DBC->printOut($value['image_url']); ?></h4>
        </div>


        <?php
    }    
    ?>


    </section>
    <section class="middle-section">

    </section>
</main>
