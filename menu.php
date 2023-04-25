<?php
$date = date('Y');
?>
<!DOCTYPE HTML> 
<html>
   <head>
    <title>The Krusty Krab</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.cdnfonts.com/css/spongebob-font-condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
      h1 {
         position: relative;
         text-align: center;
         margin-top: 40px;
      
      }
      img {
         display: block;
         margin-left: auto;
         margin-right: auto;
         text-align: center;
         border-radius: 10px;
      }
    </style>
   </head>

   <body>
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
         

      </main>

      <footer>
         <p>&copy; <?php echo date("Y"); ?> Krusty Krab, LLC.</p>
         <a href="https://instagram.com/spongebob?igshid=MTIyMzRjYmRlZg=="><i class="fab fa-instagram" style="font-size: 40px; margin-left: 1300px;"></i></a>
      </footer>
   </body>

</html>
