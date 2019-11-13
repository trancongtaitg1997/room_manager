
		<!--add form-->
			<div class="abc" style="margin:0px 30pxpx;margin-top:0px;"  >
				<form style="width:700px;" action="" method="POST">
					<div class="modal-header">
					<a href="?controller=taikhoan">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button></a>
						<h4 class="modal-title" id="myModalLabel">Thêm người dùng</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Mã giáo viên</label> <input type="text" class="form-control" placeholder="Nhập mã giáo viên" name="mgv">
						</div>
						<div class="form-group">
							<label>Tên đăng nhập</label> <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" name="tdn">
						</div>
						<div class="form-group">
							<label>Mật khẩu</label> <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="mk">
						</div>
						<div class="form-group">
							<label>Họ Tên</label> <input type="text" class="form-control" placeholder="Nhập họ tên" name="ht">
						</div>
						<div class="form-group">
							<label>Ngày sinh</label> <input type="text" class="form-control" placeholder="yyyy-MM-dd" name="ns">
						</div>
						<div class="form-group">
							<label>Địa chỉ</label>
							<input type="text" class="form-control" placeholder="Nhập địa chỉ" name="dc">
						</div>
						<div class="form-group">
							<label>Số điện thoại</label>
							<input type="text" class="form-control" placeholder="Nhập số điện thoại" name="sdt">
						</div>
						<div class="form-group">
							<label>Chuyên ngành</label>
							<input type="text" class="form-control" placeholder="Nhập chuyên ngành" name="cn">
						</div>
						<div class="form-group">
							<label>Quyền</label>
							<select name="quyen" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
							</select>
						</div>
						<div class="form-group">
							<label>Email</label> <input type="text" class="form-control" placeholder="Nhập email" name="mail">
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><a href="taikhoan.php">Đóng</a></button>
						<button type="submit" class="btn btn-primary">Lưu</button>
					</div>
				</form>
				<?php 
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$a1 = $_POST["mgv"];
						$a2 = $_POST["tdn"];
						$a3 = $_POST["mk"];
						$a4 = $_POST["ht"];
						$a5 = $_POST["ns"];
						$a6 = $_POST["dc"];
						$a7 = $_POST["sdt"];
						$a8 = $_POST["cn"];
						$a9= $_POST["quyen"];
						$a10 = $_POST["mail"];
						$sql = "INSERT INTO taikhoan(Magiaovien,Username,Password,Hoten,Ngaysinh,Diachi,Sodt,Chuyennganh,Maquyen,Email) VALUES ($a1,'$a2','$a3','$a4','$a5','$a6','$a7','$a8',$a9,'$a10')";
						$qr=mysqli_query($conn,$sql);
						if($qr)
						{?>
							<script type="text/javascript">
								window.location = '?controller=taikhoan';
							</script>
						<?php }else
						{
							echo "insert fail".$sql."<br>".mysqli_error($sql);
						}
					}
				?>
			</div>
			</div>