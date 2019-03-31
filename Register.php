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
        
        <script src="passwordCheck.js" type="text/javascript"></script>  <!-- Added java script file to get call to the function checkPassword-->
    </head>
    <body>        
        <div class="row">
            <div class="col-sm-4">  
            </div>
            <div class="col-sm-4">    
                <form  id="regForm" action="ConfirmReg.php" onsubmit="checkPassword()" method="post">    <!--On submit event it will go to page ConfirmReg.php and display the details filled. -->
                    <br><br>
                    <h1 class="text-primary text-center"><b>Register User</b></h1>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="1">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="2" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="3" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Postal Address" tabindex="4">
                            </div>
                            <div class="form-group">
                                <input type="text" name="postcode" id="postcode" class="form-control input-lg" placeholder="Post Code" tabindex="5">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Phone" tabindex="6" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="7" required>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="8" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="9" required>
                                    </div>
                                </div>                               
                            </div>                       
                           
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">                            
                                <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="9">
                            </div>
                             <div class="col-xs-12 col-md-6"> <a href="LibraryHome.php" class="btn btn-link">Back to Home</a></div>   
                        </div>
                </form>    
            </div>
            <div class="col-sm-4">  
            </div>
        </div> <!-- row-->
        <?php
        
        ?>
    </body>
</html>
