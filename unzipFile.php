<?php
// Creation Date: Jun 13, 2010 8:54:41 AM
?>
<html>
<head>
<title>Unzip File</title>
</head>
<body>
<h1>Unzipping Zipped File </h1>
<?php
if (isset($_REQUEST['file2unzip'])) {
	$filename = $_REQUEST['file2unzip'];
	
	$fullcommand = "unzip $filename";
	$lsoutput="";

	if (file_exists($filename)) {
		echo "<pre>";
		echo system($fullcommand);
		echo "</pre>";
		
		echo "Completed! file: $filename has been unzipped<br><br>";	
	}
	else {
		echo "ERROR filename: $filename was not found on the server at this loction<br>";
		echo "<a href=\"unzipFile.php\">Try again</a>"; 
		
	}
	
	
	echo "<pre>";
	echo system('ls -al', $lsoutput);
	echo "</pre>";

}
else {
	?>
	<form name="fileunzip" method="post" action="unzipFile.php">
	Name of file to unzip (must already exist on server) <input name="file2unzip" type="text" size="50"/>
	<br/>
	<input type="submit" value="Submit" />
	</form>
	<?php
}

?>

</body>
</html>