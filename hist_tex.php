<?php
	$f = fopen('history.txt', 'r');
	$flatex = fopen('hist.tex', 'w');
	fputs($flatex, "\documentclass{article}\n"); 
	fputs($flatex, "\begin{document}\n");
	
	while ( !feof($f) ) 
	{
		$line = fgets($f, 100); 
		fputs($flatex, $line);
	}

	fputs($flatex, "\n\end{document}\n"); 
	fclose($f);
	fclose($flatex);
?>