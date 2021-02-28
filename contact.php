<?php
include('includes/config.php');
include('includes/header.php');

?>
        
 <div id= "wrapper">       
<main>
            <h2>Welcome to my Contact Page</h2>
        <?php include('includes/form.php'); ?>
</main>

<aside>
           <h3>This is my headline 3 in my beautiful aside</h3>
           <?php
$photos[0] = 'candy6';
$photos[1] = 'candy5';
$photos[2] = 'candy4';
$photos[3] = 'candy3';
$photos[4] = 'candy2';

$i = rand(0, 4);
$selectedImage = 'images/'.$photos[$i].'.jpg';
echo '<img width="500" height="500" src="'.$selectedImage.'" alt="'.$photos[$i].'">';

?>

    </aside>
    </div>       

    <?php 
        include ('includes/footer.php'); 

    ?>