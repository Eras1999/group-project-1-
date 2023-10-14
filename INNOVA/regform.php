<!DOCTYPE html>
<html>
<head>
	<!-- Name of the page -->
	<title> Registration Form </title>
	<!-- Custom & Default Styles -->
	<!-- link css file of header -->
	<link rel = "stylesheet" href = "css/regformheader.css">
	<!-- link page css file -->
	<link rel = "stylesheet" href = "css/regformfooter.css">
	<!-- link css file of footer -->
	<link rel = "stylesheet" href="css/regform.css"/></link>
	<!-- display shortcut icon -->
	 <link rel = " shortcut icon " href = "pictures/about.png">
	<!-- link javascript file of page -->
	<script src= "js/frm.js"></script>
    <style>
    body {
        
        background: url(pictures/regback.png);
       background-size: cover;
       background-position: center;
       margin:0;
       padding:0;
        
         }

        
    </style>


	

</head>
<body>
<!------ start of the header ------>
	 <header>
    <div class="header0">
        
        <a href="https://play.google.com/store/movies?hl=en" class="tag01">Mobile App</a> |
        <a href="https://www.google.lk/maps" class="tag01">Find Us <img src = "pictures/home.jpeg" width="15px" height="15px"></a>
    </div>  
    <div class = "header">
            <div class = "logo_container">
                <img src = "pictures/Logo.jpeg" class = "logo">
                <div class="search-container">
                    <input type="text" placeholder="   Search here........" name="search" class="search">
                    <a href="regform.php" class="singin">Sign up</a>|
                    <a href="sign in page.html" class="singin">Log in</a>
                </div>              
            </div>  
    </div>
	<!-- navigation bar -->		
    <div class="headerNavigation">
        <ul class="nav">
            <li class="nav"><a href="homepage.html"> <b>Home</b></a></li>
            <li class="nav"><a href="regform.php"><b>Register</b></a></li>
            <li class="nav"><a href="Package.html"> <b>Products</b></a></li>
            <li class="nav"><a href="news page.html"><b>News</b></a></li>
            <li class="nav"><a href="contactus1.php"><b>Contact Us</b></a></li>
            <li class="nav"><a href="Support_service.html"> <b>About Us</b></a></li>
        </ul>
    </div>
    </header>
	<!------ end of the header ------>
	<!-- alert -->
	<script> 
		alert("Welcome to INNOVA Life Insurance Portal !!");
		var response = confirm("Do you want to fill application form?");
	</script>
	
	<center><br><br><br>
	<div class="eDtrefo" id="pgmgr">
<!-- link to connect.php connection file -->
		<form action ="connect.php"  method="POST" onsubmit= "return checkPswrd()" >

			
			<h1><font color="white"> Registration Form</font> </h1>
			
			<br><br>
			<label><font color="black" size="4%"><b>First Name</b></font></label><br><br>
			<input type="text" id="Unme" name= "firstName" class = "frmdata" placeholder="Enter your first name" required>

			<br><br>
			<label><font color="black" size="4%"><b>Last Name</b></font></label><br><br>
			<input type="text" id="Lnme" name= "lastName" class = "frmdata" placeholder="Enter your last name" required>

			<br><br>
			<label><font color="black" size="4%"><b>Home Address</b></font></label><br><br>
			<textarea id="aDDr" name= "Homeaddress" class = "frmdata" cols="40" rows="10"placeholder="Enter your home address" required></textarea>

			<br><br>
			<label> <font color="black" size="4%"><b>National Identity Number</b></font></label><br><br>
			<input type = "text" id= "fnicno" name="NIC" pattern ="[0-9]{5,10}" class= "frmdata" placeholder="Enter your NIC number" required>
			
			<br><br>
			<label> <font color="black" size="4%"><b>Gender</b></font></label><br><br>
			 <label class="radio">
			 <input class="radio-one" type="radio" value="Male"  name="Gender">
			 <span class="checkmark"></span>
			 Male
			 </label>
			 <label class="radio">
			 <input class="radio-two" type="radio" value="Female" name="Gender">
			 <span class="checkmark"></span>
			 Female
			 </label>


			<br><br>
			<label><font color="black" size="4%"><b>Mobile number</b></font></label><br><br>
			<input type="text" id="mblno" name= "MobileNo" class = "frmdata"  pattern="[0-9]{10}"placeholder="0 7 x x x x x x x x" required>

			<br><br>
			<label><font color="black" size="4%"> <b>E-Mail</b> </font></label><br><br>
			<input type ="text" id="emlad" name="Email" class="frmdata" placeholder="abcd@xyz.com" paattern ="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}"required>
			
			<br><br>
			<label><font color="black" size="4%"><b>Company</b></font></label><br><br>
			<textarea id="CaDDr" name= "Companyaddress" class = "frmdata" cols="20" rows="10"placeholder="Enter your Company details" required></textarea>
			
			<br><br>
			<label><font color="black" size="4%"> <b>Insurance Package</b></font></label><br><br>
			 <select class="option" name="InsurancePackage">
			 <option disabled="disabled" selected="selected" placeholder= "Choose Category" required></option>
			 <option> Investment </option>
			 <option> Protection </option>  
			 <option> Retirement </option>  
			 <option> Health Care </option> 
			 <option> Corporate </option> 
			 </select>
			
			<br><br>
			<label> <font color="black" size="4%"><b>Password</b></font></label><br><br>
			<input type = "password" id= "fpswd" name="Password1" pattern ="[a-zA-Z0-9.%+-]*{8}" class= "frmdata" placeholder="Enter your Password" function="checkPswrd()" required>

			<br><br>
			<label><font color="black" size="4%"><b> Re-Enter Password</b></font></label><br><br>
			<input type = "password" id= "frpswd" name="frpswd" pattern ="[a-zA-Z0-9.%+-]*{8}" class= "frmdata" placeholder="Enter your Password Again"  function="checkPswrd()" required>


			<br><br>
			<input type="checkbox" id="chckb" name ="chckb"  onclick = "enablebutton()"  required>Accept Privacy & Policy Terms


			<br><br>
			<button type="submit" id="subms" name="subms" class="cmpsb" disabled>Submit</button>

			<br><br>
      		<div>
      		<button type="cancel" class ="edbton"> <a href="HomePge.html">Cancel</a></button>



		</form>

        <br><br>




	</div>
	</center>
	<!------ start of the footer ------>
			<footer>
      <div class="footer-container">
        <div class="footer-left">
		<!-- quick link -->
       <h4>Quick Links</h4>

          <ul>
            <li>
              <a href="homepage.html">Home</a>
            </li>

            <li>
              <a href="Support_service.html">About</a>
            </li>

            <li>
              <a href="contactus1.php">Contact</a>
            </li>

            <li>
              <a href="Package.html">Products</a>
            </li>
          </ul>
        </div>

        <div class="footer-right">
		<!-- social link -->
          <h4>Follow us on</h4>

          <div class="social-icons">
            <a href="https://www.instagram.com/">
              <img src="pictures/instagram-logo.png" alt="" />
            </a>

            <a href="https://www.facebook.com/">
              <img src="pictures/facebook-logo.png" alt="" />
            </a>

            <a href="https://twitter.com/">
              <img src="pictures/twitter-logo.png" alt="" />
            </a>
          </div>
		  <br>
          <p>This website is managed by INNOVA Group</p>
        </div>
      </div>
    </footer>
	
	 <!------ end of the footer ------>




	</body>

</html>