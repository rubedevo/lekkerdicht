<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "info@lekkerdicht.be";
    $headers = "Van: ".$mailfrom;
    $txt = "Je hebt een nieuw bericht van ".$name.". \n\n".$message;

    mail($mailTo,  $txt, $headers);
    header("Location: index.php?mailsend");
}

>