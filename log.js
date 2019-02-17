function es()
{
	document.getElementById("btn").disabled=true;	
}
function diss()
{
	document.getElementById("btn").disabled=false;	
}
function validate()
{
	uname=document.getElementById('f1').value;
	passw=document.getElementById('f2').value;
	if (!textAlphanumeric(uname, "*Username must have numbers and letters *"))
	{
		return false;
	}
	if(!lengthDefine(passw,"*Please check password length*"))
	{
		return false;
	}
	return true;
}
function textAlphanumeric(inputtext, alertMsg)
{
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if (inputtext.match(alphaExp))
	{
		return true;
	} 
	else
	{
		document.getElementById('f1').innerHTML = alertMsg; // This segment displays the validation rule for address.
		//inputtext.focus();
		alert(alertMsg);
		return false;
	}
}		
function lengthDefine(inputtext,alertMsg)
{
	var uInput = inputtext;
	if ((uInput.length>=6) && (uInput.length <= 15))
	{
		return true;
	} 
	else 
	{	
		document.getElementById('f2').innerHTML =alertMsg; // This segment displays the validation rule for username
		//inputtext.focus();
		alert(alertMsg);
		return false;
	}
}