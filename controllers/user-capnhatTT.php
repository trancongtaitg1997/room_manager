
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cập nhật thông tin</h4>
                            </div>
                            <?php 
                                        if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                            $User = $_POST["username"];
                                            $Pass = $_POST["password"];
                                            $Hoten = $_POST["hoten"];
                                            $Ns = $_POST["ngaysinh"];
                                            $Diachi = $_POST["diachi"];
                                            $Cn = $_POST["chuyennganh"];
                                            $Email = $_POST["email"];
                                            $Sdt = $_POST["sodienthoai"];
                                            $sqlUpdate = "UPDATE taikhoan SET Password='$Pass',Hoten='$Hoten',Ngaysinh='$Ns',Diachi='$Diachi',Chuyennganh='$Cn',Email='$Email',Sodt='$Sdt' WHERE Username = '$User'";
                                            if (mysqli_query($conn,"SELECT * FROM taikhoan WHERE Username = '$User'")) {
                                            $result = mysqli_query($conn,$sqlUpdate);
                                                if ($result) {
                                                    echo "<h5 style='margin-left:10px;'>Sửa thông tin thành công</h5>";
                                                 }
                                                else
                                                    {echo "lỗi!";}
                                                }
                                                    else{echo "Username không tồn tại";}
                            
                                            }
                                    ?>
                            <div class="content">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Cơ quan </label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="Trường đại học công ngiệp Hà Nội">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tên người dùng</label>
                                                <input type="text" class="form-control" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Họ Tên</label>
                                                <input type="text" class="form-control" name="hoten">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày Sinh</label>
                                                <input type="text" class="form-control" name="ngaysinh" placeholder="yyyy-MM-dd">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control" name="diachi">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mã quyền</label>
                                                <input type="text" class="form-control" disabled="" value="2">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Chuyên ngành</label>
                                                <input type="text" class="form-control" name="chuyennganh">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="exampleInputEmail1">Địa chỉ email</label>
                                                <!--<textarea rows="5" class="form-control" placeholder="" value=""></textarea>-->
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input type="text" class="form-control" name="sodienthoai">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Cập nhật thông tin</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/haui.jpg" alt="..."/>

                                      <h4 class="title">Hà Nội University Of Industry<br />
                                         <small>vinawind</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>