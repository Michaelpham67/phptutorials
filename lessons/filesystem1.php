<?php 

	// file system - part 1

	// stores the content (followed by the number of bytes in the file) of the readme.txt in $quotes variable and echoes it out
	// $quotes = readfile('readme.txt'); 
	// echo $quotes;

	$file = 'readme.txt'; 

	if(file_exists($file)){

		// reads file
		echo readfile($file) . '<br />';

		// copies file (the file to use and where to copy it to)
		copy($file, 'quotes.txt'); 

		// absolute path
		echo realpath($file) . '<br />'; 

		// file size
		echo filesize($file) . '<br />'; 

		// renames file, the file you pass in and the name you want to rename it to
		rename($file, 'readme.txt'); 

	} else {
		echo 'file does not exist'; 
	} 

	// makes directory, pass in the name of the directory you want to make
	mkdir('quotes'); 

?>