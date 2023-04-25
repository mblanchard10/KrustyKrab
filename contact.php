<!DOCTYPE HTML> 
<html>
   <head>
    <title>The Krusty Krab</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.cdnfonts.com/css/spongebob-font-condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
		form {
			max-width: 500px;
			margin: 0 auto;
			text-align: center;
		}
		
		input[type=text], input[type=email], input[type=tel] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
		}

		input[type=submit] {
			background-color: #462AE4;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #523AD9;
		}

		.error {
			color: #B40030;
			font-size: 12px;
			text-align: left;
			margin-left: 8px;
			display: block;
		}    
   
      .nav {
         margin-bottom: 20px;
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
         <form method="post" action="submit-form.php">
		   <label for="first_name">First Name:</label>
		   <input type="text" name="CUST_FNAME" placeholder="Enter your first name" required>
		
		   <label for="last_name">Last Name:</label>
		   <input type="text" name="CUST_LNAME" placeholder="Enter your last name" required>
		
		   <label for="phone">Phone:</label>
		   <input type="tel" name="CUST_PHONE" placeholder="Enter your phone number as xxx-xxx-xxxx" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
		
		   <label for="email">Email:</label>
		   <input type="email" name="CUST_EMAIL" placeholder="Enter your email" required>

         <label>&nbsp;</label>		
	   	<input type="submit" value="Submit">
	</form>   
      
      </main>

      <footer style="position:fixed; bottom:0; width:100%; left:0">
         <p>&copy; <?php echo date("Y"); ?> Krusty Krab, LLC.</p>
         <a href="https://instagram.com/spongebob?igshid=MTIyMzRjYmRlZg=="><i class="fab fa-instagram" style="font-size: 40px; margin-left: 1300px;"></i></a>
      </footer>
   </body>

</html>
