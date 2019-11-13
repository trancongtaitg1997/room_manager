<style type="text/css">
    td {padding: 5px;}
    th {text-align: center;}
</style>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    


        <div class="content">
            <?php 
                $sql = "SELECT * FROM phongthuchanh";
                $result = mysqli_query($conn,$sql);
                if ($result) {
                    while ($row=mysqli_fetch_row($result)) { ?>

                        <h4>Lịch Thực Hành Phòng Máy : <?php echo $row[1]."<br>" ?></h4>
                        <table border=1 class='content' width=100%>
                            <tr>
                                <th>Ca</th>
                                <th>Thứ 2</th>
                                <th>Thứ 3</th>
                                <th>Thứ 4</th>
                                <th>Thứ 5</th>
                                <th>Thứ 6</th>
                                <th>Thứ 7</th>
                                <th>Chủ nhật</th>
                            </tr>
                            <?php 
                                for($i = 1; $i <=3 ; $i++) {

                                    $lichTHSql = 'SELECT * FROM phieudangki INNER JOIN phongthuchanh on phieudangki.Maphong = phongthuchanh.Maphong INNER JOIN taikhoan on phieudangki.Magiaovien = taikhoan.Magiaovien INNER JOIN monhoc on phieudangki.Mamonhoc = monhoc.Mamonhoc INNER JOIN lophoc on lophoc.Malop = phieudangki.Malop WHERE phongthuchanh.Maphong = '.$row[0].' AND phieudangki.Maca = '.$i .' ORDER BY phieudangki.Buoi ASC';
                 
                                    $lichphong = mysqli_fetch_all(mysqli_query($conn,$lichTHSql), MYSQLI_ASSOC);

                                     ?>
                                     <tr>
                                        <td><?php echo tenBuoi($i) ?></td>

                                        <?php 
                                            $buoiArr = array_column($lichphong, 'Buoi');
                                            
                                            for ($j=2; $j <= 8 ; $j++) { 
                                                $pIndex = array_search($j, $buoiArr);
                                               
                                                if(gettype($pIndex) != 'boolean'): 
                                                    $phong = $lichphong[$pIndex];  ?>
                                                   <td> 
                                                        Họ Tên: <?php echo $phong['Hoten'] ?><br>
                                                        Môn: <?php echo $phong['Tenmonhoc'] ?><br>
                                                        Lớp: <?php echo $phong['Tenlop'] ?>
                                                    </td>
                                                <?php 
                                                 else:  
                                                    echo "<td align='center'></td>";
                                                 endif;
                                            } 
                                        ?>

                                    </tr>
                                <?php } 
                            ?>

                        </table>
                        <br><br>
                   <?php  }
                }
            ?>
                        
        </div>  

                   
                    
                    

                   <!--- <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                
                           
