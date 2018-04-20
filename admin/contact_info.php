<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 19.04.2018
 * Time: 08:21
 */
include ("header.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_STRING);
    $contact_email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $contact_phone = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_FLOAT);

    if(empty($country) || empty($contact_email) || empty($contact_phone)){
        $error_message = "Please fill in all required fields";
    }else{
        $add_contacht_info = add_contacht_info();

        if($add_contacht_info === true){
            $status = true;
        }else{
            $status = false;
            $error_message = "There was an error with database. Please contacht administrator";
        }
    }
}

$contact_infos = get_contact_infos();
$phones = get_all_phones();
$emails = get_all_emails();

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Infos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <?php

                foreach($contact_infos as $contact_item){
            ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $contact_item['country'] ?></h5>
                            <p class="card-text"><?php echo $contact_item['email']."<br />".$contact_item['number']; ?></p>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
        <div class="col-md-4 col-sm-12">
            <h2>Add Contact Info</h2>
            <?php ?>
            <form action="post">
                <div class="form-group">
                    <label for="country">Enter Country and City</label>
                    <input id="country" name="country" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="number">Enter Phone Number</label>
                    <select name="number" id="number" class="form-control">
                        <?php
                            foreach($phones as $phone){
                                echo "<option value='".$phone['id']."'>".$phone['number']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Enter Email</label>
                    <select name="email" id="email" class="form-control">
                        <?php
                        foreach($emails as $email){
                            echo "<option value='".$email['id']."'>".$email['email']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
