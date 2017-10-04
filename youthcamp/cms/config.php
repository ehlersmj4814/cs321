<?php
    $server = "dario.cs.uwec.edu";
    $db_username = "OSTERCM";
    $db_password = "WDNFD3XG";

    error_reporting(E_ALL);
    mysql_connect($server,$db_username,$db_password)
		or die("Could not connect to MySQL. The reported SQL error is:<br />".mysql_error());
	mysql_select_db($db_username)
		or die("Could not connect to database. The reported SQL error is:<br />".mysql_error());
?>