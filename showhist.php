<html>
<?php
	header('Content-Type: text/html; charset=utf-8');
	echo "<body>";
	echo "<br/> История запросов: <br/><pre><code>";
	$res = file_get_contents('history.txt');
	echo $res;
	echo "</code></pre></body>";
?>
</html>