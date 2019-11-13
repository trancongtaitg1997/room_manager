
<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Đăng Nhập</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">TRANG QUẢN LÝ PHÒNG THỰC HÀNH TRỰC TUYẾN</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Đăng nhập hệ thống</h2>
			</div>
			<form action="" method="POST">
				<label for="username">Tên người dùng</label>
				<br/>
				<input type="text" id="username" name="usern">
				<br/>
				<label for="password">Mật khẩu</label>
				<br/>
				<input type="password" id="password" name="password">
				<br/>
				<button type="submit">Đăng nhập</button>
				<br/>
				<a href="#"><p class="small">Bạn quên mật khẩu ?</p></a>
				<a href="dangky.php"><p class="small">Đăng ký ngay</p></a>
			</form>
			<?php 
				include "database/connect.php";
				if ($_SERVER["REQUEST_METHOD"]=="POST") {
					$user = $_POST["usern"];
					$pass = $_POST["password"];
					$sql="SELECT Username,Password,Maquyen FROM taikhoan WHERE Username = '$user'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_row($result);
					if($result){
						if ($row[0]==$user && $row[1]==$pass && $row[2]==2) {
								header("location: index.php?id=$row[0]");
							}elseif ($row[0]==$user && $row[1]==$pass && $row[2]==1) {
								header("location: indexAdmin.php");
							}elseif ($row[0]==$user && $row[1] != $pass) {
								echo "<h3 style='color:red;'>Sai mật khẩu</h3>";
							}else{
								echo "<h3 style='color:red;'>Tài khoản này không tồn tại</h3>";
							}
					}
				}
			?>
		</div>
	</div>
</body>

<!--<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script> -->

</html>