  /*Package.html javascript*/
  
  //loadDetails function for buttons
function loadDetails(btn)
{

	if(btn == "btn1")
	{
		document.getElementById("para").innerHTML = "INNOVA SMART WEALTH";
		document.getElementById("icon1").src = "Pictures/INVESTMENT.jpg";
		document.getElementById("para2").innerHTML = "PERIOD";
		document.getElementById("para3").innerHTML = "Upto Age 76";
		document.getElementById("para4").innerHTML = "ISSUE AGE";
		document.getElementById("para5").innerHTML = "Age 19-61[next birthday]";
		document.getElementById("para6").innerHTML = "Paying period of 4 or 6 years";
		document.getElementById("para7").innerHTML = "Protection upto 20 years";
		document.getElementById("para8").innerHTML = "WHAT THIS PRODUCT IS ABOUT";
		document.getElementById("para9").innerHTML = "A short term premium paying product with long term protection and the option of a monthly income.";
	}	
	else if(btn == "btn2")
	{
document.getElementById("para").innerHTML = "INNOVA SUPER PROTECTOR";
		document.getElementById("icon1").src = "Pictures/insurance2-1.jpg";
		document.getElementById("para2").innerHTML = "PERIOD";
		document.getElementById("para3").innerHTML = "Upto age 75";
		document.getElementById("para4").innerHTML = "ISSUE AGE";
		document.getElementById("para5").innerHTML = "Age 19-66[next birthday]";
		document.getElementById("para6").innerHTML = "Increasing Life Benefit and Family Income Benefit to match inflation and changes in your lifestyle.";
		document.getElementById("para7").innerHTML = "Maximum protection for you and your loved ones with affordable premiums";
		document.getElementById("para8").innerHTML = "WHAT THIS PRODUCT IS ABOUT";
		document.getElementById("para9").innerHTML = "A comprehensive life insurance plan specially designed to protect you and those that matter most to you.";
	}

	else if(btn == "btn3")
	{
document.getElementById("para").innerHTML = "INNOVA SMART PENSIONS";
		document.getElementById("icon1").src = "Pictures/705716659.jpg";
		document.getElementById("para2").innerHTML = "PERIOD";
		document.getElementById("para3").innerHTML = "Upto age 76";
		document.getElementById("para4").innerHTML = "ISSUE AGE";
		document.getElementById("para5").innerHTML = "Age 20-65[next birthday]";
		document.getElementById("para6").innerHTML = "Paying period accordingly";
		document.getElementById("para7").innerHTML = "Protection after retirement";
		document.getElementById("para8").innerHTML = "ARE YOU PREPARED FOR RETIREMENT";
		document.getElementById("para9").innerHTML = "Did you know that only 5% of people live comfortably after retirement? Most of are not in this category because we fail to think tomorrow.";
	}

	else if(btn == "btn4")
	{
	document.getElementById("para").innerHTML = "INNOVA HEALTH PROTECTOR";
		document.getElementById("icon1").src = "Pictures/life-insurance-concept-with-hands-and-heart-vector.jpg";
		document.getElementById("para2").innerHTML = "PERIOD";
		document.getElementById("para3").innerHTML = "Upto age 70";
		document.getElementById("para4").innerHTML = "ISSUE AGE";
		document.getElementById("para5").innerHTML = "Age 19-61";
		document.getElementById("para6").innerHTML = "Worldwide coverage*";
		document.getElementById("para7").innerHTML = "Coverage of 37 Critical Illnesses";
		document.getElementById("para8").innerHTML = "WHAT THIS PRODUCT IS ABOUT";
		document.getElementById("para9").innerHTML = "Designed for individuals who value the best care, freedom to choose where to get treated and provides financial security incase of health problems.";
	}
		else if(btn == "btn5")
	{
	document.getElementById("para").innerHTML = "INNOVA LIFE REMIT GUARDIAN";
		document.getElementById("icon1").src = "Pictures/png-transparent-term-life-insurance-insurance-agent-health-insurance-others-hand-insurance-business.png";
		document.getElementById("para2").innerHTML = "PERIOD";
		document.getElementById("para3").innerHTML = "*Ajusted according to your work place";
		document.getElementById("para4").innerHTML = "ISSUE AGE";
		document.getElementById("para5").innerHTML = "Age 19-60[next birthday]";
		document.getElementById("para6").innerHTML = "The life cover will be equivalent to the amount being remitted (Previous month’s transfer amount)";
		document.getElementById("para7").innerHTML = "Customer will only get charged from 4th month onwards and, only if the customer opts to continue the cover";
		document.getElementById("para8").innerHTML = "WHAT THIS PRODUCT IS ABOUT";
		document.getElementById("para9").innerHTML = "In partnership with NOVVA Bank, for the 1 st time in Sri Lanka we now offer overseas Sri Lankans sending money to their families through NOVVA Bank Remit Plus, a Life Insurance Cover that ensures that the wellbeing of their loved ones is upheld at all times.";
	}
   
    else
    {
    	alert("invalid");
    }
	
}
