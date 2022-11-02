<html>

<head>
    <title>
        Sign Up Form
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="signupform">
        <form action="<?php $_PHP_SELF ?>" method="post">
            <h1>Sign Up</h1>
            <input type="text" class="input-box" name="username" placeholder="Enter Your Name">
            <input type="email" class="input-box" name="email" placeholder="Enter your Email">
            <input type="Password" class="input-box" name="pswrd" placeholder="Enter Password">
            <input type="Password" class="input-box" name="pswrd1" placeholder="Confirm Password">
            <input type="Phone" class="input-box" name="phone" placeholder="Enter Phone No.">
            
            <p><span><input type="checkbox" id="checkbox" required></span>I agree to the terms and services.</p>
            <button type="submit" class="signup-button" name="signup">Sign Up</button>
            <hr>
            <p>OR</p>
            <p>Do you already have an account? <a href="login.php">Log In</a></p>
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['signup'])) {

    $pswrd = $_POST['pswrd'];
    $pswrd1 = $_POST['pswrd1'];
    $phone = $_POST['phone'];

    include('functions.php');

    pswrdconf($pswrd, $pswrd1);
    if(checkphone($phone)){
        addtoDB();
    }else{
        echo "<script>alert('PHONE NUMBER invalid')</script>";
    }
    
}else{
    echo "Cannot register";
}



?>