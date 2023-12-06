<?php

session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
if (isset($_POST['addcart']) && ($_POST['addcart'])) {


    $product_id = $_POST['product_id'];

    $tensp = $_POST['tensp'];
    $hinh =  $_POST['hinh'];
    $gia =   $_POST['giasp'];
    $soluong =  $_POST['soluong'];
    $category_id = $_POST['category_id'];

    $fl = 0;
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][0] == $product_id) {
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][4];
            $_SESSION['giohang'][$i][4] = $soluongnew;
            break;
        }
    }

    if ($fl == 0) {
        $sp = [$product_id, $tensp, $hinh, $gia, $soluong, $category_id];
        $_SESSION['giohang'][] = $sp;
    }


    // var_dump($_SESSION['giohang']);
}
?>

<?php include '../view/head.php'; ?>
<style>
    .anhgioithieu {
        display: none;
    }

    #optionbuy {
         display: flex;
         padding: 10px ;
         
        width: 33%;
         align-items: center;
         justify-content: space-around;
    }
    #optionbuy p{
        background-color: green;
        color: white;
        border-radius: 3px;
        padding: 10px;
    }
    #optionbuy a{
       
        color: white;
        
    }
    #dat{
        background-color: green;
        color: white;
        border-radius: 3px;
        padding: 10px;
    }
    #dat2{
        background-color: green;
        color: white;
       
        
    }
</style>
<div id="cart">
    <table>
        <tr id="intro">
            <th scope="col">STT</th>

            <th scope="col">SẢN PHẨM</th>
            <th scope="col">HÌNH ẢNH</th>
            <th scope="col">GIÁ</th>
            <th class="th_count" scope="col">SỐ LƯỢNG</th>
            <th class="sum_tal" scope="col">THÀNH TIỀN</th>
            <th class="del" scope="col">&emsp;</th>
        </tr>

        <?php $tongtien = 0; ?>
        <?php if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $thanhtien =   $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
                $tongtien += $thanhtien; ?>
                <tr>
                    <th class="stt" scope="row"><?php echo $i + 1; ?></th>
                    <td><?php echo $_SESSION['giohang'][$i][1]; ?></td>
                    <td id="tdimg"><img src="../images/<?php echo $_SESSION['giohang'][$i][2]; ?>" alt=""></td>
                    <td><?php echo number_format( $_SESSION['giohang'][$i][3]); ?></td>
                    <td class="count">
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="update_count">
                            <!-- <input type="hidden" name="ma_nd" value="<?php echo $nguoiDung['maND']; ?>"> -->
                            <input type="number" min=1 value="<?php echo $_SESSION['giohang'][$i][4]; ?>">
                            <input class="act" type="submit" value="cập nhật">
                        </form>
                    </td>
                    <td><?php echo number_format($thanhtien); ?></td>
                    <td class="count">
                        <form action="." method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $_SESSION['giohang'][$i][0]; ?>">
                            <input type="hidden" name="category_id" value="<?php echo $_SESSION['giohang'][$i][5]; ?>">

                            <input type="hidden" name="action" value="detail_product">
                            <a style="border-radius: 5px;" class="act" href="giohang.php?delid=<?php echo $i; ?>">xóa</a>
                            <input class="act" type="submit" value="xem">
                        </form>
                    </td>

                </tr>

        <?php
            }
        }; ?>


        <tr id="intro">
            <th colspan="5" scope="col">TỔNG TIỀN CÁC ĐƠN HÀNG</th>


            <th style="border-left: solid white;" colspan="2" class="del" scope="col"><?php echo number_format($tongtien) .' VNĐ'; ?></th>
        </tr>

   

 </table>
    <div id="optionbuy">
         
            <form id="dat" action="">
                <input id="dat2" type="submit" value="ĐẶT HÀNG">
            </form>
        
        <p><a href="giohang.php?delcart=1">XÓA GIỎ HÀNG</a></p>
        <p><a href="index.php?action=list_products">TIẾP TỤC MUA SẮM</a></p>
    </div>

</div>




<!-- end main  -->

<!-- starts footer  -->
<?php include '../view/foot.php'; ?>