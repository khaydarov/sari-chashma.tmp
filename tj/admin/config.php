<?

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbName = 'sari-chashma';
	
	$conn = mysql_connect($host, $user, $pass);
	mysql_select_db($dbName, $conn);
	