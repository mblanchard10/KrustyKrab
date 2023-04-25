<?php
// Get the product data
$PROD_NUM = filter_input(INPUT_POST, 'PROD_NUM', FILTER_VALIDATE_INT);
$VEND_NUM = filter_input(INPUT_POST, 'VEND_NUM', FILTER_VALIDATE_INT);
$PROD_NAME = filter_input(INPUT_POST, 'PROD_NAME');
$PROD_PRICE = filter_input(INPUT_POST, 'PROD_PRICE', FILTER_VALIDATE_FLOAT);
$VEND_COST = filter_input(INPUT_POST, 'VEND_COST', FILTER_VALIDATE_FLOAT);

// Validate inputs
if ($PROD_NUM == null || $PROD_NUM == false ||
        $VEND_NUM == null || $VEND_NUM == false ||
        $PROD_NAME == null || 
        $PROD_PRICE == null || $PROD_PRICE == false ||
        $VEND_COST == null || $VEND_COST == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO PRODUCT
                 (PROD_NUM, PROD_NAME, PROD_PRICE, VEND_COST, VEND_NUM)
              VALUES
                 (:PROD_NUM, :PROD_NAME, :PROD_PRICE, :VEND_COST, :VEND_NUM)';
      
    $statement = $db->prepare($query);
    $statement->bindValue(':PROD_NUM', $PROD_NUM);
    $statement->bindValue(':VEND_NUM', $VEND_NUM);
    $statement->bindValue(':PROD_NAME', $PROD_NAME);
    $statement->bindValue(':PROD_PRICE', $PROD_PRICE);
    $statement->bindValue(':VEND_COST', $VEND_COST);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('products.php');
}
?>
