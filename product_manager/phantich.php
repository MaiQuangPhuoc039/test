<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/phantich.css">
    <title>Phân tích</title>
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="image/logo.jpg" alt="">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="homeadmin.html">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Trang chủ</h3>
                </a>
                <a href="khachhang.html" >
                    <span class="material-symbols-outlined">person</span> 
                    <h3>Quản lý khách hàng</h3>
                </a>
                <a href="sanpham.html">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Quản lý sản phẩm</h3>
                </a>
                <a href="donhang.html">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Quản lí đơn hàng</h3>
                </a>
                <a href="phantich.html" class="active">
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
                <a href="home.html">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Đăng xuất</h3>
                </a>
            </div>
        </aside>
         <!---------------- END OF ASIDE ----------------->
         <main>
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
            <div class="bottom">
                <h2>Kinh doanh trong năm vừa qua</h2>
                <div class="chart">
                    <svg viewBox="0 0 300 200">
                        <rect x="15" y="10" width="50" height="140" fill="#1abc9c" />
                        <rect x="85" y="60" width="50" height="90" fill="#2ecc71" />
                        <rect x="155" y="30" width="50" height="120" fill="#3498db" />
                        <rect x="225" y="130" width="50" height="20" fill="#9b59b6" />
                        <text x="25" y="175">Quý 1</text>
                        <text x="95" y="175">Quý 2</text>
                        <text x="165" y="175">Quý 3</text>
                        <text x="235" y="175">Quý 4</text>
                    </svg>
                </div>
                <h2 style="font-weight: lighter; font-style: italic;">Biểu đồ thể hiện doanh thu của cửa hàng trong năm vừa qua</h2>
            </div>  
            </div>
         </main>
    </div>
</body>
</html>