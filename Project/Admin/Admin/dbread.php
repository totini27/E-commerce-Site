<?php
include 'Dbconnection.php';


function login($userName, $password)
{
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM USERS WHERE usernaame = ? and password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $records = $stmt->get_result();

    return $records->num_rows === 1;
}


function getAllUsers(){
    $conn = connect();
    $stmt = $conn->prepare("SELECT id, usernaame FROM USERS");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
}


function getUser($userName){
    $conn = connect();
    $stmt = $conn->prepare("SELECT id, usernaame FROM USERS WHERE usernaame = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
}



?>