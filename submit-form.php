<?php
// Get the customer data
$CUST_PHONE = filter_input(INPUT_POST, 'CUST_PHONE');
$CUST_LNAME = filter_input(INPUT_POST, 'CUST_LNAME');
$CUST_FNAME = filter_input(INPUT_POST, 'CUST_FNAME');
$CUST_EMAIL = filter_input(INPUT_POST, 'CUST_EMAIL', FILTER_VALIDATE_EMAIL);

// Validate inputs
    if( $CUST_LNAME == null || $CUST_FNAME == null || 
        $CUST_PHONE == null || $CUST_EMAIL == null) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the customer info to the database  
    $query = 'INSERT INTO CUSTOMER
                 (CUST_PHONE, CUST_LNAME, CUST_FNAME, CUST_EMAIL)
              VALUES
                 (:CUST_PHONE, :CUST_LNAME, :CUST_FNAME, :CUST_EMAIL)';
                 
    $statement = $db->prepare($query);
    $statement->bindValue(':CUST_PHONE', $CUST_PHONE);
    $statement->bindValue(':CUST_LNAME', $CUST_LNAME);
    $statement->bindValue(':CUST_FNAME', $CUST_FNAME);
    $statement->bindValue(':CUST_EMAIL', $CUST_EMAIL);
    $statement->execute();
    $statement->closeCursor();

    // Display the contact page
    include('contact.php');
}
?>
