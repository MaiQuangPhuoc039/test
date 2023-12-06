<?php include '../view/header.php'?>
<main>
    <h1>update brand</h1> <br>
     <?php  foreach($brand as $row):?>
  
    <form action="" id="add_brand_form" method="POST">
        <input type="hidden" name="action" value="update_br" />
        <input type="hidden" name="brand_id" value="<?php echo $row['brandID']; ?>"><br>
        <label>Name brand:</label>
        <input type="text" value="<?php echo $row['brandName']; ?>" name="braname_update" />
        <input type="submit" value="update">
    </form>

    <?php  endforeach ;?>
    <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>
</main>
<?php include '../view/footer.php' ?>