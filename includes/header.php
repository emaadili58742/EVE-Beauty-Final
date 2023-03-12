<?php
session_start()
?>
<header class="header">

<a href="index.php" class="logo"> <i class="fas fa-feather-alt"></i> Eve Beauty </a>

<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="index.php#categories">Kategorite</a>
    <a href="products.php" target="_blank">Produktet</a>
    <a href="index.php#blogs" >blogu</a>
    <a href="index.php#services">Sherbimet</a>
    <a href="aboutus.php" target="_blank">Rreth nesh</a>
</nav>

<div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <div class="fas fa-user" id="login-btn"></div>
</div>

<form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</form>
<div class="login-form">
<?php 
    if(isset($_SESSION['roli'])){ ?>
        <h3>Mire se vini <?php echo $_SESSION['emri']; ?></h3>
        <?php if($_SESSION['roli']==2){?>
            <a class="btn" href="views/menuDashboard.php">Dashboard</a><?php
        }?>
        <a class="btn" href="includes/logout.php">Log Out</a>
    <?php } 
    else { ?>
        <form action="validimi.php" method="POST">
        <h3>login tani</h3>
        <input name="email" type="email" placeholder="email.." id="emailSign" class="box">
        <input name="password" type="password" placeholder="password..." id="passSign" class="box">
        <p>Nuk keni llogari? <a href="signup.php">Krijojeni tani</a></p>
        <input name = "submit" type="submit" value="login tani" class="btn">
    </form>
    <?php    }
?>
</div>

</header>

