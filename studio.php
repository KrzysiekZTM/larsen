<?php include "inc/defHeader.php" ?>

     <!-- 1st section -->


    <section class="first-section whiteBG">
        <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
        <h2 class="align-center"><?php echo $motto; ?></h2>
        <span class="subtitle align-center"><?php echo $studio[0]; ?></span>
        <img class="centerObject" src="img/downarrrow.svg" alt="larsen+Jorgensen Logo">
    </section>


    <!-- /1st section -->



    <!-- 2nd section -->

    <section class="full-section whiteBG">
        <img class="img-responsive" src="img/project-bg-4.jpg" alt="">
    </section>

    <!-- /2nd section -->


    <!-- 3rd section -->
    <section class="full-section whiteBG">
        <h2 class="align-center"><?php echo $studio[1]; ?></h2>
        <p class="primary-text align-left"><?php echo $studio[2]; ?></p>
    </section>
    <!-- /3rd section -->


    <!-- 4th section -->

    <section class="full-section whiteBG duble-images-row">

        <img class="img-responsive" src="img/prelekcja.jpg" alt="">
        <img class="img-responsive" src="img/cowork.jpg" alt="">
        
    </section>

    <!-- 4th section -->


    <!-- 5th section -->
    <section class="full-section whiteBG">
        <h2 class="align-center"><?php echo $studio[3]; ?></h2>
        <div class="list-wrapper">

        <?php

        foreach($services as $service){
            echo "<ul>";
            foreach ($service as $serviceItem) {
                echo "<li>".$serviceItem."</li>";
            }
            echo "</ul>";
        }


        ?>

        </div>
    </section>
    <!-- /5th section -->

<?php include 'inc/defFooter.php' ?>