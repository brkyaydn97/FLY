<?php 
 include "baglan.php";
 require_once("parca/header.php");

if(isset($_POST["s-register"])) {
    
    $aa="asd"; 
    $fullname = $_POST["s-name"];
    $email = $_POST["s-email"];
    $ceptel = $_POST["s-phone"];
    $parola = $_POST["s-password"];
    
    $kredikart = $_POST["s-kredi"];
    $ccv = $_POST["s-ccv"];
    
    $checking = $vt->query("SELECT email FROM user WHERE email = '$email'");
    $row = $checking->fetch_assoc();
    $count = count($row['email']);
    if($count>=1){
        $_SESSION['mail_uyari'] = "This E-mail has already taken";
        Header("Location:register.php?durum=basarisiz");
    }


    else{
    $sql = "INSERT INTO user (fullname,email,ceptel,parola,kredikart,ccv)
    VALUES('$fullname','$email','$ceptel','$parola','$kredikart','$ccv')";
    $vt->query($sql);
    Header("Location:giris.php?durum=ok");
}    
 }
    
   

?>