 <!-- Nav -->

        <nav>
            <span class="logo"><?php echo $title; ?></span>
            <ul>
                <?php 

                foreach($nav as $navItem){
                    echo '<a href="'.$navItem[1].'"><li>' . $navItem[0] . '</li></a>';
                }

                ?>

            </ul>
        </nav>

    <!-- /Nav -->