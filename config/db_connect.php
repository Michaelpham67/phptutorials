<?php  

  // Connect to database
  $conn = mysqli_connect('localhost', 'michael', '12345', 'ninja_pizza'); // takes 4 parameters, the host, username, pw, and the DB to connect to and stores it in the $conn variable. 

  // check connection
  if(!$conn){ // if the connection is an error (does not connect), it will echo to the screen the below code. 
    echo 'Connection error: ' . mysqli_connect_error();
  }

 ?>