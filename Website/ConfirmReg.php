<?php
namespace Library\Website;
use DBConnect;
include 'Navigation/NavigationBar.php';
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
    // $db = DBConnect::getConnection();

    try {
    $dsn = "mysql:host=localhost;dbname=lms";
    $user = "root";
    $password = "";
    

    $pdo = new PDO($dsn, $user, $password); 

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
    
    
    $stmt = $pdo->query("INSERT INTO user (first_name, last_name) VALUES ('".$first_name."', '".$last_name."')");
    $stmt = $pdo->query("INSERT INTO contact (address, city, postcode, email, phone) VALUES ('".$address."', '".$city."','".$postcode.",'".$email.",'".$phone."')");

    //It displays all the elements of $_post superglobal entered in the form.
    foreach($_POST as $key => $value)
    {
    echo "<h4 style='text-align:center;color: purple; font:cabin' >". $key." ---- >".$value."<br></h4>";
    }
    
    echo '<br><br><br><br><br>';

    }  catch (Exception $e) {
            die($e->getMessage());
        }   

    ?>
    
    
<?php
    include_once 'Footer/footer.php';
    ?>
    
</body>
</html>