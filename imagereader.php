<?php
// Creation Date: Oct 22, 2011 12:19:55 AM
?>
<html>
<head>
<title> </title>
</head>
<body>
Enter the URL which will be used to parse out the full img paths:<br/>
<form name="urlform" action="imagereader.php" method="get">
<input type="text" name="urlfield" maxlength="300" size="100"/><br/>
<input type="submit" value="Submit" />
</form>
<br/><br/>
<?php 
/* gets the data from a URL */
function get_data($url)
{
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

if (isset($_REQUEST['urlfield'])) {
	$mainurl = $_REQUEST['urlfield'];
	echo "The url you entered was:<br/> $mainurl";
	
	echo "<br/>The value of the source is: <br/>";
	// https://picasaweb.google.com/113542378488283381597/Items4sale?authkey=Gv1sRgCKndx8Xd5_bJNA#
	$mainurl_original = get_data($mainurl);
	$mainurl_source=htmlentities($mainurl_original);
	
	$xml=simplexml_load_file($mainurl);
	
	echo "<pre>";
	echo "$xml";
	echo "</pre>";
	
/*	//$regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
	//$regexp = "<img src=\".*\">";
	//$regexp = "<img src=\"https://lh4.googleusercontent.com/-X7RK8bR2lFA/TMpGTYcEghI/AAAAAAAACxo/RDtKwwz3rs0/s128/IMG_1076.JPG\">";
	//$regexp = "<a href=\"";
	echo "<pre>";
	//echo "Regex value:[ $regexp]";
	if(preg_match_all("/$regexp/siU", $mainurl_source, $matches)) {
		echo $matches[2][2];
		// $matches[2] = array of link addresses
		// $matches[3] = array of link text - including HTML code
	} 
	echo "</pre>";
	
	
	//$command="echo $mainurl_source | grep '<div><a'";
	//$command = "echo " . $mainurl_source . " | grep \"<div><a\"";
	//$command = "grep '<div>' . $mainurl_source";
	//$output=array();
	//$output=shell_exec($command);
	
	echo "<pre>";
	//echo htmlentities($mainurl_source);
	//echo "command: $command - Output: $output";
	//echo $ret;
	echo "</pre>";
	
*/	
	  /*
      ob_start();
      //page creation goes here
      //...
      $page=ob_get_contents(); //get the page
       
      echo '<textarea name="source">'.htmlspecialchars($page).'</textarea>';       
      ob_end_flush(); //output to browser
      */
}
?>

</body>
</html>