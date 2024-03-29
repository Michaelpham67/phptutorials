<?php 

  // NOTE: Also used Materialize (linked external css) and its classes to speed up the CSS process (see TheNetNinja's Tutorials)
  // MYSQLi or PDO, will use MYSQLi for this tutorial, PDO is great to learn for PHP devs 

  // connected to the db through the include file statement (see db_connect.php)
  include('config/db_connect.php');

  // write SQL queries for all pizzas
  // $sql = 'SELECT * FROM pizzas'; // Select (go and get), * (get all the columns from the record), FROM (pizzas, the specific table)
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at'; // Select (go and get) the title, ingredients, and id columns | FROM (pizzas, the specific table)

  // make query & get results
  $result = mysqli_query($conn, $sql); // stores the query we are making via the connection $conn and issuing the sql command $sql

  // fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); // fetches in the results from the query and retrieves it as an associative array

  mysqli_free_result($result); // good practice to free the result from memory after you finish using it

  // close connection
  mysqli_close($conn);

  // print_r(explode(',', $pizzas[0]['ingredients'])); // 1st parameter is how we are splitting the string and the 2nd parameter is 
  // print_r($pizzas); // prints the assoc. array to the browser. 

?>

<!DOCTYPE html>
<html>
  
  <?php include('templates/header.php'); ?> <!-- includes the external header.php file in the templates directory -->

  <h4 class="center grey-text text-darken-1">Pizzas!</h4>

  <div class="container">
    <div class="row">
      
      <?php foreach($pizzas as $pizza): ?> <!-- this loops through the array and echos out the corresponding items (columns) (title and ingredients) of the pizza that the user inputted -->

        <div class="col s6 md3">

          <div class="card z-depth-0">
            <img src="img/pizza.png" class="pizza">
            <div class="card-content center">

              <h6 class="pizza-text"><?php echo htmlspecialchars($pizza['title']); ?></h6> <!-- always get in the habit of using htmlspecialchars for any user inputs -->
              <!-- <div><?php echo htmlspecialchars($pizza['ingredients']) ?></div> -->
              <ul class="pizza-text">
                <?php foreach(explode(',',$pizza['ingredients']) as $ing): ?> <!-- explodes the string to turn it into an array so that we can cycle through it in a loop and echo it in a list format --> 
                  <li class="pizza-text"><?php echo htmlspecialchars($ing); ?></li>
                <?php endforeach; ?>
              </ul>

            </div>
            <div class="card-action right-align">
              <a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
            </div>
          </div>
        </div>

      <?php endforeach; ?>

      <!-- Method 1 for syntax of curly braces -->
      <!--
      <?php if(count($pizzas) >= 3){ ?>
        <p>There are 3 or more pizzas</p>
      <?php } else { ?>
        <p>There are less than 3 pizzas</p>
      <?php } ?>
      -->

      <!-- Method 2 for syntax of curly braces (replaces it with colons and semi-colons) -->
      <!--
      <?php if(count($pizzas) >= 3): ?>
        <p>There are 3 or more pizzas</p>
      <?php else: ?>
        <p>There are less than 3 pizzas</p>
      <?php endif; ?>
      -->

    </div>
  </div>

  <?php include('templates/footer.php'); ?> <!-- includes the external footer.php file in the templates directory -->

</html>