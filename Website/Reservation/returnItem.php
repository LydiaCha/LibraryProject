
<?php

try {
    $dsn = "mysql:host=localhost;dbname=lms";
    $user = "root";
    $password = "";

    $pdo = new PDO($dsn, $user, $password);

    $user_id = 1;   //TODO: replace with session user id
    $item_id = $_GET['item_id'];

   
    $stmt = $pdo->query("DELETE FROM reservation WHERE item_id = '$item_id' and user_id = '$user_id'");
    
} 

catch (Exception $e) {
    echo "Fail :(";
}
?>
   