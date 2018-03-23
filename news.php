<?php

$page = 'News';

include("inc/defHeader.php") ;
include('inc/news-db.php');

$listIndex = array_keys($news);


?>


    <!-- 1st section -->

    <section class="first-section whiteBG">
        <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
        <h1 class="align-center"><?php echo $newsTitle; ?></h1>
        <span class="subtitle align-center"><?php echo $newsDsc; ?></span>
        <img class="centerObject" src="img/downarrrow.svg" alt="larsen+Jorgensen Logo">
    </section>


    <!-- /1st section -->

<!-- 2nd section -->


 <section>
    <div class="row row-center">
        <div class="col">
            <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="<?php echo "single-news.php?id=$listIndex[0]" ?>"><?php echo $news[0]['title'] ?></a></h4>
                        <p><?php echo $news[0]['lead_text'] ?></p>    
                    </div> 
                </div>
                <img src="img/project-bg-3.jpg" alt="">
            </div>
        </div>
        <div class="col">
             <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="<?php echo "single-news.php?id=$listIndex[1]" ?>"><?php echo $news[1]['title'] ?></a></h4>
                        <p><?php echo $news[1]['lead_text'] ?></p>    
                    </div> 
                </div>
                <img src="img/project-bg-3.jpg" alt="">
            </div>
        </div>
    </div>
	<div class="work">
        <div class="work-overlay">
                     <div>
                        <h4><a href="<?php echo "single-news.php?id=$listIndex[2]" ?>"><?php echo $news[2]['title'] ?></a></h4>
                        <p><?php echo $news[2]['lead_text'] ?></p>    
                    </div> 
                </div>
       <img src="img/project-bg-4.jpg" alt="">
    </div>
    <div class="row row-center">
        <div class="col">
            <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="<?php echo "single-news.php?id=$listIndex[3]" ?>"><?php echo $news[3]['title'] ?></a></h4>
                        <p><?php echo $news[3]['lead_text'] ?></p>    
                    </div> 
                </div>
                <img src="img/project-bg-3.jpg" alt="">
            </div>
        </div>
        <div class="col">
             <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="<?php echo "single-news.php?id=$listIndex[4]" ?>"><?php echo $news[4]['title'] ?></a></h4>
                        <p><?php echo $news[4]['lead_text'] ?></p>    
                    </div> 
                </div>
                <img src="img/project-bg-3.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="row row-center">
        <div class="col">
            <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="<?php echo "single-news.php?id=$listIndex[5]" ?>"></a><?php echo $news[5]['title'] ?></h4>
                        <p><?php echo $news[5]['lead_text'] ?></p>    
                    </div> 
                </div>
                <img src="img/project-bg-3.jpg" alt="">
            </div>
        </div>
        <div class="col">
             <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="<?php echo "single-news.php?id=$listIndex[6]" ?>"></a><?php echo $news[6]['title'] ?></h4>
                        <p><?php echo $news[6]['lead_text'] ?></p>    
                    </div> 
                </div>
                <img src="img/project-bg-3.jpg" alt="">
            </div>
        </div>
    </div>
</section>

 <section>
    
</section>


<!-- /2nd section -->

<?php include 'inc/defFooter.php' ?>