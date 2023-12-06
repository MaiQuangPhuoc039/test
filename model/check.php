<meta charset="utf-8">;
<?php

function login($user, $pass){
      session_start();
      $query = "SELECT * FROM nguoidung WHERE taikhoan = '$user' AND matkhau = '$pass'";
      global $db;
      $statement = $db->prepare($query);
      $statement->execute();
      // $row = $statement->fetchAll();
      // $row_count = $db->exec($query);
        // $_SESSION['code'] = $row['maND'];
        // $_SESSION['info'] = $user.'-'.$row['hoND'].'-'.$row['tenND'];    
        // echo 'xin chao ' . $user . '-' . $row['hoND'];
      $statement->closeCursor(); 
      // return $row;
}


?>