<?php

  function get_products_by_category_id1($category_id){
    global $db;
    $query = 'SELECT * FROM products
              WHERE products.categoryID = :category_id
            ';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $productGY = $statement->fetchAll();
    $statement->closeCursor();
    return $productGY;
  }
  function get_products_by_category_id($category_id,$maCatItem,$pricefrom){
    global $db;
    $query = "SELECT * FROM products
              WHERE products.categoryID = :category_id
              AND products.maCatItem = :maCatItem 
              AND (listPrice >= $pricefrom AND listPrice <= $pricefrom + 400000 ) 
              ORDER BY listPrice
            ";
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':maCatItem', $maCatItem);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
  }
  
  // san pham noi bat la san pham co nhiu luot mua va soluong trong kho con be hon 30
  function get_productsNB(){
    global $db;
    $query = 'SELECT * FROM products
              WHERE soluong <= 30   ORDER BY categoryID 
              LIMIT 8
            ';
    $statement = $db->prepare($query);
    $statement->execute();
    $productNB = $statement->fetchAll();
    $statement->closeCursor();
    return $productNB;
  }
  function get_products_by_category($star,$limit){
    global $db;
     
    $query = "SELECT    products.*,categories.categoryName,brand.brandName 
            FROM products  
            INNER JOIN categories ON products.categoryID = categories.categoryID
            INNER JOIN brand ON products.brandID = brand.brandID 
            ORDER BY productID  LIMIT  $star , $limit
            ";
    $statement = $db->prepare($query);
    // $statement -> bindValue(':category_id', $category_id);
    $statement -> execute();
    $products = $statement-> fetchAll();
    $statement -> closeCursor();
    return $products;
  }

  function products(){
    global $db;
    $query = 'SELECT COUNT(*) FROM products';
    
    // Chuẩn bị và thực thi truy vấn
    $statement = $db->prepare($query);
    $statement->execute();
    
    // Lấy số lượng hàng từ kết quả
    $row_count = $statement->fetchColumn();

    // Đóng kết nối và trả về số lượng hàng
    $statement->closeCursor();
    return $row_count;
  }

//  sn pham goi y cho ban 
  function get_productsGY($category_id,$star,$limit){
    global $db;
    $query = "SELECT * FROM products
              WHERE products.categoryID = $category_id
              ORDER BY productID  LIMIT  $star , $limit
            ";
    $statement = $db->prepare($query);
    // $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $productGY = $statement->fetchAll();
    $statement->closeCursor();
    return $productGY;
  }

  //  san pham moi 
  function get_productsNew(){
    global $db;
    $query = "SELECT * FROM products WHERE ngaynhap > '2023-06-01' 
              ORDER BY productID  LIMIT  8 
            ";
    $statement = $db->prepare($query);
    $statement->execute();
    $productsNew = $statement->fetchAll();
    $statement->closeCursor();
    return $productsNew;
  }



  function get_product($product_id) {
    global $db;
    $query = 'SELECT    products.*,brand.brandName 
                FROM products  
                INNER JOIN brand ON products.brandID = brand.brandID 
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}

// chuong trinh giam gia > 30% 
function get_product_sale() {
  global $db;
  $query = 'SELECT * FROM products WHERE giamgia > 30 limit 8  ';
  $statement = $db->prepare($query);
  $statement->execute();
  $productSale = $statement->fetchAll();
  $statement->closeCursor();
  return $productSale;
}

// chuong trinh giam gia > 30%  theo category_id
function get_product_sale_by_category($category_id1) {
  global $db;
  $query = "SELECT * FROM products WHERE giamgia > 30 AND categoryID= $category_id1
   limit 8  ";
  $statement = $db->prepare($query);
  $statement->execute();
  $productSale = $statement->fetchAll();
  $statement->closeCursor();
  return $productSale;
}































































  function delete_product($product_id){
    global $db;
    $query = 'DELETE FROM products 
               WHERE productID = :product_id';
    $statement  = $db->prepare($query);
    $statement -> bindValue(':product_id', $product_id);
    $statement -> execute();
    $statement-> closeCursor();


  }

  function add_product($code,$name,$category_id, $brand_id,$img, $price){
    global $db;
    $query = 'INSERT INTO   products (productCode,productName,categoryID,brandID,productImg,listPrice)
                VALUE 
                ( :code,  :name, :category_id, :brand_id, :img, :price)';
    $statement =$db-> prepare($query);
    $statement-> bindValue(':code', $code);
    $statement-> bindValue(':name', $name);
    $statement-> bindValue(':category_id', $category_id);
    $statement-> bindValue(':brand_id', $brand_id);
    $statement-> bindValue(':img', $img);
    $statement-> bindValue(':price', $price);
    $statement-> execute();
    $statement-> closeCursor();
  }

  function update_product($product_id, $code,$name,$category_id, $brand_id,$img, $price){
    global $db;
    $query = 'UPDATE  products
                SET 
                productCode= :code,productName= :name,
                categoryID= :category_id,brandID= :brand_id,
                productImg= :img,listPrice=:price
                WHERE productID= :product_id';
    $statement =$db-> prepare($query);
    $statement-> bindValue(':product_id', $product_id);
    $statement-> bindValue(':code', $code);
    $statement-> bindValue(':name', $name);
    $statement-> bindValue(':category_id', $category_id);
    $statement-> bindValue(':brand_id', $brand_id);
    $statement-> bindValue(':img', $img);
    $statement-> bindValue(':price', $price);
    $statement-> execute();
    $statement-> closeCursor();
  }


?>