<?php
include("header.php");


$authors = get_authors();
$lastArticle = get_last_article_id();
$news_id = intval($lastArticle['id'])+1;

$page_title = 'Add News to Larsen+Jorgensen';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = filter_input(INPUT_POST, "title", FILTER_DEFAULT);
    $publish_date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_NUMBER_FLOAT);
    $lead_text = filter_input(INPUT_POST, "lead_text", FILTER_DEFAULT);
    $first_text_section = filter_input(INPUT_POST, "first_text_section", FILTER_DEFAULT);
    $second_text_section = filter_input(INPUT_POST, "second_text_section", FILTER_DEFAULT);
    $third_text_section = filter_input(INPUT_POST, "third_text_section", FILTER_DEFAULT);
    $featured_img = filter_input(INPUT_POST, "featured_image", FILTER_DEFAULT);
    $first_img = filter_input(INPUT_POST, "first_image", FILTER_DEFAULT);
    $second_img =filter_input(INPUT_POST, "second_image", FILTER_DEFAULT);
    $third_img = filter_input(INPUT_POST, "third_image", FILTER_DEFAULT);
    $authors_id = filter_input(INPUT_POST, "author", FILTER_SANITIZE_NUMBER_INT);


    if (empty($title)|| empty($authors_id) || empty($publish_date) || empty($lead_text) || empty($first_text_section) || empty($second_text_section) || empty($third_text_section)) {
        $error_message = "Please fill all required fields";
    }

    if (!isset($error_message)) {
        $news_args = array(
            $title,
            $publish_date,
            $lead_text,
            $first_text_section,
            $second_text_section,
            $third_text_section,
            $featured_img,
            $first_img,
            $second_img,
            $third_img
        );


       $add_news_status = add_news($news_args, $authors_id, $news_id);
        if ($add_news_status = true) {
            $status = true;
        } else {
            $status = false;
        }
    }
}


$files_inputs = array(
    array(
        'name' => 'Featured Image',
        'code' => 'featured_image',
        ),
    array(
        'name' => 'First Image',
        'code' => 'first_image',
    ),
    array(
        'name' => 'Second Image',
        'code' => 'second_image',
    ),
    array(
        'name' => 'Third Image',
        'code' => 'third_image',
    ),
);

$text_sections_inputs = array(
    array(
        'name' => 'First Text Section',
        'code' => 'first_text_section',
    ),
    array(
        'name' => 'Second Text Section',
        'code' => 'second_text_section',
    ),
    array(
        'name' => 'Third Text Section',
        'code' => 'third_text_section',
    )
);


?>


<div class="container" style="padding-top: 100px">
    <div class="row">
        <div class="col-md-4"
        ">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link disabled" href="#">All News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add News</a>
            </li>
        </ul>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <h1 class="text-center">Add Article</h1>
            <?php
            if (isset($error_message)) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">$error_message</div>";
            }
            if (isset($status) && $status == true) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Success! News added.</div>";
                unset($title, $author, $date, $lead_text, $first_text_section, $second_text_section, $third_text_section);
            } elseif (isset($status) && $status == false) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Bummer! News can't be added. Please contact: admin@larsenjorgensen.com</div>";
            }
            ?>
        </div>
        <form method="post" action="addNews.php">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                       value="<?php if (isset($title)) echo $title; ?>">
            </div>
            <div class="form-group">
                <label for="Author">Author</label>
                <select class="form-control" name="author" id="author" placeholder="Select Author">
                    <option>-- Empty --</option>
                    <?php
                    foreach ($authors as $author) {
                        echo "<option value='" . $author['id'] . "'>" . $author['first_name'] . " " . $author['last_name'] . "</option>";
                    }
                    ?>
                </select>
                <small class="form-text text-muted">Select Author of this News</small>
                <small class="form-text text-muted">Or create new Author</small>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Enter title" value="<?php if (isset($date)) echo $date; ?>">
            </div>
            <div class="form-group">
                <label for="lead_text">Lead Text</label>
                <textarea rows="10" class="form-control" name="lead_text" id="lead_text"
                          placeholder="Enter Short Description" value="<?php if (isset($lead_text)) echo $lead_text; ?>"><?php if (isset($lead_text)) echo $lead_text; ?></textarea>
            </div>
            <div class="form-group">
                <h4>Text</h4>
            </div>
            <?php foreach ($text_sections_inputs as $input){ ?>
                <div class="form-group">
                    <label for="<?php echo $input['code'] ?>"><?php echo $input['name'] ?></label>
                    <textarea rows="10" class="form-control"  name="<?php echo $input['code'] ?>" id="<?php echo $input['code'] ?>"></textarea>
                </div>
            <?php } ?>

                <h4>Images</h4>
            <?php
                foreach($files_inputs as $input){
            ?>
            <div class="form-group send_img">
                <label class="" for="<?php echo $input['code'] ?>">
                    <?php echo $input['name'] ?>
                    <small class="form-text text-muted">Supported file formats are: .jpg, .png</small>
                </label>
                <input accept="" type="file" enctype="multipart/form-data" name="<?php echo $input['code'] ?>" class="form-control" id="<?php echo $input['code'] ?>">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button style="margin-top: 10px;" class="btn btn-info send" type="upload">Upload</button>
                <button style="margin-top: 10px;" class="btn btn-danger">Cancel</button>
            </div>
            <?php }?>
            <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 25px;">Save</button>
        </form>
    </div>
</div>
</div>

<footer class="container-fluid" style="margin-top: 50px; background-color: #343a40!important">
    <div class="row">
        <div class="col">
            <p style="color: lightgray; padding: 20px 0 20px 0;">Copytright <?php echo date('Y'); ?> by Zostaw To Nam</p>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/add_file.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>