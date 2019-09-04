<?php 

	// file system - part 2

	// stores the content (followed by the number of bytes in the file) of the readme.txt in $quotes variable and echoes it out
	// $quotes = readfile('readme.txt'); 
	// echo $quotes;

	$file = 'quotes.txt'; 

	// opening a file for reading using fopen and storing it in the variable $handle
	$handle = fopen($file, 'a+'); // read (r), read & write (r+), append (a+) to append to the end of the file

	// reads the file, passes in the file to be read and the memory size of it
	echo fread($handle, filesize($file)); 
	// echo fread($handle, 112); 

	// reads a single line
	// echo fgets($handle); 
	// if done again, it will get the subsequent line(s) due to the pointer moving to the end of the line each time 
	// echo fgets($handle); 

	// reads a single character (from the pointer)
	// echo fgetc($handle); 
	// echo fgetc($handle);

	// writing to a file
	fwrite($handle, "\nEverything popular is wrong."); 

	// closes the file at the end to prevent errors
	fclose($handle);

	// deletes the file (quotes.txt) | the one that is set to $file at the top of this php doc 
	// unlink($file); 

?>

<!--

"r" - Read only. Starts at the beginning of the file
"r+" - Read/Write. Starts at the beginning of the file
"w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
"w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
"a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
"a+" - Read/Write. Preserves file content by writing to the end of the file
"x" - Write only. Creates a new file. Returns FALSE and an error if file already exists
"x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists
"c" - Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
"c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
"e" - Only available in PHP compiled on POSIX.1-2008 conform systems.

-->