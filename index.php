<?php
   $date = date('Y');
?>
<!DOCTYPE HTML> 
<html>
   <head>
    <title>The Krusty Krab</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.cdnfonts.com/css/spongebob-font-condensed" rel="stylesheet">

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
            <li><a href="index.html">Home</a></li>      
            <li><a href="#">About</a></li>      
            <li><a href="#">Menu</a></li>      
            <li><a href="#">Contact</a></li>      
         </ul>
      </div>
      </header> 

      <main>
         <h1>The Krusty Krab - EST. 1999</h1>
         
         <img src="images/KK.webp" alt="Krusty Krab" height="30%" width="35%">

         <h4 style="text-align:center; margin-bottom: 80px">Home of the Krabby Patty Secret Formula</h4>
      </main>

      <footer>
         <p>&copy; <?php echo date("Y"); ?> Krusty Krab, LLC.</p>
      </footer>
   </body>

</html>
