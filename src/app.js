	function selectCmd(URL)
	{
		var c = f.sCmd.value;
		if(c != 0 && URL != "")
			window.location = URL + c;
	}
	function selectClt(URL)
	{
		var c = f.sClt.value;
		if(c != 0 && URL != "")
			window.location = URL + c;
	}
	function selectPro(URL)
	{
		var c = f.sPro.value;
		if(c != 0 && URL != "")
			window.location = URL + c;
	}


$(document).ready(function()
{


	/*
	 *	LOGIN SUBMIT
	 */

	$('#formLogin').submit(function()
	{
		var username = $('input[name=username]').val(),
				password = $('input[name=password]').val();

		if(username.length == 0)
		{
			alert('Please Enter The Username !!');
			return false;
		}

		if(password.length == 0)
		{
			alert('Please Enter The Password !!');
			return false;
		}
	});
});