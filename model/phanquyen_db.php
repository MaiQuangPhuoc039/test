<?php

    function get_phanquyen(){
        global $db;
        $query ='SELECT * FROM phanquyen ORDER BY maPQ';
        $statememt = $db->prepare($query);
        $statememt ->execute();
        return $statememt;
    }

    // function get_nguoidung_by_maND($ma_nd){
    //     global $db;
    //     $query ='SELECT * FROM  brand
    //              WHERE maND = :ma_nd';
    //     $statement = $db -> prepare($query);
    //     $statement -> bindValue(':ma_nd', $ma_nd);
    //     $statement->execute();
    //     $nguoidung = $statement-> fetchAll();
    //     $statement->closeCursor();
    //     return $nguoidung;
    // }






 ?>