<?php

// debugging purposes not needed to pass in pomlink as parameter
//$pomlink="http://www.avajava.com/tutorials/maven/how-do-i-display-the-value-of-a-pom-xml-element/pom.xml";

$pomlink=$_GET['pomlink'];

$xml=simplexml_load_file($pomlink);

foreach($xml->children() as $child) {
	if ($child->getName() == "version") {
		echo "$child";
	}
}

?>