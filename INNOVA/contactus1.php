<!DOCTYPE html>
<html>
<!-- start of header -->
<head>
	<title> Contact Us </title>
	<!-- link to the header css file -->
	<link rel = "stylesheet" href="css/CONTACTHEAD.css"/></link>
	<!-- link to the body css file  -->
	<link rel = "stylesheet" href="css/Contact Us.css"/></link>
	<!-- link to the footer css file  -->
	<link rel = "stylesheet" href="css/CONTACTFOOT.css"/></link>
	<!--link to the shortcut icon in the tab -->
	 <link rel = " shortcut icon " href = "pictures/about.png">
	  
	  <!-- (text/css) is linked to the css as body.txt -->
	  	  <style type="text/css">
   body{
    background-image:url(pictures/contact.jpg);   
    background-size:cover;
    background-attachment:fixed;
  }
</style>
		<!-- alert function in javascript -->
     <script> alert("Contact US is loaded ") </script>

</head>
<!-- end of head -->
<!-- start of body -->
<!-- start of header -->
	<body>
	 <header>
	  <!-- start of div tag-->
    <div class="header0">
        <a href="https://play.google.com/store/movies?hl=en" class="tag01">Mobile App</a> |
        <a href="https://www.google.lk/maps" class="tag01">Find Us </a>
    </div>  
    <div class = "header">
            <div class = "logo_container">
                <img src = "pictures/back1.png" class = "logo">
                <div class="search-container">
                    <input type="text" placeholder="        Search here...." name="search" class="search">
                    <a href="regform.php" class="singin">Sign up</a>|
                    <a href="sign in page.html" class="singin">Log in</a>
				
                </div>              
            </div>  
    </div>
		<!-- navigation bar  -->
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
   <!-- end of div tag -->
   <!-- end of header -->
	<center>
	<!-- alignment to center -->
	<!-- start of div tag-->
	 <div class = "hed3">
				<h1> <b>NEED HELP ? GET IN TOUCH.</h1><br><br>
                <br> <p id = "sen1"> <b> CONTACT US </b> </p> <br><br>
				<!-- start of form tag-->
                <form method = "post" action = "contactus.php">

                 <label class = "lbl"> Email Address </label> <br><br> <input type = "email" class = "field" name = "eaddress" pattern = "[a-zA-Z0-9.-%+_]+@[a-z0-9]+\.[a-z]{2,3}" required placeholder = "Type your E-mail Address" required> <br><br><br>

                 <label class = "lbl"> Subject </label> <br><br> <input type = "text" class ="field1" name = "subject" placeholder = "Type your subject" required> <br><br>
		
				<br>
                 <label class = "lbl"> Message </label> <br><br> <textarea name = "message" class = "msg" rows = "20" cols = "50" style = "width : 650px;" placeholder = "Type here..."></textarea> <br><br><br>

                 <input type = "submit" name = "sub" value = "Submit" class = "send">
             
         </form>
		 <!-- end of form tag-->
			<br> <p id="sen1"> <b> TEL:0112456687(For more details)</b></p><br><br>
               </div>
	     <!-- end of div tag-->
		</center>	 
           
           
 
 
  	
   <!------ start of the footer ------>
      <footer>
      <div class="footer-container">
        <div class="footer-left">
		<!-- link the quick links to relevant pages  -->
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
		<!-- link the social-icons to relevent social platforms  -->
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

          <p>This website is managed by INNOVA Group</p>
        </div>
      </div>
    </footer>
        
    <!------ end of the footer ------>


</body>
<!-- end of body  -->
</html>
<!-- end of html  -->