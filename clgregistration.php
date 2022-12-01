<html>
<head>
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <form action="#" method="post">
     	<h2>REGISTRATION FORM</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Institute Name</label>
     	<input type="text" name="uname" placeholder="Institute Name"><br>

         <label>Email Address</label>
     	<input type="Email" name="uname" placeholder="Email-Address"><br>


         <label>Contact Number</label>
     	<input type="number" name="number" placeholder="Contact Number"><br>


         <label>Location</label>
     	<input type="text" name="Location" placeholder="Enter Location"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="********"><br>


     	<button type="submit">SUBMIT</button>
		<label>
			<a href="home.php">Home</a>
		</label>
     </form>
</body>
</html>