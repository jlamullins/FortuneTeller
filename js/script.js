 // Object to hold the future prediction
 var future =
 {
 	name:"name",
 	spouse:"spouse",
 	kids:0,
 	job:"",
 	location:"where",
 	car:"car"
 };
 
 // Basic form validation
function validateForm()
{
	var errorMessage = "";
	var formDoc = document.forms["fortune"];
    
    // Check spouses
    var spouses = ["spouse1", "spouse2", "spouse3"];
    var curElement = "";
    var error = false;
    for (x in spouses) 
    {
    	curElement = formDoc[x].value;
	    if (curElement == null || curElement == "") 
	    {
	        error = true;
	    }
    }
    if (error)
    {
	    errorMessage = "Oops! Looks like you forgot to enter a name for each potential spouse. \n";
    }

	// Check kids
	curElement = formDoc["kids"];
	error = true;
	for (x in curElement)
	{
		if (curElement[x].checked)
		{
			error = false;
		}
	}
	if (error)
	{
		errorMessage = errorMessage + "Don't forget to select an option for how many kids you might want. \n";
	}
	
	// Check number of selected subjects
	curElement = document.getElementById('subject').options;
	var count = 0;
	for (var i = 0 ; i < curElement.length; i++)
	{
		if (curElement[i].selected)
		{
			count ++;
		}
	}
	if (count != 2)
	{
		errorMessage = errorMessage + "Please select exactly 2 school subjects you like!\n";
	}
	
	// Check number of selected locations
	curElement = formDoc["location[]"];
	error = true;
	for (x in curElement)
	{
		if (curElement[x].checked)
		{
			error = false;
		}
	}
	if (error)
	{
		errorMessage = errorMessage + "Hey you gotta live somewhere! Help us narrow in on somewhere great.\n";
	}
	
	// Check name
     curElement = formDoc["user"].value;
	 if (curElement == null || curElement == "") 
	 {
	   errorMessage = errorMessage + "By the way, what is your name?";
	 }
	
	// See if we have an error
	if (errorMessage.length > 0)
	{
		alert(errorMessage);
		return false;
	}
	return true;
}
