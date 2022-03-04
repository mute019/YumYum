<?php

function invalidInput($usr_id, $usr_contact){
    if(empty($usr_id) || empty($usr_contact)){
        return true;
    } else {
        return false;
    }
}

function invalidNumber($usr_contact){
    if(!preg_match('/^[98765]{1}[0-9]{9}$/i', $usr_contact)) {
        return true;
    } 
}

function invalidName($usr_id){
    if(!preg_match('/^[A-Z][a-z]+? [A-Z][a-z]+$/i', $usr_id)) {
        return true;
    }
}

function invalidDate($usr_date){
    return (bool)strtotime($usr_date);
}

function usrExists($conn, $usr_contact){
    $sql = "SELECT * from book where cust_number = ?;";
    $stmt = $conn->stmt_init();
    $stmt->prepare($sql);
    $stmt->bind_param('s', $usr_contact);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result > 0) {
        return true;
    }
}

function createEntry($conn, $usr_id, $usr_date, $usr_contact, $usr_city) {
    $sql = "Insert into book (cust_name, cust_date, cust_number, cust_city) value(?, ?, ?, ?);";
    $stmt = $conn->stmt_init();
    $stmt->prepare($sql);
    $stmt->bind_param('ssss', $usr_id, $usr_date, $usr_contact, $usr_city);
    $stmt->execute();
}