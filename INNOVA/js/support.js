/* call buttons to java script */

function loadDetails(btn)
{

	if(btn == "btn1")
	{
		document.getElementById("img1").src = "pictures/call.jpg";
		document.getElementById("para").innerHTML = "NEED HELP ? GET IN TOUCH <br><br> <h2><font color ='red'> Agents / Numbers  /   emails </font> </h2> <br> <br> kamal :  0724666956 : kama@Innova.lk <br> nowen : 0714578349 : nowe@Innova.lk  <br> hansaka : 0784567329 : hansa @Innova.lk <br> eranda : 0753458723 : era @Innova.lk <br> nadun : 0786546234 : nadu@Innova.lk";
 
	 
		 
	}	
	else if(btn == "btn2")
	{
	    document.getElementById("img1").src = "pictures/our.jpg";
	    document.getElementById("para").innerHTML = "We are INNOVA insurance corporation, the largest state-owned insurer in Sri Lanka. Anchored to a pioneering legacy of financial stability and trust spanning over five decades .<br><br> 1963 – establishment of INNOVA life insurance corporation and 2002 become largest claim ever paid <font color ='red'> LKR 39.5 billion </font> to Sri Lankan parliament following a terrorist attack and 2018 INNOVA become first and only insurance company to<font color ='red'> receive AAA </font> as well as become world largest and richest insurance company in the world with <font color ='red'> 7.5 billion customers.<font>  ";
         
	}

	else if(btn == "btn3")
	{
	   document.getElementById("img1").src = "pictures/vison.jpg ";
	   document.getElementById("para").innerHTML = "<h2><font color = ' #00cc66'> VISON </font> </h2>:<br>To be the first choice insurer for customers.To be the preferred employer in the insurance industry.To be the number one insurer for creating shareholder value. <br><br><h2><font color = ' #00cc66'>  MISSON : </font></h2> <br>As a responsible, customer-focused market leader, we will strive to understand the insurance needs of our customers and translate this into affordable products that deliver value for money.<br> ";
        
	}

	else if(btn == "btn4")
	{
		document.getElementById("img1").src = "pictures/qua.PNG";
		document.getElementById("para").innerHTML = "";
        
	}
   
    else
    {
    	alert("invalid");
    }
	
}



