   <?php include '../view/head.php'; ?>

   <main>
      <div id="sidebar">
         <div id="back">
            <p><i class='bx bx-arrow-back'></i></p>
         </div>


         <div class="category">

            <p><?php echo $category_name; ?></p>

         </div>



         <!-- hàm ajaxcateitem dùng hiển thị các tenCatItem -->
         <script>
            $(document).ready(function() {
               $(".sidebarsub").click(function(event) {
                  var categoryID = $(this).closest('.tencatiem').find("input[name='category_id1']").val();
                  var maCatItem = $(this).closest('.tencatiem').find("input[name='maCatItem1']").val();
                  var pricefrom = $("#gia").val(); // Lấy giá trị từ select box

                  $.get(
                     "index1.php", {
                        category_id1: categoryID,
                        maCatItem1: maCatItem,
                        gia: pricefrom // Truyền giá trị vào đây
                     },
                     function(data) {
                        $("#new_pro1").slideDown("slow");
                        $("#new_pro1").html(data);
                     }
                  );
               });
            });
         </script>


         <!-- end hàm ajaxcateitem -->

         <!-- cateitem sideber -->
         <ul id="menuitem">
            <?php foreach ($category as $cate) : ?>
               <li>
                  <form class="tencatiem">
                     <input type="hidden" name="category_id1" value="<?php echo $cate['categoryID']; ?>">
                     <input type="hidden" name="maCatItem1" value="<?php echo $cate['maCatItem']; ?>">
                     <input class="sidebarsub" id="sidebarsub" type="button" value="<?php echo $cate['tenCatItem']; ?>">
                  </form>
               </li>
            <?php endforeach; ?>
         </ul>
         <!-- end cateitem sidebar -->




      </div>

      <div id="content">


         <div id="listprice">




            <script>
               // Định nghĩa hàm ajax()
               function ajax() {
                  var obj = document.getElementById("new_pro1");
                  obj.style.display = "flex";
                  var value = document.getElementById("gia").value;
                  var xml = new XMLHttpRequest();

                  xml.onreadystatechange = function() {
                     if (xml.readyState == 4) {
                        obj.innerHTML = xml.responseText;
                     }
                  };

                  var url = "index1.php?gia=" + encodeURIComponent(value);
                  xml.open("GET", url, true);
                  xml.send();
               }

               // Gọi hàm ajax() ngay khi trang được tải
               window.onload = function() {
                  // Gán giá trị mặc định cho pricefrom khi trang được tải
                  var defaultPrice = "100000"; // Giá trị mặc định là "100000"
                  document.getElementById("gia").value = defaultPrice;

                  // Gọi hàm ajax()
                  ajax();
               };
            </script>



            <select id="gia" onChange="ajax();">
               <option value="">Bộ lọc giá </option>
               <option selected value="100000">100.000đ - 500.000đ</option>
               <option value="500000">500.000đ - 1.000.000đ</option>
               <option value="1000000">1.000.000đ trở lên</option>
            </select>
         </div>
         <div id="list_product">

            <div id="new_pro1">


                     <!-- <div id="muc">
                        <p class="muc">máy lọc nước</p>
                     </div>
               
                  
               <div id="new_product">
                     
                

                  <div class="product_item">
                     <form action="index.php" method="POST">
                        <div id="img">
                           <img src="../images/maylocnuoc.jpg" alt="">
                        </div>
                        <div class="discount">-34%</div>
                        <div class="infor_product_item">
                           <p class="product_name">máy lọc nước</p>
                           <div class="price">
                              <p>234.334<span>VNĐ</span></p>
                              <p><i class="fa fa-cart-shopping"></i> </p>
                           </div>
                        </div>
                        <input id="button" type="submit" value="XEM THÊM">
                     </form>
                  </div>

                  





               </div> -->
               <!-- end new product  -->
            </div>



            <div class="videoquangcao">
               <iframe src="https://www.youtube.com/embed/KlHGpiOmBOs" frameborder="0"></iframe>
            </div>
            <!-- end video -->






            <p class="muc">CHƯƠNG TRÌNH GIẢM GIÁ </p>

            <div id="new_product">

               <?php foreach ($productSale as $pro) : ?>

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


            <form class="muc" action="">
               <input type="hidden" name="action" value="sanphamgoiy" />
               <input type="hidden" name="category_id" value="<?php echo $pro['categoryID']; ?>">
               <input type="submit" value="GỢI Ý CHO BẠN ">
            </form>


            <div id="new_product">

               <?php foreach ($productGY as $pro) : ?>

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





         </div>
         <!-- end list_product -->

      </div>
      <!-- end content  -->

   </main>

   <!-- <div id="page" action="">
       for ($i = 1; $i < 6; $i++) : ?>
          echo '<a href="?product_list?page=' . $i . '">' . $i . '</a>  '; ?>
       #endregion   endfor; ?>
   </div> -->


   <!-- end main  -->

   <!-- starts footer  -->
   <?php include '../view/foot.php'; ?>