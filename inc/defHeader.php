<?php
include('inc/data.php');
include('functions.php');

?>

<!doctype html>

<html lang="<?php echo $languageShort; ?>">
    <head>
        <meta charset="utf-8">

        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="<?php echo $author; ?>" content="SitePoint">

        <meta property="og:url"                content="http://larsenjorgensen.com/dev/" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="Larsen+Jørgensen" />
        <meta property="og:description"        content="We simplify the message." />
        <meta property="og:image"              content="http://larsenjorgensen.com/dev/img/logo.jpg" />
        <meta property="og:image:type"         content="image/jpg" />

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
