<?php
require('../model/database.php');
require('../model/nguoidung_db.php');
require('../model/phanquyen_db.php');
session_start();
if (isset($_POST['login'])) {


    $taikhoan = $_POST['taikhoan'];
  
    $matkhau = $_POST['matkhau'];
    $nguoidunglogin = login($taikhoan, $matkhau);
    if ($nguoidunglogin) {
        $_SESSION['taikhoan'] = $taikhoan;
        $_SESSION['maPQ'] = $nguoidunglogin['maPQ'];
        $_SESSION['maND'] = $nguoidunglogin['maND'];
        $_SESSION['matkhau'] = $matkhau;
        $maPQ =  $_SESSION['maPQ'];
        if (isset($_POST['remember']) and ($_POST['remember'] == 'on')) {
            // setcookie("taikhoan", $taikhoan, time() + 60);
            // setcookie("matkhau", $matkhau, time() + 60);
            // setcookie("maPQ", $maPQ, time() + 60);
            setcookie("taikhoan", $taikhoan, 0);
            setcookie("matkhau", $matkhau, 0);
            setcookie("maPQ", $maPQ, 0);
            setcookie("maND", $maND, 0);
        }
        // echo "<br>Chao ban : " . $nguoidunglogin['tenND'] . "<br>Pass cua ban la :" . $nguoidunglogin['matkhau'] . "<br>MaPQ cua ban la :" . $maPQ;

        echo "<script>alert('login thanh cong ');location.href='index.php';</script>";
    } else {
         echo "<script>alert('login that bai');location.href='../view/dangnhap.php';</script>";

    }
   
}
