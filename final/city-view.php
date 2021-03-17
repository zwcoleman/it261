<?php //people-view.php

include('config.php');
include('includes/header.php');



if(isset($_GET['id'])) {
    $id = (int)$_GET['id'] ;
} else {
    header('Location:cities.php');
}

$sql = 'SELECT * FROM Cities WHERE cityId = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)
or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result))  {
    $name =   stripslashes($row['name']) ;
    $population =   stripslashes($row['population']) ;
    $percentRetired =   stripslashes($row['percentRetired']) ;
    $aveCost =   stripslashes($row['aveCost']) ;
    $density =   stripslashes($row['density']) ;
    $description =   stripslashes($row['description']) ;
    
    $feedback = '';
} //closing while

} else {
    $feedback = 'Nobody is home!!!';

}  //closing else


?>
<!-- <div id="wrapper" style = "width:940px; margin:0 auto;"> -->
<main  style = "width: 580px; float: left;">

<h1 class="center">City View: <?php echo $name;?></h1>

<?php

if($feedback == '')  {
    echo '<ul class="list">'; 
    echo '<li><b>Population: </b> '.$population.' people</li>';
    echo '<li><b>Population 65 and over: </b> '.$percentRetired.'</li>';
    echo '<li><b>Population Density: </b> '.$density.' people per square mile</li>';
    echo '<li><b>Median Morgage Cost: </b> $'.$aveCost.' per Month</li>';
    echo '</ul>';
    echo '<p>'.$description.'';
    echo '<a href = "cities.php">Return to our Cities Page</a>';

} else {
    echo $feedback;
}

?>
</main>
<aside style= "width:340px; float:right;">
<?php
if($feedback == '')  {
echo '<img src="images/city'.$id.'.jpg" alt="'.$name.'" width=500>';    
}

?>
</aside>

<?php

//releasing the web server
mysqli_free_result($result);

// close the connection

mysqli_close($iConn);
?>

<!-- html aside? -->
</div> 
<?php 
        include ('includes/footer.php'); 

    ?>