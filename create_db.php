<?php

	require_once "config.php";
	require_once "connect_db.php";


		// Create table
	$sql="CREATE TABLE IF NOT EXISTS Hits (
			    id                  INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
			    recorded_time        TIMESTAMP NOT NULL, -- Time the record was created
			    ip                  INTEGER UNSIGNED NOT NULL,
			    ua          VARCHAR( 200 ) NOT NULL DEFAULT '-', -- User agent
			    request         VARCHAR( 200 ) NOT NULL DEFAULT '/',
			    referer        VARCHAR( 200 ) NOT NULL DEFAULT '-', -- Referer
			    is_unique           BOOLEAN NOT NULL DEFAULT TRUE
			);";

	// Execute query
	if (mysqli_query($con,$sql)) {
	  echo "Table created successfully";
	} else {
	  echo "Error creating table: " . mysqli_error($con);
	}
	
?>