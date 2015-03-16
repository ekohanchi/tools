<html>
<head>
<title></title>
<style type='text/css'>
	tr.rowhighlight:hover { background:blue; }
</style>
</head>
<body>
<?php
if (isset($_REQUEST['cleartxtpwd'])) {
	$pwd = $_REQUEST['cleartxtpwd'];
	$encpwd = sha1($pwd);
	
	echo "password: $pwd";
	echo "<br>";
	echo "Shah1 value of password: $encpwd";
}
else {
	?>
	<form name="pwform" method="post" action="pwcreation.php">
	password to encrypt <input name="cleartxtpwd" type="text" size="50"/>
	<br/>
	<input type="submit" value="Submit" />
	</form>
	<?php
}

//$pw = "p4ds4r3h";
//
//
//$encpw = sha1($pw);
//echo "password: $pw";
//echo "<br>";
//echo "Shah1 value of password: $encpw";
?>
<br/>
<br/>
<table border="1">
<tr class="rowhighlight">
	<td>value1</td>
	<td>value2</td>
</tr>
<tr>
	<td>value3</td>
	<td>value4</td>
</tr>
<tr>
	<td>value1</td>
	<td>value2</td>
</tr>
<tr>
	<td>value3</td>
	<td>value4</td>
</tr>

</table>


</body>
</html>
