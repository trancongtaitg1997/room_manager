<?php 

	$id=$_GET['id'];
	$sql = "DELETE from taikhoan where Magiaovien=$id";
	$qr = mysqli_query($conn,$sql);

	if($qr){ ?>
		<script type="text/javascript">
			window.location = '?controller=taikhoan';
		</script>
	<?php }
?>