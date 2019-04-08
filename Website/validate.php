<?php
$myemail = "kk@yahoo.com";                                   //created static variable for line 7 - this is where we'll need to link to DB
$mypass = "12345";                                           //created static variable for line 8 - this is where we'll need to link to DB

if(isset($_POST['login']))                                   //check one condition: if login button is hit  go into the website
    {
    $email = $_POST['email_address'];                        //with login we well get email - we'll validate this, otherwise we throw an error
    $pass = $_POST['password'];                              //with login we well get password - we'll valaidate this, otherwise we throw an error
      
    if($email === $myemail && $pass === $mypass){               // check data given by user If both correct allow to move on (line 18), otherwise throw an error (line 21)
       if(isset($_POST['remember'])){                           //with login we well get a click on remember button - IF remember is set we'll create a cookie (line 12/13)
       setcookie('email_address', $email, time()+60*60*7);      //time limited cookie 
       setcookie('password', $pass, time()+60*60*7);            //time limited cookie not right to store it like this - it should be encyrpted
       }
        session_start();// 
       $_SESSION['email_address']=$email;                       // set variable for session 
       
       header("location welcome.php");                          //if logged in and cookie set go to this page - here should link to myrentals or other landing page? 
       
    }else{
        echo "email or password is invalid";
    }
}else{
    header("location: login1.php");                             // in all other cases it takes me to the login page
}
?>