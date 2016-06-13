<?php


$fp_host = 'localhost';
$fp_dbname = 'mawadna_db';
$fp_username = 'root';
$fp_password = '';

$fp_handle = @mysql_connect($fp_host,$fp_username,$fp_password);

if(!$fp_handle)	die("connection prolem");

$sel = mysql_select_db($fp_dbname);

if(!$sel){
	mp_db_close();
	die("selection prolem");
	}
//die("OK");
//mysql_close($fp_handle);
@mysql_query("SET NAMES 'utf8'");
function mp_db_close(){
	global $fp_handle;
	@mysql_close($fp_handle);
	}
?>