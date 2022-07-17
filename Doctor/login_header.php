<?php
session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="login_header.css?<?php echo rand();?>">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie-edge" />
        <link rel="stylesheet" href="https:/use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous" />
        <link rel="stylesheet" href="login.css?<?php echo rand();?>" >
        <title>Doctor Login Form</title>
    </head>
    <body>
        <header>
          <div id="branding">
            <img src="Images/logo.png" alt="This is the logo">
          </div>
          <nav class="navigation">
            <ul id="id-1">
              <li><a href="../index.php" >Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="../News.html">News</a></li>
            </ul>
          </nav>
        </header>
        </body>
    </html>
        <?php error_reporting (E_ALL ^ E_NOTICE); //To ignore Index:Undefined Index error?>



    <?php
    //header('location:login_try.php');
    if(isset($_POST["Submit"]))
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "13579";
    $db = "roundtheclock";
    $con = new mysqli($dbhost, $dbuser, $dbpass,$db);

    //function function_alert($message)
    //{
    //
    //    // Display the alert box
    //    echo "<script>alert('$message');</script>";
    //}
    $Name=$_POST['Name'];
    $Number=$_POST['Number'];
    $Email=$_POST['Email'];
    $Age=$_POST['Age'];
    $Password=$_POST['Password'];
    $Qualification=$_POST['Qualification'];
    $Specialization=$_POST['Specialization'];
    $C_password=$_POST['C_password'];
    $Pin=$_POST['Pin'];

    #validationpart

    $check = 1;
    $error = 1;
    $error1 = 1;
    if(empty($_POST["Name"]))
    {
      $check=0;
    }
    if(empty($_POST["Number"]))
    {
      $check=0;

    }
        if(empty($_POST["Age"]))
    {
      $check=0;

    }
        if(empty($_POST["Specialization"]))
    {
      $check=0;

    }

        if(empty($_POST["Qualification"]))
    {
      $check=0;

    }

            if(empty($_POST["Pin"]))
    {
      $check=0;

    }
    if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL))
    {
      $check=0;
    }
    if(empty($_POST["Password"]))
    {
      $check=0;

    }
    if(empty($_POST["C_password"]))
    {
      $check=0;
    }
    if( !preg_match("/[2-9]{2}\d{8}/", $Number ) )
    {
        $error1 = "0";
    }
    $password = $_POST['Password'];
    if( strlen($password ) < 8 )
    {
        $error = "0";
    }

    if( !preg_match("#[0-9]+#", $password ) )
    {
        $error = "0";
    }
    if( !preg_match("#[a-z]+#", $password ) )
    {
        $error = "0";
    }
    if( !preg_match("#[A-Z]+#", $password ) )
    {
        $error = "0";
    }
    if( !preg_match("#\W+#", $password ) )
    {
        $error = "0";
    }
    if($error==0)
    {
        echo '<div class="pr1">';
           echo "Password should be atleast 8 digits long including a capital letter and a special character.";
           $check=0;
        echo '</div>';
    }
    else
    {
        echo '<div class="pr2">';
                echo "";
            echo '</div>';

    }
    if($error1==0)
    {
            echo '<div class="pr3">';

        echo "Please enter a valid 10 digit number";
        $check=0;
        echo '</div>';
    }
    else
    {
        echo" ";
    }
    //
    ////if(strcmp('$password', '$C_Password') == 0)
    ////{
    ////	    echo '<div class="pr4">';
    ////     echo 'Passwords Matched';
    ////    echo '</div>';
    ////}
    ////else {
    ////	    echo '<div class="pr5">';
    ////     echo 'Passwords do not match.';
    ////     $check=0;
    ////    echo '</div>';
    ////}
    //
    if ($_POST['Password'] !== $_POST['C_password'])
        {
                    echo '<div class="pr4">';
                        echo "Password and Confirm password fields should match!";
               $check=0;

                    echo '</div>';
        }
    else
        {
                echo '<div class="pr9">';
                    echo "";
                echo '</div>';
        }

        if ($_POST['Pin'] !== "12345")
        {
            echo '<div class="pr10">';
                    echo " The Security Pin inserted is incorrect";
            $check=0;
                echo '</div>';
        }
        else
        {
            echo "";
        }

    if($check===1)
    {
        $sql_query="select * from `login` where Email = '$Email'";
        $result=mysqli_query($con,$sql_query);
        $num=mysqli_num_rows($result);

        if($num==1)
        {
    //    alert('Email ID already registered');
            echo '<div class="pr6">';
            echo "Account with this Email ID already exists";
            echo '</div>';


        }
        else
        {
            $reg="INSERT INTO login (`Name`,`Phone`,`Email`,`Age`,`Password`, `Confirm_Password`) VALUES ( '$Name', '$Number', '$Email' , '$Age','$Password', '$C_password' )";
            $reg1 = "INSERT INTO `doctor_details`(`Name`, `Age`, `Phone`, `Email`, `Qualification`, `Specialization`) VALUES ('$Name','$Age','$Number','$Email','$Qualification','$Specialization')";
            mysqli_query($con,$reg);
            mysqli_query($con,$reg1);
            echo '<div class="pr7">';
            echo "Registration Successful";
            echo '</div>';
        }

    }
    else
    {
        echo '<div class="pr8">';
        echo"Please fill all input fields correctly";
        echo '</div>';
    }
    }

    ?>

    <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "13579";
    $db = "roundtheclock";
    $con = new mysqli($dbhost, $dbuser, $dbpass,$db);
    error_reporting (E_ALL ^ E_NOTICE);

    if(isset($_POST["Login"]))
    {

    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $sql_query="select * from `login` where Email = '$Email' && Password = '$Password'";
    $result=mysqli_query($con,$sql_query);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
    //  $_SESSION['Name']=$Name;
        $_SESSION['Email_D'] = $Email;
        header('location: doctorHP.php');
    }
    else
    {
        echo '<div class="pr6">';
            echo "Invalid username or password.Please try again";
        echo '</div>';
    }
    }

    ?>



    <html>
        <body>
        <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="login_header.php" method="post">
                <h2>Create Account</h2>
    <!--
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
    -->
    <!--			<span>or use your email for registration</span>-->
                <input type="text" placeholder="Name" name="Name"  value="<?php echo $_POST["Name"];?>" />
                <input type="number" placeholder="Age" name="Age"  value="<?php echo $_POST["Age"];?>" />
                <input type="number" placeholder="Phone Number" name="Number"  value="<?php echo $_POST["Number"];?>" />
                <input type="email" placeholder="Email ID" name="Email"  value="<?php echo $_POST["Email"];?>" />
                <input type="text" placeholder="Qualification" name="Qualification"  value="<?php echo $_POST["Qualification"];?>" />
                <input type="text" placeholder="Specialization" name="Specialization"  value="<?php echo $_POST["Specialization"];?>" />
                <input type="password" placeholder="Password" name="Password"  value="<?php echo $_POST["Password"];?>" />
                <input type="password" placeholder="Confirm Password" name="C_password"  value="<?php echo $_POST["C_password"];?>" />
                <input type="password" placeholder="Security Pin" name="Pin"  value="<?php echo $_POST["Pin"];?>" />
                <button type="submit" name="Submit">Sign Up</button>


            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login_header.php" method="post">
                <h1>Sign in</h1>
    <!--
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
    -->
    <!--			<span>or use your account</span>-->
                <input type="email" placeholder="Email" name="Email"/>
                <input type="password" placeholder="Password" name="Password"/>
                <a href="#">Forgot your password?</a>
                <button type="submit" name="Login">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start this journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"> </script>
    </body>
    </html>
