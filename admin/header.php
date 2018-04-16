<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location: login.php');
}

include("../inc/functions.php");

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Admin Area</title>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../fonts/fontface.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin-style.css">

</head>

<body>
<!--Nav Start-->
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark col">
            <a class="navbar-brand" href="#"><img src="../img/logo-light-grey.png" width="30" height="30" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link disabled" href="#">Dashboard</a>
                    <a class="nav-item nav-link" href="addNews.php">News</a>
                    <a class="nav-item nav-link disabled" href="#">Authors</a>
                    <a class="nav-item nav-link disabled" href="#">Works</a>
                    <a class="nav-item nav-link disabled" href="#">Job Offers</a>
                    <a class="nav-item nav-link disabled" href="#">Add Job Offer</a>
                    <a class="nav-item nav-link disabled" href="#">Contact Info</a>
                    <button class="btn btn-outline-success" type="button">View Page</button>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--Nav End-->
