<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        
        require_once 'LibraryProject/Classes/Models/User/Customer.php';
        
        use LibraryProject\Classes\Models\User\Customer;
       
        $valid = isset($_POST['username']) &&
                 isset($_POST['first_name']) &&
                 isset($_POST['last_name']) &&
                 isset($_POST['address']) &&
                 isset($_POST['postcode']) &&
                 isset($_POST['phone']) &&
                 isset($_POST['email']) &&
                 isset($_POST['password']); 
        
        if($valid == TRUE) //It displays all the elements of $_post superglobal entered in the form. 
        {
            foreach($_POST as $key => $value)
            {
                echo $key." ---- >".$value."<br>";
            }
           $newCustomer = Customer::register($_POST['username'], //
                    $_POST['password'] , 
                    $_POST['first_name'], 
                    $_POST['last_name'],
                    $_POST['address'], 
                    $_POST['address'], 
                    $_POST['address'], 
                    $_POST['postcode'], 
                    $_POST['email'], 
                    $_POST['phone']);      
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     
            //Database connectivity code
                     
//            $dbcon = new mysqli("localhost","ash","","lms");
//            if ($dbcon->connect_error) 
//            {
//                die("Connection failed: " . $dbcon->connect_error);
//            } 
//            echo 'connected to database successfully<br>';
//            
//            $myquery = "SELECT first_name, last_name FROM user";
//            $result = $dbcon->query($myquery);
//            if($result->num_rows > 0)
//            {
//                while($row = $result->fetch_assoc())
//                {
//                    echo $row['first_name']." ".$row['last_name']."<br>";
//                }
//                
//                $result->free();
//            }
//            echo 'closed connection to database successfully';
//            $dbcon->close();
            
        ?>
    </body>
</html>
