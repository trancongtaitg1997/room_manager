
	
	<!--edit form-->
			<div class="abc" style="margin:0px 20px;margin-top:50px;"  >
                <form style="width:700px;" action="" method="POST">
                    <div class="modal-header">
                    <a href="?controller=monhoc">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></a>
                        <h4 class="modal-title" id="myModalLabel">Thêm Môn Học</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Mã môn học</label> <input type="text" class="form-control" placeholder="Nhập mã môn học" name="mmh">
                        </div>
                        <div class="form-group">
                            <label>Tên môn học</label> <input type="text" class="form-control" placeholder="Nhập tên môn học" name="tmh">
                        </div>
                        
                        <div class="form-group">
                            <label>Chuyên ngành</label>
                            <input type="text" class="form-control" placeholder="Nhập chuyên ngành" name="cn">
                        </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><a href="?controller=monhoc">Đóng</a></button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
                <?php 

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $a1 = $_POST["mmh"];
                        $a2 = $_POST["tmh"];
                        $a3 = $_POST["cn"];
                        
                        $sql = "INSERT INTO monhoc(Mamonhoc,Tenmonhoc,Chuyennganh) VALUES ($a1,'$a2','$a3')";
                        $qr=mysqli_query($conn,$sql);
                        if($qr)
                        {                           
                            echo "Thêm Thành Công";
                        }else
                        {
                            echo "insert fail".$sql."<br>".mysqli_error($sql);
                        }
                    }
                ?>
            </div>
