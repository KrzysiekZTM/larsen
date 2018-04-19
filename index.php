<?php

$page = 'Work';


include "inc/defHeader.php";
$case = get_works();

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
                             <h4><a href="<?php echo "case.php?id=".$case[0]['id'] ?>"><?php echo $case[0]['title']; ?></a></h4>
                            <p><?php echo $case[0]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/uploads/<?php echo $case[0]['main_img_vert'] ?>" alt="">
                </div>
            </div>
            <div class="col col-flex">
                 <div class="work">
                    <div class="work-overlay">
                         <div>
                             <h4><a href="<?php echo "case.php?id=".$case[1]['id'] ?>"><?php echo $case[1]['title']; ?></a></h4>
                            <p><?php echo $case[1]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/uploads/<?php echo $case[1]['main_img'] ?>" alt="">
                </div>
                <div class="work">
                    <div class="work-overlay">
                        <div>
                            <h4><a href="<?php echo "case.php?id=".$case[2]['id'] ?>"><?php echo $case[2]['title']; ?></a></h4>
                            <p><?php echo $case[2]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/uploads/<?php echo $case[2]['main_img'] ?>" alt="">
                </div>
            </div>
        </div>
        <div class="work">
            <div class="work-overlay">
                <div>
                    <h4><a href="<?php echo "case.php?id=".$case[3]['id'] ?>"><?php echo $case[3]['title']; ?></a></h4>
                    <p><?php echo $case[3]['short_dsc']; ?></p>
                </div>
            </div>
            <img src="img/uploads/<?php echo $case[3]['main_img'] ?>" alt="">
        </div>
        <div class="row">
            <div class="col">
                <div class="work">
                    <div class="work-overlay">
                        <div>
                            <h4><a href="<?php echo "case.php?id=".$case[4]['id'] ?>"><?php echo $case[4]['title']; ?></a></h4>
                            <p><?php echo $case[4]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/uploads/<?php echo $case[4]['main_img_vert'] ?>" alt="">
                </div>
            </div>
            <div class="col-gap"></div>
            <div class="col col-flex">
                 <div class="work">
                    <div class="work-overlay">
                         <div>
                             <h4><a href="<?php echo "case.php?id=".$case[5]['id'] ?>"><?php echo $case[5]['title']; ?></a></h4>
                            <p><?php echo $case[5]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/uploads/<?php echo $case[5]['main_img'] ?>" alt="">
                </div>
                <div class="work">
                    <div class="work-overlay">
                         <div>
                             <h4><a href="<?php echo "case.php?id=".$case[6]['id'] ?>"><?php echo $case[6]['title']; ?></a></h4>
                            <p><?php echo $case[6]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/uploads/<?php echo $case[6]['main_img'] ?>" alt="">
                </div>
            </div>
        </div>
    </section>


   


    <!-- /Works -->



  <?php include 'inc/defFooter.php' ?>