<?php
require_once("parca/header.php");
require_once("parca/navbar.php");
include "baglan.php";

?>

<?php
function generatePNR($length = 10) {
 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $charactersLength = strlen($characters);
 $randomString = '';
 for ($i = 0; $i < $length; $i++) {
     $randomString .= $characters[rand(0, $charactersLength - 1)];
 }
 return $randomString;

 
}
$pnr=generatePNR();
 ?>
 

 
<?php
if(isset($_POST["butn"])){
    header('location:flights.php');

}

if(isset($_SESSION['fullname'])){



$id=$_GET['id'];


$result=$vt->query("SELECT * from satis WHERE id=$id");
$row = $result->fetch_assoc();
$sahip=$_SESSION['fullname'];
$kapasite=$row["kapasite"];
$sehir=$row["sehirler"];
$tarih=$row["tarih"];
$fiyat=$row["fiyat"];
$ucusid=$row["id"];

if(isset($_POST["butnn"])){
    
if($kapasite>0){
$sql = "INSERT INTO alinan (sehir,tarih,fiyat,sahibi,pnr,ucusid,satinalanid)
VALUES('$sehir','$tarih','$fiyat','$sahip','$pnr','$ucusid','$_SESSION[login_id]')"; 
$vt->query($sql);
?><script style="background-color: red" type="text/javascript"  > 
 
var pnr="<?php echo $pnr ?>";
swal({
  title: "Your pnr number is :",
  text: pnr,
  icon: "success",
  
  
 
}).then((redirect) => {
if(redirect) {
    window.location="userinfo.php";
}

});



</script> <?php

}
$sql2= "UPDATE satis set kapasite=kapasite-1 where id=$id";
if($kapasite==0){

?>
    <script style="background-color: red" type="text/javascript" > 
 

    swal(
        {title:"Not enough capacity",
            icon:"error",
            
        }
    ).then((redirect) => {
if(redirect) {
    window.location="flights.php";
}

});
    
    </script> <?php
}else 

 

 $vt->query($sql2);
}

}
?>
<div style="height:300px;">

<table class="container table"  style="margin-left:5%; margin-right:5%; width:90%;" >
<h3 style=" margin-left: 44%; color:Black; clear:left; margin-top:3%;">Ticket Information </h3>             


<thead>
                <tr style="color: purple;">        
                   <th style="font-size:25px;">Cities</th>
                   <th style="font-size:25px;">Date</th>  
                   <th style="font-size:25px;">Price</th>  
                   <th style="font-size:25px;">Owner</th>                   
                   <th style="font-size:25px;">Flight id</th>                          
                </tr>
</thead>
<tr>                
<td ><?php echo $sehir ?> </td>
<td> <?php echo $tarih ?></td>
<td> <?php echo $fiyat ?> </td>
<td> <?php echo $sahip ?> </td>
<td> <?php echo $ucusid ?> </td>
</tr>


</div>

<div style="position:absolute;margin-top:15%;width:20%;height:15%;margin-left:40%;background-color:rgb(72,61,139,0.5);border:ridge 4px; border-color:rosybrown;">

<form style="margin-top:5%;margin-left:10px;" method="POST"  action="<?php $_SERVER['PHP_SELF']?>" >
 <bold style="font-size:16px;font-weight:bold;margin-left:10px;color:white;"> Credit Card : </bold><input type="text" minlength="16" maxlength="16" name="credi" value=" <?php echo $_SESSION['kredikart']; ?> "> </br>
 <bold style="font-size:16px;font-weight:bold;margin-left:10px;color:white;"> CCV : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </bold><input type="text" minlength="3" maxlength="3" name="credi" value=" <?php echo $_SESSION['ccv']; ?> "> </br>
    <input type="submit" name="butnn"value="Accept" class="btn btn-success" style="color:black; width: 100px;margin-left:97px;margin-top:10px;">
    <input  type="submit" class="btn btn-danger" name="butn"value="Cancel"style="color:black;width: 100px;margin-top:10px; " >
    </form>

</div>



<?php
require_once("parca/footer.php");
?>