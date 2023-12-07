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
    <!-- <link rel="stylesheet" href="../css/giohang.css">
    <link rel="stylesheet" href="../css/inf.css"> -->

    <link rel="stylesheet" href="../css/dangky.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>login</title>

   

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
                                        <input id="sub" type="submit" value="Đăng xuất ">
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


                        
                    </ul>
                </li>

                <li><a href="tintuc.php">TIN TỨC</a></li>
                <li><a href="video.php">VIDEO</a></li>
                <li><a href="hotro.php">HỖ TRỢ</a></li>

            </ul>
        </nav>
    </div>
    