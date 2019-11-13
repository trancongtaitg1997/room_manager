

			<!--edit form-->
			<div class="abc" >
				<form style="width:700px;" action="" method="POST">
					<div class="modal-header">
					<a href="?controller=typography">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button></a>
						<h4 class="modal-title" id="myModalLabel">Sửa quyền</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Mã quyền</label> <input type="text" class="form-control" placeholder="Nhập mã quyền cần sửa" name="mq">
						</div>
						<div class="form-group">
							<label>Tên quyền</label> <input type="text" class="form-control" placeholder="Nhập tên quyền cần sửa" name="tq">
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><a href="?controller=typography">Đóng</a></button>
						<button type="submit" class="btn btn-primary">Lưu</button>
					</div>
				</form>
				
			</div>
			<?php
					if($_SERVER["REQUEST_METHOD"]=="POST") {
						$a1 = $_POST["mq"];
						$a2 = $_POST["tq"];
						$sql = "UPDATE quyen SET Tenquyen='$a2' WHERE Maquyen = $a1";
						$qr=mysqli_query($conn,$sql);
						if($qr)
						{ 					
							echo "Sửa thành công";
						}else
						{
							echo "Không sửa được";
						}

					}
			?>
