<?php 

function get_loaisanpham() {
    global $db;
    $query = 'SELECT * FROM loaisanpham
              ORDER BY idloaisanpham';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}
function get_idloaisanpham($idloaisanpham) {
    global $db;
    $query = 'SELECT * FROM loaisanpham
              WHERE idloaisanpham = :idloaisanpham';    
    $statement = $db->prepare($query);
    $statement->bindValue(':idloaisanpham', $idloaisanpham);
    $statement->execute();    
    $loaisanpham = $statement->fetch();
    $statement->closeCursor();    
    $idloaisanpham = $loaisanpham['ifloaisanpham'];
    return $idloaisanpham;
}

function get_sanpham_by_loaisanpham($idloaisanpham) {
    global $db;
    $query = 'SELECT * FROM sanpham
              WHERE sanpham.idloaisanpham = :idloaisanpham ';
    $statement = $db->prepare($query);
    $statement->bindValue(':idloaisanpham', $idloaisanpham);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}
?>