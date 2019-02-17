function es1()
{
	document.getElementById("subbtn").disabled=true;	
}
function diss1()
{
	document.getElementById("subbtn").disabled=false;	
}
function validate1()
{
	name=document.reg.v_fname.value;
	sname=document.reg.v_lname.value;
	email=document.reg.v_email.value;
	cno=document.reg.v_no.value;
	addr=document.reg.v_add.value;
	/*if((name<=65 && name>=90) || (name<=97 && name>=122))
	{
		alert("Enter your name properly");
		return false;
	}
	else if((sname<=65 && sname>=90) || (sname<=97 && sname>=122))
	{
		alert("Enter your surname properly");
		return false;
	}*/
	if(!inputAlphabet(name, "* For your name please use alphabets only *",'f11'))
	{
		return false;
	}
	if(!inputAlphabet(sname, "* For your surname please use alphabets only *",'f22')) 
	{
		return false;
	}
	if(!emailValidation(email, "* Please enter a valid email address *"))
	{
		return false;
	}
	if(!textNumeric(cno, "* Please enter a valid contact number *"))
	{
		return false;
	}
	if(!lengthDefine(cno,10))
	{
		return false;
	}
	if(!textAlphanumeric(addr, "* For Address please use numbers and letters *"))
	{
		return false;
	}
	return true;
}
// Function that checks whether input text is numeric or not.
function textNumeric(inputtext, alertMsg) 
{
	var numericExpression = /^[0-9]+$/;
	if(inputtext.match(numericExpression)) 
	{
		return true;
	}
	else
	{
		document.getElementById('f44').innerHTML = alertMsg; // This segment displays the validation rule for zip.
		//inputtext.focus();
		alert(alertMsg);
		return false;
	}
}
// Function that checks whether input text is an alphabetic character or not.
function inputAlphabet(inputtext, alertMsg,id) 
{
	var alphaExp = /^[a-zA-Z]+$/;
	if(inputtext.match(alphaExp))
	{
		return true;
	}
	else
	{
		document.getElementById(id).innerHTML = alertMsg; // This segment displays the validation rule for name.
		alert(alertMsg);
		//inputtext.focus();
		return false;
	}
}
// Function that checks whether input text includes alphabetic and numeric characters.
function textAlphanumeric(inputtext, alertMsg)
{
	var alphaExp = /^[0-9a-zA-Z][0-9a-zA-Z ]+$/; 
	if (inputtext.match(alphaExp))
	{
		return true;
	} 
	else
	{
		document.getElementById('f55').innerHTML = alertMsg; // This segment displays the validation rule for address.
		//inputtext.focus();
		alert(alertMsg);
		return false;
	}
}
// Function that checks whether the input characters are restricted according to defined by user.
function lengthDefine(inputtext, max)
{
	var uInput = inputtext;
	if (!(uInput.length < max))
	{
		return true;
	} 
	else
	{
		alertMsg="* Please enter " + max + " digited contact no. *"
		document.getElementById('f44').innerHTML =alertMsg; // This segment displays the validation rule for username
		//inputtext.focus();
		alert(alertMsg);
		return false;
	}
}
// Function that checks whether a option is selected from the selector and if it's not it displays an alert message.
/*function trueSelection(inputtext, alertMsg,id)
{
	if (inputtext=="Please Choose")
	{
		document.getElementById(id).innerHTML= alertMsg; //this segment displays the validation rule for selection.
		//inputtext.focus();
		alert(alertMsg);
		return false;
	} 
	else
	{
		return true;
	}
}*/
// Function that checks whether an user entered valid email address or not and displays alert message on wrong email address format.
function emailValidation(inputtext, alertMsg)
{
	var emailExp =/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	if (inputtext.match(emailExp))
	{
		return true;
	} 
	else
	{
		document.getElementById('f33').innerHTML = alertMsg; // This segment displays the validation rule for email.
		//inputtext.focus();
		alert(alertMsg);
		return false;
	}
}