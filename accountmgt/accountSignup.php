<?php
// Creation Date: Jun 21, 2010 6:58:47 PM
?>
<html>
<head>
<title>Account Signup </title>
</head>
<body>
  <center><h1>User Registration</h1></center>
    <div style="width:700px; margin-left:auto; margin-right:auto; text-align:center">
    <form method="post" name="signupform" action="#">
        <h4>Please register for your personal account</h4>
    
    <table border="0" cellpadding="3"  bgcolor="white" width="550" align="center">
	    <tr>
		    <td align="right">First name:</td>
		    <td align="left"><input type="text" name="fname" size="25" maxlength="20"></input></td>
		</tr>
		<tr>
		    <td align="right">Last name:</td>
		    <td align="left"><input type="text" name="lname" size="25" maxlength="20"></input></td>
	    </tr>
	    <tr>
	    	<td align="right">Username:</td>
	    	<td align="left"><input type="text" name="userid" size="20" maxlength="15"></input></td>
	    </tr>
	    <tr>
		    <td align="right">Password:</td>
		    <td align="left"><input type="password" name="password" size="25" maxlength="20"></input></td>
		</tr>
		<tr>
		    <td align="right">Verify Password:</td>
		    <td align="left"><input type="password" name="vpassword" size="25" maxlength="20"></input></td>
	    </tr>
	    <tr>
	    	<td align="right">Email:</td>
	    	<td align="left"><input type="text" name="email" size="45" maxlength="40"></input></td>
	    </tr>
	    <tr>
		    <td align="center" colspan="2">
		    	<input type="submit" name="submit" value="Signup"/>
		    	<input type="reset" name="reset" value="Clear"/>
		    </td>
	    </tr>
    </table>
    </form>
    </div>
<?php

?>

</body>
</html>