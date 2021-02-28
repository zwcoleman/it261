<?php
include('includes/config.php');
include('includes/header.php');

?>

    
    <div id="wrapper" >
        <h1>Welcome to my Daily Page
        <?php 
        if($todayDate <=  11) {
            echo 'Good Morning! <br>';
        } elseif ($todayDate <= 15){
            echo 'Good Afternoon! <br>';
        } else {
            echo 'Good Evening! <br>';
        }  
    echo $band;    
    ?>
    </h1>
    <img src=" <?php echo $pic; ?>" alt=" <?php echo $alt; ?> ">
    <p><?php echo $content; echo '<br>'; echo '<br>';?></p>
    <h2>Check out my daily bands below! </h2>


    <ul>
    <li><a style = "color: <?php 
    if($today== 'Monday'){
        echo'green';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Monday">Monday</a></li>
    <li><a style = "color: <?php 
    if($today== 'Tuesday'){
        echo'black';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a style = "color: <?php 
    if($today== 'Wednesday'){
        echo'yellow';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a style = "color: <?php 
    if($today== 'Thursday'){
        echo'steelblue';
    }  else{
        echo'blue';
    }; ?>" href="daily.php?today=Thursday">Thursday</a></li>
    <li><a style = "color: <?php 
    if($today== 'Friday'){
        echo'red';
    }  else{
        echo'blue';
    }; ?>"href="daily.php?today=Friday">Friday</a></li>
    <li><a style = "color: <?php 
    if($today== 'Saturday'){
        echo'grey';
    }  else{
        echo'blue';
    }; ?>"href="daily.php?today=Saturday">Saturday</a></li>
    <li><a style = "color: <?php 
    if($today== 'Sunday'){
        echo'red';
    }  else{
        echo'blue';
    }; ?>"href="daily.php?today=Sunday">Sunday</a></li>
    </ul>
       
    
      


    
        
    </div><!--end wrapper-->
    
    <main>
      
      </main>
      <aside>
      
      </aside>
    

    <?php 
        include ('includes/footer.php'); 

    ?>