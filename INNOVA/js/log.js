//sign in & reset password page javascript
function popupmsg()
{
	document.getElementById("subms").innerhtml= "Successfully Created Your INCIPIT Account!!";
}



function checkPswrd()
{
	if(document.getElementById("fpswd").value!=document.getElementById("frpswd").value)
	{
		alert("Invalid Password!");
		return false;
	}

	else
	{
		alert("Succcess!");
		return true;
	}
}


function enablebutton()
{
	if(document.getElementById("chckb").checked)
	{
		document.getElementById("subms").disabled = false;
	}
	else
	{
		document.getElementById("subms").disabled = true;
	}
}



function permission()
{
	var ask = document.getElementById("dma").innerhtml;
	confirm("Are you sure to delete your account?");
	prompt("Enter your Account Password here");
}


function allowsignout()
{
	var res = document.getElementById("askper").innerhtml;
	var rp = confirm("Are you Sure?");
	
}