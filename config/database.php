<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "Everts");
    define("DB_PASS", "123456");
    define("DB_NAME", "feedback-app");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); // Creates connection

    if($conn->connect_error) {
        die("Connection failed" . $conn -> connect_error);
    }
