<?php  
    function get_categories(){
        global $db;
        $query = 'SELECT * FROM categories
                 ORDER BY categoryID';
        $statememt = $db->prepare($query);
        $statememt ->execute();
        return $statememt;
    }

    function get_cateItem($category_id1){
        global $db;
        $query =   "SELECT    cateitem.*,categories.categoryName 
                    FROM cateitem  
                    INNER JOIN categories ON cateitem.categoryID = categories.categoryID 
                    WHERE   cateitem.categoryID = :category_id1
                    ";
       $statement = $db -> prepare($query);
       $statement -> bindValue(':category_id1', $category_id1);
       $statement->execute();
       $category = $statement-> fetchAll();
       $statement->closeCursor();
       return $category;
    }

    function get_category($category_id){
        global $db;
        $query ='SELECT * FROM  categories
                 WHERE categoryID = :category_id';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':category_id', $category_id);
        $statement->execute();
        $category = $statement-> fetchAll();
        $statement->closeCursor();
        return $category;
    } 
  // get nameCategory
    function get_category_name($category_id) {
        global $db;
        $query = 'SELECT * FROM categories
                  WHERE categoryID = :category_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();    
        $category = $statement->fetch();
        $statement->closeCursor();    
        $category_name = $category['categoryName'];
        return $category_name;
    }

      // get tenCatItem
    function get_tenCatItem($maCatItem) {
        global $db;
        $query = 'SELECT * FROM cateitem
                  WHERE maCatItem = :maCatItem';    
        $statement = $db->prepare($query);
        $statement->bindValue(':maCatItem', $maCatItem);
        $statement->execute();    
        $category = $statement->fetch();
        $statement->closeCursor();    
        $tenCatItem = $category['tenCatItem'];
        return $tenCatItem;
    }

    function add_category($name){
        global $db ;
        $query = 'INSERT INTO categories (categoryName)
                        VALUES (:name)';
         $statement = $db->prepare($query);
         $statement-> bindValue(':name', $name)   ;
         $statement->execute();
         $statement-> closeCursor();

    }

    function delele_category($category_id){
        global $db ;
        $query = 'DELETE FROM categories 
                      WHERE categoryID= :category_id';
        $statement  = $db-> prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement-> execute();
        $statement->closeCursor();
    }

    function update_category($category_id,$category_name){
        global $db ;
        $query = 'UPDATE   categories 
                                SET 
                                categoryName = :category_name WHERE categoryID= :category_id';
        $statement  = $db-> prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->bindValue(':category_name', $category_name);
        $statement-> execute();
        $statement->closeCursor();
    }
