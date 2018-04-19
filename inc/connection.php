<?php
/**
 * Created by PhpStorm.
 * User: Krzysztof Jabłoński
 * Date: 09.04.2018
 * Time: 09:22
 */
try {
    $host = "localhost";
    $database = "larsen_db";
    $db_username = "root";
    $db_password = "";
    $dsn = 'mysql:host=' . $host . ';dbname=' . $database;
    $db = new PDO($dsn, $db_username, $db_password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo "Connection Error: " . $e->getMessage();
}

