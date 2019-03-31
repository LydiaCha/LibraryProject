<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="signUpForm">
        <div class="signUpFormBody">
            <h2> Sign Up </h2>
            <h4>
                <form id="signUpForm" action="" method="POST">

                    <label for="First name">First name:*</label> <br>
                    <input type="text" name="First name" autofocus="true" required /> <br>
                    <br>
                    <label for="Last name">Last name:*</label> <br>
                    <input type="text" name="Last name" required /> <br>
                    <br>
                    <label for="First line">First line:</label> <br>
                    <input type="text" name="First line" /> <br>
                    <br>
                    <label for="Second line">Second line:</label> <br>
                    <input type="text" name="Second line" /> <br>
                    <br>
                    <label for="Postcode">Postcode:</label> <br>
                    <input type="text" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" name="Postcode" /> <br>
                    <br>
                    <label for="City">City:</label> <br>
                    <input type="text" name="City" /> <br>
                    <br>
                    <label for="Email address">Email address:*</label> <br>
                    <input type="email" name="Email address" required /> <br>
                    <br>
                    <label for="Phone number">Phone number:</label> <br>
                    <input type="text" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" name="Phone number" /> <br>
                    <br>
                    <label for="Username">Username:*</label> <br>
                    <input type="text" name="Username" required /> <br>
                    <br>
                    <label for="Password">Password:*</label> <br>
                    <input type="password" placeholder="a minimum of 1 lower case letter, 1 upper case letter and 1 numeric character" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" name="Password" required /> <br>                  
                    </div>
                    <br>

                    <div class="button">
                        <input type="submit" name="Submit" value="SUBMIT" class="button" /> <br>
                    </div>
                    <h4/>
                    </div>


                </form>
                </body>
                </html>
