<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <?php
        include 'Navigation/NavigationBar.php';
        use Website\Navigation\NavigationBar;
        $navBar = new NavigationBar();
        $navBar->drawNavBar();
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
        

    </body>
</html>
