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
            $bookTitle = " ";
            $dsn = "mysql:host=localhost;dbname=Library";
            $user = "root";
            $password = "";

            $pdo = new PDO($dsn, $user, $password);
            $stmt = $pdo->query("SELECT * FROM book WHERE title LIKE '%$searchTerm%'");
            while ($row = $stmt->fetch()) {
                echo $row['title']."<br/>";
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}
