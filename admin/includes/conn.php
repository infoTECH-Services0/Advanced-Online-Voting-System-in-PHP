<?php
	$conn = new mysqli('localhost', 'root', '', 'afruvotesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>