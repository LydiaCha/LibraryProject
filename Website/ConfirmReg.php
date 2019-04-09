<?php
    namespace LibraryProject\Website;
    include '../../AutoLoad.php';
    use LibraryProject\Classes\Models\User\Customer;
    use \DBConnect;
    include_once 'Navbar1.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br>
    <marquee><h2 style=" text-align:center; color: blue; font:cabin ">Registered Successfully</h2></marquee>
        <h3 style=" text-align:center; color: blue; font:cabin ">Check the details you filled while registering</h3>
        <br><br>
       <?php
        $db = DBConnect::getConnection();
        if (isset($_POST['submit']))
        {
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        }
         $stmt = $db->query("INSERT INTO user (first_name, last_name) VALUES ('".$first_name."', '".$last_name."')");
         $stmt = $db->query("INSERT INTO contact (address, city, postcode, email, phone) VALUES ('".$address."', '".$city."','".$postcode.",'".$email.",'".$phone."')");

        //It displays all the elements of $_post superglobal entered in the form. 

            foreach($_POST as $key => $value)
            {
                echo "<h4 style='text-align:center;color: purple; font:cabin' >". $key." ---- >".$value."<br></h4>";
            }
            
        
            echo '<br><br><br><br><br>';

      
        include_once 'Footer.php';
        ?>
    </body>
</html>
