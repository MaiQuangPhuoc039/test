<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/khachhang.css">
    <title>Quản lí tài khoản</title>
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
                    <!-- <span class="material-symbols-outlined">logout</span>s -->
                    <h3>Đăng xuất</h3>
                </a>
            </div>
        </aside>
        <!---------------- END OF ASIDE ----------------->
        <main>
            <div class="top">
                <h2>Thông tin tài khoản</h2>
                <button type="button" id="add"><a  href="?action=add_nguoidung">Thêm tài khoản </a></button>
                <table>
                    <tr>
                        <th>maND</th>
                        <th>taikhoan</th>
                        <th>diachi </th>
                        <th>SDT </th>
                        
                        <th>email</th>
                        <th>quyền hạn</th>
                        <th>&emsp;</th>
                    </tr>

                    <?php foreach ($nguoidung as $nguoiDung) : ?>

                        <tr>

                            <td><?php echo $nguoiDung['maND']; ?></td>
                            <td><?php echo $nguoiDung['taikhoan']; ?></td>
                            <td><?php echo $nguoiDung['diachi']; ?></td>
                            <td><?php echo $nguoiDung['sdt']; ?></td>
                          
                            <td><?php echo $nguoiDung['email']; ?></td>

                            <td><?php echo $nguoiDung['tenquyen']; ?></td>



                            <td>
                                <form action="." method="POST">
                                    <input type="hidden" name="action" value="delete_nguoidung">
                                    <input type="hidden" name="ma_nd" value="<?php echo $nguoiDung['maND']; ?>">
                                    <input id="work" type="submit" value="xóa">
                                </form>
                            </td>

                            <td>
                                <form action="." method="POST">
                                    <input type="hidden" name="action" value="update_nguoidung">
                                    <input type="hidden" name="ma_nd" value="<?php echo $nguoiDung['maND']; ?>">
                                    <input id="work" type="submit" value="sửa">
                                </form>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </table>
            </div>

        </main>
    </div>
</body>

</html>