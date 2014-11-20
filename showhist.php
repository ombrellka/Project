<?php
	echo "<body>";
	echo "<br/> Input history: <br/><pre><code>";
	$res = file_get_contents('history.txt');
	echo $res;
	echo "</code></pre></body>";
?>