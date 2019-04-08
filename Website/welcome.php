<?php

session_start();                                // once directed here from validate page we need to start a session here too - access field from validate page (from line 15)
echo "Welcome". $_SESSION['email_address'];
echo "<a href='logout.php'>logout</a>";         //  send or link to the next page - could be myRentals for our DB (that will also need a session i think) 

