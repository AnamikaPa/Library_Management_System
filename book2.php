<?php
	$myfile="book.txt";
	$fh=fopen($myfile,'a');
	$c=implode(",", $_POST)."\n";
	fwrite($fh,$c);
	echo readfile("book.txt");
	fclose($fh);		
?>
