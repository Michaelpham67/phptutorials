<?php 

  // MYSQLi or PDO, will use MYSQLi for this tutorial, PDO is great to learn for PHP devs 

  // Connect to database
  $conn = mysqli_connect('localhost', 'michael', '12345', 'ninja_pizza'); // takes 4 parameters, the host, username, pw, and the DB to connect to and stores it in the $conn variable. 

  // check connection
  if(!$conn){ // if the connection is an error (does not connect), it will echo to the screen the below code. 
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // write SQL queries for all pizzas
  // $sql = 'SELECT * FROM pizzas'; // Select (go and get), * (get all the columns from the record), FROM (pizzas, the specific table)
  $sql = 'SELECT title, ingredients, id FROM pizzas'; // Select (go and get) the title, ingredients, and id columns | FROM (pizzas, the specific table)

  // make query & get results
  $result = mysqli_query($conn, $sql); // stores the query we are making via the connection $conn and issuing the sql command $sql

  // fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); // fetches in the results from the query and retrieves it as an associative array

  mysqli_free_result($result); // good practice to free the result from memory after you finish using it

  // close connection
  mysqli_close($conn);

  print_r($pizzas); // prints the assoc. array to the browser. 

?>

<!DOCTYPE html>
<html>
  
  <?php include('templates/header.php'); ?> <!-- includes the external header.php file in the templates directory -->

  <?php include('templates/footer.php'); ?> <!-- includes the external footer.php file in the templates directory -->

</html>