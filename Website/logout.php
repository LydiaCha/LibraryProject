<?php

session_start();    //
session_destroy;    //

if(isset($_COOKIE['email_address']) && isset($_COOKIE['pass'])){
$email = $_COOKIE['email_address'];                                 // check if cookies are set
$pass = $_COOKIE['pass'];                                           // check if cookies are set
setcookie('email_address', $email, time()-1);                       //if  cookies are set (line 7)destroy cookies after session
setcookie('password', $pass, time()-1);                             //if  cookies are set (line 8) destroy cookies after session
}
echo "You are logged out. Click here to login again <a href='login.php'> login again</a>" ;


