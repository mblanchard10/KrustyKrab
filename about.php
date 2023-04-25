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
         <h1 style="text-align:center">Meet The Team</h1>
         <div style="display: flex;">
		      <img src="images/MrKrabs.jpeg" alt="My Picture" height="350px" width="450px" style="margin-left:50px; margin-top: 25px;
               float:left">
		         <p style="float:right; margin-top:65px; margin-left:50px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida commodo lorem, vel facilisis mi commodo eu. Nam eget augue velit. Fusce vitae commodo erat.</p>
	      </div>
	
         <div style="display: flex; align-items: center;">
            <p style="flex: 1; margin: 0px 0px 30px 50px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravi    da commodo lorem, vel facilisis mi commodo eu. Nam eget augue velit. Fusce vitae commodo erat.</p>
            <img src="images/staff.png" alt="Your Image" style="max-width: 100%; height: auto; margin: 30px 50px 30px">
         </div>   
      </main>

      <footer>
         <p>&copy; <?php echo date("Y"); ?> Krusty Krab, LLC.</p>
         <a href="https://instagram.com/spongebob?igshid=MTIyMzRjYmRlZg=="><i class="fab fa-instagram" style="font-size: 40px; margin-left: 1300px;"></i></a>
      </footer>
   </body>

</html>
