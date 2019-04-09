<?php
namespace LibraryProject\Website;
include '../../AutoLoad.php';

use LibraryProject\Classes\Models\User\Admin;
use LibraryProject\Classes\Models\User\Customer;
use \DBConnect;
    
    if($_POST['username'] && $_POST['password'])  //getting the values passed in the forms by accesing superglobal$_post[]
    {
        $username = $_POST['username'];
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
            header("Location: Search.php");

        }
        else
        {
            header("Location: ErrorPage.php");
        }
    }
?>