<?php
    namespace LibraryProject\Website;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="librarystyling.css" rel="stylesheet" type="text/css"> 
        <script src="checkForm.js" type="text/javascript"></script>  <!-- Added java script file to get call to the function checkPassword-->
    </head>
    <body> 
        <?php 
        include_once 'Navbar1.php';
        ?>
        <div class="row">
            <div class="col-sm-4">  
            </div>
            <div class="col-sm-4">    
                <form  id="regForm" name="regForm" action="ConfirmReg.php" onsubmit="return checkPassword()" method="post">    <!--On submit event it will go to page ConfirmReg.php and display the details filled. -->
                    <br>
                    <h1 class="text-primary text-center"><b>Register</b></h1>
                        <hr class="colorgraph">
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Postal Address" tabindex="3">
                            </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="postcode" id="postcode" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" class="form-control input-lg" placeholder="Postcode" tabindex="4">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="city" id="city" class="form-control input-lg" placeholder="City" tabindex="5" required>
                                </div>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" pattern="^[0]{1}[0-9]{10}$" class="form-control input-lg" placeholder="Phone" tabindex="6" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="7" required>
                        </div>
                        <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="8">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="9" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="10" required>
                                </div>
                            </div>                               
                        </div>                       
                        <div class="form-group">                                                     
                            <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="11">
                            <a href="LibraryHome.php" class="btn btn-link">Already have an account? Click here to Login</a>
                        </div>
                </form>    
            </div>
            </div>
        </div> <!-- row-->
        <br>
        <!-- Footer -->
        <?php
        include_once 'footer.php';
        ?>

    </body>
</html>