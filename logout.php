<?php
    session_start();

    session_unset();
    
    session_destroy();

    echo "<script>alert(Logged Out!)</script>";
    header("Location: index.php");

?>