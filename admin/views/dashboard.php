<?php

//adding the controllers
require_once('controllers/Dashboard_controller.php');



$DBC = new Dashboard_controller();



$tours = $DBC->tours;
$_SESSION['tour'] = 0;


    if(isset($_POST['submit'])){
        $coverPhoto = false;
        $thumbnailPhoto = false;
        $coverPhoto = filestuff("inputPhoto");
        $thumbnailPhoto = filestuff("inputPhoto2");

        if(!$coverPhoto){
            $coverPhoto = $tours[$_SESSION['tour']]['image_url'];
        }
        if(!$thumbnailPhoto){
            $thumbnailPhoto = $tours[$_SESSION['tour']]['thumbnail_url'];
        }

        $object = (object) [
            'id' => $_POST['id'],
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'price' => $_POST['price'],
            'aditional' => $_POST['aditional'],
            'image_url' => $coverPhoto,
            'thumbnail_url' => $thumbnailPhoto,
            'old_image_url' => $tours[$_SESSION['tour']]['image_url'],
            'old_thumbnail_url' => $tours[$_SESSION['tour']]['thumbnail_url'],
            'state' => (int)$_POST['state']
        ];

        $DBC->changeTour($object);
        echo "<meta http-equiv='refresh' content='0'>";
    }

    include('controllers/getters.php');

?>


<header>

<section class="title">
    <h3>ADMIN PANEL</h3>
</section>
<nav>
     <h5>Logged in as: <span><?php echo $_SESSION['logged']['user_name']; ?></span></h5>
     <h5><a href="/admin?logout=logout">Logout</a></h5>
</nav>
</header>

<main>


    <section class="left-side-bar">
        <?php include('sidebar.php'); ?>
    </section>

    <section class="main-section">
        <?php include('form.php') ?>
    </section>


</main>




<?php

function filestuff($name){
    require_once('controllers/Upload.php');
    if($_FILES[$name]["tmp_name"]){
        $check = getimagesize($_FILES[$name]["tmp_name"]);
        $Upload = new Upload_controller($_FILES[$name],$check);
        if(!$Upload->returner){
            return false;
        }else{
            return $Upload->returner;    
        }
        unset($Upload);
    }
}
?>