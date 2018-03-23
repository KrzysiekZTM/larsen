 <!-- Nav -->
<div class="nav-wrapper">
    <nav>
        <div class="nav-container">
            <a href="index.php">
                <span class="logo">Larsen<span>+</span>Jørgensen
                    <?php
                    if(strtolower($page) != strtolower('work') ){
                        echo "<br><span>We simplify the message.</span>";
                    }
                    ?>
                </span>
            </a>
            <ul>
                <?php

                //Iterate nav, add class to current page
                foreach($nav as $navItem){
                    if(strtolower($navItem[0]) == strtolower($page)){
                        echo '<li class="active"><a href="'.$navItem[1].'">' . $navItem[0] . '</a></li>';
                    }elseif(strtolower($navItem[0]) == strtolower('language')){
                        echo '<li><a href="'.$navItem[1].'">' . $navItem[0] . '<i class="down"></i></a></li>';
                    }else{
                        echo '<li><a href="'.$navItem[1].'">' . $navItem[0] . '</a></li>';
                    }

                }

                ?>

            </ul>
            <div class="menu-trigger"></div>
            <div class="mobile-list">
                <?php
                foreach($nav as $navItem){
                    echo '<div class="mobile-item align-center"><a href="'.$navItem[1].'">' . $navItem[0] . '</a></div>';
                }
                ?>
            </div>
        </div>
    </nav>
</div>

<!-- /Nav -->