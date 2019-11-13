
        <div class="content">
                        <div class="row">
                            <div class="card">
                            <div class="header">
                                <h3 class="title">Danh mục các thống kê</h3>
                                <div>
                                    <form action="" method="POST">
                                        <label style="border: 1px;"><h4>Tìm kiếm lịch thực hành môn :</h4></label>
                                        <select name="search" class="txt" style="width: 400px; height: 30px;">
                                            <option value="" selected=""></option>
                                            <?php
                                                $sql = "SELECT Mamonhoc,Tenmonhoc FROM monhoc";
                                                $qr = mysqli_query($conn,$sql);
                                                if ($qr) {
                                                    while ($row = mysqli_fetch_row($qr)) {
                                                        echo "<option value = '$row[0]'> $row[1]";
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <button type="submit" name="timkiem">Tìm kiếm</button>
                                    </form>
                                </div>
                            </div>
                            <div class="content">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <td>Tên môn</td>
                                            <td>Tên lớp</td>
                                            <td>Họ tên giảng viên</td>
                                            <td>Thứ</td>
                                            <td>Ca thực hành</td>
                                            <td>Thời gian bắt đầu</td>
                                            <td>Thời gian kết thúc</td>
                                            <td>Tên Phòng</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                                                $tk = $_POST["search"];
                                                $sql="SELECT Tenmonhoc , Tenlop , Hoten , Buoi , Tenca , Thoigianbatdau , Thoigianketthuc , Tenphong FROM phieudangki INNER JOIN cathuchanh ON phieudangki.Maca = cathuchanh.Maca INNER JOIN lophoc ON lophoc.Malop = phieudangki.Malop INNER JOIN taikhoan ON taikhoan.Magiaovien=phieudangki.Magiaovien INNER JOIN monhoc on monhoc.Mamonhoc = phieudangki.Mamonhoc INNER join phongthuchanh on phongthuchanh.Maphong=phieudangki.Maphong WHERE phieudangki.Mamonhoc = $tk";
                                                $result = mysqli_query($conn,$sql);
                                                if ($result) {
                                                    while ($row = mysqli_fetch_row($result)) {?>
                                                    <tr>    
                                                        <td><?php  echo $row[0]; ?></td>
                                                        <td><?php  echo $row[1]; ?></td>
                                                        <td><?php  echo $row[2]; ?></td>
                                                        <td><?php  echo getDay($row[3]) ?></td>
                                                        <td><?php  echo $row[4]; ?></td>
                                                        <td><?php  echo $row[5]; ?></td>
                                                        <td><?php  echo $row[6]; ?></td>
                                                        <td><?php  echo $row[7]; ?></td>
                                                        <br />
                                                    </tr>
                                                    <?php  }
                                                }
                                                elseif ($result == null) {
                                                    echo "Môn học chưa có lịch thực hành";
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