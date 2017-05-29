<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Book_my_doc"; /*Your database name*/

$local = $_POST['locl'];
$special = $_POST['special'];

//Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

/*doctors is my table name below. And reg_email and all are the names that i have given in my phpadmin database*/
$sql = "SELECT * FROM doctors where locality = '$local' AND speciality = '$special'";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

echo '
		<html>
			<head>
				<link rel="stylesheet" href="design.css">
					<h1>Book My Doctor</h1>
			</head>
			<body>
					<ul class="w3-navbar w3-black">
						 <li><a href="logout.php">Logout</a></li>
						  <li><a href="aboutus.html">About</a></li>
						  <li><a href="Register.html">Register</a></li>
						  <li><a href="main.html">Home</a></li>
					</ul>
			</body>';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "
				<html>
				<center>
				<br>
				
				<p>Name: " . $row["name"]. "<br>Locality: " . $row["locality"]. "<br>Specialty: " . $row["speciality"]. "<br>Contact:". $row["phone"]."<br>
				</center>
				</html>";
    }
} else {
    echo "0 results";
}
echo '	<center>
			<br><br>
			<form method="get" action="booking.html">
						<button type="submit">Book Appointment</button>
						</form>
			</center>
						';
$conn->close();
?>
