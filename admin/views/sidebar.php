<section class="headline">
            <h4>TOURS</h4>
            <a href="/~nordicnoirtours/admin?addtour=true" class="btn btn-blue">Add a tour</a>
        </section>
        <section class="tours">
            
                <?php
            $test = 0;
            foreach($tours as $key => $value){
            ?>
                <div class="each-tour <?php if($test == $_SESSION['tour']){echo "selected";} ?>" id="tour<?php $DBC->printOut($value['id']); ?>">
                    <a href="http://104.152.168.36/~nordicnoirtours/admin?tour=<?php echo $test ?>">    
                        <h5><?php $DBC->printOut($value['title']); ?></h5>
                    </a>
                </div>

                <?php
                $test++;
            }    
            ?>
        </section>
