<?php

$page = 'Work';

include "inc/defHeader.php"

?>

    <!-- 1st section -->


    <section class="first-section whiteBG">
        <img class="centerObject" src="img/logo-light-grey.png" alt="larsen+Jorgensen Logo">
        <h1 class="align-center"><?php echo $motto; ?></h1>
        <span class="subtitle align-center"><?php echo $projects; ?></span>
        <img class="centerObject" src="img/downarrrow.svg" alt="larsen+Jorgensen Logo">
    </section>


    <!-- /1st section -->







    <!-- Works -->


    <section>
        <div class="row">
            <div class="col">
                <div class="work">
                    <div class="work-overlay">
                         <div>
                            <h4>Here goes Title</h4>
                            <p>Here goes description</p>    
                        </div> 
                    </div>
                    <img src="img/project-bg-1.jpg" alt="">
                </div>
            </div>
            <div class="col col-flex">
                 <div class="work">
                    <div class="work-overlay">
                         <div>
                            <h4>Here goes Title</h4>
                            <p>Here goes description</p>    
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
                <div class="work">
                    <div class="work-overlay">
                        <div>
                            <h4>Here goes Title</h4>
                            <p>Here goes description</p>    
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="work">
            <div class="work-overlay">
                <div>
                    <h4>Here goes Title</h4>
                    <p>Here goes description</p>
                </div>
            </div>
            <img src="img/project-bg-4.jpg" alt="">
        </div>
        <div class="row">
            <div class="col">
                <div class="work">
                    <div class="work-overlay">
                        <div>
                            <h4>Here goes Title</h4>
                            <p>Here goes description</p>    
                        </div> 
                    </div>
                    <img src="img/project-bg-1.jpg" alt="">
                </div>
            </div>
            <div class="col-gap"></div>
            <div class="col col-flex">
                 <div class="work">
                    <div class="work-overlay">
                         <div>
                            <h4>Here goes Title</h4>
                            <p>Here goes description</p>    
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
                <div class="work">
                    <div class="work-overlay">
                         <div>
                            <h4>Here goes Title</h4>
                            <p>Here goes description</p>    
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


   


    <!-- /Works -->



  <?php include 'inc/defFooter.php' ?>