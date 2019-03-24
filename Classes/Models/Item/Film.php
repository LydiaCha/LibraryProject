<?php

namespace Classes\Models\Item;

require_once 'ItemInterface.php';

class Film implements ItemInterface {

    use WithItemId;
    
    public function loanItem() {
        echo "This allows me to reserve a film";
    }

    public function returnItem() {
        echo "This allows me to return a film";
    }

}
