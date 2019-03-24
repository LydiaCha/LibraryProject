<?php

namespace Classes\Models\User;

require_once 'User.php';

class Customer extends User {

    public static function register($user_name, $password, $first_name, $last_name, $first_line, $second_line, $city, $postcode, $email_address, $phone_number) {

      return new Customer($user_name, $password); //Once someone has signed up, this signs them in
    }

    public function loanItem($item_id) {
      echo "Loaning item " . $item_id . " for user " . $this->user_id;
    }

    public function returnItem($item_id) {
       echo "Returning item " . $item_id . " for user " . $this->user_id;
    }

}
