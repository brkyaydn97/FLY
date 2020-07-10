<?php
require_once("parca/header.php");

require_once("parca/navbar.php");
include "baglan.php";
//error_reporting(E_ALL);
ini_set('display_errors', 'Off');


if (isset($_POST['giris'])){

    $email = $_POST['email'];
    $pwd = $_POST['parola'];
    
    
    #$sql = "SELECT id FROM user WHERE email = '$username' AND pwd = '$pwd'";
    
    $result = $vt->query("SELECT * FROM user WHERE email = '$email' AND parola = '$pwd'") or die($mysqli->error);
    $row = $result->fetch_assoc();
    $count = count($row['id']);
    
    
    if($email=='admin@admin.com' && $pwd=="123" ){
        $_SESSION['email'] = $email;
        $_SESSION['login_id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['ceptel'] = $row['ceptel'];
        $_SESSION['parola'] = $row['parola'];
        header("location:admin/admin.php");
    }
    
    else if($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['login_id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['ceptel'] = $row['ceptel'];
        $_SESSION['parola'] = $row['parola'];
        $_SESSION['tc'] = $row['tc'];
        $_SESSION['kredikart'] = $row['kredikart'];
        $_SESSION['ccv'] = $row['ccv'];

    
        
        header("location: index.php");
     }
     
     else {
        ?>
        <script style="background-color: red" type="text/javascript" > 
 

       swal( {
            title:"Invalid E-mail or Password",
            icon:"error",
          
       }    )
       .then((redirect) => {
if(redirect) {
    window.location="giris.php";
}

});


        </script>
        <?php 
        
     }
     
    }
    
?>
<?php
require_once("parca/footer.php");
?>