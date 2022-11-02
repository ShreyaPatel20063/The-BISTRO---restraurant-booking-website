<!DOCTYPE html>
<html>
<style>
table, th, td 
{
  border:1px solid black;
}
td{
    padding: 10px;
    text-align: center;
}
body{
    background-color: rgb(143, 176, 143);
}
</style>
<body>

<h2>Booking details table</h2>
<h3>Please refresh page to see the changes</h3>

<table style="width:80%">
<?php
    include("C:/xampp/htdocs/firstphp/The-BISTRO---restraurant-booking-website/dbconnection.php");
    $qry = "SELECT * FROM tblbooking";
    $datafetch = mysqli_query($conn, $qry);

    if($datafetch->num_rows > 0){
      ?> 
  <tr>
    <th>bid</th>
    <th>cid</th>
    <th>people</th>
    <th>date</th>
    <th>time</th>
    <th>status</th>
  
  </tr> <?php
    while($data = mysqli_fetch_assoc($datafetch)){
      $bid = $data['bid'];
  echo "<tr>
  
    <td><input type = checkbox name= $bid value= $bid><span> ".$data['bid']."</td>
    <td>".$data['cid']."</td>
    <td>".$data['people']."</td>
    <td>".$data['date']."</td>
    <td>".$data['time']."</td>
    <td><form method=post>".$data['status']."</td>

  </tr>";

  // if(array_key_exists('done', $_POST)){
  //   include("C:/xampp/htdocs/firstphp/The-BISTRO---restraurant-booking-website/dbconnection.php");
  //   $doneqry = "UPDATE tblbooking SET status='done' where bid = '$bid'";
  //   $connection = mysqli_query($conn, $doneqry);
    
  // }else{
  //   echo "not done";
  // }



}
}else{
  ?> <script>0 results..</script> <?php
}
?>
</table>
</body>
</html>

<?php
  
?>