<?php

namespace Website\Navigation;

class NavigationBar {
    public function drawNavBar() {
        echo "<div class='topnav'>";
        echo "<img src='images/book-icon.png' class='bookIcon' />";
        echo "<div class='navLinks'>";
        echo "<a href='#about'>About Us</a>"; // common;
        
        //get the current session and check if the user is logged in.
        
       if (true) {
           echo "<a href='#logout'>Logout</a>
               <a href='#inventory'>Inventory</a>
                <a href='#rentals'>My Rentals</a>";
       } else {
        echo "
                 <a href='#register'>Register</a>
                 <a href='#login'>Login</a>";
       }
       //common components
       echo "<a class='active' href='home.php'>Home</a>";
       echo "</div>";
       echo "</div>";
    }
}

