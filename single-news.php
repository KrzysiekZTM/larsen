<?php


$page = 'News';

include("inc/defHeader.php") ;
include('inc/news-db.php');

$id = $_GET['id'];



?>

<section style="padding-bottom: 0;" class="first-section whiteBG">
    <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
    <h1 class="align-center"><?php echo $news[$id]['title']; ?></h1>
    <span class="subtitle align-center"><?php echo $news[$id]['date']; ?></span>

    <span style="margin-bottom:0" class="subtitle align-center subtitle-dark"><?php echo $news[$id]['lead_text']; ?></span>
    
 </section>

<section style="padding-top:120px" class="whiteBG">
    <?php 

    foreach($news[$id]['first_text_section'] as $par){
    	echo $par . "<br>";
    }

    ?>
</section>

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


<section style="padding-top:70px; padding-bottom: 120px;" class="whiteBG">
    <?php 

    foreach($news[$id]['second_text_section'] as $par){
    	echo $par . "<br>";
    }

    ?>
</section>

<?php

if(isset($news[$id]['third_text_section'])){

?>

		<div class="work">
            <img src="img/project-bg-4.jpg" alt="">
        </div>



	<section style="padding-top:120px; padding-bottom: 0;" class="whiteBG">
	    <?php 

	    foreach($news[$id]['third_text_section'] as $par){
	    	echo $par . "<br>";
	    }

	    ?>
	</section>

<?php } ?>

<section class="row" style="padding-top:50px;">
	<p style="color:#222222; margin-top:0;" class="primary-text align-left author"><?php echo $news[$id]['author'] ?></p>
</section>


<?php include 'inc/defFooter.php' ?>