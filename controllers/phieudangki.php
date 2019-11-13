
<link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />
<style type="text/css">
    .txt{
        width: 300px;
        padding: 2px;
    }
    tr.row{
        padding: 10px;
    }
    td .txt {
        padding: 10px;
    }
</style>


<h3 style="text-align: center;">PHIẾU ĐĂNG KÍ PHÒNG THỰC HÀNH</h3>
<form action="" method="POST" style="margin-left: 300px;">
    <table border="1px;" style="margin: 50px;" cellpadding="50px;">
        <tr>
            <td><label>Tên Giáo Viên</label></td>
            <td>
                <select class="txt" name="mgv">
                    <?php 
                        $sqlSelect = "SELECT Magiaovien,Hoten FROM taikhoan WHERE Maquyen = 2";
                        $result = mysqli_query($conn,$sqlSelect);
                        if ($result) {
                            while ($row=mysqli_fetch_row($result)) {
                                echo "<option value='$row[0]'>$row[1]</option>";
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Tên Môn Học</label></td>
            <td>
                <select name="mhh" class="txt">
                <?php 
                    $sql = "SELECT Mamonhoc,Tenmonhoc FROM monhoc";
                    $result = mysqli_query($conn,$sql);
                    if ($result) {
                        while ($row=mysqli_fetch_row($result)) {
                            echo "<option value='$row[0]'>".$row[1]."";
                        }
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Tên Phòng</label></td>
            <td>
                <select name="mp" class="txt">
                <?php 
                    $sqlSelect = "SELECT Maphong,Tenphong FROM phongthuchanh";
                    $result = mysqli_query($conn,$sqlSelect);
                    if ($result) {
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<option value='$row[0]'>$row[1]";
                        }
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Ca thực hành</label></td>
            <td><select name="mc" class="txt">
                <option value="1">Ca sáng</option>
                <option value="2">Ca chiều</option>
                <option value="3">Ca tối</option>
            </select></td>
        </tr>
        <tr>
            <td><label>Buổi</label></td>
            <td>
                <select class="txt" name="Buoi">
                    <option value="2">Thứ 2</option>
                    <option value="3">Thứ 3</option>
                    <option value="4">Thứ 4</option>
                    <option value="5">Thứ 5</option>
                    <option value="6">Thứ 6</option>
                    <option value="7">Thứ 7</option>
                    <option value="8">Chủ nhật</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Tên Lớp</label></td>
            <td>
                <select name="ml" class="txt">
                    <?php 
                        $sql = "SELECT Malop,Tenlop FROM lophoc";
                        $result = mysqli_query($conn,$sql);
                        if ($result) {
                            while ($row = mysqli_fetch_row($result)) {
                                printf("<option value='%s'>%s",$row[0],$row[1]);
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Từ ngày</label></td>
            <td><input type="text" name="tn" placeholder="nhập yyyy-MM-dd" class="txt"><br></td>
        </tr>
        <tr>
            <td><label>Đến Ngày</label></td>
            <td><input type="text" name="dn" placeholder="nhập yyyy-MM-dd" class="txt"><br></td>
        </tr>
        <tr>
            <td><label>Duyệt</label></td>
            <td>
                <select name="duyet" class="txt">
                    <option value="1">duyệt</option>
                    <option value="0">không duyệt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Mã Đăng Kí</label></td>
            <td><input type="text" name="mdk" class="txt" disabled=""></td>
        </tr>
        <tr>
            <td><label>Ghi chú</label></td>
            <td><textarea name="ghichu" rows="5" cols="20" class="txt"></textarea></td>
        </tr>
        <tr>
            <td><button type="button" name="return" style="background-color: red;"><a href="?controller=quanlylich">Quay Lại</a></button></td>
            <td style="text-align: center;"><button type="submit" name="gui" style="background-color: green;width: 100px;">Gửi</button></td>
        </tr>
    </table>
</form>

                <!--php phieu dang ki -->
                <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $magiaovien = $_POST["mgv"];
                        $mamonhoc = $_POST["mhh"];
                        $maphong = $_POST["mp"];
                        $maca = $_POST["mc"];
                        $buoi = $_POST["Buoi"];
                        $malop = $_POST["ml"];
                        $tungay = $_POST["tn"];
                        $denngay = $_POST["dn"];
                        $duyet = $_POST["duyet"];
                        $ghichu = $_POST["ghichu"];
                        $sqlInsert = "INSERT INTO phieudangki(Magiaovien,Mamonhoc,Maphong,Maca,Buoi,Malop,Tungay,Denngay,Duyet,Mapdk,Ghichu) VALUES($magiaovien,$mamonhoc,$maphong,$maca,'$buoi','$malop','$tungay','$denngay',$duyet,'','$ghichu')";
                        if (mysqli_query($conn,$sqlInsert)) {
                            echo "Đăng kí thành công";
                        }
                        else 
                        {
                            echo "insert record fail".$sqlInsert."<br>".mysqli_error($sqlInsert);
                        }
                    }
                ?> 
               

                    

                   
                    
                    

               
     