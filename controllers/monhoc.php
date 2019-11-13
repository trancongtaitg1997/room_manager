
        <div class="content">
            <div class="container-fluid">
                <div class="card">

                    <div class="content">
                        <div class="row">
						
                            <div class="card">
                            <div class="header">
                                <h4 class="title">Danh mục</h4>
								<div class="col-md-4">
                                    <form action="" method="POST">
									   <input type="text" name="timkiem" placeholder="Tìm kiếm.." border-radius="20px" />
                                        <button type="submit" >Tìm kiếm</button>
                                    </form>
                                    <div class="content">
                                    <table class="table table-hover table-striped" style="width: 980px;">
                                    <thead>
                                        <th>Mã môn học</th>
                                        <th>Tên môn học</th>      
                                        <th>Chuyên ngành</th>                       
                                        <th>Tác vụ</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                            $search = $_POST["timkiem"];
                                            $sql = "SELECT Mamonhoc,Tenmonhoc,Chuyennganh FROM monhoc WHERE Tenmonhoc = '$search'";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>
                                                        
                                                        <td>".$row[2]."</td>
                                                        
                                                        <td>
                                                            <a href='?controller=delete_chuyennganh&id=".$row[0]."'><button>xóa</button></a>
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
								<a href="?controller=addmonhoc" style="float:right" ><img src="assets\img\addlist.png"/><span class="badge">Thêm</span></a>
							<!--end-->
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                
                                <table class="table table-hover table-striped" >
                                    <thead>
                                        <th colspan="4"><h3>Danh Sách Môn Học</h3></th>
                                    </thead>
                                    <thead>
                                        <th>Mã môn học</th>
                                        <th>Tên môn học</th>
                                        <th>Chuyên ngành</th>
                                        <th >Tác vụ</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql = "SELECT Mamonhoc,Tenmonhoc,Chuyennganh FROM monhoc";
                                        $result = mysqli_query($conn,$sql);
                                        if ($result) {
                                            while ($row=mysqli_fetch_row($result)) {
                                                echo "
                                                    <tr>
                                                        <td>".$row[0]."</td>
                                                        <td>".$row[1]."</td>
                                                        <td>".$row[2]."</td>
                                                        <td>
                                                            <a href='?controller=delete_chuyennganh&id=".$row[0]."'><button>xóa</button></a>
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
        </div>

