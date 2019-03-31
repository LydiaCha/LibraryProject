<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
        <link href="search.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
             <?php
                 include 'Navigation/NavigationBar.php';
                 use Website\Navigation\NavigationBar;

                 $navBar = new NavigationBar();
                 $navBar->drawNavBar();
             ?>

        <div class="searchResultsContainer">
             <?php
                 include 'Search/SearchBar.php';
                 use Website\Search\SearchBar;

                 $searchBar = new SearchBar();
                 $searchBar->drawSearchBar();           
             ?>
            
            <?php
                if (isset($_GET['searchTerm'])) {
                    try {
                        $searchBar->search($_GET['searchTerm']);
                    } catch (Exception $error) {
                        echo "<div>Please enter a value to search</div>";
                    }
                }
            ?>
        </div>
           

    </body>
</html>
