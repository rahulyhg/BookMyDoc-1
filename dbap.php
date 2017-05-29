<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Book_my_doc"; /*Your database name*/

$ln = $_POST['lastname'];
$fn = $_POST['firstname'];
$local = $_POST['local'];
$sp = $_POST['special'];
$doc = $_POST['sub'];
$day = $_POST['day'];
$time = $_POST['time'];

//Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

/*Check connection*/

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
/*user is my table name below. And email and all are the names that i have given in my phpadmin database*/
$chk_time = "SELECT * FROM appointments where time = '$time' and day = '$day' and doctor = '$doc' ";
$result = mysqli_query($conn, $chk_time) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if($count >= 1){
	?>
	<script type="text/javascript">
			alert("This time is already alloted.");
	</script>
	<?php
	echo file_get_contents("booking.html");
	$conn->close();
}

else{
	$sql = "INSERT INTO appointments (firstname,lastname,local,special,doctor,day,time)
			VALUES ('$fn', '$ln', '$local', '$sp', '$doc','$day','$time')";

	if($conn->query($sql) === TRUE){
		?>
		<script type="text/javascript">
			alert("Your appointment has been booked.");
		</script>
		<?php
		echo "<h1>Appointment Details</h1>
		      <br>
			  Name : $fn &nbsp $ln<br>
			  Locality : $local<br>
              Speciality : $sp<br>
              Doctor : $doc<br>
              Date : $day <br>
              time : $time			  ";   
			 // header("location:main.html");
		
		//echo file_get_contents("log.html");
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}

$conn->close();
}
?>
