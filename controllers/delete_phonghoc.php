<?php 

	include("../database/connect.php");
	include("../config.php");
	$id=$_GET['id'];
	$sql = "DELETE from phongthuchanh where Maphong=$id";
	$qr = mysqli_query($conn,$sql);
	if($qr){
		header("location:http://localhost:8888/phongthuchanh/qlPhongThucHanh/indexAdmin.php?controller=maps");
	}

?>