
        <?php
        
        try {
            $dsn = "mysql:host=localhost;dbname=lms";
            $user = "root";
            $password = "";

            $pdo = new PDO($dsn, $user, $password);
            
            $user_id = 1;   //TODO: replace with session user id
            $item_id = $_GET['item_id'];
           
            //create reservation.
            $stmt = $pdo->query("INSERT INTO reservation (user_id, item_id) VALUES ('".$user_id."', '".$item_id."')");
            
            
        } catch (Exception $e) {
            echo "Fail :(";
        }
               
        ?>
   