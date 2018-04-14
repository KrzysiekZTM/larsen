<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 10.04.2018
 * Time: 08:19
 */

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $file_name = $_FILES[0]['name'];
    $file_type = $_FILES[0]['type'];
    $file_tmp = $_FILES[0]['tmp_name'];
    $file_size = $_FILES[0]['size'];
    $file_error = $_FILES[0]['error'];

    $file_extention = explode('.', $file_name);
    $file_lower_ext = strtolower(end($file_extention));


    $allow_ext = array(
        'jpg',
        'jpeg',
        'png',
        'pdf',
    );

    if(in_array($file_lower_ext, $allow_ext)){

        if($file_error === 0){
//          uniq name to use in future
//          $uniqid = uniqid("");
//          $file_name_new = $file_extention[0]."-".$uniqid.".".$file_lower_ext;
            $file_destination = '../img/uploads/'.$file_name;
            move_uploaded_file($file_tmp, $file_destination);

            echo "Success";

        }else{
            echo "There was an error uploading your file!";
        }

    }else{
        echo "Supported types of files are .jpg and .png";
    }


}