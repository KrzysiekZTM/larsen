<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 30.03.2018
 * Time: 12:32
 */

$page = 'Career';

include "inc/defHeader.php"

?>

<!-- 1st section -->


<section class="first-section whiteBG">
    <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
    <h1 class="align-center"><?php echo $career_text['title'] ?></h1>
    <span class="subtitle align-center"><?php echo $career_text['primary_text'] ?></span>
    <img class="centerObject" src="img/downarrrow.svg" alt="larsen+Jorgensen Logo">
</section>


<!-- /1st section -->


<section style="padding-top: 0;" class="full-section">
    <img class="img-responsive" src="img/career.jpg" alt="">
</section>

<section class="whiteBG">
    <h2 class="align-center"><?php echo $career_text['title2']; ?></h2>
    <div class="jobs-list-wrapper">

        <ul class="jobs-list">
            <?php echo SortAndDisplayJobOffers($career_text['jobs_offers'], 'job') ?>
        </ul>

    </div>
</section>


<?php include 'inc/defFooter.php' ?>