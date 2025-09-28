<?php 
if(isset($_POST['send'])){
    $name=$_POST['name']
    $email=$_POST['email']
    $messege=$_POST['message']

    $to="omarencarnacion.r@gmail.com";
    $subject="New E-Mail from $email";
    $content="Name: $name \n";
    $content.="Email: $email \n";
    $content.="Messege: $messege";

    $header="$email";

    $mail=mail($to,$subject,$content,$header);
    if($mail){
        echo "<script>alert(Messege Sent)</script>";
    }else{
        echo "<script>alert(Messege Not Sent)</script>";
    }
    }
?>