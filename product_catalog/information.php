<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/header1.css">
    <link rel="stylesheet" href="../css/inf.css">

    <title>informartion</title>
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

                        <?php
                        if (isset($tenND)) {
                            echo ' </i><a href="../view/dangnhap.php"><i id="icon" class="fa-solid fa-user"></i><span style="border-radius:  20px; border: 1px solid pink ; background-color:  rgb(235, 227, 227);padding: 5px">' . $tenND . '</span></a></li>';
                        } else {
                            echo '<li><a href="#"><i id="icon" class="fa-solid fa-user"></i><span><php echo $tenND ;?></span></a></li>';
                        }
                        ?>

                        <!-- <li><a href="#"><i id="icon" class="fa-solid fa-user"></i><span style="border-radius:  20px; border: 1px solid pink ; background-color:  rgb(235, 227, 227);padding: 5px" >Tên 1</span></a></li> -->

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
                <li><a href="#">SẢN PHẨM</a>


                    <!-- class sub-menu la ul con  -->
                    <ul class="sub-menu">

                        <?php foreach ($categories as $cat) : ?>
                            <li>

                                <a href="?category_id=<?php echo $cat['categoryID']; ?>">
                                    <?php echo $cat['categoryName']; ?>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="">menu 3.1</a></li>
                                    <li><a href="">menu 3.2</a></li>
                                    <li><a href="">menu 3.3</a></li>
                                    <li><a href="">menu 3.4</a></li>
                                </ul>
                            </li>

                        <?php endforeach; ?>



                    </ul>
                </li>

                <li><a href="">TIN TỨC</a></li>
                <li><a href="">VIDEO</a></li>
                <li><a href="">HỖ TRỢ</a></li>

            </ul>
        </nav>
    </div>

    <main>
        <div id="main">

            <?php foreach ($product as $pro) : ?>

                <div id="information">
                    <div id="informartionimg">
                        <div id="main">
                            <img src="../images/<?php echo $pro['productImg']; ?>" alt="">
                        </div>
                        <div id="detail">
                            <img src="../images/<?php echo $pro['anh1']; ?>" alt="">
                            <img src="../images/<?php echo $pro['anh2']; ?>" alt="">
                            <img src="../images/<?php echo $pro['anh3']; ?>" alt="">
                        </div>
                    </div>
                    <div id="productinformation">
                        <p class="name"><?php echo $pro['productName']; ?></p>
                        <div class="price">
                            <p class="pricelast"><?php echo number_format(($pro['listPrice'] - ($pro['listPrice'] * $pro['giamgia']) / 100)); ?><span>VNĐ</span></p>
                            <p class="pricefirst"><del><?php echo number_format($pro['listPrice']); ?><span>VND</span></del></p>
                            <p class="discount">-<?php echo $pro['giamgia']; ?>%</p>

                        </div>
                        <p class="producer">Nhà Phân Phối : <span>Công Ty TNHH Conamo Việt Nam.</span></p>
                        <p class="producer">Tình trạng : <span><?php echo $pro['tinhtrang']; ?></span></p>
                        <p class="producer">Mã sản phẩm : <span><?php echo $pro['productCode']; ?></span></p>
                        <p class="producer">Vận chuyển : <span>Toàn quốc</span></p>

                        <form id="formleft" action="." method="POST">
                            <input type="hidden" name="action" value="giohang">
                            <input type="hidden" name="product_id" value="<?php echo $pro['productID']; ?>">
                            <input type="hidden" name="category_id" value="<?php echo $pro['categoryID']; ?>">
                            <input type="hidden" name="hinh" value="<?php echo $pro['productImg']; ?>">
                            <input type="hidden" name="tensp" value="<?php echo $pro['productName']; ?>">
                            <input type="hidden" name="giasp" value="<?php echo ($pro['listPrice'] - ($pro['listPrice'] * $pro['giamgia']) / 100); ?>">
                            <input class="num" name="soluong" type="number" min="1" value="1">

                            <div id="infform">
                                <input id="button" type="submit" name="addcart" value="THÊM VÀO GIỎ HÀNG">
                                <input id="button" type="submit" value="MUA NGAY">
                            </div>

                        </form>
                    </div>
                </div>

                <div id="describe">
                    <div id="productdescribe">
                        <p class="name">Mô tả sản phẩm</p>
                        <div id="parameter">
                            <p class="number">Thông số chi tiết </p>
                            <div class="listparamater">
                                <ul>
                                    <li class="para">
                                        <p class="p1">Màu sắc </p>
                                        <p id="p2"><?php echo $pro['mausac']; ?></p>
                                    </li>
                                    <li class="para">
                                        <p class="p1">Cân nặng </p>
                                        <p id="p2"><?php echo $pro['cannang']; ?></p>
                                    </li>
                                    <li class="para">
                                        <p class="p1">Kích thước</p>
                                        <p id="p2"><?php echo $pro['kichthuoc']; ?></p>
                                    </li>
                                    <li class="para">
                                        <p class="p1">Chất liệu </p>
                                        <p id="p2"><?php echo $pro['chatlieu']; ?></p>
                                    </li>
                                    <li class="para">
                                        <p class="p1">Bảo hành </p>
                                        <p id="p2"><?php echo $pro['baohanh']; ?></p>
                                    </li>
                                    <li class="para">
                                        <p class="p1">Thương hiệu từ</p>
                                        <p id="p2"><?php echo $pro['brandName']; ?></p>
                                    </li>
                                    <li class="para">
                                        <p class="p1">Nơi sản xuất </p>
                                        <p id="p2"><?php echo $pro['noisanxuat']; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="listproducts">
                        <p class="name">Sản phẩm liên quan </p>
                        <div id="listproduct">
                            <ul>
                                <?php foreach ($products as $pros) : ?>
                                    <li>
                                        <form action="index.php" method="POST">
                                            <input type="hidden" name="action" value="detail_product" />
                                            <input type="hidden" name="product_id" value="<?php echo $pros['productID']; ?>">
                                            <input type="hidden" name="category_id" value="<?php echo $pros['categoryID']; ?>">
                                            <img id="inf_img" src="../images/<?php echo $pros['productImg']; ?>" alt="">
                                            <div id="infpro_by_catid">
                                                <p class="product_name"><?php echo $pros['productName']; ?></p>
                                                <input id="sub" type="submit" value="xem chi tiết ">
                                            </div>
                                        </form>
                                    </li>
                                <?php endforeach; ?>

                            </ul>

                        </div>
                    </div>
                </div>


                <div id="evaluate">
                    <p class="name">Đánh giá & Nhận xét Bàn phím cơ DareU EK75 White Black DareU Dream switch</p>
                    <div id="evaluation">
                        <div class="evaluation1">
                            <p class="score">5.0/5</p>
                            <p class="sao">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </p>
                        </div>

                        <div class="evaluation2">
                            <ul>
                                <li class="5sao"> 5 <i class="fa-solid fa-star"></i> <button> </button> 1 đánh giá
                                </li>
                                <li class="5sao"> 4 <i class="fa-solid fa-star"></i> <button> </button> 1 đánh giá
                                </li>
                                <li class="5sao"> 3 <i class="fa-solid fa-star"></i> <button> </button> 1 đánh giá
                                </li>
                                <li class="5sao"> 2 <i class="fa-solid fa-star"></i> <button> </button> 1 đánh giá
                                </li>
                                <li class="5sao"> 1 <i class="fa-solid fa-star"></i> <button> </button> 1 đánh giá
                                </li>
                            </ul>
                        </div>




                    </div>
                    <div id="comment">
                        <ul>
                            <li>bàn phím ngon gõ êm stab ổn mỗi tội lần đầu dùng layout 75 ko biết nút print screen đâu</li>
                            <li>bàn phím ngon gõ êm stab ổn mỗi tội lần đầu dùng layout 75 ko biết nút print screen đâu</li>
                            <li>bàn phím ngon gõ êm stab ổn mỗi tội lần đầu dùng layout 75 ko biết nút print screen đâu</li>
                            <li>bàn phím ngon gõ êm stab ổn mỗi tội lần đầu dùng layout 75 ko biết nút print screen đâu</li>
                        </ul>
                    </div>




                </div>

            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>