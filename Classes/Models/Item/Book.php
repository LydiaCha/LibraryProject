<?php

//alt + Enter on Book to implement functions automatically

namespace Classes\Models\Item;

require_once 'ItemInterface.php';

class Book implements ItemInterface {
    
    use WithItemId; //This is how you import a trait from the interface into a class
    
    public function loanItem() {
        echo "This allows me to reserve a book";
    }

    public function returnItem() {
        echo "This allows me to return a book";
    }

}
