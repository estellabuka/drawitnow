<?php

$uri = $_SERVER[REQUEST_URI];

if ($uri === '/en') {
    echo file_get_contents("enPage.html");	
} else {
	echo file_get_contents("uaPage.html");
}
