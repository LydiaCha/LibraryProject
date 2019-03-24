<?php

// The interface cannot implement anything. It's like the blueprint for a class
// The implementation happens in the class files

namespace Classes\Models\Item;

// Create an interface
interface ItemInterface {

    public function loanItem();

    public function returnItem();
}

// Create common trait for all items
trait WithItemId {

    private $item_id; //declare the property

    public function getItemId() {
        return $this->item_id;
    }

    public function setItemId($item_id) {
        $this->item_id = $item_id;
    }

}

