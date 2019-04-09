<?php

namespace Library\Website;

include 'Navigation/NavigationBar.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Home Page</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <link href="styles.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      

    <html>
        <head>
            <meta charset="UTF-8">
            <title>User Login</title>
        </head>
        <body> 

            <div class="row">
                <div class="col-sm-4">  
                </div>
                <div class="col-sm-4">    
                    <form  id="regForm" name="regForm" action="validateLogin.php" method="post">
                        <br>
                        <br>
                        <h2 align="center"><b>Login</b></h2>                                                 
                        <div class="form-group" align="center">
                            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="1">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6" >
                                <div class="form-group" align="center">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="2" required>
                                    <br>
                                </div>
                            </div>
                        </div>                       

                        <div style="text-align: center">
                            <input style=" align: center; color: white; background-color: #183149; font-size: 15px; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0,0,0,0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27" type="submit" value="SUBMIT" class="btn btn-primary btn-block btn-lg" tabindex="3"> <br>
                        <br>
                        
                        <tr><td colspan="2" align=""center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr> <br>
                        <a href="registration.php" class="btn btn-link">Don't have an account? <br> Click here to register</a>
 </div>

                    </form>    
                </div>
                <div class="col-sm-4">  
                </div>   
            </div>
        </div> <!-- row-->
        <br>
       
        <br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>

</body>
</html>

<?php
// the following should come AFTER html login lines as it is getting email/password from html fields
if (isset($_COOKIE['email_address']) && isset($_COOKIE['password'])) {             //only check lines 48/49 if both set
    $email = $_COOKIE['email_address'];                                         // once validated and session started we check the follwoing condition: is there any cookie with this email? If yes save it into a variable
    $pass = $_COOKIE['password'];                                               // once validated and session started we check the follwoing condition: is there any cookie with this email? If yes save it into a variable

    echo "<script> /* show data in test box */
    document.getElementById('email_address').value='$email'; /* access data from login */ 
    document.getElementById('password').value='$pass';
    </script>";
}
?>

<?php
include_once 'Footer/footer.php';
?>