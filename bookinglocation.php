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
                    <p>Your Name:</p>
                    <?php echo $_SESSION['name']?>
                </div>
                <div class="form-field">
                    <p>Your Email:</p>
                    <?php echo $_SESSION['email']?>
                </div>
                <div class="form-field">
                    <p>Contact Number:</p>
                    <?php echo $_SESSION['phone']?>
                </div>
                <div class="form-field">
                    <p>Date:</p>
                    <input type="date" name="date" placeholder="dd-mm-yy" required>
                </div>
                <div class="form-field">
                    <p>Time:</p>
                    <input type="time" name="time" required>
                </div>
                <div class="form-field">
                    <p>Number of people:</p>
                    <input type="number" name="people" placeholder="No of people" min="1 " max="250" required>
                 </div>
                 <div class="form-field">
                    <p>Select Location:</p>
                    <select name="location">
                        <option value="Banquet Hall" id="bh">Banquet Hall</option>
                        <option value="Terrace" id="ter">Terrace</option>
                    </select>

                 </div>
                
                <button class="btn" type="submit" name="submit">
                    SUBMIT
                </button>
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
        $loc = $_POST['location'];

        //echo "php self entered";

        include("bookingfunc.php");
       /* if(datevalidation($date, $time)){
            checkMail($people, $date, $time);
        }
        else{
            echo "<script>alert()</script>";
        }*/

        bookloc($date, $time, $people, $loc);
        echo "<script>alert(Booking Confirm)</script>";

    }
    else{
        echo "cannot enter";
    }
}else{
    header("Location: signup.php");
}
?>