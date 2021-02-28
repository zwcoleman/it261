<?php
include('config.php');
include('includes/header.php');

?>



<div id = "wrapper">
<main>
<h1 class = "center">Hooraah!!
Thank you for filling out our form.</h1>
<p id = "center">We'll get back to you shrotly!!</p>
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
echo '<img src="'.$selectedImage.'" alt="'.$photos[$i].'">';

?>

    </aside>

    </div>
<?php 
        include ('includes/footer.php'); 

    ?>
</html>