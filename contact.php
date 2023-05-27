<?php
  $to = 'akhilmuduli1@gmail.com'
  $subject = 'text mail'
  $message = 'hello i am akhil'
  $From = 'akhilmuduli5@gmail.com'
  $headers = 'From : $From'

    mail($to, $subject, $message, $headers)
    or die('Error!')
    
    echo 'messsage sent';
?>
