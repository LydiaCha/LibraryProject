<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>  
    <body>
        
        <?php
        include 'Navigation/NavigationBar.php';

            try {
            $dsn = "mysql:host=localhost;dbname=Library";
            $user = "root";
            $password = "";

            $pdo = new PDO($dsn, $user, $password);
            $stmt = $pdo->query("SELECT * FROM book WHERE book_id = '".$_GET['book_id']."'");
            $row = $stmt->fetch() ;
                
                
            $stmt = $pdo->query("SELECT author_id FROM book_author WHERE book_id = '".$_GET['book_id']."'");
            $bookAuthorRow = $stmt->fetch() ;
              
            
                $stmt = $pdo->query("SELECT * FROM author WHERE author_id = '".$bookAuthorRow['author_id']."'");
            $authorRow = $stmt->fetch() ;
                
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
        ?>
        <p><?=$row['title']?></p>
        <p><?=$bookAuthorRow['author_id']?></p>
        <p><?=$authorRow['first_name'] ." ".$authorRow['last_name']?></p>
        
                
        <img src='images/<?=$row['image']?>' class='itemPageImages'/> <br>
        <button id='reserve' type="button" style='margin-left: 960px'>DOWNLOAD NOW</button>
            
        <script type='text/javascript'>
            $('#reserve').click(function() {
                $.ajax( "reservation/reservation.php?book_id=<?=$_GET['book_id']?>" )
                .done(function() {
                    alert( "success" );
                })
            });
        </script>
        
        
        
        
        <?php
include 'Footer/footer.php';
?>
    </body>
</html>
