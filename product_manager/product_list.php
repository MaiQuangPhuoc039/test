<?php include '../view/header.php' ?>
<main>
    <h1>Product List</h1>
     

    <section>
        <table>
            <tr> 
             
              <th>productID</th>
              <th>productCode</th>
                <th>productName</th>
                
                <th>category </th>
                <th>brand </th>
               
                <th>productImg</th>
                <th class="right">listPrice</th>
                <th>&emsp;</th>
            </tr>
              
            <?php foreach($products as $product):?>
                
                <tr>
                   
                    <td><?php echo $product['productID']; ?></td>
                    <td><?php echo $product['productCode']; ?></td>
                    <td><?php echo $product['productName']; ?></td>
                    <td><?php echo $product['categoryName']; ?></td>    
                    <td><?php echo $product['brandName']; ?></td>
                     
                    <td style="width: 40px;"><img src="../images/<?php echo $product['productImg']; ?>" alt=""></td>
                    <td class="right"><?php echo $product['listPrice']; ?></td>
                  
                    <td>
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="delete_product">
                            <input type="hidden" name="product_id" value="<?php  echo $product['productID']; ?>">
                            <input type="hidden" name="category_id" value="<?php  echo $product['categoryID']; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>

                    <td>
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="update_product">
                            <input type="hidden" name="product_id" value="<?php  echo $product['productID']; ?>">
                            <input type="hidden" name="category_id" value="<?php  echo $product['categoryID']; ?>">
                            <input type="hidden" name="brand_id" value="<?php  echo $product['brandID']; ?>">
                            <input type="submit" value="update">   
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>

        <div style="margin-left: 300px; justify-content: space-between;" action="">
         <?php  for($i =1 ; $i<$total_page ; $i++):?>
            <?php   echo '<a href="?product_list?page=' . $i . '">' . $i . '</a> | ';?>
        <?php endfor;?> 
         </div>

        <div style="display:flex; justify-content: space-around; border: solid ; width:1200px;">
            <p><a href="?action=add_product">Add Product</a></p>
            <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>
            <p class="last_paragraph"><a href="?action=list_brands">List brands</a></p>
            <!-- <p class="last_paragraph"><a href="?action=list_nguoidung">List người dùng</a></p> -->
            <p class="last_paragraph"><a href="?action=dangnhap">dang nhap x    </a></p>
        </div>
    </section>
</main>
<?php include '../view/footer.php' ?>