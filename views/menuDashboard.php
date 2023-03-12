<?php
session_start();
require_once '../controllers/MenuController.php';
require_once '../controllers/BlogController.php';
require_once '../controllers/SliderController.php';
require_once '../controllers/userController.php';
require_once '../controllers/aboutController.php';
require_once '../controllers/ContactController.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="images/icon1.png">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>

<div>
  
  <h1 class = "h1">WELCOME BACK <?php echo $_SESSION['emri']; ?></h1><br><br>
      <?php if (isset($_SESSION['roli']) && $_SESSION['roli'] == 2){
          ?>

  <!-- products -->

<button class="add" onclick="document.location='create-menu.php'"> Create Product </button>

<!-- blogs -->

<button class="add" onclick="document.location='create-blogs.php'"> Create Blog </button>


<!-- slider -->

<button class="add" onclick="document.location='create-slider.php'"> Create Slider </button>


<!-- about -->

<button class="add" onclick="document.location='create-about.php'"> Create About </button>

<!-- return to homepage -->
<button class ="add"onclick="document.location='../index.php'">Return to homepage</button>

<br>
<br>
<!-- ====================produktet================================= -->
    <table class="content-table">
        <thead>
          <tr>
            <th>PRODUKTET</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
            <tr>
              <th>Menu image</th>
              <th>Menu title</th>
              <th>Menu body</th>
              <th>Menu category</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $m=new MenuController;
          $allMenu= $m->readData();
          foreach($allMenu as $menu): ?>
          <tr>
            <td><?php echo $menu['menu_image'];?></td>
            <td><?php echo $menu['menu_title'];?></td>
            <td><?php echo $menu['menu_body'];?></td>
            <td><?php echo $menu['category'];?></td>
            <td><a href="edit-menu.php?id=<?php echo $menu['id']; ?>">Edit</a></td>
            <td><a href="delete-menu.php?id=<?php echo $menu['id']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
</div>

<!-- ====================blogs================================= -->

<div>
    <table class="content-table">
        <thead>
        <tr>
            <th>BLOGS</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>

            <tr>
              <th>blog title</th>
              <th>blog body</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $b=new BlogController;
          $allBlogs= $b->readBlog();
          foreach($allBlogs as $blog): ?>
          <tr>
            <td><?php echo $blog['title'];?></td>
            <td><?php echo $blog['body'];?></td>
            <td><a href="edit-blogs.php?id=<?php echo $blog['id']; ?>">Edit</a></td>
            <td><a href="delete-blogs.php?id=<?php echo $blog['id']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
</div>

<!-- ====================slider================================= -->
<div>
    <table class="content-table">
        <thead>
        <tr>
            <th>SLIDERS</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
            <tr>
              <th>Slider image</th>
              <th>Slider title</th>
              <th>Slider body</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $s=new SliderController;
          $allSliders= $s->readSlider();
          foreach($allSliders as $slider): ?>
          <tr>
            <td><?php echo $slider['slider_image'];?></td>
            <td><?php echo $slider['slider_title'];?></td>
            <td><?php echo $slider['slider_body'];?></td>
            <td><a href="edit-slider.php?id=<?php echo $slider['id']; ?>">Edit</a></td>
            <td><a href="delete-slider.php?id=<?php echo $slider['id']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>

    <!-- ====================users================================= -->
    <div>
    <table class="content-table">
        <thead>
        <tr>
            <th>USERS</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
            <tr>
              <th>Emri</th>
              <th>Username</th>
              <th>Email</th>
              <th>Numri</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $u=new User;
          $users= $u->readUser();
          foreach($users as $user): ?>
          <tr>
            <td><?php echo $user['emri'];?></td>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['email'];?></td>
            <td><?php echo $user['numri'];?></td>
            <td><a href="edit-user.php?id=<?php echo $user['id']; ?>">Edit</a></td>
            <td><a href="delete-user.php?id=<?php echo $user['id']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    </div>
<!-- ====================aboutus================================= -->


<div>
    <table class="content-table">
        <thead>
        <tr>
            <th>ABOUt-US</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
            <tr>
              <th>title</th>
              <th>body</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $a=new AboutController;
          $allAbout= $a->readAbout();
          foreach($allAbout as $about): ?>
          <tr>
            <td><?php echo $about['title'];?></td>
            <td><?php echo $about['body'];?></td>
            <td><a href="edit-about.php?id=<?php echo $about['id']; ?>">Edit</a></td>
            <td><a href="delete-about.php?id=<?php echo $about['id']; ?>">Delete</a></td>
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    </div>


    <!-- ====================contacts================================= -->


    <div>
    <table class="content-table">
        <thead>
        <tr>
            <th>FEEDBACK</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
            <tr>
              <th>Emri</th>
              <th>Email</th>
              <th>Message</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $c=new ContactController;
          $Allcontacts= $c->readContact();
          foreach($Allcontacts as $c): ?>
          <tr>
            <td><?php echo $c['emri'];?></td>
            <td><?php echo $c['email'];?></td>
            <td><?php echo $c['message'];?></td>
            <td><a href="delete-contact.php?id=<?php echo $c['id']; ?>">Delete</a></td>
          
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    </div>


    <?php } ?>
</div>

</body>
</html>