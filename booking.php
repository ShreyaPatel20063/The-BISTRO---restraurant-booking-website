<!--HTML FOR RESERVATION (SGP 3RD SEM)-->
<?php
    session_start();
    if(isset($_SESSION['name'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="excellofinal.css">
</head>

<body>
    <?php //include("header.php"); ?><!-- ******************************************************************************************************************* -->
    <div class="container">
        <div class="container-time">
            <div class="heading-time">
                <h2>TIMINGS</h2>
            </div>
            <div class="heading-days">
                <h2>Monday-Friday</h2>
                <p>7am-11am (Breakfast)</p>
                <p>11am-10pm (Lunch/Dinner)</p>

            </div>
            <div class="heading-days">
                <h2>Saturday-Sunday</h2>
                <p>8am-1pm (Breakfast)</p>
                <p>1pm-10pm (Lunch/Dinner)</p>
                <hr>
                <div class="phn"><h3>Contact Us:+(91) 87645-78412</h3></div>

            </div>

        </div>
        <div class="container-form">
            <form action="<?php $_PHP_SELF?>" method="post">
                <div class="heading-res"><h2>ONLINE RESERVATION</h2></div>
               
                <div class="form-field">
                    <p>Your Registered Name:</p>
                    <?php echo $_SESSION['name']?>
                </div>
                <div class="form-field">
                    <p>Your Registered Email:</p>
                    <?php echo $_SESSION['email']?>
                </div>
                <div class="form-field">
                    <p>Date:</p>
                    <input type="date" name="date" id="date" placeholder="dd-mm-yy" required>
                </div>
                <div class="form-field">
                    <p>Time:</p>
                    <input type="time" name="time" id="time">
                </div>
                <div class="form-field">
                    <p>Number of people(Min:1, Max:15):</p>
                    <input type="number" id="people" name="people" placeholder="People" min="1" max="15" required>
                 </div>
                <button class="btn" type="submit" name="submit">SUBMIT</button>

            </form>

        </div>
    </div>
    
    
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $email = $_SESSION['email'];
        $name = $_SESSION['name'];
        $people = $_POST['people'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        //echo "php self entered";

        include("bookingfunc.php");
       /* if(datevalidation($date, $time)){
            checkMail($people, $date, $time);
        }
        else{
            echo "<script>alert()</script>";
        }*/

        checkMail($people, $date, $time);
        

    }
    else{
        echo "cannot enter";
    }
}else{
    header("Location: signup.php");
}
?>