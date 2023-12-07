 

<?php 

session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
if (isset($_POST['addcart']) && ($_POST['addcart'])) {


    $product_id = $_POST['product_id'];

    $tensp = $_POST['tensp'];
    $hinh =  $_POST['hinh'];
    $gia =   $_POST['giasp'];
    $soluong =  $_POST['soluong'];

  
    $sp = [ $product_id, $tensp, $hinh,$gia, $soluong];
    $_SESSION['giohang'][] = $sp;
    // var_dump($_SESSION['giohang']);
}   


function showcart()
{
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $thanhtien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
            echo    ' <form action="index.php" method="POST">
            <input type="hidden" name="action" value="detail_product" />
            <input type="hidden" name="product_id" value="<?php echo '.$_SESSION['giohang'][$i][0].'; ?>">

            <tr>
                        <td scope="row">'.($i + 1).'</td>
                        <td>'. $_SESSION['giohang'][$i][1].'</td>
                        <td id="tdimg"><img src="../images/'.$_SESSION['giohang'][$i][2] .'" alt=""></td>
                        <td>'. $_SESSION['giohang'][$i][3].'</td>
                        <td>'. $_SESSION['giohang'][$i][4].'</td>
                        <td>'.number_format($thanhtien, 2);'</td>
                        <td> xóa </td>

                     </tr>   </form> ';
        }
    }
}




?>

<?php include '../view/head.php'; ?>



<div id="cart">
    <table>
        <tr id="intro">
            <th scope="col">STT</th>

            <th scope="col">SẢN PHẨM</th>
            <th scope="col">HÌNH ẢNH</th>
            <th scope="col">GIÁ</th>
            <th class="th_count" scope="col">SỐ LƯỢNG</th>
            <th class="sum_tal" scope="col">THÀNH TIỀN</th>
            <th class="del" scope="col">XÓA</th>
        </tr>



        <?php showcart(); ?>

        <!-- <tr>
            <td scope="row">1</td>
            <td>@twitter</td>
            <td id="tdimg"><img src="../images/logo.png" alt=""></td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>

        </tr> -->



    </table>
</div>




<!-- end main  -->

<!-- starts footer  -->
<?php include '../view/foot.php'; ?>




<!-- <form action="index.php" method="POST">
                        <input type="hidden" name="action" value="detail_product" />
                        <input type="hidden" name="product_id" value="<?php echo $pro['productID']; ?>">
                        <input type="hidden" name="category_id" value="<?php echo $pro['categoryID']; ?>">

                        <div id="img">
                           <img src="../images/<?php echo $pro['productImg']; ?>" alt="">
                        </div>
                        <div class="discount">-<?php echo $pro['giamgia']; ?>%</div>
                        <div class="infor_product_item">
                           <p class="product_name"><?php echo $pro['productName']; ?></p>
                           <div class="price">
                              <p><?php echo number_format($pro['listPrice']); ?><span>VNĐ</span></p>
                              <p><i class="fa fa-cart-shopping"></i> </p>
                           </div>

                        </div>
                        <input id="button" type="submit" value="XEM THÊM">
                        <!-- <button class="buy"><a href="#">MUA NGAY</a></button> -->

                     </form> -->

