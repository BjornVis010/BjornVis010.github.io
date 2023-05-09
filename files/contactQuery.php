<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $to = "bjornvisimp@gmail.com";
        $subject = "New form submission from $name";
        
        $message = "Name: $name<br>Email: $email<br>Message: $message";
         
        $header = "From: $email\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        $retval = mail ($to,$subject,$message,$header);
        
        if($retval == true) {
            echo "Message sent successfully...";
        } else {
            echo "Message could not be sent...";
        }
    }
?>