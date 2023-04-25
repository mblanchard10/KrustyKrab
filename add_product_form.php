<?php
require('database.php');
$query = 'SELECT *
          FROM VENDOR
          ORDER BY VEND_NUM';
$statement = $db->prepare($query);
$statement->execute();
$VENDOR = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Krusty Krab Product Essentials</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/spongebob-font-condensed" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
   <style>
      form {
         display: flex;
         flex-direction: column;
         align-items: center;
         max-width: 500px;
         margin: 0 auto;
         border: 3px solid #462AE4;
         padding: 20px 20px 20px 20px;
      }

      label {
         display: block;
         font-weight: bold;
         margin-bottom: 0.5rem;
      }

      input[type="text"],
      input[type="email"],
      textarea {
         width: 100%;
         padding: 0.5rem;
         margin-bottom: 1rem;
         border: 1px solid #ccc;
         border-radius: 4px;
         font-size: 1rem;
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

<!-- the body section -->
<body>
    <audio autoplay>
       <source src="audio/bubbleTrans.mp3" type="audio/mp3">
    </audio>
    <header style="text-align:center"><h1>Product Manager</h1></header>

    <main>
        <h3 style="text-align: center">Add Product</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">

            <label>Vendor Number:</label>
            <select name="VEND_NUM">
            <?php foreach ($VENDOR as $VENDORS) : ?>
                <option value="<?php echo $VENDORS['VEND_NUM']; ?>">
                    <?php echo $VENDORS['VEND_NAME']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Product Number:</label>
            <input type="text" name="PROD_NUM"><br>

            <label>Product Name:</label>
            <input type="text" name="PROD_NAME"><br>

            <label>Product Price:</label>
            <input type="text" name="PROD_PRICE"><br>

            <label>Vendor Cost:</label>
            <input type="text" name="VEND_COST"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Submit"><br>
        </form>
        <p style="text-align: center"><a href="products.php">View Product List</a></p>
    </main>

      <footer>
         <p>&copy; <?php echo date("Y"); ?> Krusty Krab, LLC.</p>
         <a href="https://instagram.com/spongebob?igshid=MTIyMzRjYmRlZg=="><i class="fab fa-instagram" style="font-size: 40px; margin-left: 1300px;"></i></a>
      </footer>
</body>
</html>
