<?php

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






//switch

//echo date('Y');
//echo '<br>';
//echo date('l');
//if today is Thursday, show me Thursday's content usins ISSET

//Global variables, capitalized, and the global variables have man attributes

//$_GET global variables
//$_POST better for online forms
//IS TODAY SET????
//isset is a function -- isset()
date_default_timezone_set('America/los_Angeles');
$todayDate = date('H:i A');

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
        $today = date('l');
    }
   ;
    switch($today) {
        case 'Thursday':
        $band = '<p>Thursday is my the Brian Jonestown Massacre day</p>';
        $pic = 'images/bjm.png';
        $alt ="the Brian Jonestown Massacre";
        $content = '<p><h2>A good song for today: Hide and Seek </h2></p>

        <p>The Brian Jonestown Massacre is an American musical project and band led and started by Anton Newcombe. It was formed in San Francisco in 1990. 
        <a href="https://en.wikipedia.org/wiki/The_Brian_Jonestown_Massacre">-Wikipedia</a></p>';
        
        $background = 'darkkhaki';
       
        break;

        case 'Friday':
            $band= '<p>Friday is my Sonic Youth day</p>';
            $pic = 'images/sonic-youth.png';
            $alt ="Sonic Youth band";
            $content = '<p><h2>A good song for today: Schizophrenia</h2></p>

            <p>Sonic Youth was an American rock band based in New York City, formed in 1981. Founding members Thurston Moore (guitar, vocals), 
            Kim Gordon (bass, vocals, guitar) and Lee Ranaldo (guitar, vocals) remained together for the entire history of the band, while Steve Shelley 
            (drums) followed a series of short-term drummers in 1985, rounding out the core line-up. Jim O\'Rourke (bass, keyboards, guitar) was a member 
            of the band from 1999 to 2005. </p>

            <p>Sonic Youth emerged from the experimental no wave art and music scene in New York before evolving into a more conventional rock band and becoming 
a prominent member of the American noise rock scene.Sonic Youth have been praised for having "redefined what rock guitar could do" using a wide variety 
of unorthodox guitar tunings and preparing guitars with objects like drum sticks and screwdrivers to alter the instruments\' timbre. The band was a pivotal 
influence on the alternative and indie rock movements. </p>

<p>After gaining a large underground following and critical praise through releases with SST Records in the late 1980s, the band experienced mainstream s
uccess throughout the 1990s and 2000s after signing to major label DGC in 1990 and headlining the 1995 Lollapalooza festival. In 2011, following the separation 
and subsequent divorce of Gordon and Moore, the band played their final shows in Brazil. In the following years, the members expressed that the band was 
finished and would not reunite. <a href="https://en.wikipedia.org/wiki/Sonic_Youth">-Wikipedia</a></p>';
            $background = 'darkslategrey';
           
            break;

            case 'Saturday':
                $band= '<p>Saturday is my Kikagaku Moyo day</p>';
                $pic = 'images/moyo.png';
                $alt ="Kikagaku Moyo band";
                $content = '<p><h2>A good song for today: Cardigan Song  </h2></p>
                <p>Kikagaku Moyo have come a long way –both literally and metaphorically– since their humble beginnings 
                busking on the streets of Tokyo back in 2012. A tight-knit group of five friends who bonded over the desire 
                to play freely, and explore music associated with space and psychedelica, their initial ambitions were modest 
                semi-regular slots in the cramped clubs of the city’s insular music scene. Yet the band’s progressive, folk-influenced 
                take on psychedelica marked them out from their peers and re-started Japan’s psych rock scene; it also brought them international acclaim.</p>

                <p>With a settled line up – Go Kurosawa (drums,vox), Tomo Katsurada (guitar, vox), Kotsuguy (bass), Daoud Popal (guitar), Ryu Kurosawa (sitar), – 
and a signature sound that blended classical Indian music, Krautrock, traditional folk, 70s rock, and acid-tinged psych, the band sold out shows 
across Europe and founded their own label, Guruguru Brain, to showcase not just their own work, but the under-represented music scene in East Asia. 
To date, the label has released music from over ten different artists alongside their own albums, and in 2017 Kurosawa and Katsurada relocating permanently 
to Amsterdam, The Netherlands. The move placed both Kikagaku Moyo and Guruguru Brain at the heart of Europe and eased the logistical challenges of long tours 
for bands on their label and release schedules while catering to Western audiences.</p>

<p>Since then, their popularity has continued to grow, and Kikagaku Moyo are now one of the most acclaimed bands in the alternative psych scene.
 Having toured the world several times over, they’ve also graced prominent slots at renowned festivals such as Bonnaroo Music Festival (US), 
 End Of The Road Festival, Green Man Festival (both UK), and Concrete & Glass (China),and have been commissioned by world-famous fashion brands 
 such as Gucci and Issey Miyake. Recent album Masana Temples received stellar reviews from the likes of Mojo and Uncut, and the band were also invited 
 to appear on acclaimed radio station KEXP, performing for one of their famed live sessions. 
                 <a href="https://en.wikipedia.org/wiki/Kikagaku_Moyo">-Wikipedia</a></p>' ;
                $background ='sandybrown ';
                break;

                case 'Sunday':
                    $band= '<p>Sunday is my The Velvet Underground day</p>';
                    $pic = 'images/vu.png';
                    $alt ="The Velvet Underground band";
                    $content = '<p><h2>A good song for today: Sunday Morning </h2></p>
                    
                    <p>The Velvet Underground was an American rock band formed in New York City in 1964 by singer/guitarist Lou Reed, multi-instrumentalist John Cale, 
                    guitarist Sterling Morrison, and drummer Angus MacLise. MacLise was replaced by Moe Tucker in 1965, who played on most of the band\'s recordings.
                     The band performed under a number of names before settling on The Velvet Underground in 1965. Pop artist Andy Warhol became their manager in 1966,
                      and they served as the house band at Warhol\'s art collective known as "the Factory" and Warhol\'s traveling multimedia show, the 
                      Exploding Plastic Inevitable, from 1966 to 1967. Their debut album, The Velvet Underground & Nico (with German singer and model Nico), 
                      was released in 1967 to critical indifference and poor sales but has since become critically acclaimed; in 2003, Rolling Stone called it the 
                      "most prophetic rock album ever made."</p>

                      <p>The band released three more albums (White Light/White Heat (1968), The Velvet Underground (1969), and Loaded (1970), with Doug Yule replacing Cale for the final two, 
and with none performing up to the expectations of record labels or of Reed, the band\'s leader; the group functionally disbanded in 1971-1972 as everyone except Yule 
left the band. An abortive UK tour with Yule as the band leader and with new musicians followed in 1973, and a final album released in the band\'s name, Squeeze (1973),
 consisting mostly of Yule with a few session musicians, marked the end of the band for some time. All of the members continued to collaborate on each other\'s solo work 
 throughout the 1970s and 1980s, and a retrospective "rarities" album, VU, was released in 1985. A full reunion of the band came in the early 1990s, with the 
 Reed-Cale-Tucker-Morrison lineup playing a series of well-received shows in 1993, and releasing a live album from the tour, Live MCMXCIII. After Morrison\'s death in 1995, 
 the remaining three members played together for a single performance at their Rock and Roll Hall of Fame induction in 1996, the last time the band performed together musically.</p>

 <p>The band\'s integration of rock and the avant-garde achieved little commercial success during its existence, but it is now recognized as one of the most influential bands in rock,
 underground, experimental, and alternative music. The provocative subject matter, musical experiments, and often nihilistic attitudes explored in the band\'s work proved
  influential in the development of punk rock and new wave music. In 2004, Rolling Stone ranked the band No. 19 on its list of the "100 Greatest Artists of All Time".
   In 2017, a study of AllMusic\'s catalog indicated the Velvet Underground as the fifth most frequently cited artist influence in its database. The band was inducted 
   into the Rock and Roll Hall of Fame in 1996 by Patti Smith. <a href="https://en.wikipedia.org/wiki/The_Velvet_Underground">-Wikipedia</a></p>';                                                
                    $background = 'bisque';
                    break;

                    case 'Monday':
                        $band= '<p>Monday is my Duster day</p>';
                        $pic = 'images/duster.png';
                        $alt ="Duster band";
                        $content = '<p><h2>A good song for today: Echo, Bravo </h2></p>
                        <p>Duster is an American rock band consisting of multi-instrumentalists Clay Parton, Canaan Dove Amber, and Jason Albertini
                         from San Jose, California. Albertini played drums on three tracks for their debut album, 1998\'s Stratosphere, and with 
                         1999\'s 1975 EP, became much more involved in the group process, playing many more instruments and sharing recording/producing 
                         credits with Parton and Amber. By 2000\'s Contemporary Movement he was fully involved in the creative process as a permanent 
                         member of the group. Members of the band previously performed together in the group Mohinder, as well as releasing two albums 
                         under the name Valium Aggelein.</p>

                         <p>Parton also tinkers with his side project Eiafuawn and plays drums and tours with punk band El Buzzard. Albertini has his own band Helvetia that has 
put out multiple records on Parton\'s record label The Static Cult Label and plays keyboards/drums with Mike Johnson. Parton and Amber also run 
the Low Earth Orbit recording studio.</p>

<p>On April 13, 2018, Duster posted via their Instagram page that they are “recording a little bit”.[4] Later it was announced that the band\'s 
discography would be reissued as the box set Capsule Losing Contact through The Numero Group,[5] which was released on March 22, 2019. On July 4, 2019, 
the band released their first standalone single in almost 20 years, "Interstellar Tunnel", and subsequently announced their third self-titled studio album, 
which was released on December 13 that year.</p>

<p>Of their hiatus and subsequent reunion, Parton said, "When we took a break almost two decades ago, we didn\'t think it was going to all completely stop.
We thought we could keep it drifting at least, maybe at a slower pace and with a different process. But everything just went dark. We were always in touch 
and sometimes we\'d talk about doing Duster things, but days just piled up... In recent years we\'ve talked more seriously about at least doing another record. 
Now everything is sort of working out, and we are making new things together, but we\'re taking it slow and still doing most things wrong, so it does feel like 
right where we left off."</p>

<p>Generally seen as indie rock, the group has been also associated with the space rock and slowcore movements by critics due to their unique sound. 
To produce this, the band typically recorded on cheap and older recording equipment, such as cassette decks, in their Low Earth Orbit studio, giving their 
music a lo-fi quality. <a href="https://en.wikipedia.org/wiki/Duster_(band)">-Wikipedia</a></p>';
                        $background = 'lightsteelblue';
                        break;

                        case 'Tuesday':
                            $band= '<p>Tuesday is my Boards of Canada day</p>';
                            $pic = 'images/boc.png';
                            $alt ="Boards of Canada band";
                            $content = '<p><h2>A good song for today: Dayvan Cowboy</h2></p>
                            
                            <p>Boards of Canada are a Scottish electronic music duo consisting of brothers Michael Sandison and Marcus Eoin. Signing to Skam and 
                            then Warp Records in the 1990s, the duo received recognition following the release of their debut album Music Has the Right to Children in 1998.
                             Their subsequent albums, Geogaddi (2002), The Campfire Headphase (2005) and Tomorrow\'s Harvest (2013), have received critical praise. 
                             They have remained reclusive, rarely giving interviews or performing live.</p>

                             <p>The duo\'s music incorporates elements such as vintage synthesisers, analogue production methods, hip hop-inspired breakbeats, and samples from 1970s public broadcasting 
programmes and other outdated media; it has been described as exploring themes of nostalgia, childhood memory, and nature. In 2012, Fact called them "one of the 
best-known and best-loved electronic acts of the last two decades." <a href="https://en.wikipedia.org/wiki/Boards_of_Canada">-Wikipedia</a></p> ';
                            $background = 'azure';
                            break;

                            case 'Wednesday':
                                $band= 'Wednesday is my Slowdive day';
                                $pic = 'images/slowdive.png';
                                $alt ="Slowdive band";
                                $content = '<p><h2>A good song for today: When the Sun Hits</h2></p>
                                <p>Slowdive are an English rock band that formed in Reading, Berkshire in 1989. The band consists of Rachel Goswell on vocals and guitar,
                                 Simon Scott on drums, Neil Halstead on vocals and guitar, Nick Chaplin on bass and Christian Savill on guitar. Several other drummers 
                                 also briefly played with the band, including Adrian Sell, Neil Carter and Ian McCutcheon. Halstead is the band\'s primary songwriter.</p>

                                 <p>Goswell and Halstead had known each other since early childhood in Reading, Berkshire. Scott left in 1994 and when Savill and Chaplin left the band soon after the release 
of Pygmalion, the remaining members renamed the band Mojave 3. Slowdive reunited in 2014.</p>


<p>Their sound has been described as dream pop, shoegazing, indie rock and ambient. 
                                <a href="https://en.wikipedia.org/wiki/Slowdive">-Wikipedia</a></p>';
                                $background = 'MediumOrchid ';
                                break;
                    
    }
    ;
 
$name = '';
// $firstName = '';
// $lastName = '';
$email = '';
// $gender = '';
$candy = '';
$day = '';
// $comments = '';
$agree = '';
$phone = '';

$nameErr = '';
// $lastNameErr = '';
$emailErr = '';
// $genderErr = '';
$candyErr = '';
$dayErr = '';
// $commentsErr = '';
$agreeErr = '';
$phoneErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

//if something was empty, echo the error
//if a field is empty we are going to create an error variable

if(empty($_POST['name'])) {
    $nameErr = 'Please enter your name';
} else {
    $name = $_POST['name'];
}
// if(empty($_POST['lastName'])) {
//     $lastNameErr = 'Please enter your last name';
// } else {
//     $lastName = $_POST['lastName'];
// }
if(empty($_POST['email'])) {
    $emailErr = 'Please enter your email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
    $phoneErr = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phoneErr = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    }
    }

    // if(empty($_POST['gender'])) {
    //     $genderErr = 'Please check one';
    // } else {
    //     $gender = $_POST['gender'];
    // }
if(empty($_POST['candy'])) {
    $candyErr = 'What, no candy...???';
} else {
    $candy = $_POST['candy'];
}
if($_POST['day'] == 'NULL') {
    $dayErr = 'Please select your favorite Candy Day';
} else {
    $day = $_POST['day'];
}
   
// if(empty($_POST['comments'])) {
//         $commentsErr = 'How can we help you?';
//     } else {
//         $comments = $_POST['comments'];
//     }
if(empty($_POST['agree'])) {
  $agreeErr = 'You must agree!';
} else {
  $agree = $_POST['agree'];
}

function myCandy() {
$myReturn = '';
//if my wines array is not empty, implode it

if(!empty($_POST['candy'])) {
    $myReturn = implode(', ', $_POST['candy']) ;
} return $myReturn;

} //close function

if(isset($_POST['name'],
        // $_POST['lastName'],
        $_POST['email'],
        // $_POST['gender'],
        $_POST['candy'],
        $_POST['day'],
        $_POST['phone'],
        $_POST['agree'])) {
                        
                    
             $to = 'coleman.zwc@gmail.com';
             $subject = 'Test email for my contact page ' .date('m/d/y');
             $body = 'Name: '.$name.''.PHP_EOL.'
             Email: '.$email.''.PHP_EOL.'
             Phone Number: '.$phone.''.PHP_EOL.'
             Favorite Candy Day: '.$day.''.PHP_EOL.'
             Favorite Candy: '.myCandy().'';

             $headers = array(
            'From' => 'no-reply@learnphp',
            'Reply-to' => ''.$email.''
             );

            if($_POST['name']  !== ''  && 
            // $_POST['lastName']  !== ''  && 
            $_POST['email']  !== ''  && 
            $_POST['candy']  !== ''  && 
            // $_POST['comments']  !== ''  && 
            $_POST['agree']  !== ''  && 
            $_POST['phone']  !== ''  && 
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) &&
            $_POST['day']  !== 'NULL')    {
             mail($to, $subject, $body, $headers);
                    header('Location:thx.php');
}

}  //closing isset

        } // end server request

?>
