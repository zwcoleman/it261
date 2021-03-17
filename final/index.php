<?php //index.php this is our wonderful home page, that can only be reached
//if you ligin successfully!!!

session_start();
include('config.php');

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg']='You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location:login.php');
}

include('includes/header.php');?>
<main>
<?php
//Notification message
if(isset($_SESSION['success'])) :?>
<div class="success">

<h3>
<?php
echo $_SESSION['success'] ;
unset($_SESSION['success']) ;
?>
</h3>
</div>
<?php endif;

if(isset($_SESSION['UserName'])) :?>
<div class="welcome-logout">
<h3> Hello, 
<?php echo $_SESSION['UserName'];?>
</h3>

<a href="index.php?logout='1'">Log out!</a>

</div>
<?php endif; ?>

<h1 class="center">Cities for Retirees</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.
</p>

<div class="flex-container">
  <div class="flex-box"><h4>Information</h4>
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

<p class = "center"><a href="cities.php">Cities</a></p>
  </p>
</div>
  
  <div class="flex-box"><h4>About Uus</h4>
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 

<p class = "center"><a href="about.php">Our Community</a></p>
  </p>
</div>
  <div class="flex-box"><h4>Newsletter</h4>
  
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<p class = "center"><a href="contact.php">Newsletter</a></p>
  </p>
</div>
</div> 

</main>
<aside>
<?php
$photos[0] = 'city1';
$photos[1] = 'city2';
$photos[2] = 'city3';
$photos[3] = 'city4';
$photos[4] = 'city5';
$photos[5] = 'city6';
$photos[6] = 'city7';
$i = rand(0, 6);
$selectedImage = 'images/'.$photos[$i].'.jpg';
echo '<img width="500" height="500" src="'.$selectedImage.'" alt="'.$photos[$i].'">';

?>
</aside>
</div><!--  end wrapper -->

<?php
include('includes/footer.php');