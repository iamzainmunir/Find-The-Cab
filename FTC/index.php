<?php
  session_start();
?>

   <html >
    <head>
        <title>FIND THE CAB</title>

        <link rel="stylesheet" type="text/css" href="ftcWebStyles.css">
        <script type="text/javascript" src="jquerylib/jquery.min.js"></script>

    </head>

    <body>

        <table>

        <div id="topbar">

        <div class="topbar-section topbar-menu">
        <a id="ftc" href="">FTC</a>
        </div>

        <div class="topbar-section topbar-menu">
        <a id="home" href="">HOME</a>
        </div>

        <div class="topbar-section topbar-menu">
        <a id="about" href="">ABOUT</a>
        </div>

        <div class="topbar-section topbar-menu">
        <a id="download" href="">DOWNLOAD THE APP</a>
        </div>


<!- Sign in inputs ->
        <form action = "signin.php" method = "POST">
        <div class="topbar-input">
        <input class="textFieldStyle" id="emailLogin" type="text" name="email" placeholder="EMAIL">
        <input class="textFieldStyle" id="passLogin" type="password" name="password" placeholder="PASSWORD">
        <input type="submit" id="loginButton" name="submitLogin" value="Login">
        </div>
        </form>

        </div> 
        </table>


        <div class="clear"></div>

        <div class="front">
        <div id="wrapper">
        <div class="form-section">
            
        <h1>Create a new Account</h1> 

<!- Sign up inputs ->
        <form action = "signup.php" method = "POST">
        <div class="form-element">
        <p><label class="labelStyles" for="Name"><h2>NAME</h2></label></p>
        <p><input class="down creatAccTextField" type="text" name="name" id="name"></p>
        </div>
        
        <div class="form-element">
        <p><label  class="labelStyles" for="Last-Name"><h2>LAST-NAME</h2></label></p>
        <p><input class="down creatAccTextField" type="text" name="Last-Name" id="last-Name"></p>
        </div>
            
        <div class="form-element">
        <p><label  class="labelStyles" for="email"><h2>EMAIL</h2></label></p>
        <p><input class="down creatAccTextField" type="text" name="email" id="email" placeholder="eg:yourname@gmail.com"></p>
        </div>
        
        <div class="form-element">
        <p><label class="labelStyles" for="Contact-Number"><h2>Contact Number</h2></label></p>
        <p><input class="down creatAccTextField" type="text" name="Contact-Number" id="Contact-Number" placeholder="eg:+92343456789"></p>
        </div>

        <div class="form-element">
        <p><label class="labelStyles" for="password"><h2>Password</h2></label></p>
        <p><input class="down creatAccTextField" type="password" name="password" id="password"></p>
        </div>
                      
        <div class="form-element">
        <p><label class="labelStyles" for="passwordConfirm"><h2>Confirm-Password</h2></label></p>
        <p><input class="down creatAccTextField" type="password" name="passwordConfirm" id="passwordConfirm"></p>
        </div>
                      
        <div class="form-element">
        <input class="down" type="submit" id="submitButton" name= "signupButton" value="Sign-up">
        </div>
        </form>


        </div>
        </div>
        </div>
        

<?php  
        $errorMsg = "";
        $getUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($getUrl,"signup=empty") == true){
            $errorMsg = "Please Fill All The Fields";

            echo '<script type="text/javascript">alert("' . $errorMsg . '")</script>';
           // exit();
        }
       
        if(strpos($getUrl,"signup=success") == true){
            $errorMsg = "Successfully Signed Up";
            echo '<script type="text/javascript">alert("' . $errorMsg . '")</script>';
           // exit();
        }
        else{
           
                
            if(strpos($getUrl,"signup=char") == true){
                $errorMsg.= "Invalid Name or Last Name";
                echo '<script type="text/javascript">alert("' . $errorMsg . '")</script>';
               // exit();
                    
            }
            if(strpos($getUrl,"signup=email") == true){
                $errorMsg.= "Invalid Email Format";
                echo '<script type="text/javascript">alert("' . $errorMsg . '")</script>';
               // exit();
                    
            }
            if(strpos($getUrl,"signup=contactinvalid") == true){
                $errorMsg.= "Invalid Contact Number";
                echo '<script type="text/javascript">alert("' . $errorMsg . '")</script>';
               // exit();
                    
            }
            if(strpos($getUrl,"signup=exist") == true){
                $errorMsg.= "Your Email or Contact Number Is Already In Use";
                echo '<script type="text/javascript">alert("' . $errorMsg . '")</script>';
               // exit();
                    
            }
            if(strpos($getUrl,"signup=password") == true){
                $errorMsg.= "Password Doesn't Match";
                echo '<script type="text/javascript">alert("' . $errorMsg . '")</script>';
               // exit();
         
            }

        }
    
?>



        <div class="clear"></div>
       
        <div class="info">
            <h3>YOUR RIDE,ON DEMAND</h3>
            <p><h4>Transportation in minutes</h4></p>
            <p><h4>with the FTC App</h4></p>
        </div>
        
        <div class="clear"></div>
       
        <div class="cards">
        <h5>ALL IN ONE!</h5>
        <div class="short-cards">
        <img id="careem" src="images/careem.png">
        <img id="careemname" src="images/caremname.png">
        <br>
        <div class="square">
        
        </div>
        </div>

        <div class="short-cards">
        <img id="uber" src="images/uberr.png">
        <img id="ubername" src="images/ubernam.jpg">
        <br>
        <div class="square">        
        </div>
        </div>
        <div class="short-cards">
        <img id="ur" src="images/uride.png">
        <img id="urname" src="images/Logo-Uride1.png">
        <br>
        <div class="square">        
        </div>
        </div>

        <div class="short-cards">
        <img id="bike" src="images/byk.jpg">
        <img id="bikea" src="images/bykeaname.png">
        <br>
        <div class="square">        
        </div>
        </div>
                

        </div>
            
        </div>
        <div class="clear"></div>
        <div class="download-box">
        <h6>DOWNLOAD THIS APP!</h6>
        <img id="play" src="images/appstore.png">
        <img id="andr" src="images/android.png">
        </div>

      

    </body>
</html>