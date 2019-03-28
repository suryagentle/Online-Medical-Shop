
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="card.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
 </head>
 <body>
   
<div class="login-page">
<h1>Login </h1>
  <div class="form" >
    
    <form class="login-form"  name="login" action="" method="post" id="login" >
      <input type="text"  name="aduser" placeholder="username" required>
      <input type="password" name="adpass" placeholder="password" required>
      <input type="submit" name="submit" value="submit" >

      <p class="message">Not registered? <a href="#signup">Create an account</a></p>
    </form>
  </div>
</div>
 
 </body>
 <?php
$conn=mysqli_connect("localhost","root","");

$Username1=$Password1="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Username1=($_POST['aduser']);
$Password1=($_POST['adpass']);

if($Username1=="admin" && $Password1 =="admin"){
 header('location:adview.php');
}
else
{
  $mes="admin login failed !";
 echo "<script type='text/javascript'>alert('$mes'); ;</script>";
 

}}
 ?>
 </html>
   