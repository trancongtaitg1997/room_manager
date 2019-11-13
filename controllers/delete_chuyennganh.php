<?php 
	$id=$_GET['id'];
	$sql = "DELETE from monhoc where Mamonhoc=$id";
	$qr = mysqli_query($conn,$sql);
	if($qr){?>
		<script type="text/javascript">
			window.location = '?controller=monhoc';
		</script>
	<?php }