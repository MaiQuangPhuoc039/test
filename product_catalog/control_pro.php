<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');
require('../model/brand_db.php');
require('../model/nguoidung_db.php');
require('../model/phanquyen_db.php');

session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'thongtincanhan';
    }
}
if ($action == 'thongtincanhan') {
    $taikhoan = $_SESSION['taikhoan'];
    $matkhau = $_SESSION['matkhau'];
    $maPQ = $_SESSION['maPQ'];
    $maND = $_SESSION['maND'];

    $nguoidungPQ= get_nguoidung_loginPQ($taikhoan,$matkhau);
    if($nguoidungPQ){
        echo '<br>tenND =' . $nguoidungPQ['tenND'];
        echo '<br>vai trog   =' . $nguoidungPQ['tenquyen'];
        echo '<br>taikhoan='.$taikhoan;
        echo '<br>matkhau='.$matkhau;
        echo '<br>maPQ='.$maPQ;
        echo '<br>maND='.$maND;
    }
    

    include('toi.html');
}

else if ($action == 'quanlytrangweb') {
    // include('logout.php');
    $taikhoan = $_SESSION['taikhoan'];
    $matkhau = $_SESSION['matkhau'];
    $maPQ = $_SESSION['maPQ'];
    $maND = $_SESSION['maND'];
    echo  "maPQ= ".$maPQ;

    header("Location: /demo/ex5_1/product_manager/");
    exit();
}

else if ($action == 'dangxuat') {
    include('logout.php');
}