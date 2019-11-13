
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Quản lý tài khoản</h4>
                               <div class="col-md-12" >
                                    <form action="" method="POST">
                                       <input type="text" name="timkiem" placeholder="Tìm kiếm.." border-radius="20px" />
                                        <button type="submit" >Tìm kiếm</button>
                                    </form>
                                    <div class="content">
                                    <table class="table table-hover table-striped" style="width: 800px;">
                                    <thead>
                                        <th>Mã giáo viên</th>
                                        <th>Họ tên</th>      
                                        <th>Mật khẩu</th>                       
                                        <th>Ngày sinh</th>
                                        <th>Quê quán</th>
                                        <th>Quyền</th>
                                        <th>Tác vụ</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                            $search = $_POST["timkiem"];
                                            $sql = "SELECT Magiaovien,Hoten,Ngaysinh,Diachi,Tenquyen FROM taikhoan INNER JOIN quyen on quyen.Maquyen =taikhoan.Maquyen WHERE taikhoan.Hoten = '$search' OR taikhoan.Magiaovien='$search' OR taikhoan.Diachi = '$search' OR quyen.Tenquyen='$search'";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>
                                                        <td>***********</td>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>
                                                            <a href='?controller=delete_user&id=".$row[0]."'><button>xóa</button></a>
                                                        </td>
                                                    </tr>
                                                ";
                                            }
                                        }
                                        }
                                    ?>
                                    
                                   
                                    </tbody>
                                    </table>
                                </div>
                               
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                   <thead>
                                        <th colspan="6" style="font-size: 30px;">Danh sách tài khoản</th>
                                        <th><a href="?controller=adduser" style="float: right;"><img src="assets\img\adduser.png"/><span class="badge">Thêm</span></a>
                            <!--end--></th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Mã giáo viên</th>
                                        <th>Họ tên</th>      
                                        <th>Mật khẩu</th>                       
                                        <th>Ngày sinh</th>
                                        <th>Quê quán</th>
                                        <th>Quyền</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                    <?php 
                                        $sql = "SELECT Magiaovien,Hoten,Ngaysinh,Diachi,Tenquyen FROM taikhoan INNER JOIN quyen on quyen.Maquyen = taikhoan.Maquyen";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>
                                                        <td>***********</td>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>
                                                            <a href='?controller=delete_user&id=".$row[0]."'><button>xóa</button></a>
                                                        </td>
                                                    </tr>
                                                ";
                                            }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 