<?php
include "conection.php";


$username = filterreq('username');
$email = filterreq('email');
$password = filterreq('password');


$stmt = $con->prepare("
INSERT INTO `users`(`username`, `email`, `password`)
VALUES (?, ?, ?)
");

$stmt->execute(array($username , $email , $password));

$count = $stmt->rowCount();

if ($count > 0) {
	echo json_encode(array("status" => "account has been register"));
}else{
	echo json_encode(array("status" => "faile to register"));
}


?>