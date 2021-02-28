

        <h1 >Contact Form</h1>
<form style = "background-color: aliceblue; max-width: 600 px; 
    margin: 20px auto;" action = "<?php echo $_SERVER['PHP_SELF'] ;?>" method = "post">
<fieldset>
<label>Name</label>
<input type = "text" name = "name" value = "<?php if(isset($_POST['name'])) echo
htmlspecialchars($_POST['name']); ?>">
<span class = "err"><?php echo $nameErr  ;?></span>


<!-- <label>Last Name</label>
<input type = "text" name = "lastName" value = "<?php if(isset($_POST['lastName'])) echo
htmlspecialchars($_POST['lastName']); ?>">
<span class = "err"><?php echo $lastNameErr;?></span> -->

<label>Email</label>
<input type = "email" name = "email" value = "<?php if(isset($_POST['email'])) echo
htmlspecialchars($_POST['email']); ?>">
<span class = "err"><?php echo $emailErr ;?></span>


<label>Phone Number</label>
<input type = "tel" name = "phone" placeholder = "xxx-xxx-xxxx"
value = "<?php if(isset($_POST['phone'])) echo
htmlspecialchars($_POST['phone']); ?>">
<span class = "err"><?php echo $phoneErr;?></span>

<!-- <label>Gender</label>
<ul>

<li><input type = "radio" name = "gender" 
value = "female" <?php if(isset($_POST['gender']) && 
$_POST['gender'] == 'female') echo 'checked = "checked"'; ?>>Female</li>

<li><input type = "radio" name = "gender" 
value = "male" <?php if(isset($_POST['gender']) && 
$_POST['gender'] == 'male') echo 'checked = "checked"'; ?>>Male</li>

<li><input type = "radio" name = "gender" 
value = "other" <?php if(isset($_POST['gender']) && 
$_POST['gender'] == 'other') echo 'checked = "checked"'; ?>>Other</li>
</ul>
<span class = "err"><?php echo $genderErr  ;?></span> -->


<label>Favorite Candy</label>
<ul>
<li><input type ="checkbox" name= "candy[]"
value = "Reese's Cups" <?php if(isset($_POST['candy']) && 
in_array("Reese's Cups", $candy)) echo 'checked = "checked"'; ?>>Reese's Cups</li>
<li><input type ="checkbox" name= "candy[]"
value = "Snickers" <?php if(isset($_POST['candy']) && 
in_array('Snickers', $candy)) echo 'checked = "checked"'; ?>>Snickers</li>
<li><input type ="checkbox" name= "candy[]"
value = "M&M's" <?php if(isset($_POST['candy']) && 
in_array("M&M's", $candy)) echo 'checked = "checked"'; ?>>M&M's</li>
<li><input type ="checkbox" name= "candy[]"
value = "Skittles" <?php if(isset($_POST['candy']) && 
in_array("Skittles", $candy)) echo 'checked = "checked"'; ?>>Skittles</li>
<li><input type ="checkbox" name= "candy[]"
value = "Starburst" <?php if(isset($_POST['candy']) && 
in_array("Starburst", $candy)) echo 'checked = "checked"'; ?>>Starburst</li>
</ul>
<span class = "err"><?php echo $candyErr  ;?></span>

<label>Favorite Candy Day</label>
<select name = "day">
<option value = "NULL" <?php if(isset($_POST['day']) && 
$_POST['day'] == 'NULL') echo 'selected = "unselected"';?>>Select one</option>

<option value = "Halloween" <?php if(isset($_POST['day']) && 
$_POST['day'] == 'Halloween') echo 'selected = "selected"'; ?>>Halloween</option>

<option value = "Valentines Day" <?php if(isset($_POST['day']) && 
$_POST['day'] == 'Valentines Day') echo 'selected = "selected"'; ?>>Valentines Day</option>

<option value = "Christmas" <?php if(isset($_POST['day']) && 
$_POST['day'] == 'Christmas') echo 'selected = "selected"'; ?>>Christmas</option>

<option value = "Easter" <?php if(isset($_POST['day']) && 
$_POST['day'] == 'Easter') echo 'selected = "selected"'; ?>>Easter</option>

<option value = "Every Day!" <?php if(isset($_POST['day']) && 
$_POST['day'] == 'Every Day!') echo 'selected = "selected"'; ?>>Every Day!</option>
</select>
<span class = "err"><?php echo $dayErr  ;?></span>



<!-- <label>Comments</label>
<textarea name = "comments"><?php if(isset($_POST['comments'])) echo 
htmlspecialchars($_POST['comments']) ;?> </textarea>
<span class = "err"><?php echo $commentsErr  ;?></span> -->


<label>Agree to our "privacy" policy</label>
<ul>
<li><input type = "radio" name= "agree" value ="agree" <?php if(isset($_POST['agree']) && 
$_POST['agree'] == 'agree') echo 'checked = "checked"'; ?>>Agree</li>
</ul>
<span class = "err"><?php echo $agreeErr  ;?></span>



<input style = "border-radius: 12px;
    background-color:lightblue;
  border: none;
  padding: 5px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type = "submit" value = "Send it!">

<p><a style = "border-radius: 12px;
    background-color:lightblue;
  border: none;
  padding: 5px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" href = "">Reset</a></p>

</fieldset>
</form>
