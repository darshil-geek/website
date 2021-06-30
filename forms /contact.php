<?php

    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['email'];
    $message=$_POST['message'];


         $to = "darshil.vs23@gmail.com";
         //$subject = "New message from your personal website";
         
         $message =  "User Name: $name.\n".
                     //"User Phone number: $number.\n".
                     "User Mail-ID: $mailFrom.\n".
                     "User Message: $message. \n".
         
         $header = "From:darshil.vs23@gmail.com \r\n";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      
?>
