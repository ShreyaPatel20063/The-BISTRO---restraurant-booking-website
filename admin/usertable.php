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

    <table style="width:100%">
      <tr>
      
        <th>cid</th>
        <th>email</th>
        <th>phone</th>
        <th>pswrd</th>

      </tr>
      <?php
        include("location: ../dbconnection.php");

        $selectqry = "SELECT * FROM tblcustomer";

        $connecttoDB = mysqli_query($conn, $selectqry);
        if($connecttoDB){
          if($connecttoDB->num_rows > 0){
            $data = mysqli_fetch_assoc($connecttoDB); 
            while($data){
              $cid = $data['cid'];
              $email = $data['email'];
              $phone = $data['phone'];
              $pswrd = $data['pswrd'];
            }
          }
          else{
            echo "Query does not run!!";
          }
        }
      ?>
      

        <td><?php echo $cid; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $pswrd; ?></td>

      </tr>
      
      
    </table>



  </body>
</html>

