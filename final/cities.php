<?php

// include('config.php');
// include('includes/config.php');
// include('includes/header.php');<?php //index.php this is our wonderful home page, that can only be reached
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
<div >
    <h1 class = "center">Information</h1>
<p>Retirees reportedly comprise one third of the individuals 
    who are relocating in America.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>
</div>
</main>
<aside>
<?php endif; 







//include('includes/header.php');

//we need to connect to the database!!!

$sql = 'SELECT * FROM Cities';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

echo '<h1>Top 7 Cities for Retirees</h1>';
if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result))  {

        // this array is going to display the contents of your row!!!!
        echo '<p>';
        echo '<h3>More information about <a href = "city-view.php?id='.$row['cityId'].'">'.$row['name'].'</a><h3>';
        echo '<ul >';
        echo '<li>Average Monthly Morgage:  $'.$row['aveCost'].'</li>';
        echo '<li>Population age 65+:  '.$row['percentRetired'].'</li>';
        echo '</ul>';
        echo '</p>';
    }  //ending while loop


} else {    // close if mysqli num rows

    echo 'Nobody home' ;

}  //closing else
//releasing the web server
mysqli_free_result($result);

// close the connection

mysqli_close($iConn); ?>

</aside>
</div><!--  end wrapper -->
<?php
include ('includes/footer.php'); 

