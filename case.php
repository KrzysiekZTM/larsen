<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 30.03.2018
 * Time: 13:44
 */


$page = 'Case Study';

include("inc/defHeader.php") ;

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$case = get_single_work($id);
?>


<section style="padding-bottom: 0;" class="first-section whiteBG">
    <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
    <h1 class="align-center"><?php echo $case['title']; ?></h1>
    <span class="subtitle align-center">
        <?php echo implode(", ", $case['categories']) ?>
    </span>

    <span class="subtitle align-center subtitle-dark"><?php echo $case['lead_text']; ?></span>
    <img class="centerObject" src="img/downarrrow.svg" alt="larsen+Jorgensen Logo">

 </section>

<section class="work">
    <img src="img/uploads/<?php echo $case['main_img']; ?>" alt="">
</section>


<section>
    <p class="primary-text align-left"><?php echo $case['description_1'];?></p>
</section>

<section class="row row-center">
    <div class="col">
        <div class="work">
            <img src="img/uploads<?php echo $case['img_half_1']; ?>" alt="">
        </div>
    </div>
    <div class="col">
        <div class="work">
            <img src="img/uploads<?php echo $case['img_half_2']; ?>" alt="">
        </div>
    </div>
</section>


<section class="work">
    <img class="normal normal-smallP" src="img/uploads/<?php echo $case['img_4']; ?>" alt="">
    <img class="normal" src="img/uploads/<?php echo $case['img_5']; ?>" alt="">
    <img class="normal" src="img/uploads/<?php echo $case['img_6']; ?>" alt="">
    <img class="normal normal-smallP" src="img/uploads/<?php echo $case['img_7']; ?>" alt="">
    <img class="normal" src="img/uploads/<?php echo $case['img_8']; ?>" alt="">
</section>




    <?php

    if(isset($case['description_2'])){

    ?>

    <section style="padding-top:120px; padding-bottom: 0;" class="whiteBG">

        <p class="primary-text align-left"><?php echo $case['description_2'] ?></p>

    </section>

<?php } ?>

<section class="row" style="padding-top:50px;">
    <p style="color:#222222; margin-top:0;" class="primary-text align-left author"><?php echo $case['first_name']." ".$case['last_name'].", ".$case['position'] ?></p>
</section>

<?php include 'inc/defFooter.php' ?>