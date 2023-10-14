<?php
	//including the payment.php configuration file
     require 'payment.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Payment </title>
	<!-- link to the header css file -->
	<link rel = "stylesheet" href="CSS/PAYHEAD.css"/></link>
	<!-- link to the body css file  -->
	<link rel = "stylesheet" href="CSS/PAYMENT.css"/></link>
	<!-- link to the footer css file  -->
	<link rel = "stylesheet" href="CSS/PAYFOOTER.css"/></link>
	<!--link to the shortcut icon in the tab -->
  <link rel = " shortcut icon " href = "Pictures/about.png">
  <!-- link to the javascript file file  -->
	  <script src="JAVA/PAYMENT.js"></script>
	<!-- (text/css) is linked to the css as body.txt -->
	  <style type="text/css">
   body{
    background-image:url(Pictures/PAY1.jpg);   
    background-size:cover;
    background-attachment:fixed;
  }
</style>
		<!-- alert function in javascript -->
     <script> 
	 alert("Please check your payment.*[A reciept will be emailed to you after two days*] ") 
	 </script>

</head>
<!-- end of header -->
<!-- start of body -->
<body>
	 <header>
	 <!-- start of div tag-->
    <div class="header0">
        <a href="myprofile.html" class="tag01">My Account</a> |
        <a href="https://play.google.com/store/movies?hl=en" class="tag01">Mobile App</a> |
        <a href="https://www.google.lk/maps" class="tag01">Find Us </a>
    </div>  
    <div class = "header">
            <div class = "logo_container">
                <img src = "Pictures/back1.png" class = "logo">
                <div class="search-container">
                    <input type="text" placeholder="        Search here...." name="search" class="search">
                    <a href="loginform.html" class="singin">Sign in</a>|
                    <a href="loginform.html" class="singin">Log in</a>
				
                </div>              
            </div>  
    </div>
		<!-- navigation bar  -->
    <div class="headerNavigation">
        <ul class="nav">
            <li class="nav"><a href="Home.html"> <b>Home</b></a></li>
            <li class="nav"><a href="regisform.html"><b>Register</b></a></li>
            <li class="nav"><a href="prescription_medicine.html"> <b>Products</b></a></li>
            <li class="nav"><a href="PaymentForm.html"><b>Payments</b></a></li>
            <li class="nav"><a href="Contact Us.html"><b>Contacts</b></a></li>
            <li class="nav"><a href="Support_service.html"> <b>Service</b></a></li>
       	   </ul>
		   
		   
   </div>
   <!-- end of div tag -->
   <!-- end of header -->
    </header>
	   <!-- end of div tag -->
   <!-- Start of php code -->
	<?php
	//Selects the sql table and prints it 
	$sql = "select * from payment";
    $result = $conn->query($sql);

    if($result->num_rows>0)
    {
    	//read data
    	echo "<br> <br>";
        echo "<table border = 1 width = 100%>";
        echo "<tr>  <th> Payment_ID</th> <th> Email </th> <th> INNOVA_ID </th> <th>Package</th><th>Payment_Amount </th><th> 	card_type </th> <th>exp_year </th> <th>exp_month </th> <th>	CVV</th> </tr>";
    	while($row = $result->fetch_assoc())
    	{
    		// read and utilize the row data
    		echo "<tr> <td> {$row['Payment_id']}</td> <td> {$row['Email']}</td> <td> {$row['INNOVA_ID']} </td> <td> {$row['Package']}</td>  <td> {$row['Payment_Amount']} </td> <td> {$row['card_type']} </td> <td> {$row['exp_year']} </td> <td> {$row['exp_month']} </td> <td> {$row['CVV']} </td> <tr>";
    		
    	}
    	echo "</table>";
    }

    else
    {
    	echo "No results";
    }

    $conn->close();
	//close of connection
?>
 <!------ start of the footer ------>
      <footer>
      <div class="footer-container">
        <div class="footer-left">
		<!-- link the quick links to relevant pages  -->
          <h4>Quick Links</h4>

          <ul>
            <li>
              <a href="#">Home</a>
            </li>

            <li>
              <a href="#">About</a>
            </li>

            <li>
              <a href="#">Contact</a>
            </li>

            <li>
              <a href="#">Products</a>
            </li>
          </ul>
        </div>

        <div class="footer-right">
		<!-- link the social-icons to relevent social platforms  -->
          <h4>Follow us on</h4>

          <div class="social-icons">
            <a href="#">
              <img src="Pictures/instagram-logo.png" alt="" />
            </a>

            <a href="#">
              <img src="Pictures/facebook-logo.png" alt="" />
            </a>

            <a href="#">
              <img src="Pictures/twitter-logo.png" alt="" />
            </a>
          </div>

          <p>This website is managed by INNOVA Group</p>
        </div>
      </div>
    </footer>
        
    <!------ end of the footer ------>


</body>
<!-- end of body  -->
</html>
<!-- end of html  -->
