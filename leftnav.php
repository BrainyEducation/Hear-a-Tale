<?php

    /*if (strpos(basename($_SERVER['PHP_SELF']), "ADULT") === 0
       || strpos(basename($_SERVER['PHP_SELF']), "SOUTH") === 0 ){
        
        echo "<img style='padding-left:30;' src='images/adult_banner.jpg'>";
        
    }*/

?>

<div class="mainNav">
    <div id="sidebar" class="sidebar-left">
        <ul class="menu">
            <li><a href='/'>Home</a></li>
            <li><a href='children.php'>Children's Section <img style="width:50px" src = "images/section_icons/Children.png" id="children_sidebar"></a></li>
            <li><a href='ADULT_home.php'>Students and Adults</a></li>
            <li><a href='SOUTHERN_home.php'>Southern Literature</a></li>
            <li><a href="ABOUT_intro.php" id="about_menu" href='#'>About</a></li>
            <li><a href="ABOUT_contact.php" id="about_menu" href='#'>Contact Us</a></li>
        </ul>
    </div>
    <a href="ABOUT_einstein.php"><img src="images/einstein-small.png" style="width:75%; margin-left:5%; max-width:220px;"></a>
    </br></br>
    <p style="width:80%; text-align:center; margin-bottom:0;"><b>Supported by</b></p>
    <a href="http://www.potashcorp.com/"> <img src="images/supporters/potashcorp.png" style="width:80%;"> </a>
    <a href="http://watson-brown.org/"> <img src="images/supporters/watson%20brown.png" style="width:80%;"> </a>
    <a href="http://teacherquality.coe.uga.edu/"><img src="images/supporters/itq.png" style="width:80%;"></a>
</div>

<div class="mobileNav">
    <a href='index.php'><h3 class="one"><p>Home</p></h3></a>
    <a href='children.php'><h3 class="two"><p><img style="width:40px" src="images/section_icons/Children.png">
        Children's Section<img style="width:40px" src="images/section_icons/Children.png"></p></h3></a>
    <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){ ?>
    <a href='ADULT_home.php'><h3 class="three"><p>Students and Adults</p></h3></a>
    <a href='adult/southernlist.php'><h3 class="four"><p>Southern Literature</p></h3></a>
    <?php } ?>
    <a href="ABOUT_intro.php" id="about_menu" href='#'><h3 class="five"><p>About</p></h3></a>
    <br>
    <br>
</div>
