<?php
while(true) {
	$appUrl = "http://localhost/"; // url приложения
    $interval = 60; // интервал запроса в секундах

    file_get_contents($appUrl);
    sleep($interval); 
}
