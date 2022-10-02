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
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $pswrd = $_POST['pswrd'];

        include('functions.php');
        login_info($email, $pswrd);
    }
?>