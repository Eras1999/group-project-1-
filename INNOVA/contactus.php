
<?php
// Database connection
	 
$servername = "localhost";
$username = "root";
$password = "";
$database = "innova";



// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$Email = $_POST['eaddress'];
$Subject = $_POST['subject'];
$Messages = $_POST['message'];

	
	//Insert the values
	$sql = "insert into contact(Email,Subject,Messages) VALUES('$Email','$Subject','$Messages')";
	$res = mysqli_query($conn,$sql);
	//Java script alert function
  echo "<script> alert('INQUIRY IS SUBMITTED');  </script>";
  //Set of header location
	header ('Location:contactus1.php');


?>   