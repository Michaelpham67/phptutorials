<?php  

   // conditional statements

   $price = 20; 

   // if ($price < 30) {
      // echo 'the condition is met';
   // } 

   // if ($price <= 10) {
      // echo 'the condition is met';
   // } 
    // elseif ($price <= 30) {
      // echo 'elseif condition is met';
  // }

    // else {
      // echo 'condition not met';
   // }

   $products = [ // index array with associative array within 
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
   ];

   // foreach($products as $product){

    // if($product['price'] < 15 && $product['price'] > 2){ // && operator to compare 'AND' statements and echos the products if true
      // echo $product['name'] . ' - ' . $product['price'] . '<br />';
    // }

   // }

   // foreach($products as $product){

    // if($product['price'] > 20 || $product['price'] < 10){ // || operator to compare 'OR' statements and echos the products if true
      // echo $product['name'] . ' - ' . $product['price'] . '<br />';
    // }

   // }

?>

<!DOCTYPE html> 
<html>
<head>
  <title>PHP Tutorials</title>
</head>
<body>

  <div>
    <ul>
      <?php foreach($products as $product){ ?>
        <?php if($product['price'] > 15){ ?>
          <li><?php echo $product['name'] . ' - ' . $product['price']; ?></li>
        <?php } ?>
      <?php } ?>
    </ul>
  </div>


</body>
</html> 
