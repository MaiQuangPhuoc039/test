<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/donhang.css">

    <title>Quản lí đơn hàng</title>
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
                <a href="khachhang.html">
                    <span class="material-symbols-outlined">person</span> 
                    <h3>Quản lý khách hàng</h3>
                </a>
                <a href="sanpham.html">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Quản lý sản phẩm</h3>
                </a>
                <a href="donhang.html" class="active" >
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Quản lí đơn hàng</h3>
                </a>
                <a href="phantich.html">
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
            <div class="time">
                <h2>Ngày đặt hàng</h2>
                <input type="date">
                <input type="submit" value="Xuất">
            </div>
            <div class="search">
                <select name="donhang" id="selectBox">
                    <option value="madh">Mã đơn hàng</option>
                    <option value="tennm">Tên người mua</option>
                    <option value="sanpham">Sản phẩm</option>
                    <option value="mavd">Mã vận đơn</option>
                </select>
                <input type="text" id="inputBox" placeholder="Mã đơn hàng">
                <span class="material-symbols-outlined">search</span>
                <input type="submit" value="Tìm kiếm">
            </div>
            <div class="table">
                <h2>Đơn hàng</h2>
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tổng đơn hàng</th>
                        <th>Trạng thái</th>
                        <th>ĐVVC</th>
                    </tr>
                    <tr>
                        <td>Sửa rữa mặt Cetaphil</td>
                        <td>100</td>
                        <td>Đang chuẩn bị</td>
                        <td>Ninja Van VN</td>
                    </tr>
                    <tr>
                        <td>Sửa rữa mặt Cetaphil</td>
                        <td>100</td>
                        <td>Đang chuẩn bị</td>
                        <td>Ninja Van VN</td>
                    </tr>
                    <tr>
                        <td>Sửa rữa mặt Cetaphil ngon từ thịt ngọt từ xương</td>
                        <td>100</td>
                        <td>Đang chuẩn bị</td>
                        <td>Ninja Van VN</td>
                    </tr>
                    <tr>
                        <td>Sửa rữa mặt Cetaphil</td>
                        <td>100</td>
                        <td>Đang chuẩn bị</td>
                        <td>Ninja Van VN</td>
                    </tr>
                    <tr>
                        <td>Sửa rữa mặt Cetaphil</td>
                        <td>100</td>
                        <td>Đang chuẩn bị</td>
                        <td>Ninja Van VN</td>
                    </tr>
                    <tr>
                        <td>Sửa rữa mặt Cetaphil</td>
                        <td>100</td>
                        <td>Đang chuẩn bị</td>
                        <td>Ninja Van VN</td>
                    </tr>
                    <tr>
                        <td>Sửa rữa mặt Cetaphil</td>
                        <td>100</td>
                        <td>Đang chuẩn bị</td>
                        <td>Ninja Van VN</td>
                    </tr>
                </table>
            </div>
         </main>
    </div>






<script>
    var selectBox = document.getElementById("selectBox");
var inputBox = document.getElementById("inputBox");

selectBox.addEventListener("change", function() {
  if (selectBox.value == "madh") {
    inputBox.setAttribute("placeholder", "Mã đơn hàng");
  } else if (selectBox.value == "tennm"){
    inputBox.setAttribute("placeholder", "Tên người mua");
  } else if (selectBox.value == "sanpham"){
    inputBox.setAttribute("placeholder", "Tên sản phẩm");
  } else {
    inputBox.setAttribute("placeholder", "Mã vận đơn");
  } 
});
</script>
</body>
</html>