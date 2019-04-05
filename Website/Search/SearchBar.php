<?php

namespace Website\Search;
use Exception;
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
    }
}
       

