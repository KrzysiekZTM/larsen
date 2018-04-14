<?php


$page = 'News';

include("inc/defHeader.php") ;
include('inc/news-db.php');

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$article = get_single_article($id);

?>

<section style="padding-bottom: 0;" class="first-section whiteBG">
    <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
    <h1 class="align-center"><?php echo nl2br($article['title']); ?></h1>
    <span class="subtitle align-center"><?php echo $article['publish_date']; ?></span>

    <span style="margin-bottom:0" class="subtitle align-center subtitle-dark"><?php echo $article['lead_text']; ?></span>
    
 </section>

<section style="padding-top:120px" class="whiteBG">
    <p class="primary-text align-left">
    <?php
    echo $article['first_text_section'];
    ?>
    </p>
</section>

<section class="row row-center">
    <div class="col">
        <div class="work">
            <img src="img/uploads/<?php echo $article['first_img']; ?>" alt="">
        </div>
    </div>
    <div class="col">
        <div class="work">
            <img src="img/uploads/<?php echo $article['second_img']; ?>" alt="">
        </div>
    </div>
</section>


<section style="padding-top:70px; padding-bottom: 120px;" class="whiteBG">
    <p class="primary-text align-left">
    <?php 

    echo $article['second_text_section'];

    ?>
    </p>
</section>

<?php

if(!empty($article['third_text_section'])){

?>

		<div class="work">
            <img src="img/uploads/<?php echo $article['third_img']; ?>" alt="">
        </div>



	<section style="padding-top:120px; padding-bottom: 0;" class="whiteBG">
        <p class="primary-text align-left">
	    <?php
	    echo $article['third_text_section']
	    ?>
        </p>

	</section>

<?php } ?>

<section class="row" style="padding-top:50px;">
	<p style="color:#222222; margin-top:0;" class="primary-text align-left author"><?php echo $article['first_name']." ".$article['last_name'].", ".$article['position'] ?></p>
</section>


<?php include 'inc/defFooter.php' ?>