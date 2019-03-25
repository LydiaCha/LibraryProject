<?php
require_once 'LibraryProject/Classes/Models/User/Admin.php';
require_once 'LibraryProject/Classes/Models/User/Customer.php';

use LibraryProject\Classes\Models\User\Admin;
use LibraryProject\Classes\Models\User\Customer;
  
$userArray = array(new Admin('krisztina','scrum2'),    // This is an array of objects(2 admin objects and 1 customer object). Now we dont have database connectivity so using this array to pass values. 
                   new Admin('ash','scrum1'),
                   new Customer('Mandar','pune'));
    
    if($_POST['username'] && $_POST['password'])  //getting the values passed in the forms by accesing superglobal$_post[]
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
      
        $loginStaus = false;  //set the flag to false before going into loop
        
        for($i=0;$i< count($userArray);$i++ )  //This for loop is used to check username and password matches with the values in the array object $userArray[]
        {
            $eachUser = $userArray[$i];
           
            if($username == $eachUser->getUsername() && $password == $eachUser->getPassword()) 
            {
                $loginStaus = true;
                break;
            }  
        }
        if($loginStaus == true)
        {
            header("Location: SuccessLogin.php");

        }
        else
        {
            header("Location: ErrorPage.php");
        }
    }
?>