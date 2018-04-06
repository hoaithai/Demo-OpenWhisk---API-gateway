<?php
$host_name = "107.113.53.67";
$user_name = "root";
$pass_word = "1";
$database_name = "the_world";
$port = "3306"; 
$short_connect = new mysqli($host_name, $user_name, $pass_word, $database_name, $port);

//SQL statement for a table in the database
$sql = "SELECT * FROM country ";	

//result is boolean for query other than SELECT, SHOW, DESCRIBE and EXPLAIN
$result = $short_connect->query($sql);

if (($result) && ($result->num_rows > 0))
{
	$results = array();

	//convert query result into an associative array
	while ($row = $result->fetch_assoc())
	{
		$results[] = $row;
	}
  

	$result->free();

}

$short_connect->close();

?>
