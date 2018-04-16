<?php
session_start();
include ("../inc/functions.php");



if(isset($_SESSION['id'])){
    header("location: addNews.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING );
    $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING );


    if(empty($user) || empty($pass)){
        $error_message = "Please fill in username and password";
    }else{
        $login = larsen_login($user, $pass);
        var_dump($login);
        if($login){
            $_SESSION['id'] = $login['id'];
            header("location: addNews.php");
        }else {
            $error_message = "Wrong username or password";
        }
    }
}

/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 13.04.2018
 * Time: 15:45
 */
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

<div class="container" style="padding-top: 10%">
    <div class="row">
        <div style="padding-top: 30px; padding-bottom: 30px; box-shadow: 0px 2px 6px 0px rgba(0,0,0,0.1);" class="col-md-4 col-sm-12 offset-md-4">
            <h2 class="text-center">Log In</h2>
            <?php
            if(isset($error_message)){
                echo "<div class=\"alert alert-danger\" role=\"alert\">".$error_message."</div>";
            }
            ?>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Your login" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Your password">
                </div>
                <div class="form-gorup">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Zaloguj">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>