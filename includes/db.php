<?php 

$db['db_host']= "localhost";
$db['db_user']= "root";
$db['db_pass']= "";
$db['db_name']= "myhealth";

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$connection->set_charset("utf8");
$connection->query("SET collation_connection = utf8_general_ci");


if (!$connection) {
		die("something wrong in connection" . mysql_errno());
	}
//  else {
// echo "we are connected";
// }



 ?>