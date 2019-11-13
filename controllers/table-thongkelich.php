
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Danh sách phòng thực hành</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>STT</th>
                                    	<th>Tên phòng</th>
                                    	<th>Cấu hình</th>
                                    	<th>Số máy</th>
                                        <th>Ghi chú</th>
                                    </thead>
                                    <tbody>
                                            <?php
                                                $sql = "SELECT Maphong,Tenphong,Cauhinh,Somay,Ghichu FROM phongthuchanh";
                                                $result  = mysqli_query($conn,$sql);
                                                if ($result) {
                                                    while ($row=mysqli_fetch_row($result)) {
                                                        echo "
                                                        <tr>
                                                            <td>".$row[0]."</td>
                                                            <td>".$row[1]."</td>
                                                            <td>".$row[2]."</td>
                                                            <td>".$row[3]."</td>
                                                            <td>".$row[4]."</td>
                                                        </tr>";
                                                        echo "<br>";
                                                    }
                                                }
                                            ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

        
                   <!--- <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Danh sách môn học</h4>
                                <p class="category">Trên phòng thực hành</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>STT</th>
                                    	<th>Tên môn học</th>
                                    	<th>Số tín chỉ</th>
                                        <th>Số tiết lý thuyết</th>
                                    	<th>Số tiết thực hành</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Lập trình căn bản</td>
                                        	<td>3</td>
                                        	<td>30</td>
                                        	<td>15</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Kỹ thuật lập trình</td>
                                            <td>3</td>
                                            <td>30</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Lập trình hướng đối tượng</td>
                                            <td>3</td>
                                            <td>30</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Kiểm thử phần mềm</td>
                                            <td>3</td>
                                            <td>30</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Cơ sở dữ liệu</td>
                                            <td>3</td>
                                            <td>30</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Cấu trúc dữ liệu và giải thuật</td>
                                            <td>3</td>
                                            <td>30</td>
                                            <td>15</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>-->


                </div>
            </div>
        </div>
