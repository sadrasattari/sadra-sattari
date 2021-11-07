<?php

if (isset($_post["sumbit"])) {
    $name = $_post["name"];
    $subject = $_post["sub"];
    $mailfrom = $_post["mail"];
    $msg = $_post["msg"];


    $mymail = "sadrataji72@gmail.com";
    $headers = "from: ".$mailfrom;
    $txt = " You have recive some Email from user: ".$name."\n\n".$msg;


    mail($mymail , $sub , $txt , $headers);
    header("location: index.php?mailsend");



}


?>