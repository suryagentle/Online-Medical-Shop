<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Medicine</th>
         <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
        $servername ="localhost";
  //create connection
  $con = new mysqli($servername,"root","","medicine");
  if($con->connect_error)
  {
    die("connection failed:".$con->connect_error);
  }

  $result = mysqli_query($con,"SELECT * FROM ord");
  while($row = mysqli_fetch_array($result)){
      echo "<tr>";
echo "<td>" . $row['User'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['item'] . "</td>";
echo "<td>" . $row['Quantity'] . "</td>";
echo "</tr>";
      }?>
      
    </tbody>
  </table>
</div>

</body>

</html>
