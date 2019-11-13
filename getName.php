<?php
	include("database/connect.php");
	$name = $_GET['id'];
	$result = mysqli_query($conn,"SELECT Hoten FROM taikhoan WHERE taikhoan.Username = '$name'");
	if ($result) {
		$row = mysqsli_fetch_row($result);
		echo $row[0];
		//header("location: index.php");
	}