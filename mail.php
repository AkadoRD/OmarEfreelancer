<?php 
if(isset($_POST['send'])){
    $name=$_POST['name']
    $email=$_POST['email']
    $message=$_POST['message']

    $to="omarencarnacion.r@gmail.com";
    $subject="New E-Mail from $email";
    $content="Name: $name \n";
    $content.="Email: $email \n";
    $content.="message: $message";

    $header="$email";

    $mail=mail($to,$subject,$content,$header);
    if($mail){
        echo "<script>alert(message Sent)</script>";
    }else{
        echo "<script>alert(message Not Sent)</script>";
    }
    }
?>