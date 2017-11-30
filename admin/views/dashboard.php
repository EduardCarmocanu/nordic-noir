
<header>
<?php

//adding the controllers
require_once('controllers/Dashboard_controller.php');

$DBC = new Dashboard_controller();
$tours = $DBC->tours;
$_SESSION['tour'] = 0;


    echo'<p>'.$_SESSION['logged']['user_name'].'</p>';
    include('logout.html');

    if(isset($_POST['title'])){
        $object = (object) [
            'id' => $_POST['id'],
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'price' => $_POST['price'],
            'aditional' => $_POST['aditional'],
            'image_url' => $_POST['bigImageUpload'],
            'thumbnail_url' => $_POST['smallImageUpload'],
            'state' => (int)$_POST['state']
        ];
        print_r($object);

        $DBC->changeTour($object);
        echo "<meta http-equiv='refresh' content='0'>";
        
    }

    if(isset($_GET['tour'])){
        $_SESSION['tour'] = $_GET['tour']; 
    }elseif(isset($_GET['logout'])){
        session_destroy();
        if (headers_sent()){
            die('<script type="text/javascript">window.location.href="/admin";</script>');
        }else{
            header('Location:/admin');
            die();
        }          
    }elseif(isset($_GET['addtour'])){
        if($CLogin->userLogged()){
            $DBC->createTour();
        }else{
            if (headers_sent()){
                die('<script type="text/javascript">window.location.href="/asdad";</script>');
            }else{
                header('Location:/asdsad');
                die();
            }          
        }
    }elseif(isset($_GET['deletetour'])){
        if($CLogin->userLogged()){
            $DBC->deleteTour($_GET['deletetour']);
        }else{
            if (headers_sent()){
                die('<script type="text/javascript">window.location.href="/asdad";</script>');
            }else{
                header('Location:/asdsad');
                die();
            }          
        }
    }

?>
</header>

<main>
    <section class="left-side-bar">

    <?php
    $test = 0;
    foreach($tours as $key => $value){
        
    ?>
        <div class="each-tour" id="tour<?php $DBC->printOut($value['id']); ?>">
            <a href="/admin?tour=<?php echo $test ?>">    
                <div>
                
                        <img src="<?php $DBC->printOut($value['image_url']); ?>" alt=" <?php $DBC->printOut($value['image_url']); ?> ">
                </div>
                <h4><?php $DBC->printOut($value['title']); ?></h4>
            </a>
        </div>

        <?php
        $test++;
    }    
    ?>

    <a href="/admin?addtour=true">add new</a>
 <?php var_dump($_SESSION['tour']); ?>

    </section>
    <section class="middle-section" id="main-dashboard">
        <a href="/admin?deletetour=<?php $DBC->printOut($tours[$_SESSION['tour']]['id'])?>">Delete Tour</a>
    <form action="" method="POST">
       

        <section class="text-section">
        <input type="hidden" name="id" value="<?php $DBC->printOut($tours[$_SESSION['tour']]['id'])?>">
        <div class="form-handler">
            <label for="title">Title</label>
            <input type="text" name="title" value="<?php $DBC->printOut($tours[$_SESSION['tour']]['title'])?>">
        </div>
        <div class="form-handler">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"><?php $DBC->printOut($tours[$_SESSION['tour']]['content'])?></textarea>
        </div>
        <div class="form-handler">
            <label for="price">Price</label>
            <input type="number" name="price" value="<?php $DBC->printOut($tours[$_SESSION['tour']]['price'])?>">
        </div>
        <div class="form-handler">
            <label for="aditional">Additional Info</label>
            <textarea name="aditional" id="aditional" cols="10" rows="5"><?php $DBC->printOut($tours[$_SESSION['tour']]['aditional_info'])?></textarea>
        </div>
        <input type="submit" value="SAVE">
    </section>
    <section class="photo-section">
        <div class="form-handler">
            <img src="<?php $DBC->printOut($tours[$_SESSION['tour']]['image_url'])?>" alt="">
            <span>Cover Photo</span><input type="file" name="bigImageUpload" id="bigImageUpload">
        </div>
        <div class="form-handler">
            <img src="<?php $DBC->printOut($tours[$_SESSION['tour']]['thumbnail_url'])?>" alt="">
            <span>Thumbnail</span>
            <input type="file" name="smallImageUpload" id="smallImageUpload">
        </div>
    </section>
    </form>

    </section>
</main>
