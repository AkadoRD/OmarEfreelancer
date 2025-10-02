<?php
if(isset($_POST["send"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $to="omarencarnacion.r@gmail.com";
    $subjet="New E-Mail From $email";

    $content="Nombre: $name \n";
    $content.="Email: $email \n";
    $content.="Message: $message";

    $header="From: new@customer.com";

    $email=mail($to,$subjet,$content,$header);

    if($mai){
        echo "<script>alert('Message Sent');</script>";
    }else{
        echo "<script>alert('Message Not Sent');</script>";
    }

}
?>