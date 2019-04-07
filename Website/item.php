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
            $dsn = "mysql:host=localhost;dbname=lms";
            $user = "root";
            $password = "";
          

            $pdo = new PDO($dsn, $user, $password);

            if (isset($_GET['book_id'])) {

                $stmt = $pdo->query("SELECT * FROM book WHERE book_id = '" . $_GET['book_id'] . "'");
                $bookRow = $stmt->fetch();
                $itemId = $bookRow['item_id'];

                $stmt = $pdo->query("SELECT author_id FROM book_author WHERE book_id = '" . $_GET['book_id'] . "'");
                $bookAuthorRow = $stmt->fetch();

                $stmt = $pdo->query("SELECT * FROM author WHERE author_id = '" . $bookAuthorRow['author_id'] . "'");
                $authorRow = $stmt->fetch();
                ?>
        
       
                <p style="margin-left: 500px"><?= $bookRow['title'] ?></p>
                <p style="margin-left: 500px"><?= $bookAuthorRow['author_id'] ?></p>
                <p style="margin-left: 500px"><?= $authorRow['first_name'] . " " . $authorRow['last_name'] ?></p>
       
               

                <img src='images/<?= $bookRow['image'] ?>' class='itemPageImages'/>
                <?php
            }

            if (isset($_GET['film_id'])) {

                $stmt = $pdo->query("SELECT * FROM film WHERE film_id = '" . $_GET['film_id'] . "'");
                $filmRow = $stmt->fetch();
                $itemId = $filmRow['item_id'];
                ?>
                <p style="margin-left: 500px"><?= $filmRow['film_title'] ?></p>
                <img src='images/<?= $filmRow['image'] ?>' class='itemPageImages'/>

                <?php
            }

            if (isset($_GET['magazine_id'])) {

                $stmt = $pdo->query("SELECT * FROM magazine WHERE magazine_id = '" . $_GET['magazine_id'] . "'");
                $magazineRow = $stmt->fetch();
                $itemId = $magazineRow['item_id'];
                ?>
                <p style="margin-left: 500px"><?= $magazineRow['issue_name'] ?></p>
                <img src='images/<?= $magazineRow['image'] ?>' class='itemPageImages'/>

                <?php
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
        ?>

        <br> <button id='reserve' type="button" style='margin-left: 960px'>DOWNLOAD NOW</button>


        <script type='text/javascript'>
            $('#reserve').click(function () {
                $.ajax("reservation/reservation.php?item_id=<?= $itemId ?>")
                        .done(function () {
                            alert("success");
                        })
            });
        </script>




        <?php
        include 'Footer/footer.php';
        ?>
    </body>
</html>
