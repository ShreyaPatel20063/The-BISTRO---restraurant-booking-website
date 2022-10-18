<?php
include("dbconnection.php");
$fetch = "Select * from 'tblcustomer'";
$result = mysqli_query($conn,$fetch);
while($row = mysqli_fetch_assoc($result)){
    $cid = $row['cid'];
    $name = $row['name'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            UserList
        </title>
    </head>
    <table border="1" width="200">
        <th>UserList</th>
        <tr>
            <td>cid</td>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
        
    </table>
</html>