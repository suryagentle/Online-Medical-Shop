<?php
$conn=mysqli_connect("localhost","root","","medicine");
session_start(); 

$Username1=($_POST['userlog']);
$Password1=($_POST['pwdlog']);

$result=mysqli_query($conn,"SELECT * FROM mohan WHERE user='$Username1' and pwd='$Password1'");


if(!mysqli_fetch_array($result,MYSQLI_ASSOC)){
$message="Invalid login credentils";
 echo "<script type='text/javascript'>alert('$message');</script>";
 
}
else
{
  $mes="Login success";
 echo "<script type='text/javascript'>alert('$mes $Username1'); ;</script>";
 

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
   