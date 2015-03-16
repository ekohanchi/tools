<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX,FOLLOW,NOIMAGEINDEX,NOIMAGECLICK">
</head>
<body>

<?php
/*
 * last modified: 6/21/10
 */
include("../include/configs.php");
//include("../login.php"); 

$createquery_table="CREATE TABLE $accounts_table
(
	id int NOT NULL AUTO_INCREMENT,
	createdate Datetime NOT NULL,
	firstname varchar(20),
	lastname varchar(20),
	userid varchar(15),
	password_enc varchar(50),
	lastlogin Datetime,
	currentip varchar(15),
	loginstatus int(1),
	acctstatus int(3),
	email varchar(40),
	UNIQUE KEY id (id)
);";



if(isset($_GET['accounts']) ) {
	$table = $accounts_table;
	$createquery = $createquery_table;
	$param = accounts;
		
	if (isset($_POST['confirm'])) {
		include("opendb.php");
		$dropquery="DROP TABLE IF EXISTS $table;";
		mysql_query($dropquery) or die("<br><b>A MySQL error occured</b><br><b>Query:</b> " . $dropquery . " <br /> <b>Error:</b> (" . mysql_errno() . ") " . mysql_error());

		mysql_query($createquery) or die("<br><b>A MySQL error occured</b><br><b>Query:</b> " . $createquery . " <br /> <b>Error:</b> (" . mysql_errno() . ") " . mysql_error());
		
		echo "<br>Successful!<br>";
		echo "<br>Done creating (and populating) table with the following credentials...<br>";
		echo "<b>Table name:</b> $table <br>";
		echo "<b>DB:</b> $database <br>";
		include("closedb.php");
		
		echo "<br>Back to <a href=\"index.php\">Database Management</a>";
	}
	else {
		$action_script = "createTable.php?$param";
		?>
		<form method="post" action="<?php $action_script ?>">
		<br>This script will drop then create the Table with the following credentials:<br>
		<?php
			echo "<li>Database Host: $dbhost</li>";
			echo "<li>Database Username: $dbuser</li>";
			echo "<li>Database Name: $database</li>";
			echo "<li>Database Table: $table</li>";
			echo "<li>Create Query: <pre>$createquery</pre></li>";
		?>
		<p><input type="submit" name="confirm" value="OK">
		<input type=button onclick="document.location.href='index.php'" value="Cancel">
		</form> 
	<?php
	}
}
else {
	echo "<br>Back to <a href=\"index.php\">Database Management</a>";
}?>

</body>
</html>