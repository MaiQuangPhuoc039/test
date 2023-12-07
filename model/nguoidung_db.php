<?php

    function get_nguoidung(){
        global $db;
        $query = "SELECT    nguoidung.*,phanquyen.tenquyen 
            FROM nguoidung  
            INNER JOIN phanquyen ON nguoidung.maPQ = phanquyen.maPQ
            
            ORDER BY maND  
            ";
        // $query ='SELECT * FROM nguoidung ORDER BY maND';
        $statememt = $db->prepare($query);
        $statememt ->execute();
        return $statememt;
    }

      // get tenCatItem
      function get_tenND($maND) {
        global $db;
        $query = 'SELECT * FROM nguoidung
                  WHERE maND = :maND';    
        $statement = $db->prepare($query);
        $statement->bindValue(':maND', $maND);
        $statement->execute();    
        $category = $statement->fetch();
        $statement->closeCursor();    
        $tenND = $category['tenND'];
        return $tenND;
    }

    

    function get_nguoidung_by_maND($ma_nd){
        global $db;
        $query ='SELECT * FROM  nguoidung
                 WHERE maND = :ma_nd';
        $statement = $db -> prepare($query);
        $statement -> bindValue(':ma_nd', $ma_nd);
        $statement->execute();
        $nguoidung = $statement-> fetchAll();
        $statement->closeCursor();
        return $nguoidung;
    }

    function get_nguoidung_loginPQ($taikhoan,$matkhau){
        global $db;
        $query ="SELECT *
        FROM nguoidung
        INNER JOIN phanquyen ON nguoidung.maPQ = phanquyen.maPQ
        WHERE nguoidung.taikhoan = :taikhoan AND nguoidung.matkhau = :matkhau
        ";
        $statement = $db -> prepare($query);
        $statement -> bindValue(':taikhoan', $taikhoan);
        $statement -> bindValue(':matkhau', $matkhau);
        $statement->execute();
        $nguoidungPQ = $statement-> fetch();
        $statement->closeCursor();
        return $nguoidungPQ;
    }

    //login 
    function login($taikhoan,$matkhau){
        global $db;
        $query ='SELECT * FROM  nguoidung
                 WHERE taikhoan = :taikhoan AND matkhau = :matkhau '   ;
        $statement = $db -> prepare($query);
        $statement -> bindValue(':taikhoan', $taikhoan);
        $statement -> bindValue(':matkhau', $matkhau);
        $statement->execute();
        $nguoidunglogin = $statement-> fetch();
        $statement->closeCursor();
        return $nguoidunglogin;
    }
    
    function add_nguoidung($ho_nd,$ten_nd,$diachi_nd,$email_nd,$sdt,$gioitinh_nd,$taikhoan_nd,$matkhau_nd,$ma_pq){
        global $db ;
        $query = 'INSERT INTO nguoidung
                     (hoND,tenND,diachi,email,sdt,gioitinh,taikhoan,matkhau,maPQ)
                        VALUES 
                        (:ho_nd,:ten_nd,:diachi_nd,:email_nd,:sdt,:gioitinh_nd,:taikhoan_nd,:matkhau_nd,:ma_pq)';
         $statement = $db->prepare($query);
         $statement-> bindValue(':ho_nd', $ho_nd)   ;
         $statement-> bindValue(':ten_nd', $ten_nd)   ;
         $statement-> bindValue(':diachi_nd', $diachi_nd)   ;
         $statement-> bindValue(':email_nd', $email_nd)   ;
         $statement-> bindValue(':sdt', $sdt)   ;
         $statement-> bindValue(':gioitinh_nd', $gioitinh_nd)   ;
         $statement-> bindValue(':taikhoan_nd', $taikhoan_nd)   ;
         $statement-> bindValue(':matkhau_nd', $matkhau_nd)   ;
         $statement-> bindValue(':ma_pq', $ma_pq)   ;
         $statement->execute();
         $statement-> closeCursor();

    }

    function delele_nguoidung($ma_nd){
        global $db ;
        $query = 'DELETE FROM nguoidung 
                      WHERE maND= :ma_nd';
        $statement  = $db-> prepare($query);
        $statement->bindValue(':ma_nd', $ma_nd);
        $statement-> execute();
        $statement->closeCursor();
    }

    // function update_nguoidung($brand_id,$brand_name){
    //     global $db ;
    //     $query = 'UPDATE   brand 
    //                             SET 
    //                             brandName = :brand_name WHERE brandID= :brand_id';
    //     $statement  = $db-> prepare($query);
    //     $statement->bindValue(':brand_id', $brand_id);
    //     $statement->bindValue(':brand_name', $brand_name);
    //     $statement-> execute();
    //     $statement->closeCursor();
    // }
    function update_nguoidung($ma_nd,$ho_nd,$ten_nd,$diachi_nd,$email_nd,$sdt,$gioitinh_nd,$taikhoan_nd,$matkhau_nd,$ma_pq){
        global $db ;
        $query = 'UPDATE nguoidung
                        SET 
                        hoND=:ho_nd,tenND=:ten_nd,
                        diachi=:diachi_nd,email=:email_nd,
                        sdt=:sdt,gioitinh=:gioitinh_nd,taikhoan=:taikhoan_nd,
                        matkhau=:matkhau_nd,maPQ=:ma_pq
                        WHERE maND= :ma_nd';
         $statement = $db->prepare($query);
         $statement-> bindValue(':ma_nd', $ma_nd)   ;
         $statement-> bindValue(':ho_nd', $ho_nd)   ;
         $statement-> bindValue(':ten_nd', $ten_nd)   ;
         $statement-> bindValue(':diachi_nd', $diachi_nd)   ;
         $statement-> bindValue(':email_nd', $email_nd)   ;
         $statement-> bindValue(':sdt', $sdt)   ;
         $statement-> bindValue(':gioitinh_nd', $gioitinh_nd)   ;
         $statement-> bindValue(':taikhoan_nd', $taikhoan_nd)   ;
         $statement-> bindValue(':matkhau_nd', $matkhau_nd)   ;
         $statement-> bindValue(':ma_pq', $ma_pq)   ;
         $statement->execute();
         $statement-> closeCursor();

    }




 ?>