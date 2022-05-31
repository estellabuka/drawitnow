<?php

$uri = $_SERVER[REQUEST_URI];

echo $uri;

if ($uri === 'en') {
    echo file_get_contents("en.html");	
} else {
	echo file_get_contents("en.html");
}
