<?php
session_start();
?>
<html>
    <head>
        <title>
            Login Form
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="signupform">
            <form method="POST" action="<?php $_PHP_SELF ?>">
            <h1>Login</h1>
            <input type="email" class="input-box" name="email" placeholder="Enter your Email">
            <input type="Password" class="input-box" name="pswrd" placeholder="Enter Password">
            <button type="submit" class="signup-button" name="login">Login</button>
            <hr>
            <p>OR</p>
            <p>Create a new account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $pswrd = $_POST['pswrd'];
        

        include('functions.php');
        if(login_info($email, $pswrd)){
            include("dbconnection.php");
            $sessiondata = "SELECT * FROM  tblcustomer WHERE email = '$email'";
            //echo $sessiondata;
            $sessionconnectiontoDB = mysqli_query($conn, $sessiondata);

            if($sessionconnectiontoDB){
                $dataforsession = mysqli_fetch_assoc($sessionconnectiontoDB);
                $_SESSION['email'] = $dataforsession['email'];
                $_SESSION['pswrd'] = $dataforsession['pswrd'];
                $_SESSION['name'] = $dataforsession['name'];
                $_SESSION['phone'] = $dataforsession['phone'];
                $_SESSION['cid'] = $dataforsession['cid'];
                header("Location: index.php");
                //exit();
            }
            else {
                echo "session data not entered";
            }
        }else{
            ?><script>alert("Login Fail!!!")</script><?php
        }


        
    }
?>