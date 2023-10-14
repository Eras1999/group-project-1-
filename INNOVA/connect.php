<?php
//linking config file



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


$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$Homeaddress = $_POST["Homeaddress"];
$NIC = $_POST["NIC"];
$Gender = $_POST["Gender"];
$MobileNo = $_POST["MobileNo"];
$Email = $_POST["Email"];
$Companyaddress = $_POST["Companyaddress"];
$InsurancePackage = $_POST["InsurancePackage"];
$Password1 = $_POST["Password1"];
	
	/*add value to database*/
	$sql = "INSERT INTO register(firstName,lastName,Homeaddress,NIC,Gender,MobileNo,Email,Companyaddress,InsurancePackage,Password1) VALUES('$firstName','$lastName','$Homeaddress','$NIC','$Gender','$MobileNo','$Email','$Companyaddress','$InsurancePackage','$Password1')";
	$res = mysqli_query($conn,$sql);

  echo "<script> alert('successfull');  </script>";
  /*back to this page*/
  header ('Location: regform.php');	
  
 










?>