  <?php
  require('../model/database.php');
  require('../model/product_db.php');
  require('../model/category_db.php');
  require('../model/brand_db.php');
  require('../model/nguoidung_db.php');
  require('../model/phanquyen_db.php');

  
    session_start();
    $category_id = $_SESSION['category_id1'];
    $maCatItem = $_SESSION['maCatItem1'];
    

    if (isset($_GET['category_id1']) && isset($_GET['maCatItem1'])) {
      $category_id1 = $_GET['category_id1'];
      $maCatItem1 = $_GET['maCatItem1'];

      // khi click option sẽ khoongmang $maCatItem do đó lưu vào sesion 
      $_SESSION['maCatItem1']=$maCatItem1 ; 
    } else {
      // Nếu không có giá trị mới từ GET, sử dụng giá trị hiện tại từ session
      $category_id1 = $category_id;
      $maCatItem1 = $maCatItem;
      
    }

    if (isset($_GET['gia'])) {
      $pricefrom = $_GET['gia'];
    }

   
      $tenCatItem = get_tenCatItem($maCatItem1);
  //  if($tenCatItem){
  //   echo $tenCatItem;
  //   echo '<br>giá =' . $pricefrom;
  //   echo '<br>categoryID= ' . $category_id;
  //   echo '<br>maCatItem_ajax =' . $maCatItem1;

  //  }

  
    

   
 



  if ($pricefrom != NULL) {

    $product = get_products_by_category_id($category_id, $maCatItem1, $pricefrom);

    $p = ' <div id="muc"><p class="muc">'.$tenCatItem.'</p> </div>';
   
      $p .= ' <div id="new_product">';
       foreach ($product as $pro) {
       
     $p.=' <div id="product_item" class="product_item">
          <form action="index.php" method="POST">
            <input type="hidden" name="action" value="detail_product" />
            <input type="hidden" name="product_id" value="' . $pro['productID'] . '" />
            <input type="hidden" name="category_id" value="' . $pro['categoryID'] . '" />

            <div id="img">
              <img src="../images/' . $pro['productImg'] . '">
            </div>
            <div class="discount">-' . $pro['giamgia'] . '%</div>
            <div class="infor_product_item">
              <p class="product_name">' . $pro['productName'] . '</p>
              <div class="price">
                <p>' . number_format( $pro['listPrice']) . '<span>VNĐ</span></p>
                <p><i class="fa fa-cart-shopping"></i></p>
              </div>
            </div>
            <input id="button" type="submit" value="XEM THÊM">
          </form>
        </div>'
        
        
        ;

    }

     echo $p;
  } else if ($pricefrom = '') {

       $pricefrom == 100000;
  }
  ?>
