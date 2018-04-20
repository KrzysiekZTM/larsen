<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 20.04.2018
 * Time: 15:13
 */

include("header.php");

$articles = get_articles('id');

?>

<div class="container">
    <div class="row">
        <ul class="list-group">
            <?php
                foreach ($articles as $article){
            ?>
                    <li id="<?php echo $article['id'] ?>" class="list-group-item">
                        <h3><?php echo strip_tags($article['title']); ?></h3>
                        <p><?php echo $article['publish_date']; ?></p>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>

                    </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>
