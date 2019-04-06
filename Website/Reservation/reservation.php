
        <?php
        
        try {
            $dsn = "mysql:host=localhost;dbname=Library";
            $user = "root";
            $password = "";

            $pdo = new PDO($dsn, $user, $password);
            
            $user_id = 1;   //TODO: replace with session user id
            $book_id = $_GET['book_id'];
            //create reservation.
            $stmt = $pdo->query("INSERT INTO reservation (user_id, book_id) VALUES ('".$user_id."', '".$book_id."')");
            
            
        } catch (Exception $e) {
            echo "Fail :(";
        }
               
        ?>
   