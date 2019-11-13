
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Quản lý phòng học</h4>
                               <div class="col-md-4" >
									<form action="" method="POST">
                                       <input type="text" name="timkiem" placeholder="Tìm kiếm.." border-radius="20px" />
                                        <button type="submit" >Tìm kiếm</button>
                                    </form>
                                    <div class="content">
                                    <table class="table table-hover table-striped" style="width: 800px;">
                                    <thead>
                                        <th>STT</th>
                                        <th>Tên phòng</th>      
                                        <th>Tầng</th> 
                                        <th>Khu nhà</th>
                                        <th>Loại phòng</th>
                                        <th>Cấu hình</th>
                                        <th>Ghi chú</th>    
                                        <th>Số máy</th>                   
                                        <th>Tác vụ</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                            $search = $_POST["timkiem"];
                                            $sql = "SELECT Maphong,Tenphong,Tang,Tentoanha,Tenloaiphong,Cauhinh,Ghichu,Somay FROM phongthuchanh INNER JOIN loaiphong ON phongthuchanh.Maloaiphong = loaiphong.Maloaiphong INNER JOIN khunha ON phongthuchanh.Makhunha = khunha.Makhunha WHERE khunha.Makhunha = '$search'";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                        <td>
                                                            <a href='/controllers/delete_phonghoc.php?id=".$row[0]."'><button>xóa</button></a>
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
                                       <th colspan="8" style="font-size:30px;">Danh sách phòng học</th>
                                       <th><div class="addphonghoc" style="margin-left: 50px;">
                                <a href="?controller=addphonghoc" style="float:right" ><img src="assets\img\addlist.png"/><span class="badge">Thêm</span></a>
                            <!--end-->
                                </div></th>
                                   </thead>
                                    <thead>

                                       <tr>

                                        <th>STT</th>
                                        <th>Tên phòng </th>
										<th>Tầng</th>
                                        <th>khu nhà</th>
                                        <th>Loại phòng</th>
                                        <th>Cấu hình</th>
                                        <th>Ghi chú</th>
                                        <th>Số máy</th>
										<th>Tác vụ</th>
                                        
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                        $sql = "SELECT Maphong,Tenphong,Tang,Tentoanha,Tenloaiphong,Cauhinh,Ghichu,Somay FROM phongthuchanh INNER JOIN loaiphong ON phongthuchanh.Maloaiphong = loaiphong.Maloaiphong INNER JOIN khunha ON phongthuchanh.Makhunha = khunha.Makhunha ";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                        <td>
                                                            <a href='delete_phonghoc.php?id=".$row[0]."'><button>xóa</button></a>
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

