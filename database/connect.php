<?php 
	include 'config.php';

	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	mysqli_set_charset($conn,'UTF8');