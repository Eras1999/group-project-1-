<!DOCTYPE html>
<html>
<head>
       <!------ Name of the page ------>
      <title>  Rating page  </title>
	  <!------ link page css file------>
      <link rel="stylesheet" href="css/testrat_style.css">
	  <!------ link css file of header  ------>
      <link rel="stylesheet" href="css/testrat_header.css">
	  <!------ link page footer css file------>
	  <link rel="stylesheet" href=" css/testrat_footer.css" />
	  
	   <link rel = " shortcut icon " href = "pictures/about.png">
    <!--- alert ------>
    <script> alert(" rating page is loaded") </script>
	
	
      
</head>


<body>
<!------ start of the header section ------>
         <header>
		 
	<div class="header0">
		 <a href="https://play.google.com/store/movies?hl=en" class="tag01">Mobile App</a> |
		<a href="https://www.google.lk/maps" class="tag01">Find Us </a>
	</div>	
	<div class = "header">
			<div class = "logo_container">
			
				<img src = "Pictures/back.png " class = "logo">
				
				<div class="search-container">
					<input type="text" placeholder="   Search here...." name="search" class="search">
					 
					<a href="regform.php" class="singin">Sign up</a>|
                    <a href="sign in page.html" class="singin">Log in</a>
				</div>				
			</div>	
	</div>
    <!------ navigation bar ----->
	<div class="headerNavigation">
		<ul class="nav">
		<br><br><br><br>
			<li class="nav"><a href="homepage.html"> <b>Home</b></a></li>
			<li class="nav"><a href="regform.php"><b>Register</b></a></li>
			<li class="nav"><a href="Package.html"> <b>Products</b></a></li>
			<li class="nav"><a href="news page.html"><b>News</b></a></li>
			<li class="nav"><a href="contactus1.php"><b>Contact Us</b></a></li>
			<li class="nav"><a href="Support_service.html"> <b>About Us</b></a></li>
		</ul>
	</div>
	</header>
<!------ end of the header section ------>	
	<br><br><br><br><br><br><br><br>
	     
<div class="feedback">
 <!------  start rating form ------>

<h4>You can rate us below..   </h4>
<br><br>
<!------  link to rate.php connection file  ------>
<form method="POST" action="rate.php">

           <div class=" scale-rating1">
                <label for="firstName">1.First Name</label>
                <input
                  type="text"
                  
                  id="firstName"
                  name="firstName"
                />

       <br><br>
	   <div class="scale-rating1 ">
                <label for="lastName">2.Last Name</label>
                <input
                  type="text"
                  id="lastName"
                  name="lastName"
                />
              </div>
	   
	   
	   
	    <br><br>
	   
<!------  radio buttont to get one value  ------>
<label for ="rating1">3.Our customer service .</label><br>
  
<span class="scale-rating1">
   <label value="min">
  <input type="radio" name="rating1" value="min" >
  <label style="width:100%;"></label>
  </label>
  <label value="avg">
  <input type="radio" name="rating1" value="avg">
  <label style="width:100%;"></label>
  </label>
  <label value="max">
  <input type="radio" name="rating1"value="max">
  <label style="width:100%;"></label>
  </label>
  
</span>

  <div class="clear"></div> 
  <hr class="line">
  <!------  radio buttont to get soucond value  ------>
<label for = "rating2">4. Rate our packages. </label><br>

<span class="scale-rating2">
  <label value="bad">
  <input type="radio" name="rating2" value="bad" >
  <label style="width:100%;"></label>
  </label>
  <label value="average">
  <input type="radio" name="rating2" value="average">
  <label style="width:100%;"></label>
  </label>
  <label value="good">
  <input type="radio" name="rating2"value="good">
  <label style="width:100%;"></label>
  </label>
 
</span>


  <div class="clear"></div> 
  <hr class="line">
  
  
  <!------ get  comment text   ------>
<label>5. Any Other suggestions:</label><br/><br/>
<textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
<br>
  <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit your review">&nbsp;
  

</form>
                  </div>
           
    		</div>
		</div>
    </div>
</section>
<br><br><br>

 <!------ start of the footer ------>
      <footer>
      <div class="footer-container">
        <div class="footer-left">
		 <!------ Quick links ------>
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
		 <!------ Social media links ------>
          <h4>Follow us on</h4>

          <div class="social-icons">
            <a href="https://www.instagram.com/">
              <img src="Pictures/instagram-logo.png" alt="" />
            </a>

            <a href="https://www.facebook.com/">
              <img src="Pictures/facebook-logo.png" alt="" />
            </a>

            <a href="https://twitter.com/?lang=en">
              <img src="Pictures/twitter-logo.png" alt="" />
            </a>
          </div>

          <p>This website is managed by INNOVA Group</p>
        </div>
      </div>
    </footer>
        
    <!------ end of the footer ------>




     
	</body>
</html>
© 2021 INNOVA, Inc.