//Email validate function
function validate ()
{

            var mail = document.getElementById("eml").value;
            var validRegex = [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3};
            if (regx.text(mail)){

                alert("You have entered valid email");
                return true;
            }
            else{

                alert("sorry incorrect email id");
                return false;
            }
         }



//enable button function
function enablebutton()
{
	if(document.getElementById("sendbtn").checked)
	{
		document.getElementById("snd").disabled = false;
	}
	else
	{
		document.getElementById("snd").disabled = true;
		alert("You have entered valid email");
		return true;
	}
}
