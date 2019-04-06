<div class='topnav'>
    <img src='images/book-icon.png' class='bookIcon' />
    <div class='navLinks'>
        <a href='aboutUs.php'>About Us</a>

        <?php
        //get the current session and check if the user is logged in.
        if (isset($_SESSION['login']) && $_SESSION['login']) {
            echo "<a href='#logout'>Logout</a>
               <a href='#inventory'>Inventory</a>
                <a href='myRentals.php'>My Rentals</a>";
        } else {
            echo "
                 <a href='registration.php'>Register</a>
                 <a href='#login'>Login</a>";
        }
        ?>
        <a class='active' href='home.php'>Home</a>
    </div>
</div>
