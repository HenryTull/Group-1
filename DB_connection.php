<?php
    DEFINE ('DB_HOST', '194.81.104.22');
	DEFINE ('DB_USER', 'team1');
	DEFINE ('DB_PASSWORD', 'group1');
	DEFINE ('DB_NAME', 'db_team1');

	$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL: ' .
	mysqli_connect_error());
	?>
