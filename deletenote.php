<?php

include "conection.php";

$noteid = filterreq('note_id');


$stmt = $con->prepare("DELETE FROM `notes` WHERE `notes_id`= ? ");
$stmt->execute(array($noteid));

$count = $stmt->rowCount();

if ($count > 0) {
	echo json_encode(array("status" => "success delete"));
}else{
	echo json_encode(array("status" => "fail to delete"));
}





?>