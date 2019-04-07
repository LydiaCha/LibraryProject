<?php

namespace Website\Search;

use Exception;
use PDO;

class SearchBar {

    public function drawSearchBar() {
        echo "
        <div class='searchContainer'>
            <form id='searchBar' action='search.php' method='GET'>
                <label for='searchTerm'> </label>
                <input name='searchTerm' type = 'text' placeholder = 'Search here...' class = 'searchBar'/>
                <button class='searchButton' type='submit'>SEARCH</button>
            </form>
        </div>";
    }

    public function search($searchTerm) {
        if (empty($searchTerm)) {
            throw new Exception("It's empty!");
        }

        try {           
            $dsn = "mysql:host=localhost;dbname=lms";
            $user = "root";
            $password = "";

            $pdo = new PDO($dsn, $user, $password);
            $stmt = $pdo->query("SELECT * FROM book WHERE title LIKE '%$searchTerm%'");
            while ($bookRow = $stmt->fetch()) {
                echo "<a href='item.php?book_id=".$bookRow['book_id']."'>".$bookRow['title']."</a><br/>";
            }
            
            $stmt = $pdo->query("SELECT * FROM film WHERE film_title LIKE '%$searchTerm%'");
            while ($filmRow = $stmt->fetch()) {
                echo "<a href='item.php?film_id=".$filmRow['film_id']."'>".$filmRow['film_title']."</a><br/>";
            }
            
            $stmt = $pdo->query("SELECT * FROM magazine WHERE issue_name LIKE '%$searchTerm%'");
            while ($magazineRow = $stmt->fetch()) {
                echo "<a href='item.php?magazine_id=".$magazineRow['magazine_id']."'>".$magazineRow['issue_name']."</a><br/>";
            }
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}
