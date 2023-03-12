<?php
require_once "./controllers/BlogController.php";
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
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
       <!-- header -->
       <?php include "includes/header.php";?>

<!------------------------------------------------------------------------------------------->
    <selection class="blog1" id="blog1">
        <?php
        
        $blogs=new BlogController;
        $all=$blogs->readBlog();
            echo '
            <div class="main1">
            <h2>'.$all[0]['title'].'</h2>
            <p>'.$all[0]['body'].'</p>
            </div>
              '
        ;
        ?>
    </selection>
<!------------------------------------------------------------------------------------------->

<selection class="blog2" id="blog2">
<?php
        
        $blogs=new BlogController;
        $all=$blogs->readBlog();
            echo '
            <div class="main2">
            <h2>'.$all[1]['title'].'</h2>
            <p>'.$all[1]['body'].'</p>
            </div>
              '
        ;
        ?>
</selection>

<!------------------------------------------------------------------------------------------->
<selection class="blog3" id="blog3">
<?php
        
        $blogs=new BlogController;
        $all=$blogs->readBlog();
            echo '
            <div class="main3">
            <h2>'.$all[2]['title'].'</h2>
            <p>'.$all[2]['body'].'</p>
            </div>
              '
        ;
        ?>
</selection>

<!-- footer   -->
<?php include "includes/footer.php";?>
<!-- footer -->
    </body>
<script src="js/script.js"></script>
    </html>