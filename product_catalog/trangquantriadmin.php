<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <!-- <a href="../view/dangnhap.php"></a> -->
    Trang Quan Tri
    <?php
    if (isset($_COOKIE['taikhoan']) and isset($_COOKIE['matkhau'])) {
        echo "Xin chao : " . $_COOKIE['taikhoan'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        if (isset($_SESSION['taikhoan']) and isset($_SESSION['matkhau'])) {
            echo "Xin chao : " . $_SESSION['taikhoan'];
            echo "<br><a href='logout.php'>Logout</a>";
        } else
            echo "<script>alert('Ban chua dang nhap vui long dang nhap lai');
location.href='../view/dangnhap.php';</script>";
    }
    ?>
    <!-- <a href="logout.php">Thoat ra </a> -->
</body>

</html>