
	function validate ()
	{
		var name = $("#name").val();

		if (name == "")
		 {
			alert("please enter your name");
			return false;
		}

		  var password = document.getElementById("password").value;

		  if (password == "") 
		  {
		  	alert("please enter your password");
		  	return false;
		  }


		  var number = document.getElementById("number").value;

		  if (number == "") 
		  {
		  	alert("please enter your phone number");
		  	return false;
		  }
	    
	}	

