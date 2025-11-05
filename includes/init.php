<?php
    ob_start();
    session_start();
    //  *************** For PostgreSQL
    // $dsn = "pgsql:host=localhost;dbname=webmap302;port=5432";
    // $opt = [
    //     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //     PDO::ATTR_EMULATE_PREPARES   => false
    // ];
    // $pdo = new PDO($dsn, 'postgres', '123456', $opt);
    //  *************** For MySQL
       $dsn = "mysql:host=localhost;dbname=big_sales_db;port=3306;charset=utf8";
       $opt = [
           PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
           PDO::ATTR_EMULATE_PREPARES   => false
       ];
       $pdo = new PDO($dsn, 'root', '', $opt);
    
    $root_directory = "big_sales";
    $from_email = "admin@big_sales.com";
    $reply_email = "admin@big_sales.com";
    include "php_functions.php";
?>
