<?php

namespace Library\Website;

use DBConnect;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styles.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>




        <script src="checkForm.js" type="text/javascript"></script>  <!-- Added java script file to get call to the function checkPassword-->
    </head>
    <body> 
        <?php
        include 'Navigation/NavigationBar.php';
        ?>
        <div style="text-align: center; margin-bottom: 110px;">


            <form  id="regForm" name="regForm" action="ConfirmReg.php" onsubmit="return checkPassword()" method="post">    <!--On submit event it will go to page ConfirmReg.php and display the details filled. -->
                <br>
                <h2 align="center"><b>Register</b></h2>
                <div>
             
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" tabindex="1" required>
                </div>
               
                <div>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" tabindex="2" required>
                </div>
                  
                <div>
                    <input type="text" name="address" id="address" placeholder="Postal Address" tabindex="3">
                </div>
                <div>
                    <input type="text" name="postcode" id="postcode" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" placeholder="Postcode" tabindex="4">
                </div>
                <div>
                    <input type="text" name="city" id="city" placeholder="City" tabindex="5" required>
                </div>
                <div>
                    <input type="text" name="phone" id="phone" pattern="^[0]{1}[0-9]{10}$" placeholder="Phone" tabindex="6" required>
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder="Email Address" tabindex="7" required>
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Password" tabindex="9" required>
                </div>
                <div>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" tabindex="10" required>
                </div> <br>
                <div> 
                    <input style="align: center; color: white; background-color: #183149; font-size: 15px; font-style: bold; font-family: cabin; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27; display:inline-block" type="submit" name="submit" value="SUBMIT" tabindex="11">
                    <br>
                    <a href="login.php"> Already have an account? <br> Click here to Login</a>
                </div>
            </form>    
        </div>


        <br>

        <?php
        include_once 'Footer/footer.php';
        ?>

    </body>
</html>