<?php // errors page (our register page will refer to our errors page)

if(count($errors) > 0) :?>
<div class="error">
<?php 
    foreach($errors as $error): ?>
<p><?php echo $error; ?></p>
<?php endforeach ?>
</div>
<?php endif ?>