<?php  

  // LOOPS

  $ninjas = ['shaun', 'ryu', 'yoshi'];

  // for($i = 0; $i < count($ninjas); $i++){

  // echo $ninjas[$i] . '<br />'; // prints out each element/string of the array and concatenates with line breaks in between each of them

  // foreach($ninjas as $ninja){ // foreach loop that loops through each iteration of the array without a need for a counter variable

  // echo $ninja . '<br />'; } // preferred to use foreach loops instead of for loops

  $products = [ // index array with associative array within 
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
   ];

  // foreach($products as $product){ // loops through each element in the array and prints out the corresponding associative values with the name, -, and price of the product and a linebreak afterwards

    // echo $product['name'] . ' - ' . $product['price'];
    // echo '<br />';
  // }
  // $i = 0;

  // while($i < count($products)){
    // echo $products[$i]['name'];
    // echo '<br />';
    // $i++; // must increment $i so that the while loops through all the elements and not be in an infinite loop with $i always equaling 0. 
  // }

?>

<!DOCTYPE html> 
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>

  <h1>products</h1>
  <ul>
    <?php foreach($products as $product){ ?> <!-- Embedding PHP loops in the HTML template, keep note of the opening and closings of the PHP tags and how the loop and variables are called here. -->

      <h3><?php echo $product['name']; ?></h3>
      <p>$ <?php echo $product['price']; ?></p>

    <?php } ?>
  </ul>

</body>
</html> 
