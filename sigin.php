<?php
include "conection.php"; // double .. to back


$email    = filterreq('email');
$password = filterreq('password');


$stmt = $con->prepare("SELECT * FROM users WHERE `password` = ? AND email = ? ");
$stmt->execute(array($password , $email));
$count = $stmt->rowCount();
$data = $stmt->fetch(PDO::FETCH_ASSOC);


if($count > 0){
    echo json_encode(array("status" => "success login" , "data"=> $data["id"]));
}else{
    echo json_encode(array("status" => "fail to login"));
}