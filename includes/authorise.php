<!-- Codes in this file is understood and written from Week9 lab activity 3 of Web programming COSC2413 -->

<?php 

require_once('functions.php');

if(!isUserLoggedIn())
    redirect('login.php');