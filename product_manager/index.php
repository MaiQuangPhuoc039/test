<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');
require('../model/brand_db.php');
require('../model/nguoidung_db.php');
require('../model/phanquyen_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}



if ($action == 'list_products') {
    if (isset($_GET['product_list?page'])) {
        $page = $_GET['product_list?page'];
    } else {
        $page = 1;
    }
    $row_count= products();
    $limit =10; 
    $star  = ($page*$limit) - $limit;
    $total_page =( $row_count / $limit)+0.9;
  
     if($page ==NULL || $page == false
     ){
        echo $page;
     }else{
            $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
            if ($category_id == NULL || $category_id == FALSE) {
                $category_id = 1;
            }
            $category_name = get_category_name($category_id);
            $categories = get_categories();
            $products = get_products_by_category($star,$limit);
            
            include('sanpham.php');
     }

    
    
} else if ($action == 'delete_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    // $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    if (
        $product_id == NULL ||
        $product_id == FALSE
    ) {
         echo "sai";
    } else {
        delete_product($product_id);
        header('location: .?action=list_products');
    }
} else if ($action == 'list_categories') {
    $categories = get_categories();
    include('category_list.php');
} else if ($action == 'add_category') {
    $name = filter_input(INPUT_POST, 'name');
    if ($name == NULL) {
        $error = "Invalid product name. Check all fields and try again.";
        include('view/error.php');
    } else {
        add_category($name);
        header('location: .?action=list_categories');
    }
} else if ($action == 'delete_category') {
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    delele_category($category_id);
    header('location: .?action=list_categories');
} else if ($action == 'update_category') {

    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    if ($category_id == NULL ||  $category_id == false) {
        echo   $category_id;
    } else {
        $category = get_category($category_id);
        include('category_update.php');
    }
} else if ($action == 'update') {
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $category_name  = filter_input(INPUT_POST, 'catname_update');
    if ($category_id == NULL ||  $category_id == false || $category_name == NULL ||  $category_name == false) {
        echo   $category_id . $category_name;
    } else {
        update_category($category_id, $category_name);
        header('location: .?action=list_categories');
    }
}else if ($action == 'list_brands') {
    $brands = get_brands();
    include('brand_list.php');
} else if ($action == 'add_brand') {
    $name = filter_input(INPUT_POST, 'namebr');
    if ($name == NULL) {
        $error = "Invalid product name. Check all fields and try again.";
        include('view/error.php');
    } else {
        add_brand($name);
        header('location: .?action=list_brands');
    }
} else if ($action == 'delete_brand') {
    $brand_id = filter_input(INPUT_POST, 'brand_id', FILTER_VALIDATE_INT);
    delele_brand($brand_id);
    header('location: .?action=list_brands');
} else if ($action == 'update_brand') {

    $brand_id = filter_input(INPUT_POST, 'brand_id', FILTER_VALIDATE_INT);
    if ($brand_id == NULL ||  $brand_id == false) {
        echo   $brand_id;
    } else {
        $brand = get_brand($brand_id);
        include('brand_update.php');
    }
} else if ($action == 'update_br') {
    $brand_id = filter_input(INPUT_POST, 'brand_id', FILTER_VALIDATE_INT);
    $brand_name  = filter_input(INPUT_POST, 'braname_update');
    if ($brand_id == NULL ||  $brand_id == false || $brand_name == NULL ||  $brand_name == false) {
        echo   $brand_id . $brand_name;
    } else {
        update_brand($brand_id, $brand_name);
        header('location: .?action=list_brands');
    }
}

// add product

else if ($action == 'add_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $product = get_product($product_id);
    $categories = get_categories();
    $brands = get_brands();
    include('product_add1.php'); 
}else if ($action == 'product_add') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $brand_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code =  filter_input(INPUT_POST, 'product_code');
    $name =  filter_input(INPUT_POST, 'product_name');
    $price=  filter_input(INPUT_POST, 'product_price');
    $img = $_FILES['image']['name'];
    $anhminhhoa_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp, "../images/" . $img);
    if ($code == NULL ||  $code == false  ||
        $name == NULL ||  $name == false || $price == NULL ||  $price == false  ||
        $category_id == NULL ||  $category_id == false || $brand_id == NULL ||  $brand_id == false ) {
        echo   $code.",".$name.",".$price.",".$category_id.",".$brand_id ;
    } else {
        add_product( $code,$name,$category_id, $brand_id,$img, $price);
        header('location: .?action=list_products');
    }
}

// update product
else if ($action == 'update_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $product = get_product($product_id);
    $categories = get_categories();
    $brands = get_brands();
    include('product_update1.php'); 
}else if ($action == 'product_update') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $brand_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code =  filter_input(INPUT_POST, 'product_code');
    $name =  filter_input(INPUT_POST, 'product_name');
    $price=  filter_input(INPUT_POST, 'product_price');
    $ten_file_tai_len = "";
    if (isset($_FILES["image"]["name"])) $ten_file_tai_len = $_FILES["image"]["name"];
    if ($ten_file_tai_len != "") {
        $img = $ten_file_tai_len;
    } else {
        if (isset($_POST['ten_anh']))
         $img = $_POST['ten_anh'];
    }
    move_uploaded_file($_FILES['image']['tmp_name'], "../images/" . $ten_file_tai_len);
    $duong_dan_anh_cu = "../images/" . filter_input(INPUT_POST, "ten_anh");
    unlink($duong_dan_anh_cu);
    if ($product_id == NULL ||  $product_id == false || $code == NULL ||  $code == false  ||
        $name == NULL ||  $name == false || $price == NULL ||  $price == false  ||
        $category_id == NULL ||  $category_id == false || $brand_id == NULL ||  $brand_id == false ) {
        echo   $product_id .",".$code.",".$name.",".$price.",".$category_id.",".$brand_id ;
    } else {
        update_product($product_id, $code,$name,$category_id, $brand_id,$img, $price);
        header('location: .?action=list_products');
    }

    // show list nguoidung 

    }else if ($action == 'list_nguoidung') {
       $nguoidung = get_nguoidung();
       $phanQuyen= get_phanquyen();
        include('khachhang.php'); 
    }else if ($action == 'add_nguoidung') {
        // $nguoidung = get_nguoidung();
        $phanQuyen= get_phanquyen(); 
         include('add_nguoidung.php'); 
     }
     // them nguoi dung
     else if ($action == 'nguoidung_add') {
        $ma_pq = filter_input(INPUT_POST, 'ma_pq', FILTER_VALIDATE_INT);
        $ho_nd =  filter_input(INPUT_POST, 'ho_nd');
        $ten_nd =  filter_input(INPUT_POST, 'ten_nd');
        $diachi_nd =  filter_input(INPUT_POST, 'diachi_nd');
        $email_nd=  filter_input(INPUT_POST, 'email_nd');
        $sdt =  filter_input(INPUT_POST, 'sdt_nd');
        $gioitinh_nd=  filter_input(INPUT_POST, 'gioitinh_nd');
        $taikhoan_nd =  filter_input(INPUT_POST, 'taikhoan_nd');
        $matkhau_nd=  filter_input(INPUT_POST, 'matkhau_nd');
         

        if ($ho_nd == NULL ||  $ho_nd == false || $ten_nd == NULL ||  $ten_nd == false  ||
        $diachi_nd == NULL ||  $diachi_nd == false || $email_nd == NULL ||  $email_nd == false  ||
        $sdt == NULL ||  $sdt == false || $gioitinh_nd == NULL ||  $gioitinh_nd == false ||
        $taikhoan_nd == NULL ||  $taikhoan_nd == false || $matkhau_nd == NULL ||  $matkhau_nd == false  ||
        $ma_pq == NULL ||  $ma_pq == false 
        ) {
        echo   $ho_nd .",".$ten_nd.",".$diachi_nd.",".$email_nd.",".$sdt.",".$gioitinh_nd .",".$taikhoan_nd.",".$matkhau_nd.",".$ma_pq;
        } 
        
        else {
        add_nguoidung($ho_nd,$ten_nd,$diachi_nd,$email_nd,$sdt,$gioitinh_nd,$taikhoan_nd,$matkhau_nd,$ma_pq);
        $phanQuyen= get_phanquyen(); 
        header('location: .?action=list_nguoidung');
        }
     }

     // xoa nguoi dung
     else if ($action == 'delete_nguoidung') {
        $ma_nd = filter_input(INPUT_POST, 'ma_nd', FILTER_VALIDATE_INT);
         
        if (
            $ma_nd == NULL || $ma_nd == FALSE  
        ) {
             echo $ma_nd;
        } else {
            delele_nguoidung($ma_nd);
            header('location: .?action=list_nguoidung');
        }
    }else if($action == 'update_nguoidung'){
        $ma_nd = filter_input(INPUT_POST, 'ma_nd', FILTER_VALIDATE_INT);
        if($ma_nd == NULL || $ma_nd == false ){
            echo $ma_nd;
        }else
        $phanQuyen= get_phanquyen(); 
        $nguoiDung = get_nguoidung_by_maND($ma_nd);
        include('update_nguoidung.php'); 
    }else if($action == 'nguoidung_update'){
        $ma_nd = filter_input(INPUT_POST, 'ma_nd', FILTER_VALIDATE_INT);
        $ma_pq = filter_input(INPUT_POST, 'ma_pq', FILTER_VALIDATE_INT);
        $ho_nd =  filter_input(INPUT_POST, 'ho_nd');
        $ten_nd =  filter_input(INPUT_POST, 'ten_nd');
        $diachi_nd =  filter_input(INPUT_POST, 'diachi_nd');
        $email_nd=  filter_input(INPUT_POST, 'email_nd');
        $sdt =  filter_input(INPUT_POST, 'sdt_nd');
        $gioitinh_nd=  filter_input(INPUT_POST, 'gioitinh_nd');
        $taikhoan_nd =  filter_input(INPUT_POST, 'taikhoan_nd');
        $matkhau_nd=  filter_input(INPUT_POST, 'matkhau_nd');
         
        if($ma_nd == NULL || $ma_nd == false ){
            echo $ma_nd;
        }else{
            update_nguoidung($ma_nd,$ho_nd,$ten_nd,$diachi_nd,$email_nd,$sdt,$gioitinh_nd,$taikhoan_nd,$matkhau_nd,$ma_pq);
        header('location: .?action=list_nguoidung');
        }
       
    
    } 
     
     