<?php

namespace Classes\Models\User;

abstract class User {

    //visibility of attributes
    protected $user_id;
    protected $user_name;
    protected $password;
    protected $first_name;
    protected $last_name;
    protected $contact_id;

    public function __construct($user_name, $password) { //login
       $this->user_id = 123;
    }

    public function search($searchTerm) {
        
    }

    public function viewItem($item_id) {
        
    }

}
