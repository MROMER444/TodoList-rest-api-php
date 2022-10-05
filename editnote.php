<?php

include "conection.php";

$title = filterreq('title');
$content = filterreq('content');

$noteid = filterreq('noteid');

$stmt = $con->prepare("UPDATE `notes` SET `title`=?,`content`=?  WHERE `notes_id` = ?");
$stmt->execute(array($title , $content , $noteid));

$count = $stmt->rowCount();

if ($count > 0) {
	echo json_encode(array("status" => "success updated"));
}else{
	echo json_encode(array("status" => "fail to updated"));
}


?>