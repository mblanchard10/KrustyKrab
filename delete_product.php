<?php
require_once('database.php');

// Get IDs
$PROD_NUM = filter_input(INPUT_POST, 'PROD_NUM', FILTER_VALIDATE_INT);
$VEND_NUM = filter_input(INPUT_POST, 'VEND_NUM', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($PROD_NUM != false && $VEND_NUM != false) {
    $query = 'DELETE FROM PRODUCT
              WHERE PROD_NUM = :PROD_NUM';
    $statement = $db->prepare($query);
    $statement->bindValue(':PROD_NUM', $PROD_NUM);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('products.php');
