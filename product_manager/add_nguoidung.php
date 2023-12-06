<?php include '../view/header.php' ?>
<main>
    <h1>Product người dùng </h1>

    <section>


        <form action="" method="post" enctype="multipart/form-data" name="form1">
            <table border="1" style="width: 600px; height: 500px;">
                <input type="hidden" name="action" value="nguoidung_add">

                <tr>
                    <td align="right">
                        họ
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;"   type="text" name="ho_nd"  />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        tên
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;"  type="text" name="ten_nd"   />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        địa chỉ
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;"  type="text" name="diachi_nd"  />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                       email
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;"  type="text" name="email_nd"  />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        SĐT
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;"  type="text" name="sdt_nd"  />
                    </td>
                </tr>


                <tr>
                    <td align="right">
                       giới tính
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;"  type="text" name="gioitinh_nd"  />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        tài khoản
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;"  type="text" name="taikhoan_nd"   />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                       mật khẩu
                    </td>
                    <td>
                        <input style="height: 30px; width: 200px;" type="password" name="matkhau_nd"  />
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        quyền hạn
                    </td>
                    <td>

                        <select style="height: 30px; width: 200px;"  name="ma_pq" id="">
                            <option value="">-----chọn quyền hạn ----</option>
                             
                             <?php foreach ($phanQuyen as $q) : ?>

                                if($phanQuyen){
                                <option value="<?php echo $q['maPQ']; ?>">
                                    <?php echo $q['tenquyen']; ?>
                                </option>
                                }
                            <?php endforeach; ?> 
                        </select>

                    </td>
                </tr>

                 
                <tr>
                    <td align="right">
                        <input type="submit" name="thêm" value="Add" />
                    </td>
                    <td>
                        <input type="reset" name="Hủy" value="Huy" />
                    </td>
                </tr>
            </table>
        </form>

    </section><br><br>
    <p class="last_paragraph"><a href="?action=list_products">List products</a></p>

    <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>

</main>
<?php include '../view/footer.php' ?>