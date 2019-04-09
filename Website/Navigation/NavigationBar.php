<div class='topnav'>
    <img src='images/book-icon.png' class='bookIcon' />
    <h2 style="position: absolute; font-family: cabin; color: white; font-size: 20px; font-weight: 1200; margin-left: 70px
        ">ASKLibrary</h2>

    <div class='navLinks'>
        <a href='aboutUs.php'>About Us</a>

        <?php
        //get the current session and check if the user is logged in.
        if (isset($_SESSION['login']) && $_SESSION['login']) {
            echo "<a href='logout.php'>Logout</a>
               <a href='#inventory'>Inventory</a>
                <a href='myRentals.php'>My Rentals</a>";
        } else {
            echo "
                 <a href='registration.php'>Register</a>
                 <a href='login.php'>Login</a>";
        }
        ?>
        <a class='active' href='home.php'>Home</a>
    </div>
</div>
