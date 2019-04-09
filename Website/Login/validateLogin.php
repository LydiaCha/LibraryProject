<?php
namespace Library\Website\Login;
use 'DBConnect.php';

    
    if($_POST['username'] && $_POST['password'])  //getting the values passed in the forms by accesing superglobal$_post[]
    {
        $username = $_POST['email_address'];
        $password = $_POST['password'];
    
        $db = DBConnect::getConnection();
      
        $loginStatus = false;
        if($db != NULL)
        {   
            //$stmt = $db->query("SELECT email_address, password FROM contact");
            //while ($row = $stmt->fetch())
            foreach ($db->query("SELECT email_address, password FROM contact") as $row)
            {
                if($row['email_address'] == $username && 
                   $row['password'] == $password)
                {
                    $loginStatus= true;
                    break;
                }
              
            }
            
        }
        else 
        {
          echo "Error ".DBConnect::getError(); 
          die();
        }
        if($loginStatus == true)
        {
            session_start();
            header("Location: home.php");

        }
        else
        {
            header("Location: error.php");
        }
    }
    
    if(isset($_POST['login']))                                   //check one condition: if login button is hit  go into the website
    {                      
      
    if($email === $username && $password === $password){               // check data given by user If both correct allow to move on (line 18), otherwise throw an error (line 21)
       if(isset($_POST['remember'])){                           //with login we well get a click on remember button - IF remember is set we'll create a cookie (line 12/13)
       setcookie('email_address', $email, time()+60*60*7);      //time limited cookie 
       setcookie('password', $password, time()+60*60*7);            //time limited cookie not right to store it like this - it should be encyrpted
       }
        session_start();// 
       $_SESSION['email_address']=$email;                       // set variable for session 
       
       header("home.php");                          //if logged in and cookie set go to this page - here should link to myrentals or other landing page? 
       
    }else{
        echo "Email or password is invalid";
    }
}else{
    header("location: login.php");                             // in all other cases it takes me to the login page
}
?>