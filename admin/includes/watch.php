<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<title>Bangla Watch</title>
</head>
<body>
	<?php
	require_once("BanglaDateTime.php");
	date_default_timezone_set('Asia/Dhaka');
	$BanglaDate=new ShowBanglaDateTime();
	
	
	echo $BanglaDate->bangla_date_time(date("D, M j, Y ")) . "</br>";
	
	echo $BanglaDate->bangla_date_time(date("h:i:s মিঃ ")) . "</br>";
	
	echo $BanglaDate->bangla_date_time(date("h:i, M j, Y"))
	
	
	?>
</body>
</html>
