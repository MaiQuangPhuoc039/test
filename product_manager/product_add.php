<?php include '../view/header.php' ?>
<main>
    <h1>Product Add</h1>

    <section>


        <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table border="1" style="width: 600px; height: 500px;">
                <input type="hidden" name="action" value="product_add">
                 


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
                 
                    <tr>
                        <td align="right">
                            product_code
                        </td>
                        <td>
                            <input type="text" name="product_code" placeholder="enter code" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            product_name
                        </td>
                        <td>
                            <input type="text" name="product_name" placeholder="enter name" />

                        </td>
                    </tr>
                    <tr>
                        <td align="right">image</td>
                        <td><input type="file" name="image" id="image" /></td>
                    </tr>
                    

                    <tr>
                        <td align="right">
                            product_price
                        </td>
                        <td>
                            <input type="text" name="product_price" placeholder="enter price" />

                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <input type="submit" name="Sua" value="Add" />
                        </td>
                        <td>
                            <input type="reset" name="Huy" value="Huy" />
                        </td>
                    </tr>
            </table>
        </form>

    </section><br><br>
    <p class="last_paragraph"><a href="?action=list_products">List products</a></p>

    <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>

</main>
<?php include '../view/footer.php' ?>