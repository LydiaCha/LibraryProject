<?php

namespace Classes\Models\User;

require_once 'User.php';

class Admin extends User {
    
    public function createBook($book_title, $genre_type, $author_first_name, $author_last_name) {
        
    }
    
    public function createMagazine($issue_name) {
        
    }
    
    public function createFilm($film_title) {
        
    }
    
    public function updateBook($item_id, $book_title, $genre_type, $author_first_name, $author_last_name) {
        
    }
    
    public function updateMagazine($item_id, $issue_name) {
        
    }
    
    public function updateFilm($item_id, $film_title) {
        
    }
    
    public function deleteItem($item_id) {
        
    }
}
