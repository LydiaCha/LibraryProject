<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Rentals</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
        <link href="styles.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>


    <body>

        <?php
        include 'Navigation/NavigationBar.php';
        ?>

        <!-- MAIN (Center website) -->
        <div class="main">

            <h2 style="font-family: Cabin; font-style: Bold; color: #183149; text-align: center ">My rentals</h1>
                <hr>

                <div id="BtnContainer" style="margin-left: 50px;">       
                    <button class="btn" onclick="filterSelection('Books')"> BOOKS</button>
                    <button class="btn" onclick="filterSelection('Magazines')"> MAGAZINES</button>
                    <button class="btn" onclick="filterSelection('Films')"> FILMS</button>
                    <button class="btn active" onclick="filterSelection('all')"> SHOW ALL</button>

                </div>

                <div style="margin-bottom: 50px">
                    <?php
                    try {
                        $dsn = "mysql:host=localhost;dbname=lms";
                        $user = "root";
                        $password = "";

                        $pdo = new PDO($dsn, $user, $password);
                        $stmt = $pdo->query("SELECT * FROM reservation WHERE user_id = '1'");
                        while ($row = $stmt->fetch()) {
                            $itemId = $row['item_id'];
                            echo $itemId . "<br/>";

                            $itemStmt = $pdo->query("SELECT * FROM book WHERE item_id = " . $row['item_id']);
                            $book = $itemStmt->fetch();
                            if (isset($book)) {
                                ?>
                    <h2>
                                <p style="margin-left: 100px"><?= $book['title'] ?></p>
                                <img style="width: 200px; margin-left: 100px" src='images/<?= $book['image'] ?>'/>
                                <?php
                            }

                            $itemStmt = $pdo->query("SELECT * FROM film WHERE item_id = " . $row['item_id']);
                            $film = $itemStmt->fetch();
                            if (isset($film)) {
                                ?>
                                <p style="margin-left: 100px; margin-left: 100px"><?= $film['film_title'] ?></p>

                                <img style="width: 200px" src='images/<?= $film['image'] ?>'/>
                                <?php
                            }

                            $itemStmt = $pdo->query("SELECT * FROM magazine WHERE item_id = " . $row['item_id']);
                            $magazine = $itemStmt->fetch();
                            if (isset($magazine)) {
                                ?>
                                <p style="margin-left: 100px; margin-left: 100px"><?= $magazine['issue_name'] ?></p>

                                <img style="width: 200px;" src='images/<?= $magazine['image'] ?>'/> </h2>
                                <?php
                                
                            } 
                            ?>

                            <button style="margin-left: 100px;" class="btn" onclick="returnItem(<?= $itemId ?>)"> RETURN</button>

        <?php
    }
} catch (Exception $e) {
    
}
?>
                </div>

                <script>

                    function returnItem(itemId) {
                        $.ajax("reservation/returnItem.php?item_id=" + itemId)
                                .done(function () {
                                    alert("success");
                                })

                    }
                    function returnToSearch() {
                        location.replace("search.php");

                    }
                </script>


                <!-- END MAIN -->
        </div>

        <script>
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("column");// select all element by column (Book/Film/Magazine
                if (c == "all")
                    c = "";
                //add the class the we filter and want to show and remove the ones we do not want to see
                for (i = 0; i < x.length; i++) {                // The length property returns the number of elements
                    RemoveClass(x[i], "show");                  // use array to catch all the units is the class
                    if (x[i].className.indexOf(c) > -1)
                        AddClass(x[i], "show");
                }
            }

            //showing class that was filtered i used \how to add class  from 
            //w3 schools https://www.w3schools.com/howto/howto_js_add_class.asp
            function AddClass(element, name) {
                var i, arr1, name2;
                arr1 = element.className.split(" ");
                name2 = name.split(" ");
                for (i = 0; i < name2.length; i++) {
                    if (arr1.indexOf(name2[i]) == -1) {         //The indexOf() method returns the index of (the position of) the first occurrence of a specified text in a string -if not found return -1
                        element.className += " " + name2[i];
                    }
                }
            }
            //removing class similar logic to adding class 
            function RemoveClass(element, name) {
                var i, arr1, name2;
                arr1 = element.className.split(" ");
                name2 = name.split(" ");
                for (i = 0; i < name2.length; i++) {
                    while (arr1.indexOf(name2[i]) > -1) {
                        arr1.splice(arr1.indexOf(name2[i]), 1); // to remove element from array I used w3 schools https://www.w3schools.com/jsref/jsref_splice.asp
                    }
                }
                element.className = arr1.join(" ");             // to join elements of an array see https://www.w3schools.com/jsref/jsref_join.asp
            }


            // This adds an active class to the current button 
            var btnContainer = document.getElementById("BtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>


<?php
include 'Footer/footer.php';
?>
    </body>
</html>