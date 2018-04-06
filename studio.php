<?php

$page = 'Studio';

include "inc/defHeader.php"

?>

     <!-- 1st section -->


    <section class="first-section whiteBG">
        <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
        <h2 class="align-center"><?php echo $motto; ?></h2>
        <span class="subtitle align-center"><?php echo $studio['FirstText']; ?></span>
        <img class="centerObject" src="img/downarrrow.svg" alt="larsen+Jorgensen Logo">
    </section>


    <!-- /1st section -->

     <!-- 2nd section -->

    <section class="work">
        <img src="img/project-bg-4.jpg" alt="">
    </section>

    <!-- /2nd section -->

    <!-- 3rd section -->
    <section class="whiteBG">
        <h2 class="align-center"><?php echo $studio['Approach']; ?></h2>
        <p class="primary-text align-left"><?php echo $studio['ApproachText']; ?></p>
    </section>
    <!-- /3rd section -->

    <!-- 4th section -->

    <section class="row row-center">
        <div class="col">
            <div class="work">
                <img src="img/prelekcja.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="work">
                <img src="img/cowork.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- /4th section -->

    <!-- 5th section -->
    <section class="whiteBG">
        <h2 class="align-center"><?php echo $studio['Services']; ?></h2>
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