<?php include '../view/header.php'; ?>
<main>
    <h1>Brands List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($brands as $brand) : ?>
            <tr>
                <td><?php  echo $brand['brandName'] ?></td>
                <td>
                    <form action="index.php" method="POST">
                        <input type="hidden" name="action" value="delete_brand" />
                        <input type="hidden" name="brand_id" value="<?php echo $brand['brandID']; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
                <td>
                <form action="index.php" method="POST">
                        <input type="hidden" name="action" value="update_brand" />
                        <input type="hidden" name="brand_id" value="<?php echo $brand['brandID']; ?>">
                        <input type="submit" value="update">

                    </form>
                    
                     
                            
                </td>
                
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add brand</h2>
    <form action="index.php" id="add_brand_form" method="POST">
        <input type="hidden" name="action" value="add_brand" />
        <label>Name:</label>
        <input type="text" name="namebr" />
        <input type="submit" value="Add">

    </form>
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>