<?php

include_once "./dbconnec.php";
include_once "./sanitization.php";

if (isset($_POST["submit"])) {
    
    $usr_id = $_POST["name"];
    $usr_date = $_POST["date-picker"];
    $usr_city = $_POST["city"];
    $usr_contact = $_POST["cont-number"];

    if(invalidInput($usr_id, $usr_contact)){
        echo "<script> console.log(\"Empty\") </script>";
        header("location: ../index.php?error=invldInput");
        exit();
    }

    if(invalidNumber($usr_contact)){
        header("location: ../index.php?error=invldNumber");
        exit();
    }

    if(invalidName($usr_id)){
        header("location: ../index.php?error=invlduid");
        exit();
    }

    if(usrExists($conn, $usr_contact)) {
        header("location: ../index.php?error=exists");
        exit();
    }
    createEntry($conn, $usr_id, $usr_date, $usr_contact, $usr_city);
    header("location: ../index.php?query=success");
}