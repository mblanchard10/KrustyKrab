<?php
require_once('database.php');
// Get Vendor Number
if (!isset($VEND_NUM)) {
    $VEND_NUM = filter_input(INPUT_GET, 'VEND_NUM', 
            FILTER_VALIDATE_INT);
    if ($VEND_NUM == NULL || $VEND_NUM == FALSE) {
        $VEND_NUM = 1;
    }   
}

// Get name for selected Vendor
$queryVendor = 'SELECT * FROM VENDOR
                  WHERE VEND_NUM = :vend_num';
$statement1 = $db->prepare($queryVendor);
$statement1->bindValue(':vend_num', $VEND_NUM);
$statement1->execute();
$VENDORS = $statement1->fetch();
$VEND_NAME = $VENDORS['VEND_NAME'];
$statement1->closeCursor();

// Get products 
$queryProducts = 'SELECT * 
                  FROM PRODUCT
                  ORDER BY PROD_NUM';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':PROD_NUM', $PROD_NUM);
$statement3->execute();
$PRODUCTS = $statement3->fetchAll();
$statement3->closeCursor();
?>

<!DOCTYPE HTML> 
<html>
   <head>
      <title>The Krusty Krab</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
      <link href="https://fonts.cdnfonts.com/css/spongebob-font-condensed" rel="stylesheet"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

      <style>
         table, th, td {
            border: 1px solid;
            margin: auto;
            text-align: center;
         }

         table {
            margin-top: 50px;
            height: 50%;
            width: 70%;  
            margin-bottom: 15px;
         }
         th {
            color: black;
            font-size: 12pt;
         }
         td {
            font-size: 10pt;
         }
         input[type="submit"] {
            background-color: #462AE4;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease-in-out;
         }     

         input[type="submit"]:hover {
            background-color: #523AD9;
         }   
      </style> 
   </head>

   <body>
      <audio autoplay>
         <source src="audio/bubbleTrans.mp3" type="audio/mp3">
      </audio>
      <header>
      <div class="nav">
         <ul>
            <li><a href="index.php">Home</a></li>      
            <li><a href="about.php">About</a></li>      
            <li><a href="products.php">Products</a></li>
            <li><a href="menu.php">Menu</a></li>      
            <li><a href="contact.php">Contact</a></li>      
         </ul>
      </div>
      </header> 

      <main>
      <section>
        <!-- display a table of products -->
        
        <p style="text-align: center"><a href="add_product_form.php">Add Product</a></p>
        
        <title><h3>Products &amp; Ingredients</h3></title>
        <table>
            <tr>
                <th>Product Number</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Vender Number</th>
                <th>Vender Cost</th>
                <th>Remove</th>
            </tr>

            <?php foreach ($PRODUCTS as $PRODUCT) : ?>
            <tr>
                <td><?php echo $PRODUCT['PROD_NUM']; ?></td>
                <td><?php echo $PRODUCT['PROD_NAME']; ?></td>
                <td><?php echo $PRODUCT['PROD_PRICE']; ?></td>
                <td><?php echo $PRODUCT['VEND_NUM']; ?></td>
                <td><?php echo $PRODUCT['VEND_COST']; ?></td>
                <td style="padding:5px 5px 5px 5px"><form action="delete_product.php" method="post">
                    <input type="hidden" name="PROD_NUM"
                           value="<?php echo $PRODUCT['PROD_NUM']; ?>">
                    <input type="hidden" name="VEND_NUM"
                           value="<?php echo $PRODUCT['VEND_NUM']; ?>">
                    <input type="submit" value="Delete"></td> 
                </form>
            </tr>
            <?php endforeach; ?>
        </table>

      </section>
      </main>

      <footer>
         <p>&copy; <?php echo date("Y"); ?> Krusty Krab, LLC.</p>
         <a href="https://instagram.com/spongebob?igshid=MTIyMzRjYmRlZg=="><i class="fab fa-instagram" style="font-size: 40px; margin-left: 1300px;"></i></a>
      </footer>
   </body>

</html>
