<?php
include('includes/config.php');
include('includes/header.php');

?>
    <div id="wrapper">
       
        <div id="hero">
        <?php
$photos[0] = 'photo6';
$photos[1] = 'photo5';
$photos[2] = 'photo4';
$photos[3] = 'photo3';
$photos[4] = 'photo2';

$i = rand(0, 4);
$selectedImage = 'images/'.$photos[$i].'.png';
echo '<img src="'.$selectedImage.'" alt="'.$photos[$i].'">';

?>

        </div>  <!-- end hero -->
        <main>
            <h2>This is my headline 2 in my Main Container</h2>

    </main>

        <aside>
            <h3>This is my headline 3 in my aside</h3>

    </aside>
    <h1>Localhost Test</h1>
        <img class ="screenshot" src="images/localhost.png" alt="localhost test assignment" >
        <h1>Error Test</h1>
        <img class ="screenshot" src="images/error_page.png" alt="error page assignment">
        
    </div><!--end wrapper-->
    
    <nav>

    </nav>

    

    <?php 
        include ('includes/footer.php'); 

    ?>