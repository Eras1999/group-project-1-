<!DOCTYPE html>
<html>
<head>	
	<!-- Custom & Default Styles -->
	<!-- link css file of header -->
	<link rel="stylesheet" href="css/hheader.css">
	<!-- link page css file -->
	<link rel="stylesheet" href="css/feedbackstyle.css">
	<!-- link css file of footer -->
	<link rel="stylesheet" href="css/ffooter.css">
	<!-- display shortcut icon -->
	 <link rel = " shortcut icon " href = "pictures/about.png">
	 <!-- link javascript file of page -->
	<script src ="js/feedback.js"></script>
	<!-- alert -->
	<script> alert("Do you want to send feedback to Innova? ") </script>
	<!-- Name of the page -->
	<title>FEEDBACK</title>
	
</head>

<body>
<!------ start of the header ------>
	<header>
		<div class="header0">

<!-- Google Fonts -->

			<a href="https://play.google.com/store/movies?hl=en" class="tag01">Mobile App</a> |
			<a href="https://www.google.lk/maps" class="tag01">Find Us </a>
		</div>  
		<div class = "header">
				<div class = "logo_container">
					<!-- logo -->
					<img src = "pictures/Logo2.png" class = "logo">
					<div class="search-container">
						<input type="text" placeholder="        Search here...." name="search" class="search">
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
				<li class="nav"><a href="contactus1.php"><b>Contacts us</b></a></li>
				<li class="nav"><a href="Support_service.html"> <b>About Us</b></a></li>
			</ul>
		</div>
		
	<br>
	<br>
	
    </header>
<!------ end of the header ------>
<!-- link to feedback.php connection file -->
	
	<div class="fb">
		<form action="feedback.php"method="POST">
			<h1>Give your Feedback</h1><br>
			<div class ="id">
				<input type="text" name="fname" placeholder="Full Name" required>
			</div>	
			<div class ="id">
				<input type="Email" name="email" id="eml" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="Enter Email" required >
			</div>
			<textarea cols="25" rows="10" name="fb" placeholder="Enter the your Feedback"></textarea>
				<button type="send" id="snd" name="snd" class="sendbtn" >Send</button>
		</form>
	</div>
	
	<br>
	<br>
	
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
              <img src="pictures/in.png" alt="" />
            </a>

            <a href="https://www.facebook.com/">
              <img src="pictures/fb.png" alt="" />
            </a>

            <a href="https://twitter.com/">
              <img src="pictures/tw.png" alt="" />
            </a>
          </div>

          <p>This website is managed by INNOVA Group</p>
        </div>
      </div>
    </footer>
        
<!------ end of the footer ------>
	
</body>
</html>