<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library User Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="styles.css" rel="stylesheet" type="text/css"/>
      

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>


    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background-color: #F0F4F8;
            padding: 20px;
            font-family: Cabin;
        }
        /* Center website */
        .main {
            max-width: 1000px;
            margin: auto;
        }
        h1 {
            font-size: 50px;
            font-style: Bold;
            color: #183149;    
            font-family: Cabin;
        }
        
        h2 {
            font-size: 30px;
            font-style: Bold;
            color: #183149;    
            font-family: Cabin;
        }
        .row {
            margin: 10px -16px;
        }
        /* Add padding BETWEEN each column */
        .row,
        .row > .column {
            padding: 8px;
        }
        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            display: none; /* Hide all elements by default */
        }
        /* Clear floats after rows */ 
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Content */
        .content {
            background-color: white;
            padding: 10px;
        }
        /* The "show" class is added to the filtered elements */
        .show {
            display: block;
        }
        /* Style the buttons */
        .btn {
            font-family: Cabin;
            font-style: Bold;
            font-size: 15px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 8px 15px rgba (0,0,0,0.1);
            padding-top: 12px;
            padding-right: 27px;
            padding-bottom: 12px;
            padding-left: 27px;
            background-color: #183149;
            color: white;
            cursor: pointer;
            
        }
        .btn:hover {
            background-color: #183149;
        }
        .btn.active {
            background-color: #183149;
            color: white;
        }
    </style>


    <body>
<?php
        include 'Navigation/NavigationBar.php';
        ?>
        <!-- MAIN (Center website) -->
        <div class="main">

            <h1 style="font-family: Cabin; font-style: Bold; font-size: 50px; color: #183149 ">My rentals</h1>
            <hr>

            <div id="BtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('Books')"> Books</button>
                <button class="btn" onclick="filterSelection('Magazines')"> Magazines</button>
                <button class="btn" onclick="filterSelection('Films')"> Films</button>
            </div>

            <!-- Borrowed Items Grid -->
            <div class="row">
                <div class="column Books">
                    <div class="content">
                        <img src="images/harry potter.jpg" alt="books" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">Harry Potter</h3> 
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>                 <!--Here at the moment I put in a link to an empty index.php but we could link this back to the rental/renewal page  if we'll have one-->
                    </div>                                                                                                  <!-- Also  in these P tag we could link the date to the database to make it dynamic but at the moment i have no idea how to...--> 
                </div>
                
                <div class="column Films">
                    <div class="content">
                        <img src="images/the revenant.jpg" alt="films" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">The Revenant</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
               
                <div class="column Books">
                  <div class="content">
                    <img src="images/war and peace.jpg" alt="books" style="width:300px; height:auto">
                    <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">War and Peace</h3>
                    <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                  </div>
                </div>
                <div class="column Books">
                  <div class="content">
                  <img src="images/middlemarch.jpg" alt="books" style="width:300px; height:auto">
                    <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">Middlemarch</h3>
                    <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                  </div>
                </div>
                <div class="column Magazines">
                    <div class="content">
                        <img src="images/the economist.jpg" alt="magazines" style="width:300px; height:auto">
                        <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">The Economist</h3>
                        <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                    </div>
                </div>
                <div class="column Magazines">
                  <div class="content">
                  <img src="images/history.jpg" alt="magazines" style="width:300px; height:auto">
                    <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">History</h3>
                    <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                  </div>
                </div>
              
                <div class="column Magazines">
                  <div class="content">
                    <img src="images/natgeo.jpg" alt="magazines" style="width:270px; height:auto">
                    <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">National Geographic</h3>
                    <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                  </div>
                </div>
                <div class="column Films">
                  <div class="content">
                  <img src="images/godfather.jpg" alt="films" style="width:300px; height:auto">
                    <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">The godfather</h3>
                    <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                  </div>
                </div>
                <div class="column Films">
                  <div class="content">
                  <img src="images/wizard of oz.jpg" alt="films" style="width:300px; height:auto">
                    <h3 style="font-style:Bold; color:#183149; font-family: Cabin; font-size:10;">The wizard of OZ</h3>
                    <p>Please return this item by 13/04/2019 or renew <a href="index.php"> here</a></p>
                  </div>
                </div>
                -->
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
        // Add active class to the current button (highlight it)
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

