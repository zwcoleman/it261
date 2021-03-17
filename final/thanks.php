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

include('includes/header.php');//wrapper?>
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

<div id = "wrapper">
<main>
<h1 class = "center">
Thank you! </h1>
<h2 id = "center">Your Newsletter is on the way!!</h2>
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

    </div> <!--  end wrapper -->


<?php
include('includes/footer.php');