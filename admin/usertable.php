<!DOCTYPE html>
<html>
<style>
table, th, td 
{
  border:1px solid black;
}
td{
    padding: 10px;
}
body{
    background-color: rgb(143, 176, 143);
}
</style>
<body>
  <h2>User Details table</h2>

  <table style="width:80%">
  <?php
    include("C:/xampp/htdocs/firstphp/The-BISTRO---restraurant-booking-website/dbconnection.php");
    $qry = "SELECT * FROM tblcustomer";
    $datafetch = mysqli_query($conn, $qry);

    if($datafetch->num_rows > 0){
      ?> 
        <tr>
          <th>cid</th>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
          <th>pswd</th>
        </tr> <?php
        while($data = mysqli_fetch_assoc($datafetch)){
          echo "<tr>
          <td>" . $data['cid'] . "</td>
          <td>". $data['name'] ."</td>
          <td>" . $data['email'] . "</td>
          <td>" . $data['phone'] . "</td>
          <td>" . $data['pswrd'] . "</td>
          
        </tr>";
        }
    }else{
      ?> <script>0 results..</script> <?php
    }
  ?>


  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
  </tr>
  
</table>



</body>
</html>

