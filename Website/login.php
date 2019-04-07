<?php
    namespace LibraryProject\Website;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Login</title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body> 
        <?php
        include 'Navigation/NavigationBar.php';
        ?>
        
        <div class="row">
            <div class="col-sm-4">    
                <form  id="regForm" name="regForm" action="myRentals.php" onsubmit="return checkPassword()" method="post">
                    
                    <h3 align="center"><b>Login</b></h3>                                                 
                        <div class="form-group" align="center">
                            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="8">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6" >
                                <div class="form-group" align="center">
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="9" required>
                                </div>
                            </div>
                        </div>                       
                        <div class="form-group" align="center">                                                     
                            <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="11">
                        </div>
                </form>    
            </div>
            </div>
        </div> <!-- row-->
        <br>
        <!-- Footer -->
      <?php
include 'Footer/footer.php';


?>
    </body>
</html>