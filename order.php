  
  <?php
     session_start();     
          $user=$mail="";
          $tab=$quan="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
    {
  $user = $_POST["User"];
  $mail = $_POST["Email"];
  $tab = $_POST["item"];
  $quan = $_POST["Quantity"];
    }
        
  $servername ="localhost";
  //create connection
  $con = new mysqli($servername,"root","");
  //check connection

  if($con->connect_error)
  {
    die("connection failed:".$con->connect_error);
  }
  mysqli_select_db($con,'medicine');
  $resul=mysqli_query($con,"SELECT * FROM mohan WHERE user='$user' and email='$mail'");
  
  if(!mysqli_fetch_array($resul,MYSQLI_BOTH)){
    $message="Register or give correct details..";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else
  {

  $select = "INSERT INTO  ord(User,Email,item,Quantity) VALUES ('".$user."','".$mail."','".$tab."','".$quan."')";
   mysqli_select_db($con,'medicine');
   $sql=mysqli_query($con,$select);

   if(!$sql)
   {
    die('not inserted:'.mysqli_error($con));
   }
   else
   {
    $message="Ordered success  !!";
 echo "<script type='text/javascript'>alert('$message');</script>";

}

   
  


require 'master/PHPMailerAutoload.php'; 
          
           $name=$_POST['User'];
            $mail=$_POST['Email'];
            $mailto = $mail;
            $mailSub = "hello ".$name;
            $mailMsg = "You have ordered " .$tab. '  successfully in our medical shop';
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "suryabalu.karur@gmail.com";
            $mail ->Password = "Surya1999";
            $mail ->SetFrom("suryabalu.karur@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailto);

            if($mail->Send())
             {
                 echo "<script>";
                 echo "alert('Mail Sent successfully....');";
                 echo "window.location.href='index.php';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('oops  Mail not Sent ');";
                             
             }
                    
       

     
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