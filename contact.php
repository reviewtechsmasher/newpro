<?php
  $to = 'cloudflixmedia@gmail.com'
  $subject = 'text mail'
  $message = 'hello i am akhil this is a test message'
  $From = 'akhilmuduli5@gmail.com'
  $headers = 'From : $From'

    mail($to, $subject, $message, $headers)
    or die('Error!')
    
    echo 'messsage sent';
?>
