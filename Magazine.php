<?php
namespace Classes\Models\Item;

require_once 'ItemInterface.php';

class Magazine implements ItemInterface {
    use WithItemId;
    
    public function loanItem() {
        echo "This allows me to reserve a magazine";
    }
    public function returnItem() {
        echo "This allows me to return a magazine";
    }
}