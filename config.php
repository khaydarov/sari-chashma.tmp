<?

	$host = 'localhost';
	$user = 'sari-_bd';
	$pass = 'xXjPe6ipy$0Slb1a';
	$dbName = 'sari-chashma_bd';
	
	/*$user = 'root';
	$pass = '';
	$dbName = 'sari-chashma';
	*/
	$conn = mysql_connect($host, $user, $pass);
	mysql_select_db($dbName, $conn);
	mysql_query('SET NAMES utf8');
	