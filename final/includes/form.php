

        <h1 class = "center">Email Newsletter</h1>
<form style = "background-color: aliceblue; 
    margin: 20px auto;" action = "<?php echo $_SERVER['PHP_SELF'] ;?>" method = "post">
<fieldset>


<label>First Name</label>
<input type = "text" name = "firstName" value = "<?php if(isset($_POST['firstName'])) echo
htmlspecialchars($_POST['firstName']); ?>">
<span class = "err"><?php echo $firstNameErr;?></span>


<label>Last Name</label>
<input type = "text" name = "lastName" value = "<?php if(isset($_POST['lastName'])) echo
htmlspecialchars($_POST['lastName']); ?>">
<span class = "err"><?php echo $lastNameErr;?></span>

<label>Email</label>
<input type = "email" name = "email" value = "<?php if(isset($_POST['email'])) echo
htmlspecialchars($_POST['email']); ?>">
<span class = "err"><?php echo $emailErr ;?></span>

<label>What is your ideal City size?</label>
<ul>
<li><input type = "radio" name = "size" 
value = "A Big City" <?php if(isset($_POST['size']) && 
$_POST['size'] == 'A Big City') echo 'checked = "checked"'; ?>> A Big City</li>

<li><input type = "radio" name = "size" 
value = "A Small City" <?php if(isset($_POST['size']) && 
$_POST['size'] == 'A Small City') echo 'checked = "checked"'; ?>> A Small City</li>

<li><input type = "radio" name = "size" 
value = "Doesn't Matter" <?php if(isset($_POST['size']) && 
$_POST['size'] == "Doesn't Matter") echo 'checked = "checked"'; ?>> Doesn't Matter</li>
</ul>
<span class = "err"><?php echo $sizeErr ;?></span>

<label>What Cities are you interested in?</label>
<ul>
<li><input type ="checkbox" name= "city[]"
value = "Ann Arbor" <?php if(isset($_POST['city']) && 
in_array("Ann Arbor", $city)) echo 'checked = "checked"'; ?>> Ann Arbor, Michigan</li>

<li><input type ="checkbox" name= "city[]"
value = "Sarasota" <?php if(isset($_POST['city']) && 
in_array('Sarasota', $city)) echo 'checked = "checked"'; ?>> Sarasota, Florida</li>

<li><input type ="checkbox" name= "city[]"
value = "Nashville" <?php if(isset($_POST['city']) && 
in_array("Nashville", $city)) echo 'checked = "checked"'; ?>> Nashville, Tennessee</li>

<li><input type ="checkbox" name= "city[]"
value = "Lancaster" <?php if(isset($_POST['city']) && 
in_array("Lancaster", $city)) echo 'checked = "checked"'; ?>> Lancaster, Pennsylvania</li>

<li><input type ="checkbox" name= "city[]"
value = "Manchester" <?php if(isset($_POST['city']) && 
in_array("Manchester", $city)) echo 'checked = "checked"'; ?>> Manchester, New Hampshire</li>

<li><input type ="checkbox" name= "city[]"
value = "Asheville" <?php if(isset($_POST['city']) && 
in_array("Asheville", $city)) echo 'checked = "checked"'; ?>> Asheville, North Caroline</li>

<li><input type ="checkbox" name= "city[]"
value = "Dallas" <?php if(isset($_POST['city']) && 
in_array("Dallas", $city)) echo 'checked = "checked"'; ?>> Dallas, Texas</li>

</ul>
<span class = "err"><?php echo $cityErr  ;?></span>


<label>Retirement Status</label>
<select name = "status">
<option value = "NULL" <?php if(isset($_POST['status']) && 
$_POST['status'] == 'NULL') echo 'selected = "unselected"';?>>Select one</option>

<option value = "Looking Forward" <?php if(isset($_POST['status']) && 
$_POST['status'] == 'Looking Forward') echo 'selected = "selected"'; ?>>Looking Forward</option>

<option value = "Soon to be Retired" <?php if(isset($_POST['status']) && 
$_POST['status'] == 'Soon to be Retired') echo 'selected = "selected"'; ?>>Soon to be Retired</option>

<option value = "Semi-Retired" <?php if(isset($_POST['status']) && 
$_POST['status'] == 'Semi-Retired') echo 'selected = "selected"'; ?>>Semi-Retired</option>

<option value = "Fully Retired" <?php if(isset($_POST['status']) && 
$_POST['status'] == 'Fully Retired') echo 'selected = "selected"'; ?>>Fully Retired</option>

</select>
<span class = "err"><?php echo $statusErr ;?></span>


<label>Agree to our "privacy" policy</label>
<ul>
<li><input type = "radio" name= "agree" value ="agree" <?php if(isset($_POST['agree']) && 
$_POST['agree'] == 'agree') echo 'checked = "checked"'; ?>> Agree</li>
</ul>
<span class = "err"><?php echo $agreeErr;?></span>



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
