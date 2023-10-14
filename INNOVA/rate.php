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
//Add values to php variable

    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$rating1 = $_POST['rating1'];
	$rating2  = $_POST['rating2'];
	$commentText  = $_POST['commentText'];
	
	//Add data to database
	$sql = "INSERT INTO ratting(firstName,lastName,rating1,rating2,commentText) VALUES('$firstName','$lastName','$rating1','$rating2','$commentText')";
	$res = mysqli_query($conn,$sql);
	
  //Alert to  webpage
  echo "<script> alert('Your rating is successfull'); </script>";
  
  header ('Location:homepage.html');	
  




?>   