<?php include '../view/header.php' ?>
<main>
    <h1>Product update</h1>

    <section>


        <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table border="1" style="width: 600px; height: 500px;">
                <input type="hidden" name="action" value="product_update">
                 


                <tr>
                    <td align="right">
                        category
                    </td>
                    <td>

                        <select name="category_id" id="">
                            <option value="">-----select category ----</option>
                            <?php foreach ($categories as $cat) : ?>
                                
                                 if($categories){
                                    <option value="<?php echo $cat['categoryID']; ?>">
                                    <?php echo $cat['categoryName']; ?>
                                </option>
                                 }
                            <?php endforeach; ?>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td align="right">
                        brand
                    </td>
                    <td>
                        <select name="brand_id" id="">
                        <option value="">-----select brands ----</option>
                            <?php foreach ($brands as $brand) : ?>
                                <option value="<?php echo $brand['brandID']; ?>">
                                    <?php echo $brand['brandName']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <?php foreach ($product as $pro) : ?>
                    <input type="hidden" name="product_id" value="<?php echo $pro['productID'];?>"  id="">
                    <tr>
                        <td align="right">
                            product_code
                        </td>
                        <td>
                            <input type="text" name="product_code" value="<?php echo  $pro['productCode']; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            product_name
                        </td>
                        <td>
                            <input type="text" name="product_name" value="<?php echo  $pro['productName']; ?>" />

                        </td>
                    </tr>
                    <tr>
                        <td align="right">image</td>
                        <td><img src="../images/<?php echo $pro['productImg']; ?>"  alt=""></td>
                    </tr>
                    <tr>
                        <td align="right">&nbsp;</td>
                        <td> 
                                  <input type="file" name="image" id="image" />
                                  <input type="hidden" name="ten_anh" value="<?php echo $pro['productImg']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            product_price
                        </td>
                        <td>
                            <input type="text" name="product_price" value="<?php echo  $pro['listPrice']; ?>" />

                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <input type="submit" name="Sua" value="Sua" />
                        </td>
                        <td>
                            <input type="reset" name="Huy" value="Huy" />
                        </td>
                    </tr>
            </table>
        </form>

        <!-- $limit = 10 -->

    <?php endforeach; ?>
    </section><br><br>
    <p><a href="?action=show_add_form">Add Product</a></p>
    <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>

</main>
<?php include '../view/footer.php' ?>