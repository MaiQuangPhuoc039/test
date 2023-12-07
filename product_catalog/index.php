<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
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
        $action = 'list_products';
    }
}
if ($action == 'list_products') {


    $category_id = filter_input(INPUT_GET, 'category_id',  FILTER_VALIDATE_INT);
    $maCatItem = filter_input(INPUT_GET, 'maCatItem',  FILTER_VALIDATE_INT);



    $categoryGY = $category_id + 1;

    // khi load trang thi maCatItem va category_id se mat 
    // gan categosry_id1 lay data
    $category_id1 = filter_input(INPUT_POST, 'category_id1',  FILTER_VALIDATE_INT);
    $maCatItem1 = filter_input(INPUT_POST, 'maCatItem1',  FILTER_VALIDATE_INT);


    if ($category_id == NULL || $category_id == FALSE) {
        $category_id  = 1;
    }

    if ($maCatItem1 == NULL && $category_id1 == NULL) {
        $category_id1  = $category_id;
        $maCatItem1  = $category_id * 6;
    }
    //  nếu $categoryGY (category gợi ý ) == 6 (5 + 1 )  thì cho nó bằng 5 vì kh có category nào = 6 


    $categories = get_categories();

    // lấy CategoryName đã return nhờ categoryID ;
    $category_name = get_category_name($category_id1);


    // dữ liệu dùng cho cateitem sidebar  
    // lấy thông tin tử bảng cateItem  vơi đk là categoryID = ? 
    $category = get_cateItem($category_id1);
    // END  dữ liệu dùng cho cateitem sidebar  







    // lấy tenCatItem từ bảng cateItem thông qua maCatitem (maCatItem lấy từ form cateitem sidebar)













    // san pham sale > 30%  theo category   
    $productSale = get_product_sale_by_category($category_id1); // chuong trinh khuyen mai > 30% 

    // sản phẩm gợi ý cho ban file: daokeo.php
    if ($categoryGY == 6) {
        $categoryGY = 2;
    }
    $productGY = get_productsGY($categoryGY, 1, 8);



    // lưu hai giá trị vào session 
    // session_start();
    $_SESSION['category_id1'] = $category_id1;
    $_SESSION['maCatItem1'] = $maCatItem1;
    

    // dung session ben dangnhap_xuly.php de lay du lieu 
    if (isset($_COOKIE['taikhoan']) and isset($_COOKIE['matkhau'])) {
        echo "taikhoan : " . $_COOKIE['taikhoan'];
        echo "<br>matkhau : " . $_COOKIE['matkhau'];
        echo "<br>maPQ : " . $_COOKIE['maPQ'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        if (isset($_SESSION['taikhoan']) and isset($_SESSION['matkhau'])) {
            echo "taikhoan : " . $_COOKIE['taikhoan'];
            echo "<br>matkhau : " . $_COOKIE['matkhau'];
            echo "<br>maPQ : " . $_COOKIE['maPQ'];
            echo "<br><a href='logout.php'>Logout</a>";
        } else
            echo "<script>alert('Ban chua dang nhap vui long dang nhap lai');
          location.href='../view/dangnhap.php';</script>";
    }



    $taikhoan = $_SESSION['taikhoan'];
    $matkhau = $_SESSION['matkhau'];
    $maPQ = $_SESSION['maPQ'];
    $maND = $_SESSION['maND'];

    echo '<br>category_id1 =' . $category_id1;
    echo '<br>maCatItem1   =' . $maCatItem1;
    echo '<br>taikhoan='.$taikhoan;
    echo '<br>matkhau='.$matkhau;
    echo '<br>maPQ='.$maPQ;
    echo '<br>maND='.$maND;

    $tenND = get_tenND($maND);
    $_SESSION['tenND'] = $tenND;

    // $tenCatItem = get_tenCatItem($maCatItem1);

    // $tenCatItem = get_tenCatItem($maCatItem1);


    include('daokeo.php');
} else if ($action == 'detail_product') {
    if (isset($_COOKIE['taikhoan']) and isset($_COOKIE['matkhau'])) {
        echo "taikhoan : " . $_COOKIE['taikhoan'];
        echo "<br>matkhau : " . $_COOKIE['matkhau'];
        echo "<br>maPQ : " . $_COOKIE['maPQ'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        if (isset($_SESSION['taikhoan']) and isset($_SESSION['matkhau'])) {
            echo "taikhoan : " . $_COOKIE['taikhoan'];
            echo "<br>matkhau : " . $_COOKIE['matkhau'];
            echo "<br>maPQ : " . $_COOKIE['maPQ'];
            echo "<br><a href='logout.php'>Logout</a>";
        } else
            echo "<script>alert('Ban chua dang nhap vui long dang nhap lai');
          location.href='../view/dangnhap.php';</script>";
    }
    
    $taikhoan = $_SESSION['taikhoan'];
    $matkhau = $_SESSION['matkhau'];
    $maPQ = $_SESSION['maPQ'];
    $maND = $_SESSION['maND'];

    echo '<br>category_id1 =' . $category_id1;
    echo '<br>maCatItem1   =' . $maCatItem1;
    echo '<br>taikhoan='.$taikhoan;
    echo '<br>matkhau='.$matkhau;
    echo '<br>maPQ='.$maPQ;
    echo '<br>maND='.$maND;

    $tenND = get_tenND($maND);
    if($tenND){
        echo "thahc ong";
    }else{
        echo 'that bai ';
    }
    // $_SESSION['tenND'] = $tenND;

    // echo '<br>tenND = '.$tenND;


    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

    if ($product_id == NULL || $product_id == false || $category_id == false || $category_id == false) {
        echo 'productID : ' . $product_id . '<br>categoryID :' . $category_id;
    } else {
        $product = get_product($product_id);
        $products =  get_products_by_category_id1($category_id);
        $categories = get_categories();
        include('information.php');
    }
} else if ($action == 'giohang') {
    if (isset($_COOKIE['taikhoan']) and isset($_COOKIE['matkhau'])) {
        echo "taikhoan : " . $_COOKIE['taikhoan'];
        echo "<br>matkhau : " . $_COOKIE['matkhau'];
        echo "<br>maPQ : " . $_COOKIE['maPQ'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        if (isset($_SESSION['taikhoan']) and isset($_SESSION['matkhau'])) {
            echo "taikhoan : " . $_COOKIE['taikhoan'];
            echo "<br>matkhau : " . $_COOKIE['matkhau'];
            echo "<br>maPQ : " . $_COOKIE['maPQ'];
            echo "<br><a href='logout.php'>Logout</a>";
        } else
            echo "<script>alert('Ban chua dang nhap vui long dang nhap lai');
          location.href='../view/dangnhap.php';</script>";
    }
    
    $taikhoan = $_SESSION['taikhoan'];
    $matkhau = $_SESSION['matkhau'];
    $maPQ = $_SESSION['maPQ'];
    $maND = $_SESSION['maND'];

    echo '<br>category_id1 =' . $category_id1;
    echo '<br>maCatItem1   =' . $maCatItem1;
    echo '<br>taikhoan='.$taikhoan;
    echo '<br>matkhau='.$matkhau;
    echo '<br>maPQ='.$maPQ;
    echo '<br>maND='.$maND;

    $tenND = get_tenND($maND);
    $_SESSION['tenND'] = $tenND;


    $categories = get_categories();
    include('giohang.php');
} 


else if ($action == 'trangchu') {
    if (isset($_COOKIE['taikhoan']) and isset($_COOKIE['matkhau'])) {
        echo "taikhoan : " . $_COOKIE['taikhoan'];
        echo "<br>matkhau : " . $_COOKIE['matkhau'];
        echo "<br>maPQ : " . $_COOKIE['maPQ'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        if (isset($_SESSION['taikhoan']) and isset($_SESSION['matkhau'])) {
            echo "taikhoan : " . $_COOKIE['taikhoan'];
            echo "<br>matkhau : " . $_COOKIE['matkhau'];
            echo "<br>maPQ : " . $_COOKIE['maPQ'];
            echo "<br><a href='logout.php'>Logout</a>";
        } else
            echo "<script>alert('Ban chua dang nhap vui long dang nhap lai');
          location.href='../view/dangnhap.php';</script>";
    }
    
    $taikhoan = $_SESSION['taikhoan'];
    $matkhau = $_SESSION['matkhau'];
    $maPQ = $_SESSION['maPQ'];
    $maND = $_SESSION['maND'];

    echo '<br>category_id1 =' . $category_id1;
    echo '<br>maCatItem1   =' . $maCatItem1;
    echo '<br>taikhoan='.$taikhoan;
    echo '<br>matkhau='.$matkhau;
    echo '<br>maPQ='.$maPQ;
    echo '<br>maND='.$maND;

    $tenND = get_tenND($maND);
    // $_SESSION['tenND'] = $tenND;
    if($tenND){
        echo "Thanhc ong ";
    }else{
        echo ' that  bai';
    }


    $categories = get_categories();
    // $product = get_products_by_category_id(4,24);
    $productNB =  get_productsNB(); // san phan noi bat 
    $productSale = get_product_sale(); // chuong trinh khuyen mai > 30% 
    $productsNew =  get_productsNew();

    include('trangchu.php');
}

























// else if($action == 'view_product'){
//     $product_id= filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);
//     if($product_id == NULL || $product_id == FALSE){
//         $error = 'Missing or incorrect product id.';
//         include('../errors/error.php');
//     }else{
//         $categories = get_categories();
//         $product  = get_product($product_id);

//         // get data in product
//         $code  = $product['productCode'];
//         $name  = $product['productName'];
//         $list_price = $product['listPrice'];

//         //calculate
//         $discount_percent = 30;   // sale 30%
//         $discount_amount  = round($list_price * ($discount_percent/100.00), 2 ) ;  // rounding
//         $unit_price       = $list_price - $discount_amount;

//         // fomal calculate
//         $discount_amount_f  = number_format($discount_amount, 2);
//         $unit_price_f       = number_format($unit_price, 2);

//         // get img && alt 
//         $image_filename = '../images/'.$code.'.png';
//         $image_alt      = 'Image:'.$code.'.png';

//         include('product_view.php');

//     }
    
// }
