<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php
        include 'Navigation/NavigationBar.php';
        ?>

        <div class="imageContainer">
            <img class="backgroundImage" src="images/Group 6.png" alt="books"/> 
            <div class="discoverText">
                <span class="headerSpan">Discover thousands of books, <br> magazines and films...</span> <br>

                <?php
                include 'Search/SearchBar.php';

                use Website\Search\SearchBar;

$searchBar = new SearchBar();
                $searchBar->drawSearchBar();
                ?>


            </div>
        </div>
        <?php
include 'Footer/footer.php';
?>
    </body>
    
</html>
