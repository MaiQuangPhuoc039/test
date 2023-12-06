<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/khachhang.css">
    <link rel="stylesheet" href="../css/update_pro.css">
    <title>Quản lí khách hàng</title>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../images/logo.png" alt="">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="homeadmin.html">
                    <!-- <span class="material-symbols-outlined">grid_view</span> -->
                    <h3>Trang chủ</h3>
                </a>
                <a href="?action=list_nguoidung">
                    <!-- <span class="material-symbols-outlined">person</span>  -->
                    <h3>Quản lý tài khoản</h3>
                </a>
                <a href="?action=list_products">
                    <!-- <span class="material-symbols-outlined">inventory</span> -->
                    <h3>Quản lý sản phẩm</h3>
                </a>
                <a href="donhang.html">
                    <!-- <span class="material-symbols-outlined">receipt_long</span> -->
                    <h3>Quản lí đơn hàng</h3>
                </a>
                <a href="phantich.html">
                    <!-- <span class="material-symbols-outlined">insights</span> -->
                    <h3>Phân tích</h3>
                </a>
                <a href="#">
                    <!-- <span class="material-symbols-outlined">mail_outline</span> -->
                    <h3>Tin nhắn</h3>
                    <span class="message-count">26</span>
                </a>

                <a href="#">
                    <!-- <span class="material-symbols-outlined">report_gmailerrorred</span> -->
                    <h3>Báo cáo</h3>
                </a>
                <a href="#">
                    <!-- <span class="material-symbols-outlined">settings</span> -->
                    <h3>Cài đặt</h3>
                </a>
                <a href="home.html">
                    <!-- <span class="material-symbols-outlined">logout</span> -->
                    <h3>Đăng xuất</h3>
                </a>
            </div>
        </aside>
        <!---------------- END OF ASIDE ----------------->
        <main>
            <div class="top">
                <h2>Thông tin sản phẩm</h2>
                <section>


                    <form action="" method="post" enctype="multipart/form-data" name="form1">
                        <table >
                            <input type="hidden" name="action" value="product_update">



                            <tr>
                                <td  >
                                    category
                                </td>
                                <td>

                                    <select name="category_id" id="">
                                        <option value="">-----select category ----</option>
                                        <?php foreach ($categories as $cat) : ?>

                                            if($categories){
                                            <option value="<?php echo $cat['categoryID']; ?>">
                                                <?php echo $cat['categoryName']; ?>
                                            </option>
                                            }
                                        <?php endforeach; ?>
                                    </select>

                                </td>
                            </tr>

                            <tr>
                                <td  >
                                    brand
                                </td>
                                <td>
                                    <select name="brand_id" id="">
                                        <option value="">-----select brands ----</option>
                                        <?php foreach ($brands as $brand) : ?>
                                            <option value="<?php echo $brand['brandID']; ?>">
                                                <?php echo $brand['brandName']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <?php foreach ($product as $pro) : ?>
                                <input type="hidden" name="product_id" value="<?php echo $pro['productID'];?>"  id="">
                            <tr>
                                <td  >
                                    product_code
                                </td>
                                <td>
                                <input type="text" name="product_code" value="<?php echo  $pro['productCode']; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    product_name
                                </td>
                                <td>
                                    <input type="text" name="product_name" value="<?php echo  $pro['productName']; ?>" />

                                </td>
                            </tr>
                            <tr>
                        <td >image</td>
                        <td><img style="width: 300px; height: 300px;" src="../images/<?php echo $pro['productImg']; ?>"  alt=""></td>
                    </tr>
                    <tr>
                        <td  >&nbsp;</td>
                        <td> 
                                  <input type="file" name="image" id="image" />
                                  <input type="hidden" name="ten_anh" value="<?php echo $pro['productImg']; ?>">
                        </td>
                    </tr>


                            <tr>
                                <td >
                                    product_price
                                </td>
                                <td>
                                <input type="text" name="product_price" value="<?php echo  $pro['listPrice']; ?>" />

                                </td>
                            </tr>
                            <tr id="but">
                                <td ></td>
                                 <td id="ok">
                                    <input type="submit" name="Sua" value="SỬA" />
                                
                               
                                    <input type="reset" name="Huy" value="HỦY" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php endforeach; ?>

                </section><br><br>
               
            </div>
            
        </main>
    </div>
</body>

</html>