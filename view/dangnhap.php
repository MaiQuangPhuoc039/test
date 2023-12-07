 
    <?php include('head1.php'); ?>
   

    <div class="dangnhap">
        <form action="../product_catalog/dangnhap_xuly.php" method="POST">
            <div class="left">
                <div id="userform">
                    <i id="iconpass" class="fa-solid fa-envelope"></i>
                    <input type="text" name="taikhoan" class="input" required placeholder=" Nhập vào email hoặc sđt của bạn">
                </div> <br> <br>

                <div id="pass">
                    <i id="iconpass" class="fa-solid fa-lock"></i>
                    <input type="password" name="matkhau" class="input" required placeholder=" Nhập mật khẩu của bạn">
                    <i id="eye" class="fa-regular fa-eye-slash"></i>
                </div>

                <br>

               <div style="display: flex; align-items: center;" id="rem">
                   <input   type="checkbox" name="remember"><span style="font-size: 90%;">&nbsp;Remember</span>
               </div> 


                <div id="cover">
                    <p id="dangky"><a style=" color: #f10909;" href="dangky.php">Đăng ký tài khoản</a></p></a>
                    <p id="fogetpass">Quên mật khẩu?</p>
                </div> <br><br>

            </div>
            <div class="right">
                <input id="btn1" type="submit" name="login" value="ĐĂNG NHẬP">
                <!-- <button id="btn1">ĐĂNG NHẬP</button> --> <br><br>
                <p id="option"> <i>Đăng nhập với</i></p>
                <button id="btn2"> <i class="fa-brands fa-facebook-f"></i> Facebook </button><br><br>
                <button id="btn3"> <i class="fa-brands fa-google"></i> Google</button> <br><br>
            </div>

        </form>
    </div>
    

   
 <?php include('foot1.php');?>