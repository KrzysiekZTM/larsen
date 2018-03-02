<?php 


$languageShort = "en";
$author = "Larsen+Jørgensen";
$title = "Larsen+Jørgensen";
$description = "Description";

$projects = "See some of our latest projects below.";
$studio = array(

"We’re an independent design agency with studios in London, Łódź, Beiging, Trondheim and Dublin. We believe that great design helps brands grow, by abandoning the generic and relentlessly pursuing the unmistakable",

"Approach",

"In a world moving fast we strive to keep things simple. Making sense of complexity in brands and products. From promising startups to companies with decades of history, we create and position businesses from strategy and design, to developing a complete user experience. As every collaboration is unique, we shape our team and methods in new ways. Working closely with our clients for tighter execution and better communication. We travel light and move quick to help our clients push forward. Designing brands and products that speak to both heart and mind.",

"Services"

);

$services = array(
    array(
        'Strategy',
        'Brand Consulting',
        'Art Direction',
        'Branding',
        'Web Design',
        'Web Development'
    ),
    array(
        'SEO',
        'UX/UI',
        'Event Branding',
        'Logo, Identyty design',
        'App design',
        'Brand Consulting'
    ),
    array(
        'Print Design',
        'Social Media Consulting',
        'Copywritting',
        'Naming',
        'Translating',
        'Web Development'
    )
);

$motto = "We simplify<br>the message.";

$nav = array(
    array('Work','index.php'),
    array('Studio','studio.php'),
    array('News','news.php'),
    array('Contact','contact.php'),
    array('Language','#'),
);

$footerEmail = "Give us a call <br>or send us an <a href=\"mailto:contact@larsenjorgensen.com\">email.</a>";


$newsTitle = "News<br><span class=\"header-thiner\">and</span> Notes";

$newsDsc = "We believe that design should solve real problems, not just have a pretty surface. Read about our thoughts on design here.";

?>

<!doctype html>

<html lang="<?php echo $languageShort; ?>">
    <head>
        <meta charset="utf-8">

        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="<?php echo $author; ?>" content="SitePoint">

        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="fonts/fontface.css">
        <link rel="stylesheet" href="css/style.css">

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>

<body>


<div class="wrapper">
   <?php include 'nav.php'; ?>