<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "info@lekkerdicht.be";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "Nieuwe aanvraag via lekkerdicht.be", $message . ' - ' . $phone, "Van:" . $email);
    
    header('Location: http://www.lekkerdicht.be/success.html');
  }