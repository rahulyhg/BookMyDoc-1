<?php
session_start();
?>
<?php
		$local=($_POST['local']);
		$special=($_POST['special']);
		if($local == "b")
		{
			if($special == "c")
			
				echo '
					<html>
					<head>
						<link rel="stylesheet" href="design1.css">
						<h1>Book My Doctor</h1>
					</head>
					<body>
						<ul class="w3-navbar w3-black">
						 <li><a href="logout.php">Logout</a></li>
						  <li><a href="aboutus.html">About</a></li>
						  <li><a href="Register.html">Register</a></li>
						  <li><a href="main.php">Home</a></li>
						</ul>
						<h1 align="center"> CARDIOLOGISTS IN BANDRA </h1>
						<hr>
						<br>
						<font size="5"><b>Karan Thakur </b></font><br>
						<font size="4">Address : A Wing, Kesha Apts, Linking Road, Bandra East, Mumbai-400 060.<br>
						Contact : 8082769275 </font><br>
						<br><br> 
						<hr>
						<br>
						<font size="5"><b>Shreya Kumar</b></font><br>
						<font size="4">Address : D Wing, Red Sea Apts, S.M. Road, Bandra East, Mumbai-400 050.<br>
						Contact : 7892767275</font> <br>
						<br><br> 
						<hr>
						<br>
						<font size="5"><b>Vinny Miranda </b></font><br>
						<font size="4">Address : C Wing, K.M. Apts, Hill Road, Bandra West, Mumbai-400 050.<br>
						Contact : 9356767275</font> <br>
					<br><br> 
						<hr>
						<center>
							<form method="get" action="booking.php">
						<button type="submit">Book Appointment</button>
						</form>
						</center>
					</body>
					</html>';
			
				else
				
					echo '<html>
							<head>
								<link rel="stylesheet" href="style1.css">
								<h1>Book My Doctor</h1>
							</head>
							<body>
							<ul class="w3-navbar w3-black">
							<li><a href="logout.php">Logout</a></li>
							  <li><a href="aboutus.html">About</a></li>
							  <li><a href="contact.html">Contact</a></li>
							  <li><a href="Register.html">Register</a></li>
							  <li><a href="main.php">Home</a></li>
							</ul>
							<h1 align="center"> DERMATOLOGISTS IN BANDRA </h1>
							<hr>
							<br>
							<font size="5"><b>Bhavesh Pal </b></font><br>
							<font size="4">Address : C Wing, K.M. Apts, Hill Road, Bandra West, Mumbai-400 050.<br>
							Contact : 9356767275 </font><br>
							<br><br> 
							<hr>
							<br>
							<font size="5"><b>Divya Thakur </b></font><br>
							<font size="4">Address : A Wing, Kesha Apts, Linking Road, Bandra East, Mumbai-400 060.<br>
							Contact : 8082769275 </font><br>
							<br><br> 
							<hr>
							<br>
							<font size="5"><b>Suresh Modi</b></font><br>
							<font size="4">Address : D Wing, Red Sea Apts, S.M. Road, Bandra East, Mumbai-400 050.<br>
							Contact : 7892767275 </font><br>
							<br><br> 
							<hr>
								<center>
							<form method="get" action="booking.php">
						<button type="submit">Book Appointment</button>
						</form>
						</center>
							</body>
							</html>';
			    
		}
		else
		{
			if($special == "c")
			{
				echo '<html>
					<head>
						<link rel="stylesheet" href="style1.css">
						<h1>Book My Doctor</h1>
					</head>
						<body>
						<ul class="w3-navbar w3-black">
						<li><a href="logout.php">Logout</a></li>
						  <li><a href="aboutus.html">About</a></li>
						  <li><a href="contact.html">Contact</a></li>
						  <li><a href="Register.html">Register</a></li>
						  <li><a href="main.php">Home</a></li>
						</ul>
						<h1 align="center"> CARDIOLOGISTS IN MALAD </h1>
						<hr>
						<br>
						<font size="5"><b>Archana Singh </b></font><br>
						<font size="4">Address : C/7, Seaview Apts, Marve Road, Malad West, Mumbai-400 095.<br>
						Contact : 9322767275</font> <br>
						<br><br> 
						<hr>
						<br>
						<b>Dinesh Israni </b><br>
						Address : A Wing, AshRay Apts, Linking Road, Malad East, Mumbai-400 097.<br>
						Contact : 8082767275 <br>
						><br><br> 
						<hr>
						<br>
						<font size="5"><b>Raj Tiwari</b></font><br>
						<font size="4">Address : D Wing, Blue Sea Apts, S.M. Road, Malad West, Mumbai-400 095.<br>
						Contact : 8082767275 </font><br>
						<br><br> 
						<hr>
								<center>
							<form method="get" action="booking.php">
						<button type="submit">Book Appointment</button>
						</form>
						</center>
						</body>
					</html>';
			}
						
			else
			{
				echo '<html>
						<head>
							<link rel="stylesheet" href="style1.css">
							<h1>Book My Doctor</h1>
						</head>
						<body>
						<ul class="w3-navbar w3-black">
						<li><a href="logout.php">Logout</a></li>
						  <li><a href="aboutus.html">About</a></li>
						  <li><a href="contact.html">Contact</a></li>
						  <li><a href="Register.html">Register</a></li>
						  <li><a href="main.php">Home</a></li>
						</ul>
						<h1 align="center"> DERMATOLOGISTS IN MALAD </h1>
						<hr>
						<br>
						<font size="5"><b>Ashish Singh </b></font><br>
						<font size="4">Address : C/7, Seaview Apts, Marve Road, Malad West, Mumbai-400 095.<br>
						Contact : 9322767275 </font><br>
						<br><br> 
						<hr>
						<br>
						<b>Shanaya Kulkarni </b><br>
						Address : A Wing, AshRay Apts, Linking Road, Malad East, Mumbai-400 097.<br>
						Contact : 8082767275 <br>
						<br><br> 
						<hr>
						<br>
						<font size="5"><b>Rajdeep Soni</b></font><br>
						<font size="4">Address : D Wing, Blue Sea Apts, S.M. Road, Malad West, Mumbai-400 095.<br>
						Contact : 8082767275 </font><br>
						<br><br> 
						<hr>
								<center>
							<form method="get" action="booking.php">
						<button type="submit">Book Appointment</button>
						</form>
						</center>
						</body>
						</html>';
			}
		}
?>
