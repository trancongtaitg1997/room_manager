<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Đăng Nhập</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>

    



    <div class="container">
        <div class="top">
            <h1 id="title" class="hidden"><span id="logo">TRANG QUẢN LÝ PHÒNG THỰC HÀNH TRỰC TUYẾN </span></h1><br>
            <?php
            include "database/connect.php";
            if ($_SERVER["REQUEST_METHOD"]== "POST") {
                $mgv = $_POST["mgv"];
                $user = $_POST["username"];
                $pass = $_POST["password"];
                $cfpass = $_POST["confirmpass"];
                $ht = $_POST["hoten"];
                $ns = $_POST["ngaysinh"];
                $dc = $_POST["diachi"];
                $sdt = $_POST["sdt"];
                $cn = $_POST["chuyennganh"];
                $mq = $_POST["maquyen"];
                $mail = $_POST["email"];
                if (!$mgv || !$user || !$pass || !$cfpass || !$ht || !$ns || !$dc || !$sdt || !$cn || !$mq || !$mail) { ?>
                    <h2 style="text-align: center;">Bạn cần nhập đầy đủ thông tin</h2> <?php
                }
                $sqlInsert = "INSERT INTO taikhoan(Magiaovien,Username,Password,Hoten,Ngaysinh,Diachi,Sodt,Chuyennganh,Maquyen,Email) VALUES ($mgv,'$user','$pass','$ht','$ns','$dc','$sdt','$cn',$mq,'$mail')";
                $result = mysqli_query($conn,$sqlInsert);
                if ($result) {
                    header("location: login.php");
                }else{
                    echo "Lỗi đăng kí";
                }
            }
            ?>
        </div>
        <div class="login-box animated fadeInUp">
            <div class="box-header">
                <h2>Đăng ký tài khoản</h2>
            <form action="?controller=login" method="POST">
            <table>
                <tr>
                    <td><label for="magiaovien">Mã giáo viên</label></td>
                    <td> <input type="text" name="mgv"></td>
                </tr>
                <tr>
                    <td><label for="username">Tên người dùng</label></td>
                    <td> <input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Mật khẩu</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                 <tr>
                    <td><label for="password2">Nhập lại mật khẩu</label></td>
                    <td><input type="password" name="confirmpass"></td>
                </tr>
                 <tr>
                    <td><label for="name">Họ tên</label></td>
                    <td><input type="text" name="hoten"></td>
                </tr>
                 <tr>
                    <td> <label for="dateofbirth">Ngày sinh</label></td>
                    <td> <input type="text" name="ngaysinh"></td>
                </tr>
                  <tr>
                    <td><label for="address">Địa chỉ</label></td>
                    <td><input type="text" name="diachi"></td>
                </tr>
                  <tr>
                    <td><label for="phone">Số điện thoại</label></td>
                    <td><input type="text" name="sdt"></td>
                </tr>
                  <tr>
                    <td><label for="major">Chuyên ngành</label></td>
                    <td><input type="text" name="chuyennganh"></td>
                </tr>
                <tr>
                    <td><label for="maquyen">Mã quyền</label></td>
                    <td><select style="height: 30px;width: 190px;" name="maquyen">
                        <option style="height: 40px;" value="2">2</option>
                    </select></td>
                </tr>
                  <tr>
                    <td><label for="email">Email</label></td>
                    <td> <input type="text" name="email"></td>
                </tr>
            </table>
            <a href="?controller=dangky"><button type="submit">Đăng ký</button></a>
            <a href="login.php"><button type="button">Quay về </button></a>
            <br/>
            </form>
        </div>
    </div>
</body>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function() {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function() {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function() {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function() {
        $('label[for="password"]').removeClass('selected');
    });
</script>

</html>