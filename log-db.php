<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Book_my_doc"; /*Your database name*/

$emid = $_POST['eid'];
$pwd = $_POST['pwd'];

//Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

/*user is my table name below. And reg_email and all are the names that i have given in my phpadmin database*/
$sql = "SELECT * FROM user where email = '$emid' AND password = '$pwd'";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);



if($count === 1){
	echo file_get_contents("seldoc.html");
}
else{
	echo file_get_contents("main.html");
}

$conn->close();



?>
