<?php
require 'master/PHPMailerAutoload.php'; 

           // $name=$_POST['name'];
          //  $mail=$_POST['email'];
            $mailto = $mail;
            $mailSub = "sample";
            $mailMsg = "hello this is the temporary mail .....".$name;
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "suryabalu.karur@gmail.com";
            $mail ->Password = "suryagentle";
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
                 echo "window.location.href='index.php';</script>";              
             }
                    
       

     

?>


   

