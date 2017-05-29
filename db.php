<?php
session_start();
?>
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Book_my_doc"; /*Your database name*/

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$eid = $_POST['eid'];
$pwd = $_POST['pwd'];
$num = $_POST['num'];

//Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

/*Check connection*/

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
/*user is my table name below. And email and all are the names that i have given in my phpadmin database*/
$chk_eid = "SELECT * FROM user where email = '$eid'";
$result = mysqli_query($conn, $chk_eid) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if($count >= 1){
	?>
	<script type="text/javascript">
			alert("Email already registered.");
	</script>
	<?php
	echo file_get_contents("Register.html");
	$conn->close();
}


	$sql = "INSERT INTO user (first_name, last_name, email, password, mobile)
			VALUES ('$fn', '$ln', '$eid', '$pwd', '$num')";

	if($conn->query($sql) === TRUE){
		?>
		<script type="text/javascript">
			alert("You have been registered.");
		</script>
		<?php
		 echo "<h1>Name: $fn<br>Email: $eid";
		//header("location:main.html");
		//echo file_get_contents("log.html");
	}
	else{
		echo "Error: ".$sql."<br>".$conn->error;
	}

$conn->close();
?>
//
