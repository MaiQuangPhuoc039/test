<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/sanpham.css">
    <title>Quản lí sản phẩm</title>
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
                <a href="homeadmin.php">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Trang chủ</h3>
                </a>
                <a href="?action=list_nguoidung">
                    <span class="material-symbols-outlined">person</span> 
                    <h3>Quản lý tài khoản</h3>
                </a>
                <a href="?action=list_products">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Quản lý sản phẩm</h3>
                </a>
                <a href="donhang.php">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Quản lí đơn hàng</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">insights</span>
                    <h3>Phân tích</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">mail_outline</span>
                    <h3>Tin nhắn</h3>
                    <span class="message-count">26</span>
                </a>

                <a href="#">
                    <span class="material-symbols-outlined">report_gmailerrorred</span>
                    <h3>Báo cáo</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Cài đặt</h3>
                </a>
                <a href="home.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Đăng xuất</h3>
                </a>
            </div>
        </aside>
        <!-- ------ END OF ASIDE ------- -->
        <main>
            <div class="top">
                <h2>Tất cả sản phẩm</h2>
                <button type="button" id="add"><a  href="?action=add_product">Thêm sản phẩm </a></button>

                <table>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Thương hiệu </th>
                        <th>Hình ảnh</th>
                        <th>Giá thành</th>
                        <th>&emsp;</th>
                    </tr>

                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?php echo $product['productID']; ?></td>
                            <td><?php echo $product['productName']; ?></td>
                            <td><?php echo $product['categoryName']; ?></td>
                            <td><?php echo $product['brandName']; ?></td>
                            <td><img style="width: 80px; height: 70px; padding: 10px" src="../images/<?php echo $product['productImg']; ?>" alt=""></td>
                            <td class="right"><?php echo $product['listPrice']; ?></td>

                            <td>
                                <form action="." method="POST">
                                    <input type="hidden" name="action" value="delete_product">
                                    <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                                    <input id="work" type="submit" value="xóa">
                                </form>
                            </td>
                            <td>
                                <form action="." method="POST">
                                    <input type="hidden" name="action" value="update_product">
                                    <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                                    <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>">
                                    <input type="hidden" name="brand_id" value="<?php echo $product['brandID']; ?>">
                                    <input id="work" type="submit" value="sửa">
                                </form>
                            </td>


                        </tr>

                    <?php endforeach; ?>

                </table>

                <div id="page" action="">
                    <?php for ($i = 1; $i < $total_page; $i++) : ?>
                        <?php echo '<a href="?product_list?page=' . $i . '">' . $i . '</a>  '; ?>
                    <?php endfor; ?>
                </div>


            </div>
           
        </main>
    </div>
    <script>
        const input = document.getElementById('myImage');
        const preview = document.getElementById('imagePreview');

        input.addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(event) {
                preview.src = event.target.result;
            };

            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>