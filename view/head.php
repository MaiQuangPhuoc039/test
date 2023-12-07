<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/header1.css">
    <link rel="stylesheet" href="../css/giohang.css">
    <link rel="stylesheet" href="../css/inf.css">

    <link rel="stylesheet" href="../css/main.css">
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
                                    <form id="per" action="../product_catalog/control_pro.php" method="POST">
                                        <input type="hidden" name="action" value="thongtincanhan">
                                        <input id="sub" type="submit" value="Tôi">
                                    </form>
                                    

                                    <form id="mana" action=""></form>
                                    <form id="mana" action="../product_catalog/control_pro.php" method="POST">
                                        <input type="hidden" name="action" value="quanlytrangweb">
                                        <input id="sub" type="submit" value="Quản lý trang web">
                                    </form>

                                    <form id="logout" action="../product_catalog/control_pro.php" method="POST">
                                        <input type="hidden" name="action" value="dangxuat">
                                        <input id="sub" type="submit" value="Đăng xuất ">
                                    </form>

                                </div>
                                <?php
                                if (isset($tenND)) {
                                    echo ' </i><a href="../view/dangnhap.php"><span style="border-radius:  20px; border: 1px solid pink ; background-color:  rgb(235, 227, 227);padding: 5px" >' . $tenND . '</span></a></li>';
                                } else {
                                    echo '<li><a href="#"><i id="icon" class="fa-solid fa-user"></i><span>Đăng nhập </span></a></li>';
                                }
                                ?>
                                <!-- </i><a href="#"><span><php echo $tenND;?></span></a></li> -->
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
                <li><a href="?action=trangchu">TRANG CHỦ</a></li>
                <li><a href="#">SẢN PHẨM</a>


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

                <li><a href="tintuc.php">TIN TỨC</a></li>
                <li><a href="video.php">VIDEO</a></li>
                <li><a href="hotro.php">HỖ TRỢ</a></li>

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