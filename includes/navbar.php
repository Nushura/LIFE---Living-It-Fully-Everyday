<!-- fragment code for navbar -->
<?php 

require_once('functions.php'); ?>

<div class="box nav">
            
    <ul>
        <?php if(isUserLoggedIn()) { ?>
            <li><a href="logout.php">LOGOUT</a></li>
        <?php } ?>

        <li><a href="login.php">LOGIN</a></li>
        <li><a href="registration.php">REGISTER</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>

        <?php if(isUserLoggedIn()) { ?>
            <li><a href="myServices.php">SERVICES</a></li>
        <?php } ?>

        <li><a href="index.php">HOME</a></li>
    
        <li class="nav_left_list">
            <?php if(isUserLoggedIn()) { ?>
                Welcome, <?= getLoggedInUser()['first_name']; ?>
                <!-- <li><a href="logout.php">LOGOUT</a></li> -->
            <?php } ?>
        </li>
    </ul>

</div>