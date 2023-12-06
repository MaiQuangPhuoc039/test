<?php include '../view/header.php' ?>
<main>
    <h1>Nguoi dung List</h1>



    <section>

        <table style="width: 1100px;">
            <tr>

                <th>maND</th>
                <th>taikhoan</th>
                <th>diachi </th>
                <th>SDT </th>
                <th>gioitinh</th>
                <th>email</th>
                <th>quyền hạn</th>
                <th colspan="2">&emsp;</th>
            </tr>

            <?php foreach ($nguoidung as $nguoiDung) : ?>

                <tr>

                    <td><?php echo $nguoiDung['maND']; ?></td>
                    <td><?php echo $nguoiDung['taikhoan']; ?></td>
                    <td><?php echo $nguoiDung['diachi']; ?></td>
                    <td><?php echo $nguoiDung['sdt']; ?></td>
                    <td><?php echo $nguoiDung['gioitinh']; ?></td>
                    <td><?php echo $nguoiDung['email']; ?></td>

                    <td><?php echo $nguoiDung['tenquyen']; ?></td>



                    <td>
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="delete_nguoidung">
                            <input type="hidden" name="ma_nd" value="<?php echo $nguoiDung['maND']; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>

                    <td>
                        <form action="." method="POST">
                            <input type="hidden" name="action" value="update_nguoidung">
                            <input type="hidden" name="ma_nd" value="<?php echo $nguoiDung['maND']; ?>">
                            <input type="submit" value="update">
                        </form>
                    </td>

                </tr>

            <?php endforeach; ?>

        </table>



        <div style="margin-left: 300px; justify-content: space-between; margin: 30px;  text-align: center; " action="">
            <?php for ($i = 1; $i < 4; $i++) : ?>
                <?php echo '<a href="?product_list?page=' . $i . '">' . $i . '</a> | '; ?>
            <?php endfor; ?>
        </div>

        <div style="display:flex; justify-content: space-around; border: solid ; width:1200px;">
            <p><a href="?action=list_products">list Product</a></p>
            <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>
            <p class="last_paragraph"><a href="?action=list_brands">List brands</a></p>
            <p class="last_paragraph"><a href="?action=add_nguoidung">add nguoidung</a></p>
        </div>
    </section>
</main>
<?php include '../view/footer.php' ?>