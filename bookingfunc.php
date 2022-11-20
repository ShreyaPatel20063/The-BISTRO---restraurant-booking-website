<?php

//check if mail and name are correct
    function checkMail($people, $date, $time){

        include("dbconnection.php");
        
        //email from tblcustomer
        //$echeckmail = "SELECT name, cid FROM `tblcustomer` WHERE email = '$email'";
        //echo $echeckmail . "<br>";

        //$selectfromDB = mysqli_query($conn, $echeckmail);

        //echo "** ". $selectfromDB . "<br>";

        //if($selectfromDB){
            //$data = mysqli_fetch_assoc($selectfromDB);
            //if($name == $data['name']){
                //echo "Data Valid";
                $cid = $_SESSION['cid'];
                $booking = "INSERT INTO tblbooking (cid, people, date, time, status) VALUES ('$cid', '$people', '$date', '$time', 'pending')";
                $insertintoDB = mysqli_query($conn, $booking);
                if($insertintoDB){
                    //echo "Success data enterd into DB";
                }else{
                    echo "DATA not entered / data already exist";
                }
          //  }
       //     else{
         //       echo "DATA INVALID";
           // }
        //}
        //else{
        //    echo "Query cannot run";
        //}
    }
    
    /*function datevalidation($date, $time){
        if($date >= date("y-m-d")){
            //if($date = date("y-m-d") && $time > date("h:ia")){
                return true;
           // }
            //return false;
        }else{
            return false;
        }
    }*/


    function bookloc($date, $time, $people, $loc){
        include("dbconnection.php");
        $cid = $_SESSION['cid'];
                $booking = "INSERT INTO tblbanquet (cid, people, date, time, loc) VALUES ('$cid', '$people', '$date', '$time', '$loc')";
                $insertintoDB = mysqli_query($conn, $booking);
                if($insertintoDB){
                    //echo "Success data enterd into DB";
                }else{
                    echo "DATA not entered / data already exist";
                }
    }
?>