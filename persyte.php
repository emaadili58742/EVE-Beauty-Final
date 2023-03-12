<?php
require_once './controllers/MenuController.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EVE Beauty</title>
        <link rel="icon" href="images/icon1.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style2.css">
       
    
    </head>
    <body>
       <!-- header -->
      
       <?php include "includes/header.php";?>
       <!-- header -->
              <!--ndarje-->
             <br><br><br><br><br><br>

<!-- Products -->
            
<section class="products" id="products">

<div class="product-container">
    <div class="products-content">
<?php
$products = new MenuController;
$all = $products->readDataSyte();
for ($i =  0 ; $i < count($all); $i ++){
    echo '
        <div class="box">
            <img src="'.$all[$i]['menu_image'].'">
            <h3>'.$all[$i]['menu_title'] .'</h3>
            <div class="price">'.$all[$i]['menu_body'].'</div>
            <a href="#" class="btn">shto ne shporte</a>
        </div>
        
'
        ;}?>
    </div>
</div>
</section>
<!-- Products -->
  
 <!-- footer   -->

 <?php include "includes/footer.php";?>
 
 <!-- footer   -->


            
        

</body>
<script src="js/script.js"></script>
</html>
   
    