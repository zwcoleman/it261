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

<h1 class = "center">Daily Retirement Cities!</h1>
<h2>
    <?php
   if($todayDate <=  11) {
       echo 'Good Morning! <br>';
   } elseif ($todayDate <= 15){
       echo 'Good Afternoon! <br>';
   } else {
       echo 'Good Evening! <br>';
   }   //end else

   echo $dailyCity;

?>
</h2>
<p><?php echo $content;?></p>
<h3>Check out our other great Cities for Retirees below!</h3>
<ul>
<li><a style = "color: <?php 
    if($today== 'Monday'){
        echo'moccasin';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Monday">Monday</a></li>

<li><a style = "color: <?php 
    if($today== 'Tuesday'){
        echo'forestgreen';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>

<li><a style = "color: <?php 
    if($today== 'Wednesday'){
        echo'moccasin';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>

<li><a style = "color: <?php 
    if($today== 'Thursday'){
        echo'forestgreen';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Thursday">Thursday</a></li>

<li><a style = "color: <?php 
    if($today== 'Friday'){
        echo'moccasin';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Friday">Friday</a></li>

<li><a style = "color: <?php 
    if($today== 'Saturday'){
        echo'forestgreen';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Saturday">Saturday</a></li>

<li><a style = "color: <?php 
    if($today== 'Sunday'){
        echo'moccasin';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Sunday">Sunday</a></li>
</ul>

</main>
<aside>
<h3></h3>
<img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
</aside>
</div><!--  end wrapper -->

<?php
include('includes/footer.php');