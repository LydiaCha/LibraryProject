<?php
       namespace LibraryProject\Website;
       include_once 'Navbar1.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Home Page</title>
     
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="librarystyling.css" rel="stylesheet" type="text/css"> 

        <html>
    <head>
        <meta charset="UTF-8">
        <title>User Login</title>
       <link href="librarystyling.css" rel="stylesheet" type="text/css">
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
                                        
                                </div>
                            </div>
                        </div>                       
                                                                             
                            <input style=" align: center; background-color: #183149; font-size: 15px; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0,0,0,0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27" type="submit" value="SUBMIT" class="btn btn-primary btn-block btn-lg" tabindex="3">
                            <a href="Registration.php" class="btn btn-link">Don't have an account? Click here to register</a>

                       
                </form>    
            </div>
            <div class="col-sm-4">  
             </div>   
            </div>
        </div> <!-- row-->
        <br>
        <!-- Footer -->
        <br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>
       <?php
       include_once 'Footer.php';
       ?>
    </body>
</html>
-->