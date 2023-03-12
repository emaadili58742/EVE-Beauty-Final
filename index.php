<?php
    require_once './controllers/SliderController.php';
    $slider = new SliderController();
    $data=$slider->readSlider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eve Beauty</title>
        <link rel="icon" href="images/icon1.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/Slidercss.css">
        
        
    </head>
    <body>
    <!-- ndarje -->
    <br><br><br><br>

        <!-- header -->

       <?php include "includes/header.php" ;?>
> 
 <!-- slider -->
 
 <div class="slider">
        <?php
            foreach($data as $key=>$value){ 
            if($value['id']==1){
                ?>
                <input type="radio" name="slide" id="slide-<?php echo $value['id'] ?>" checked>
                <?php } else {?>
                    <input type="radio" name="slide" id="slide-<?php echo $value['id'] ?>" >
        <?php }    }
        ?>

    <div class="slides">
        <?php
            foreach($data as $key=>$value){ ?>
                <div class="slide" style="background-image: url(<?php echo $value['slider_image'] ?>);">
                <div class="slide-data">
                <h1><?php echo $value['slider_title']; ?></h1>
                <P><?php echo $value['slider_body']; ?></P>
                    <button onclick="document.location='aboutus.php'"> ABOUT US </button>
            </div>
                </div>
        <?php    }
        ?>
    </div>

    <div class="arrows arrow-left">
        <label for="slide-3">
            <span><i class="fas fa-angle-left"></i></span>
        </label>
        <label for="slide-1">
            <span><i class="fas fa-angle-left"></i></span>
        </label>
        <label for="slide-2">
            <span><i class="fas fa-angle-left"></i></span>
        </label>
    </div>

    <div class="arrows arrow-right">
        <label for="slide-2">
            <span><i class="fas fa-angle-right"></i></span>
        </label>
        <label for="slide-3">
            <span><i class="fas fa-angle-right"></i></span>
        </label>
        <label for="slide-1">
            <span><i class="fas fa-angle-right"></i></span>
        </label>
    </div>

    <div class="dots">
    <?php
            foreach($data as $key=>$value){ 
                ?>
                <label for="slide"></label>
            <?php  }
        ?>
    </div>
</div>

<!-- perfundimi i slider -->

<!-- pjesa e kategorive -->

<section class="categories" id="categories">

    <h1 class="heading"> Produktet<span>Tona</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/skincare.png" alt="">
            <h3>Kujdesi per Lekure</h3>
            <br><br>
            <a href="perlekure.php" class="btn" target="_blank">Shiko me shume</a>
        </div>

        <div class="box">
            <img src="images/makeup.png" alt="">
            <h3>Rreth Syve</h3>
            <br><br>
            <a href="persyte.php" class="btn" target="_blank">Shiko me shume</a>
        </div>

        <div class="box">
            <img src="images/lips.png" alt="">
            <h3>Rreth Buzeve</h3>
            <br><br>
            <a href="perbuze.php" class="btn" target="_blank">Shiko me shume</a>
        </div>

        <div class="box">
            <img src="images/foto.png" >
            <h3>Te gjitha Produktet</h3>
            <br><br>
            <a href="products.php" class="btn" target="_blank">Shiko te gjitha</a>
        </div>

    </div>

</section>



<!-- pjesa e blogut -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Blogu<span>Yne</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/blog1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i>by Ema Adili</a>
                    <a href="#"> <i class="fas fa-calendar"></i> 23rd January, 2023</a>
                </div>
                <h3>5 TRAJTIMET MË TË MIRA PËR REDUKTIMIN E DUKJES SË AKNEVE</h3>
                <p>Në këtë udhëzues, ne do të shqyrtojmë pesë trajtime që mund të zvogëlojnë shenjat e akneve, shkaqet e dhëmbëve dhe kur është koha për të kërkuar ndihmë profesionale</p>
                <br><br>
                <a href="blog1.php#blog1" class="btn" target="_blank">lexo me shume</a>
            </div>
        </div>

        <div class="box">
            <img src="images/blog2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Vlerona Murtezi </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st November, 2022 </a>
                </div>
                <h3>4 MËNYRAT MË TË MIRA PËR TË NDIHMUAR DJEGIEN NGA DIELLI</h3>
                <p>Në këtë udhëzues, Ekspertët tanë të Shëndetit të Lëkurës mbulojnë 4 antidote që mund t'ju ndihmojnë të gjeni lehtësim pas djegies, plus masa parandaluese për të anashkaluar plotësisht djegiet nga dielli.</p>
                <a href="blog1.php#blog2" class="btn" target="_blank">lexo me shume</a>
                
            </div>
        </div>

        <div class="box">
            <img src="images/blog3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by Eljesa Krasniqi </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 2nd December, 2022 </a>
                </div>
                <h3>ÇFARË ËSHTË SLUGGING? 3 HAPA PËR RIPARIMIN E LËKURËS</h3>
                <p>Slugging, në mënyrë specifike, mund të ofrojë përfitime të rëndësishme për ata që luftojnë me lëkurë të ndjeshme ose lëkurë të thatë dhe të krisur dhe duan të arrijnë lëkurë të shëndetshme.</p>
                <a href="blog1.php#blog3" class="btn" target="_blank">lexo me shume</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs  -->

<!--Sherbimet-->
<section class="services" id="services">
    <div class="box">
        <img src="images/icon-1.png" >
        <h3>Dergesa Falas</h3>
        <p>Lorem ipsum dolor, sit amet consectetur</p>
    </div>

    <div class="box">
        <img src="images/icon-2.png" >
        <h3>Pagesë të sigurt</h3>
        <p>Lorem ipsum dolor, sit amet consectetur</p>
    </div>

    <div class="box">
        <img src="images/icon-3.png" >
        <h3>Suportim 24/7</h3>
        <p>Lorem ipsum dolor, sit amet consectetur</p>
    </div>

</section>


<!-- footer  -->

<?php include "includes/footer.php" ;?>

<!-- footer -->

   
    </body>
<script src="js/script.js"></script>
</html>
<script>
    <?php if (isset($_SESSION['message']) && $_SESSION['message']=="Yes") { ?>
        alert('Login Successfully');
    <?php
    $m=" ";
    $_SESSION['message']=$m; } ?>
</script>