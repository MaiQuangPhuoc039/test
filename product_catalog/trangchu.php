    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->

        <link rel="stylesheet" href="../css/header1.css">

        <link rel="stylesheet" href="../css/trangchucss.css">
        <link rel="stylesheet" href="../css/footer.css">
        <title>TRANG CHỦ</title>

    </head>

    <body>




        <header>
            <div class="gioithieu">
                <p class="tenweb">Houseware <span>&nbsp; - đồ gia dụng tốt nhất</span></p>
                <p class="ship"> <i class="fa-solid fa-truck"></i> FREE SHIP VỚI ĐƠN HÀNG TRÊN 1 TRIỆU
                    <a href="">- xem chi tiết </a>
                </p>
            </div>
            <!-- end giới thiệu  -->

            <div class="thaotac">

                <div class="web">
                    <div class="logo">
                        <img src="../images/logo.png" alt="">
                        <p class="p1">Houseware </p>
                    </div>
                    <div id="work">

                        <ul>
                            <li id="user"><a href="#"><i id="icon" class="fa-solid fa-user"></i> </a></li>
                            <li id="lasticon"><a href="#"><i id="icon" class="fa fa-bag-shopping"></i></a> </li>
                        </ul>

                    </div>
                </div>

                <div class="lam">

                    <div class="timkiem">
                        <input type="text" class="nhaptimkiem " placeholder="  Tìm kiếm...">
                        <p class="nuttimkiem"><a href=""> <i class="fa-solid fa-magnifying-glass"></i></a> </p>
                    </div>
                    <!-- end timkiem -->

                    <div id="work1" class="lam1">

                        <ul>
                            <li id="phanquyen"><i id="icon" class="fa-solid fa-user">
                                    <div id="listpq">
                                        <form id="per" action="">
                                            <input id="sub" type="submit" value="Tôi">
                                        </form>

                                        <form id="mana" action="">
                                            <input id="sub" type="submit" value="Quản lý trang web">
                                        </form>

                                        <form id="logout" action="">
                                            <input id="sub" type="submit" value="Quản lý trang web">
                                        </form>

                                    </div>
                                </i><a href="#"><span>Đăng nhập</span></a></li>
                            <li><a href="?action=giohang"><i id="icon" class="fa fa-bag-shopping"></i> </a><span class="login">Giỏ hàng </span></li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- end thao tác -->

            <!-- starts menu  -->

        </header>
        <div id="header">
            <nav class="container">

                <p id="resmenu1"><i class='bx bx-menu'></i></p>
                <ul id="main-menu">
                    <li><a href="">TRANG CHỦ</a></li>
                    <li><a href="?action=list_products">SẢN PHẨM</a>


                        <!-- class sub-menu la ul con  -->
                        <ul class="sub-menu">

                            <?php foreach ($categories as $cat) : ?>
                                <li>

                                    <a href="?category_id=<?php echo $cat['categoryID']; ?>">
                                        <?php echo $cat['categoryName']; ?>
                                    </a>
                                    <ul class="sub-menu">
                                        <?php foreach ($category as $cate) : ?>

                                            <li>
                                                <!-- <a href="?maCatItem= echo $cate['maCatItem']; ?>">
                                                    echo $cate['tenCatItem']; ?>
                                                </a> -->
                                                <form action="." method="POST">
                                                    <input type="hidden" name="action" value="list_products">
                                                    <input type="hidden" name="category_id" value="<?php echo $cate['categoryID']; ?>">
                                                    <input type="hidden" name="maCatItem" value="<?php echo $cate['maCatItem']; ?>">
                                                    <input id="sidebarsub" type="submit" value="<?php echo $cate['maCatItem']; ?>">
                                                </form>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

                            <?php endforeach; ?>


                            <!-- <li><a href="">menu 2.2</a></li>
                        <li><a href="">menu 2.3</a></li>
                        <li><a href="">menu 2.4</a></li> -->
                        </ul>
                    </li>

                    <li><a href="">TIN TỨC</a></li>
                    <li><a href="">VIDEO</a></li>
                    <li><a href="">HỖ TRỢ</a></li>

                </ul>
            </nav>
        </div>
        <div id="wrapper">
        </div>








        </div>

        <div id="menu">
            <ul>
                <li id="reshome"><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
                <li id="resvideo"><a href="#"><i class="fa-regular fa-circle-play"></i></i> Video</a></li>
                <li id="resmenu"><a href="#"><i class="fa-solid fa-bars"></i> Menu</a></li>
                <li id="resuser"><a href="#"><i class="fa-regular fa-user"></i> Tôi </a></li>
            </ul>
        </div>



        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function() {
                $('.sub-menu').parent('li').addClass('has-child');
            });
        </script>

        <div class="anhgioithieu">
            <div class="image-container">
                <img src="../images/tc1.png" alt="">
                <img src="../images/tc2.png" alt="">
                <img src="../images/tc3.png" alt="">
                <img src="../images/tc4.png" alt="">
                <img src="../images/tc5.png" alt="">
                <img src="../images/tc.jpg" alt="">

            </div>
        </div>
        <script src="../js/script1.js"></script><br>
        <!-- end anhgioithieu -->


        <!-- </header> -->
        <!-- end header  -->

        <!-- starts main  -->

        <main>


            <div id="content">
                <div id="list_product">

                    <p class="muc">SẢN PHẨM NỔI BẬT</p>

                    <div id="new_product">



                        <?php foreach ($productNB as $pro) : ?>

                            <div class="product_item">





                                <form action="index.php" method="POST">
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

                                </form>

                            </div>
                            <!-- end product_item  -->
                        <?php endforeach; ?>


                    </div>
                    <!-- end new product  -->

                    <form action="">
                        <input id="seeall" type="submit" value="Xem tất cả >> ">
                    </form>








                    <p class="muc">CHƯƠNG TRÌNH KHUYẾN MÃI </p>

                    <div id="new_product">

                        <div id="prosale" class="image-container">
                            <a href="?action=khuyenmai"><img src="../images/km1.webp" alt=""></a>
                            <a href="?action=khuyenmai"><img src="../images/km5.webp" alt=""></a>
                            <a href="?action=khuyenmai"><img src="../images/km3.webp" alt=""></a>
                        </div>
                        <form action="">
                            <input id="seeall1" type="submit" value="Xem tất cả >> ">
                        </form>
                    </div>
                    <!-- end new product  -->

                    <!-- hiển thị những sản phẩm mới là những sản phẩm mới được nhập vào database trước tháng 12   -->
                    <p class="muc">SẢN PHẨM MỚI</p>

                    <div id="new_product">

                        <?php foreach ($productsNew as $pro) : ?>

                            <div class="product_item">





                                <form action="index.php" method="POST">
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

                                </form>

                            </div>
                            <!-- end product_item  -->
                        <?php endforeach; ?>


                    </div>
                    <!-- end new product  -->

                    <form action="">
                        <input id="seeall" type="submit" value="Xem tất cả >> ">
                    </form>


                    <!-- bai viet noi bat  -->
                    <p class="muc">BÀI VIẾT NỔI BẬT</p>

                    <div id="new_product">

                        <div id="prosale" class="image-container">
                            <a href="?action=khuyenmai"><img src="../images/km1.webp" alt=""></a>
                            <a href="?action=khuyenmai"><img src="../images/km5.webp" alt=""></a>
                            <a href="?action=khuyenmai"><img src="https://bizweb.dktcdn.net/100/350/142/files/dao-thai-thitnhat-ban-cao-cap-1.jpg?v=1701165130670" alt=""></a>
                            
                        </div>
                        <form action="">
                            <input id="seeall1" type="submit" value="Xem tất cả >> ">
                        </form>
                    </div>
                    <!-- end new product  -->


                    





                </div>
                <!-- end list_product -->

            </div>
            <!-- end content  -->

        </main>

        <!-- <div id="page" action="">
            for ($i = 1; $i < 6; $i++) : ?>
                  echo '<a href="?product_list?page=' . $i . '">' . $i . '</a>  '; ?>
           <!-- #region  endfor; ?>
        </div> -->


        <!-- end main  -->

        <!-- starts footer  -->
        <?php include '../view/foot.php'; ?>