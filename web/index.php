 
<?php
require_once('conn.php');

 
if(!isset($idloaisanpham)){
    $idloaisanpham = filter_input(INPUT_GET, 'idloaisanpham', FILTER_VALIDATE_INT);
    if($idloaisanpham == NULL || $idloaisanpham  == FALSE){
        $idloaisanpham = 1;
    }
}
 
$queryidloaisanpham = 'SELECT * FROM loaisanpham 
                        WHERE idloaisanpham = :idloaisanpham';
$statement1 = $db->prepare($queryidloaisanpham);
$statement1-> bindValue(':idloaisanpham', $idloaisanpham);
$statement1->execute();
$loaisanpham1 = $statement1->fetch();
$tenloaisanpham = $loaisanpham1['tenloaisanpham'];
$statement1->closeCursor();


$queryloaisanpham = 'SELECT * FROM loaisanpham ORDER BY idloaisanpham';
$statement = $db->prepare($queryloaisanpham);
$statement->execute();
$loaisanpham = $statement->fetchAll();
$statement->closeCursor();


$result = 'SELECT * FROM sanpham
                 WHERE idloaisanpham =  :idloaisanpham';
$statement4 = $db->prepare($result);
$statement4-> bindValue(':idloaisanpham', $idloaisanpham);
$statement4->execute();
$sanpham = $statement4->fetchAll();
$statement4->closeCursor();

// $resultnamesanpham = 'SELECT * FROM sanpham
//                  WHERE idloaisanpham =  :idloaisanpham';
// $statement5 = $db->prepare($resultnamesanpham);
// $statement5-> bindValue(':idloaisanpham', $idloaisanpham);
// $statement5->execute();
// $sanphamname = $statement5->fetchAll();
// $statement5->closeCursor();
 

 




?>                      

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app1.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div id="wrapper">

        <div id="header">
            <nav class="container">
                <a href="" id="logo">
                    <img src="images/logo.png" alt="">
                </a>

                <ul id="main-menu">
                    <li><a href="">TRANG CHỦ</a></li>
                    <li><a href="">SẢN PHẨM</a>
                        <ul class="sub-menu">



                            <?php foreach($loaisanpham as $row1) : ?>
                                <?php $id =  $row1['idloaisanpham'] ;?>
                                <li>
                                    <a href=".?idloaisanpham=<?php echo $row1['idloaisanpham']; ?>">
                                        <?php echo $row1['tenloaisanpham']; ?>
                                    </a>

                                    <ul class="sub-menu">

                                    <?php 
                                    $resultnamesanpham = 'SELECT * FROM sanpham
                                    WHERE idloaisanpham =  :idloaisanpham';
                                    $statement5 = $db->prepare($resultnamesanpham);
                                    $statement5-> bindValue(':idloaisanpham', $id);
                                    $statement5->execute();
                                    $sanphamname = $statement5->fetchAll();
                                    $statement5->closeCursor() ?>
                                        
                                        <?php foreach($sanphamname as $row): ?>
                                            <?php $tensp = $row['tensp'] ;?>
                                            <li>
                                                <a href=".?idloaisanpham=<?php echo $row['idloaisanpham'] ; ?>?idsanpham=<?php echo $row['idsanpham']  ?>">
                                                    <?php echo $tensp ;?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                    
                                </li>

                          <?php endforeach; ?>
                        </ul>
                    </li>





                    



              
                    <li><a href="">TIN TỨC</a></li>
                    <li><a href="">VIDEO</a></li>
                    <li><a href="">HỖ TRỢ</a></li>
                    <li><a href="">GIỎ HÀNG</a></li>
                    <li><a href="">ĐĂNG NHẬP</a></li>
                    <li><a href="">ĐĂNG KÝ</a></li>
                </ul>
            </nav>
        </div>

        <div id="main">
             <aside>
                
                <ul class="sub-menu">
                    <li><?php echo $tenloaisanpham;?></li>
                </ul>
            </aside>

            <section>

                <div id="products">

           
                      
                 <?php  foreach($sanpham as $row) : ?>
                    <div id="product_item">
                        <img src="images/<?php echo $row['hinhanh']; ?>" alt="mu1">
                        <div class="infor">
                            <p class="nameproduct"><?php echo $row['tensp']; ?></p><br>
                            <p class="price"><?php echo $row['giasp']?>.000<span>VND</span></p>    
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </section>
        </div>

        <?php include 'footer.html' ;?>

     


    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $('.sub-menu').parent('li').addClass('has-child');
        });
    </script>

</body>

</html>