<?php // log in page will be pointing too the server.php page -
//username and password

include('server.php');
include('includes/header.php');
?>

<h1 class= "center" >Login!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"
method ="post">
<fieldset>
<label>Username</label>
<input type="text" name="UserName" value="<?php if(isset($_POST['UserName']))
echo $_POST['UserName'] ;?>">
<label>Password</label>
<input type="password" name="Password">
<?php 
include('includes/errors.php');
?>

<button type="submit" class="btn" name="login_user">Login</button>

<button type="button" onclick="window.location.href='<?php echo
htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>





</fieldset>
</form>
<p class="center">Haven't Registered? <a
 href="register.php">Register Here!</a></p>

</div> <!--  end wrapper -->

 <?php 
 include('includes/footer.php');