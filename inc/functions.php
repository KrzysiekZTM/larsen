<?php


function get_works(){
    include ('connection.php');
    try{
        $query = $db->prepare('SELECT id, title, short_dsc, main_img, main_img_vert
                                FROM works 
                                ');
        $query->execute();
        $output = $query->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
    return $output;
}

function get_single_work($id){
    include ('connection.php');
    try{
        $query = $db->prepare('
            SELECT * 
            FROM works 
            LEFT JOIN works_author ON works_author.author_id = works.id 
            JOIN author ON works_author.author_id = author.id 
            WHERE works.id = ?
            ');
        $query->bindParam(1, $id, PDO::PARAM_INT);
        $query->execute();
        $output = $query->fetch(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    try{
        $query = $db->prepare('SELECT category FROM categories LEFT JOIN works_categories ON categories.id = works_categories.category_id WHERE works_categories.work_id = 1');
        $query->bindParam(1, $id, PDO::PARAM_INT);
        $query->execute();
        $output['categories'] = array();
        while($category = $query->fetch(PDO::FETCH_ASSOC)){
            array_unshift($output['categories'], $category['category']);
        }
    }catch(Exception $e){

    }

    return $output;
}


function get_authors(){
    include ("connection.php");
    try{
        $query = $db->prepare('SELECT * FROM author');
        $query -> execute();
        $output = $query->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    return $output;
}

function get_last_article_id(){
    include ("connection.php");
    try{
        $query = $db->prepare('SELECT id FROM news ORDER BY id DESC LIMIT 1');
        $query -> execute();
        $output = $query->fetch(PDO::FETCH_ASSOC);
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
    return $output;
}

/**
 * @return bool
 */
function add_news($news_args, $authors_id, $news_id){
    include ("connection.php");
    try{
        $query = $db->prepare("INSERT INTO news VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        foreach($news_args as $key => &$arg){
            $new_key = $key+1;
            $query->bindParam($new_key, $arg);
        }
        $query->execute();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
    try{
        $query = $db->prepare("INSERT INTO news_authors VALUES (NULL, ?, ?)");
        $query->bindParam(1, $news_id);
        $query->bindParam(2, $authors_id);
        $query->execute();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

}

/**
 * @param $id
 * @return mixed
 */
function get_single_article($id)
{
    include('connection.php');
    try {
        $query = $db->prepare('SELECT title, publish_date, lead_text, first_text_section, second_text_section, third_text_section, featured_img, first_img, second_img, third_img, first_name, last_name, position 
                              FROM news LEFT JOIN news_authors ON news.id = news_authors.news_id JOIN author ON news_authors.author_id = author.id WHERE news.id = ?');
        $query->bindParam(1, $id, PDO::PARAM_INT);
        $query->execute();
        $article = $query->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    return $article;
}

function get_articles($orderby)
{
    include('connection.php');
    try {
        $query = $db->prepare('SELECT news.id, news.title, news.lead_text, news.featured_img FROM news WHERE publish_date <= CURDATE() ORDER BY ? DESC');
        $query->bindParam(1, $orderby, PDO::PARAM_STR);
        $query->execute();
        $articles = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    return $articles;
}

function displayLanguages($languagesArray)
{
    $languageHTML ="";
    foreach($languagesArray as $language){
        $languageHTML .= "<li class='language-item'><img class='language-img' src='img/flags/".$language['img'].".png'><span>".$language['name']."</span></li>";
    }
    return $languageHTML;
}

function displayMobileLanguages($languagesArray){
    $languageHTML = "";
    foreach($languagesArray as $language){
        $languageHTML .= "<img src='img/flags/".$language['img']."-mobile.png'></img>";
    }
    return $languageHTML;
}

function SortAndDisplayJobOffers($array, $sortBy)
{
    $sort = array();
    $output = array();
    $outputHTML = "";

    foreach($array as $key => $value){
        $sort[$key] = $value[$sortBy];
    }
    asort($sort);
    $output = array_keys($sort);

    foreach($output as $key => $value){
        $outputHTML .= "<li>"; //List item
        $outputHTML .= "<h5>";
        $outputHTML .= $array[$value]['job'];
        $outputHTML .= "</h5>";
        $outputHTML .= "<p>";
        $outputHTML .= $array[$value]['text'];
        $outputHTML .= "</p>";
        $outputHTML .= "</li>";
    }

    return $outputHTML;
}

