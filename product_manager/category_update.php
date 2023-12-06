<?php include '../view/header.php'?>
<main>
    <h1>update category</h1> <br>
     <?php  foreach($category as $row):?>
  
    <form action="" id="add_category_form" method="POST">
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="category_id" value="<?php echo $row['categoryID']; ?>">
        <label>Name category:</label>
        <input type="text" value="<?php echo $row['categoryName']; ?>" name="catname_update" />
        <input type="submit" value="update">
    </form>

    <?php  endforeach ;?>
    <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>
</main>
<?php include '../view/footer.php' ?>