<?php
/*
 * last modified: 6/21/10 
 */

	// Variables
$curdate = date("F d, Y");

	// DB CONFIGURATIONS
include ("dbconfigurations.php");

	// Common DB configs
$accounts_table="accounts";

	//mysql insert error messages file
$sqlerrors = "sqlerrors.txt";

$debugmode = 0;

//	// Login page credentials
////put sha1() encrypted password here - example is 'hello'
//$login_info = array(
//  'ekohanchi' => '9d67cd1209ff3ca2fde13fe70b1d417a623b7ac0',
//  'itaishpitz' => '2ed37aaa9127a41f07cd24e74c508b93b0ab073c'
//);
//
//$login_credentials_decrypted = array(
//	'Eli Kohanchi - ekohanchi' => 'adm!np4w',
//	'Itai Shpitz - itaishpitz' => 'shiran888'
//);

?>