<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 16.04.2018
 * Time: 07:44
 */

include ("header.php");

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $job_name = filter_input(INPUT_POST, "job_name", FILTER_SANITIZE_STRING);
    $job_descirption = filter_input(INPUT_POST, "job_description", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($job_name) || empty($job_descirption)){
        $error_message = "Please fill in all required fields";
    }else{
        $add_jobs = add_job_offer($job_name, $job_descirption);
        if($add_jobs){
            $job_status = true;
        }else{
            $error_message = "There was problem with database. Please contact web administrator";
        }
    }

}

$jobs = get_job_offers();

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Job Offers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h2 class="text-center">All Jobs</h2>
            <?php
                foreach ($jobs as $job){
            ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $job['name'] ?></h5>
                        <p class="card-text"><?php echo $job['job_description'] ?></p>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
        <div class="col-md-4 col-sm-12">
            <h3>Add Job Offer</h3>
            <?php
            if (isset($error_message)) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">$error_message</div>";
            }
            if (isset($job_status) && $job_status == true) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Success! Job offer added.</div>";
                unset($title, $author, $date, $lead_text, $first_text_section, $second_text_section, $third_text_section);
            } elseif (isset($status) && $status == false) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Bummer! News can't be added. Please contact: admin@larsenjorgensen.com</div>";
            }
            ?>
            <form method="post" action="">
                <div class="form-group">
                    <label for="name">Enter Job Name</label>
                    <input class="form-control" type="text" name="job_name" id="job_name">
                </div>
                <div class="form-group">
                    <label for="job_desciption">Enter Job Description</label>
                    <textarea rows="10" class="form-control" name="job_description" id="job_description"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block">
                </div>
            </form>
        </div>
    </div>
</div>
