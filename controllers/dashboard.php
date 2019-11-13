

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
                                                        <h5 style="color: red; padding: 3px;" align="center">Đã được đăng ký</h5>
                                                    </td>
                                                <?php 
                                                 else:  
                                                    echo "<td align='center' style='color:green;'><h5>còn trống</h5></td>";
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
         

                    

                   
   