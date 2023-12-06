<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/homeadmin.css">
    <title>Trang chủ</title>
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
                <a href="homeadmin.php" class="active">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Trang chủ</h3>
                </a>
                <a href="khachhang.php">
                    <span class="material-symbols-outlined">person</span> 
                    <h3>Quản lý khách hàng</h3>
                </a>
                <a href="sanpham.php">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Quản lý sản phẩm</h3>
                </a>
                <a href="donhang.php" >
                    <span class="material-symbols-outlined">receipt_long</span>                     
                    <h3>Quản lí đơn hàng</h3>
                </a>
                <a href="phantich.php">
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
                <a href="login.html">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Đăng xuất</h3>
                </a>
            </div>
        </aside>
        <!---------------- END OF ASIDE ----------------->
        <main>
            <h1>Trang chủ</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">analytics </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Tổng doanh thu</h3>
                            <h1>$25,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">24h trước</small>
                </div>
                <!------------ END OF SALE ----------->
                <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Tổng chi phí</h3>
                            <h1>$14,160</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">24h trước</small>
                </div>
                <!------------ END OF EXPENSES ----------->
                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Tổng thu nhập</h3>
                            <h1>$10,864</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">24h trước</small>
                </div>
                <!------------ END OF INCOME ----------->
            </div>
            <!-- ------------------END OF INSIGHTS------ -->
            <div class="recent-orders">
                <h2>Đơn hàng gần đây</h2>
                <table>
                    <thread>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th>Tình trạng</th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>Sửa rữa mặt Cetaphil</td>
                            <td>8</td>
                            <td>300.000</td>
                            <td class="warning">Đang xử lí</td>
                            <td class="primary">Chi tiết</td>
                        </tr>
                        <tr>
                            <td>Sửa rữa mặt Cetaphil</td>
                            <td>8</td>
                            <td>300.000</td>
                            <td class="warning">Đang xử lí</td>
                            <td class="primary">Chi tiết</td>
                        </tr>
                        <tr>
                            <td>Sửa rữa mặt Cetaphil</td>
                            <td>8</td>
                            <td>300.000</td>
                            <td class="warning">Đang xử lí</td>
                            <td class="primary">Chi tiết</td>
                        </tr>
                        <tr>
                            <td>Sửa rữa mặt Cetaphil</td>
                            <td>8</td>
                            <td>300.000</td>
                            <td class="warning">Đang xử lí</td>
                            <td class="primary">Chi tiết</td>
                        </tr>
                        <tr>
                            <td>Sửa rữa mặt Cetaphil</td>
                            <td>8</td>
                            <td>300.000</td>
                            <td class="warning">Đang xử lí</td>
                            <td class="primary">Chi tiết</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
                    <!-- ----------END OF MAIN -------->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggle">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Huu Chuong</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../images/logo-my-pham-3.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->
            <div class="recent-updates">
                <h2>Cập nhật gần đây</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/logo-my-pham-3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> đã thêm 1 sản phẩm mới </p>
                            <small class="text-muted">2 phút trước</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/logo-my-pham-3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> đã thêm 1 sản phẩm mới </p>
                            <small class="text-muted">2 phút trước</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../images/logo-my-pham-3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> đã thêm 1 sản phẩm mới </p>
                            <small class="text-muted">2 phút trước</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -----------END OF RECENT UPDATES -->
            <div class="sale-analytics">
                <h2>Phân tích bán hàng</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Bán hàng online</h3>
                            <small class="text-muted">24h trước</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item ofline">
                    <div class="icon">
                        <span class="material-symbols-outlined">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Bán hàng trực tiếp</h3>
                            <small class="text-muted">24h trước</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Khách hàng mới</h3>
                            <small class="text-muted">24h trước</small>
                        </div>
                        <h5 class="success">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>
                <div class="add-product">
                   <a href="sanpham.html">
                        <span class="material-symbols-outlined">add</span>
                        <h3>Thêm sản phẩm</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
