<?php

$page = 'Work';


include "inc/defHeader.php";
include "inc/case-db.php";

$caseIndex = array_keys($case);
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
                             <h4><a href="<?php echo "case.php?id=$caseIndex[0]" ?>"><?php echo $case[0]['title']; ?></a></h4>
                            <p><?php echo $case[0]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/project-bg-1.jpg" alt="">
                </div>
            </div>
            <div class="col col-flex">
                 <div class="work">
                    <div class="work-overlay">
                         <div>
                             <h4><a href="<?php echo "case.php?id=$caseIndex[1]" ?>"><?php echo $case[1]['title']; ?></a></h4>
                            <p><?php echo $case[1]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
                <div class="work">
                    <div class="work-overlay">
                        <div>
                            <h4><a href="<?php echo "case.php?id=$caseIndex[2]" ?>"><?php echo $case[2]['title']; ?></a></h4>
                            <p><?php echo $case[2]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="work">
            <div class="work-overlay">
                <div>
                    <h4><a href="<?php echo "case.php?id=$caseIndex[3]" ?>"><?php echo $case[3]['title']; ?></a></h4>
                    <p><?php echo $case[3]['short_dsc']; ?></p>
                </div>
            </div>
            <img src="img/project-bg-4.jpg" alt="">
        </div>
        <div class="row">
            <div class="col">
                <div class="work">
                    <div class="work-overlay">
                        <div>
                            <h4><a href="<?php echo "case.php?id=$caseIndex[4]" ?>"><?php echo $case[4]['title']; ?></a></h4>
                            <p><?php echo $case[4]['short_dsc']; ?></p>
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
                             <h4><a href="<?php echo "case.php?id=$caseIndex[5]" ?>"><?php echo $case[5]['title']; ?></a></h4>
                            <p><?php echo $case[5]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
                <div class="work">
                    <div class="work-overlay">
                         <div>
                             <h4><a href="<?php echo "case.php?id=$caseIndex[6]" ?>"><?php echo $case[6]['title']; ?></a></h4>
                            <p><?php echo $case[6]['short_dsc']; ?></p>
                        </div> 
                    </div>
                    <img src="img/project-bg-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


   


    <!-- /Works -->



  <?php include 'inc/defFooter.php' ?>