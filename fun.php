<?php

function filterreq($requestname){
	return htmlspecialchars(strip_tags($_POST[$requestname]));
}



?>