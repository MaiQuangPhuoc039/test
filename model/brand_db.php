<?php  
    function get_brands(){
        global $db;
        $query = 'SELECT * FROM brand
                 ORDER BY brandID';
        $statememt = $db->prepare($query);
        $statememt ->execute();
        return $statememt;
    }

    function get_brand($brand_id){
        global $db;
        $query ='SELECT * FROM  brand
                 WHERE brandID = :brand_id';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':brand_id', $brand_id);
        $statement->execute();
        $brand = $statement-> fetchAll();
        $statement->closeCursor();
        return $brand;
    }

    function get_brand_name($brand_id){
        global $db;
        $query ='SELECT * FROM  brand
                 WHERE brandID = :brand_id';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':brand_id', $brand_id);
        $statement->execute();
        $brand = $statement-> fetch();
        $statement->closeCursor();
        $brand_name= $brand['brandName'];
        return $brand_name;
    }

    function add_brand($name){
        global $db ;
        $query = 'INSERT INTO brand (brandName)
                        VALUES (:name)';
         $statement = $db->prepare($query);
         $statement-> bindValue(':name', $name)   ;
         $statement->execute();
         $statement-> closeCursor();

    }

    function delele_brand($brand_id){
        global $db ;
        $query = 'DELETE FROM brand 
                      WHERE brandID= :brand_id';
        $statement  = $db-> prepare($query);
        $statement->bindValue(':brand_id', $brand_id);
        $statement-> execute();
        $statement->closeCursor();
    }

    function update_brand($brand_id,$brand_name){
        global $db ;
        $query = 'UPDATE   brand 
                                SET 
                                brandName = :brand_name WHERE brandID= :brand_id';
        $statement  = $db-> prepare($query);
        $statement->bindValue(':brand_id', $brand_id);
        $statement->bindValue(':brand_name', $brand_name);
        $statement-> execute();
        $statement->closeCursor();
    }
