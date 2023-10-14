<?php
$conn = new mysqli('localhost','root','','innova') or die("Unable to connect");

$phonenum=$_POST['fnicnos'] ;
$password=$_POST['fpswd'] ;
$passwordd=$_POST['frpswd'] ;

$stmt = $conn-> prepare('insert into portal(phonenum,password,passwordd) values(?,?,?)');
$stmt-> bind_param ("sss",$phonenum,$password,$passwordd);
$stmt-> execute();
echo "success...";
 header ('Location:Package.html');	
 
$stmt->close();
$conn->close();
?>