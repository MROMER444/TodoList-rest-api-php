<?php

include "conection.php";

$title_note = filterreq('title');
$content_note = filterreq('content');
$userid_note = filterreq('userid');

$stmt = $con->prepare("
INSERT INTO `notes` (`title`, `content`, `note_user`) VALUES (?,?,?)");

$stmt->execute(array($title_note , $content_note , $userid_note));

$count = $stmt->rowCount();

if($count > 0) {
	echo json_encode(array("status" => "Added successfully"));
}else{
	echo json_encode(array("status" => "Fail to added"));
}

?>