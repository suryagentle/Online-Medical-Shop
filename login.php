  
  <?php
         
          $NameP=$EmailP="";
          $PwdP=$id="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
    {
  $NameP = $_POST["user"];
  $EmailP = $_POST["email"];
  $PwdP = $_POST["pwd"];
    }
        
  $servername ="localhost";
  //create connection
  $con = new mysqli($servername,"root","");
  //check connection
  if($con->connect_error)
  {
    die("connection failed:".$con->connect_error);
  }
  
  
  $select = "INSERT INTO mohan(id,user,email,pwd) VALUES ('".$id."','".$NameP."','".$EmailP."','".$PwdP."')";
   mysqli_select_db($con,'medicine');
   $sql=mysqli_query($con,$select);

   if(!$sql)
   {
    die('not inserted:'.mysqli_error($con));
   }
   else
   {
    $message="I Registered success !!";
 echo "<script type='text/javascript'>alert('$message');</script>";



   }
  

                        
          

          
        ?>
<!DOCTYPE html>
 <html>
 <head>
    <title></title>
   <style type="text/css">
        #uyt
      {
         background-color:blue;
         color:white;
         width: 20%;
         text-decoration: none;
         border:none;
         padding:5px 15px;


      }


   </style>
 </head>
 <body>
   <a id="uyt" href="index.php">back to home</a>
 
 </body>
 </html>