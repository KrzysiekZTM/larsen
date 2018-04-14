<?php

$page = 'News';

include("inc/defHeader.php") ;

$articles = get_articles('news.data');
?>


    <!-- 1st section -->

    <section class="first-section whiteBG">
        <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
        <h2 class="align-center"><?php echo $newsTitle; ?></h2>
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
                        <h4><a href="single-news.php?id=<?php echo $articles[0]['id']?>"><?php echo $articles[0]['title'] ?></a></h4>
                        <p><?php echo $articles[0]['lead_text'] ?></p>
                    </div> 
                </div>
                <img src="img/<?php echo $articles[0]['featured_img'] ?>" alt="">
            </div>
        </div>
        <div class="col">
             <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="single-news.php?id=<?php echo $articles[1]['id']?>"><?php echo $articles[1]['title'] ?></a></h4>
                        <p><?php echo $articles[1]['lead_text'] ?></p>
                    </div> 
                </div>
                <img src="img/<?php echo $articles[1]['featured_img'] ?>" alt="">
            </div>
        </div>
    </div>
	<div class="work">
        <div class="work-overlay">
                     <div>
                        <h4><a href="single-news.php?id=<?php echo $articles[2]['id']?>"><?php echo $articles[2]['title'] ?></a></h4>
                        <p><?php echo $articles[2]['lead_text'] ?></p>
                    </div> 
                </div>
       <img src="img/<?php echo $articles[2]['featured_img'] ?>" alt="">
    </div>
    <div class="row row-center">
        <div class="col">
            <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="single-news.php?id=<?php echo $articles[3]['id']?>"><?php echo $articles[3]['title'] ?></a></h4>
                        <p><?php echo $articles[3]['lead_text'] ?></p>
                    </div> 
                </div>
                <img src="img/<?php echo $articles[3]['featured_img'] ?>" alt="">
            </div>
        </div>
        <div class="col">
             <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="single-news.php?id=<?php echo $articles[4]['id']?>"><?php echo $articles[4]['title'] ?></a></h4>
                        <p><?php echo $articles[4]['lead_text'] ?></p>
                    </div> 
                </div>
                <img src="img/<?php echo $articles[4]['featured_img'] ?>" alt="">
            </div>
        </div>
    </div>
    <div class="row row-center">
        <div class="col">
            <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="single-news.php?id=<?php echo $articles[5]['id']?>"></a><?php echo $articles[5]['title'] ?></h4>
                        <p><?php echo $articles[5]['lead_text'] ?></p>
                    </div> 
                </div>
                <img src="img/<?php echo $articles[5]['featured_img'] ?>" alt="">
            </div>
        </div>
        <div class="col">
             <div class="work">
                <div class="work-overlay">
                     <div>
                        <h4><a href="single-news.php?id=<?php echo $articles[6]['id']?>"></a><?php echo $articles[6]['title'] ?></h4>
                        <p><?php echo $articles[6]['lead_text'] ?></p>
                    </div> 
                </div>
                <img src="img/<?php echo $articles[6]['featured_img'] ?>" alt="">
            </div>
        </div>
    </div>
</section>

 <section>
    
</section>


<!-- /2nd section -->

<?php include 'inc/defFooter.php' ?>