<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library User Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
        <link href="styles.css" rel="stylesheet" type="text/css"/>
        <link href="myRentals.css" rel="stylesheet" type="text/css"/>

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

            <h1 style="font-family: Cabin; font-style: Bold; font-size: 50px; color: #183149 ">My rentals</h1>
            <hr>

            <div id="BtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> SHOW ALL</button>
                <button class="btn" onclick="filterSelection('Books')"> BOOKS</button>
                <button class="btn" onclick="filterSelection('Magazines')"> MAGAZINES</button>
                <button class="btn" onclick="filterSelection('Films')"> FILMS</button>
                <button class="btn" onclick="returnToSearch()"> RETURN</button>
            </div>

            <!-- Borrowed Items Grid -->
            <div class="row">
                <div class="column Books">
                    <div class="content">
                        <img src="images/harry potter.jpg" alt="books" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">Harry Potter</h3> 
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>                 <!--Here at the moment I put in a link to an empty index.php but we could link this back to the rental/renewal page  if we'll have one-->
                    </div>                                                                                                  <!-- Also  in these P tag we could link the date to the database to make it dynamic but at the moment i have no idea how to...--> 
                </div>

                <div class="column Films">
                    <div class="content">
                        <img src="images/the revenant.jpg" alt="films" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">The Revenant</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
                
                <div class="column Magazines">
                    <div class="content">
                        <img src="images/the economist.jpg" alt="magazines" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">The Economist</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
                
                <div class="column Return">
                    <script>
                        function returnToSearch() {
                            location.replace("search.php")

                        }
                    </script>
                    <!-- <a href="https://www.google.com/" target="_blank"></a>-->
                </div>
                <!--
                <div class="column Books">
                    <div class="content">
                        <img src="images/war and peace.jpg" alt="books" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">War and Peace</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
                <div class="column Books">
                    <div class="content">
                        <img src="images/middlemarch.jpg" alt="books" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">Middlemarch</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
                <div class="column Magazines">
                    <div class="content">
                        <img src="images/history.jpg" alt="magazines" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">History</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>

                <div class="column Magazines">
                    <div class="content">
                        <img src="images/natgeo.jpg" alt="magazines" style="width:270px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">National Geographic</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
                <div class="column Films">
                    <div class="content">
                        <img src="images/godfather.jpg" alt="films" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:5;">The godfather</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
                <div class="column Films">
                    <div class="content">
                        <img src="images/wizard of oz.jpg" alt="films" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:"5;>The wizard of OZ</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>-->
                

                <!-- END GRID -->
            </div>

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