
	<!--edit form-->
			<div class="abc" style="margin:0px 10px;margin-top:50px;"  >
                <form style="width:700px;" action="" method="POST">
                    <div class="modal-header">
                    <a href="taikhoan.php">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></a>
                        <h4 class="modal-title" id="myModalLabel">Thêm phòng học</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Mã phòng</label> <input type="text" class="form-control" placeholder="Nhập mã phòng" name="mp">
                        </div>
                        <div class="form-group">
                            <label>Tên phòng</label> <input type="text" class="form-control" placeholder="Nhập tên phòng" name="tp">
                        </div>
                        
                        <div class="form-group">
                            <label>Tầng</label>
                            <input type="text" class="form-control" placeholder="Nhập số tầng" name="t">
                        </div>

                        <div class="form-group">
                            <label>Khu nhà</label>
                            <input type="text" class="form-control" placeholder="Nhập khu nhà" name="kn">
                        </div>

                        <div class="form-group">
                            <label>Loại phòng</label>
                            <input type="text" class="form-control" placeholder="Nhập loại phòng" name="lp">
                        </div>

                        <div class="form-group">
                            <label>Cấu hình</label>
                            <input type="text" class="form-control" placeholder="Nhập cấu hình" name="ch">
                        </div>

                        <div class="form-group">
                            <label>Ghi chú</label>
                            <input type="text" class="form-control" placeholder="Nhập ghi chú" name="gc">
                        </div>

                        <div class="form-group">
                            <label>Số máy</label>
                            <input type="text" class="form-control" placeholder="Nhập số máy" name="sm">
                        </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><a href="maps.php">Đóng</a></button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $a1 = $_POST["mp"];
                        $a2 = $_POST["tp"];
                        $a3 = $_POST["t"];
                        $a4 = $_POST["kn"];
                        $a5 = $_POST["lp"];
                        $a6 = $_POST["ch"];
                        $a7 = $_POST["gc"];
                        $a8 = $_POST["sm"];
                        
                        
                        $sql = "INSERT INTO phongthuchanh(Maphong,Tenphong,Tang,Makhunha,Maloaiphong,Cauhinh,Ghichu,Somay) VALUES ($a1,'$a2','$a3','$a4','$a5','$a6','$a7','$a8')";
                        $qr=mysqli_query($conn,$sql);
                        if($qr)
                        {?>                           
                            <script type="text/javascript">
                                window.location = '?controller=maps';
                            </script>
                        <?php }else
                        {
                            echo "insert fail".$sql."<br>".mysqli_error($sql);
                        }
                    }
                ?>
            </div>
