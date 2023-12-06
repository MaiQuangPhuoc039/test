<?php
// Kiểm tra xem category_id1 và maCatItem1 có tồn tại và có giá trị hợp lệ không
if (isset($_GET['category_id1']) && isset($_GET['maCatItem1'])) {
    $category_id1 = $_GET['category_id1'];
    $maCatItem1 = $_GET['maCatItem1'];

    
    echo $category_id1.$maCatItem1;
} else {
    echo $category_id1.$maCatItem1;
}
?>
