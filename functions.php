<?php

    //check if pswrd and confirm password are same
    function pswrdconf($pswrd, $pswrd1){
        if($pswrd !== $pswrd1){
            echo 'Password and Confirm Password does not match';
        }
    }

    //add values to database
    function addtoDB(){

        include ('dbconnection.php');
        if(isset($_POST['signup'])){
    
            //query of insertion 
            $name = ($_POST['username']);
            $email = ($_POST['email']);
            $phone = ($_POST['phone']);
            $pswrd = ($_POST['pswrd']);
    
            if(mysqli_affected_rows($conn)<=0){
                $reg_qry = "INSERT INTO tblcustomer ( name, email, phone, pswrd) VALUES ( '$name', '$email', '$phone', '$pswrd')";
            }
            
    
            $insert = mysqli_query($conn, $reg_qry);


                if($insert){
                    echo "Success";
                }else{
                    echo "Already Exists";
                }
        }else{
            echo 'query not executed.';
        }
    }

    //check login info
    function login_info($email, $pswrd){

        //database connection
        include('dbconnection.php');

        //query to get pswrd
        $qry = "SELECT `pswrd` FROM `tblcustomer` WHERE `email` = '$email'";

        //connect db and query
        $select = mysqli_query($conn, $qry);
        if($select){
            echo "<br>query entered<br>";
            if($select->num_rows > 0){
                $data = mysqli_fetch_assoc($select);
                if($data['pswrd'] !== $pswrd){
                    echo "Password Incorrect!!!";
                    
                }
            }else{
                echo "Data not found!";
            }
        }else{
            echo "<br>Query could not run<br>";
        }

    }
?>