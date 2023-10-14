<?php

//create connection
$con = new mysqli('localhost','root','','innova') or die("Unable to connect");

//check connection
$email=$_POST['unicame'] ;
$password=$_POST['pswd'] ;

$stmt = $con-> prepare('insert into user(Email,Password) values(?,?)');
$stmt-> bind_param ("ss",$email,$password);
$stmt-> execute();
echo "success...";
//Go to package page
 header ('Location:Package.html');	
 
$stmt->close();
$con->close();
?>