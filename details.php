<?php 

	include('config/db_connect.php');

	// function that runs when the user deletes a pizza entry
	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']); 
		// deleting from the pizzas table where the record's id is equal to the id to delete
		$sql = "DELETE FROM pizzas WHERE id = $id_to_delete"; 

		if(mysqli_query($conn, $sql)){
			// success, when the pizza is deleted, it'll redirect the user back to the home page 
			header('Location: index.php'); 
		} {
			// failure
			echo 'query error: ' . mysqli_error($conn);
		}

	}

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
</head>

	<?php include('templates/header.php'); ?> <!-- includes the external header.php file in the templates directory -->

	<div class="container center pizza-text">
		
		<?php if($pizza): ?>

			<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
			<p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
			<p><?php echo date($pizza['created_at']); ?></p>
			<h5>Ingredients:</h5>
			<p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

			<!-- DELETE FORM -->
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand-btn z-depth-0">
			</form>

		<?php else: ?>
			<a href="#" class="nopizza btn brand-btn z-depth-10">No such pizza exists!</a>

		<?php endif; ?>

	</div>

	<?php include('templates/footer.php'); ?> <!-- includes the external header.php file in the templates directory -->

</html>