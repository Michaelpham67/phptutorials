<?php 

	include('config/db_connect.php');

	// check GET request id parameter
	if(isset($_GET['id'])){

	  $id = mysqli_real_escape_string($conn, $_GET['id']);

	  // make sql to get the record/details of the specific id/pizza that the user clicks on
	  $sql = "SELECT * FROM pizzas WHERE id = $id";

	  // get the query result
	  $result = mysqli_query($conn, $sql);

	  // fetch result in array format
	  $pizza = mysqli_fetch_assoc($result); 

	  // frees the memory and closes the connection 
	  mysqli_free_result($result);
	  mysqli_close($conn);

	}

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

  	.nopizza{
  		height: 40vh;
  		width: 20vw;
  		margin: 20px auto;
  		padding: 20px;
  	}

  </style>
</head>

	<?php include('templates/header.php'); ?> <!-- includes the external header.php file in the templates directory -->

	<div class="container center">
		
		<?php if($pizza): ?>

			<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
			<p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
			<p><?php echo date($pizza['created_at']); ?></p>
			<h5>Ingredients:</h5>
			<p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

		<?php else: ?>
			<a href="#" class="nopizza btn brand z-depth-10">No such pizza exists!</a>

		<?php endif; ?>

	</div>

	<?php include('templates/footer.php'); ?> <!-- includes the external header.php file in the templates directory -->

</html>