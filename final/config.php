<?php //config.php file

//this will be our config file that we will link to the credentials.php
ob_start();  //prevents header errors before reading the whole page!
define('DEBUG', 'True');  //We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); 

date_default_timezone_set('America/los_Angeles');

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily Cities';
$nav['cities.php'] = 'Information';
$nav['contact.php'] = 'Newsletter';


function makeLinks($nav) {
$myReturn = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$myReturn .= '<li><a class = "active" href = "'.$key.'">'.$value.'</a></li>' ;
}else {
$myReturn .= '<li><a href = "'.$key.'">'.$value.'</a></li>' ;
} //end else


} //end foreach

return $myReturn;

} //close function

switch(THIS_PAGE) {
case 'index.php' : 
$title = 'Home Page';
$body = 'home';
break;
case 'about.php' : 
$title = 'About Page';
$body = 'about';
break;
case 'daily.php' : 
$title = 'Daily City';
$body = 'daily';
break;
case 'cities.php' : 
$title = 'Information Page';
$body = 'people';
break;
case 'contact.php' : 
$title = 'Newsletter';
$body = 'contact';
break;

default:

$body = 'inner';
$title='Our Wonderful Retiree Cities';
}


$todayDate = date('H:i A');

if(isset($_GET['today'])) 
{
$today = $_GET['today'];
} else {
$today = date('l');
};

switch($today) {
case 'Monday':
$dailyCity = '<p>On Monday we highlight Sarasota, Florida</p>';
$pic = 'sarasota.jpg';
$alt = 'An image of Sarasota, Florida';
$content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>';
$background = 'lightsteelblue';
break;

case 'Tuesday':
$dailyCity = '<p>On Tuesday we highlight Nashville, Tennessee</p>';
$pic = 'nashville.jpg';
$alt = 'An image of Nashville, Tennessee';
$content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>';
$background = 'bisque';
break;

case 'Wednesday':
$dailyCity = '<p>On Wednesday we highlight Lancaster, Pennsylvania</p>';
$pic = 'lanc.png';
$alt = 'An image of Lancaster, Pennsylvania';
$content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>';
$background = 'MediumOrchid';
break;

case 'Thursday':
$dailyCity = '<p>On Thrusday we highlight Ann Arbor, Michigan</p>';
$pic = 'ann.jpg';
$alt = 'An image of Arbor, Michigan';
$content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>';
$background = 'darkkhaki';
break;

case 'Friday':
$dailyCity = '<p>On Friday we highlight Manchester, New Hampshire</p>';
$pic = 'manchester.jpg';
$alt = 'An image of New Hampshire';
$content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>';
$background = 'mypurple';
break;

case 'Saturday':
$dailyCity = '<p>On Saturday we highlight Asheville, North Caroline</p>';
$pic = 'asheville.jpg';
$alt = 'An image of North Caroline';
$content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>';
$background = 'sandybrown';
break;

case 'Sunday':
$dailyCity = '<p>On Sunday we highlight Dallas, Texas</p>';
$pic = 'dallas.jpg';
$alt = 'An image of Dallas, Texas';
$content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
deserunt mollit anim id est laborum.</p>';
$background = 'azure';
break;
}






//form php

$firstName = '';
$lastName = '';
$email = '';
$size = '';
$city = '';
$status = '';
$agree = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$sizeErr = '';
$cityErr = '';
$statusErr = '';
$agreeErr = '';
if($_SERVER['REQUEST_METHOD']
== 'POST') {



//if something was empty, echo the error
//if a field is empty we are going to create an error variable

if(empty($_POST['firstName'])) {
$firstNameErr = 'Please enter your first name';
} else {
$firstName = $_POST['firstName'];
}
if(empty($_POST['lastName'])) {
$lastNameErr = 'Please enter your last name';
} else {
$lastName = $_POST['lastName'];
}
if(empty($_POST['email'])) {
$emailErr = 'Please enter your email';
} else {
$email = $_POST['email'];
}

 if(empty($_POST['size'])) {
        $sizeErr = 'Please check one';
    } else {
        $size = $_POST['size'];
    }

if(empty($_POST['city'])) {
$cityErr = 'What, not interested in these Cities...???';
} else {
$city = $_POST['city'];
}
if($_POST['status'] == 'NULL') {
$statusErr = 'Please select a status!';
} else {
$status = $_POST['status'];
}

if(empty($_POST['agree'])) {
$agreeErr = 'You must agree!';
} else {
$agree = $_POST['agree'];
}

function myCity() {
$myReturn = '';
//if my wines array is not empty, implode it

if(!empty($_POST['city'])) {
$myReturn = implode(', ', $_POST['city']) ;
} return $myReturn;

} //close function

if(isset($_POST['firstName'],
$_POST['lastName'],
$_POST['email'],
$_POST['size'],
$_POST['city'],
$_POST['status'],
$_POST['agree'])) {


$to = 'szemeo@mystudentswa.com';
$subject = 'Test email from Zach\'s contact page ' .date('m/d/y');
$body = 'Name: '.$firstName.' '.$lastName.''.PHP_EOL.'
Email: '.$email.''.PHP_EOL.'
Prefered City Size: '.$size.''.PHP_EOL.'
Retirement Status: '.$status.''.PHP_EOL.'
Interested Cities: '.myCity().'';

$headers = array(
'From' => 'no-reply@learnphp',
'Reply-to' => ''.$email.''
);

if($_POST['firstName']  !== ''  && 
$_POST['lastName']  !== ''  && 
$_POST['email']  !== ''  && 
$_POST['city']  !== ''  && 
$_POST['agree']  !== ''  && 
$_POST['status']  !== 'NULL')    {
mail($to, $subject, $body, $headers);
header('Location:thanks.php');
}

}  //closing isset

} // end server request



















function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
echo 'Error message: <b> '.$errorMsg.'</b>';
die();
}  else {
echo ' Houston, we have a problem!';
die();
}


}

?>