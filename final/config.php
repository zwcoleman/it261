<?php //config.php file

//this will be our config file that we will link to the credentials.php
ob_start();  //prevents header errors before reading the whole page!
define('DEBUG', 'True');  //We want to see our errors

include('credentials.php');

 define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); 

date_default_timezone_set('America/los_Angeles');

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['people.php'] = 'People';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;
        case 'about.php' : 
            $title = 'About page of our Website Project';
            $body = 'about';
            break;
            case 'daily.php' : 
                $title = 'Daily page of our Website Project';
                $body = 'daily';
                break;
                case 'people.php' : 
                    $title = 'People page of our Website Project';
                    $body = 'people';
                    break;
                    case 'contact.php' : 
                        $title = 'Contact page of our Website Project';
                        $body = 'contact';
                        break;
                        case 'gallery.php' : 
                            $title = 'Gallery page of our Website Project';
                            $body = 'gallery';
                            break;
                            
                           
                            $todayDate = date('H:i A');
                            
                            if(isset($_Get['today'])) {
                            $today = $_GET['today'];
                            } else {
                            $today = date('l');
                            };
                            
                            switch($today) {
                            case 'Monday':
                            $city = 'On Monday we highlight Sarasota, Florida';
                            $pic = 'sarasota.jpg';
                            $alt = 'An image of Sarasota, Florida';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.';
                            $background = 'lightsteelblue';
                            break;
                            
                            case 'Tuesday':
                            $city = 'On Tuesday we highlight Nashville, Tennessee';
                            $pic = 'nashville.jpg';
                            $alt = 'An image of Nashville, Tennessee';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.';
                            $background = 'azure';
                            break;
                            
                            case 'Wednesday':
                            $city = 'On Wednesday we highlight Lancaster, Pennsylvania';
                            $pic = 'lanc.png';
                            $alt = 'An image of Lancaster, Pennsylvania';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.';
                            $background = 'MediumOrchid';
                            break;
                            
                            case 'Thursday':
                            $city = 'On Thrusday we highlight Ann Arbor, Michigan';
                            $pic = 'ann.jpg';
                            $alt = 'An image of Arbor, Michigan';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.';
                            $background = 'darkkhaki';
                            break;
                            
                            case 'Friday':
                            $city = 'On Friday we highlight Manchester, New Hampshire';
                            $pic = 'manchester.jpg';
                            $alt = 'An image of New Hampshire';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.';
                            $background = 'mypurple';
                            break;
                            
                            case 'Saturday':
                            $city = 'On Saturday we highlight Asheville, North Caroline';
                            $pic = 'asheville.jpg';
                            $alt = 'An image of North Caroline';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.';
                            $background = 'sandybrown';
                            break;
                            
                            case 'Sunday':
                            $city = 'On Sunday we highlight Dallas, Texas';
                            $pic = 'dallas.jpg';
                            $alt = 'An image of Dallas, Texas';
                            $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.';
                            $background = 'bisque';
                            break;
                            }
                            
                            
                            

default:

$body = 'inner';
$title='Our Wonderful Website';
}

//form php

$firstName = '';
$lastName = '';
$email = '';


$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';

if($_SERVER['REQUEST_METHOD']
== '$_POST') {



}


















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