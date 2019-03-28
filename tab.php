<?php
$conn=mysqli_connect("localhost","root","","medicine");
session_start(); 

$tab=($_POST['search']);

$resul=mysqli_query($conn,"SELECT * FROM data WHERE tab='$tab'");


if(!mysqli_fetch_array($resul,MYSQLI_ASSOC)){
$mi="not available";
 echo "<script type='text/javascript'>alert('$mi');</script>";
 
}
else
{
  $me="Available";
 echo "<script type='text/javascript'>alert('$me'); </script>";
 

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
   