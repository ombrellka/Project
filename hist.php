<?php
	header('Content-Type: text/html; charset=utf-8');
	$my_request = $_GET["request"];
	$my_request = substr($my_request,1,strlen($my_request) - 2);//убрал кавычки
	$my_request = str_replace(" ", "+", $my_request);
	//echo $my_request;
	$f = fopen('history.txt', 'a');
	fwrite($f,$my_request.PHP_EOL);
	fclose($f);
	header('Location: index.html');
?>