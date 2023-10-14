
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

$email = $_POST['email'];
$INNOVAID = $_POST['IID'];
$Package = $_POST['Package'];
$Payment =  $_POST['payAmount'];
$CARDtype =  $_POST['type'];
$year = $_POST['Year'];
$month = $_POST['Month'];
$cvv = $_POST['cvv'];
	
	//Insert the values
	$sql = "insert into payment(Email,INNOVA_ID,Package,Payment_Amount,card_type,exp_year,exp_month,CVV) VALUES('$email','$INNOVAID','$Package','$Payment','$CARDtype','$year','$month','$cvv')";
	$res = mysqli_query($conn,$sql);
    //Java script alert function
  echo "<script> alert('Payment is successfull');  </script>";


  



?>   