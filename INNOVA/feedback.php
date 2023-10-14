<?php

//create connection to database
$conn = new mysqli('localhost','root','','innova');

//check connection
$name=$_POST['fname']; //variables
$email=$_POST['email'];//variables
$feedback=$_POST['fb'];//variables

$stmt = $conn-> prepare('insert into feedback_data(Name,Email,Feedback) values(?,?,?)');
$stmt-> bind_param ("sss",$name,$email,$feedback);
$stmt-> execute();
echo "feedback submitted..";


$stmt->close();
$conn->close();
//Back to this page
header ('location:feedback1.php');

?>





 