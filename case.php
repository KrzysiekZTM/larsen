<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 30.03.2018
 * Time: 13:44
 */


$page = 'Case Study';

include("inc/defHeader.php") ;
include('inc/case-db.php');

$id = $_GET['id'];



?>


<section style="padding-bottom: 0;" class="first-section whiteBG">
    <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
    <h1 class="align-center"><?php echo $case[$id]['title']; ?></h1>
    <span class="subtitle align-center">

    <?php
        if(count($case[$id]['category'])){
            foreach($case[$id]['category'] as $category){
                echo $category . ", ";
            }
        }
    ?></span>

    <span class="subtitle align-center subtitle-dark"><?php echo $case[$id]['lead_text']; ?></span>
    <img class="centerObject" src="img/downarrrow.svg" alt="larsen+Jorgensen Logo">

 </section>

<section class="work">
    <img src="img/case/<?php echo $case[$id]['main_img']; ?>" alt="">
</section>


<section>
    <p class="primary-text align-left"><?php echo $case[$id]['description_1'];?></p>
</section>

<section class="row row-center">
    <div class="col">
        <div class="work">
            <img src="img/case/<?php echo $case[$id]['img_half_1']; ?>" alt="">
        </div>
    </div>
    <div class="col">
        <div class="work">
            <img src="img/case/<?php echo $case[$id]['img_half_2']; ?>" alt="">
        </div>
    </div>
</section>

    <?php

    if(isset($case[$id]['description_2'])){

    ?>

    <section style="padding-top:120px; padding-bottom: 0;" class="whiteBG">

        <p class="primary-text align-left"><?php echo $case[$id]['description_2'] ?></p>

    </section>

<?php } ?>

<section class="row" style="padding-top:50px;">
    <p style="color:#222222; margin-top:0;" class="primary-text align-left author"><?php echo $case[$id]['author'] ?></p>
</section>

<?php include 'inc/defFooter.php' ?>