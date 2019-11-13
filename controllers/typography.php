
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-13">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Phân quyền</h4>
                                <!-- <div class="col-md-4" >
                                    <form action="" method="POST">
									   <input type="text" name="timkiem" placeholder="Tìm kiếm.." style="float:left" />
                                        <button type="submit" >Tìm kiếm</button>
                                    </form>
								</div> -->

                                <!-- <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                   
                                    <tbody>
                                    <tr>
                                        <th>Mã quyền</th>
                                        <th>Tên quyền</th>      
                                        <th>Tác vụ</th>                       
                                        
                                    </tr>
                                    <?php 
                                        if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                            $search = $_POST["timkiem"];
                                            $sql = "SELECT Maquyen,Tenquyen FROM taikhoan INNER JOIN quyen on quyen.Maquyen =taikhoan.Maquyen WHERE quyen.Tenquyen = '$search'";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>
                                                        
                                                        <td>
                                                            <a href='delete_user.php?id=".$row[0]."'><button>xóa</button></a>
                                                        </td>
                                                    </tr>
                                                ";
                                            }
                                        }
                                        }
                                    ?>
                                    
                                   
                                    </tbody>
                                    </table>
                                </div> -->
                            </div>
                            <div class="content">

                              <!---  <div class="typo-line">
                                    <h1><p class="category">Header 1</p>Light Bootstrap Table Heading </h1>
                                </div> -->
                                <table class="table table-hover table-striped ">
                                    <thead>
                                        <th>Mã quyền</th>
                                        <th>Tên quyền</th>
                                        <th>Tác vụ</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql = "SELECT Maquyen,Tenquyen FROM quyen";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>                              
                                                        <td>
                                                            <a href='?controller=editquyen&id=".$row[0]."'><button>Sửa</button></a>
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
        

    