<?php
require_once("parca/header.php");
require_once("parca/navbar.php");
include "baglan.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta name="language" content="english" />
	<meta name="keywords" content="airprice, travel, cheap airfare, discount airfare" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/pswd.css">
		<script src="js/pswd.js"></script>	
	
	
</head>
<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	
	

<section>
<div class="container" style="height:600px; margin-bottom:100px;"  >
<div class="background-img" style="height:650px; margin-bottom:100px;" >
<div class="box" style="height:600px; margin-bottom:100px;" >
    <span> </span>
    <span> </span>
    <span> </span>
    <span> </span>
    <div class="content" style="height:600px; margin-bottom:100px;" >
    <h2 style="margin-bottom:4%;font-size:30px;">Register </h2>
    
		<form id="s-form" name="s-form" onsubmit="return validateForm()" class="form-horizontal" role="form" action="kaydet.php" method="post">
			<div class="form-group">
				<p class="control-label col-sm-2" for="username" style="width:180px; font-weight:bold;"><bold style="color:red;font-size:18px;">*</bold> Name And Surname:</p>
				<div class="col-sm-6">
					<input style="background-color:white;" type="text" class="form-control" id="s-name" placeholder="Name Surname" name="s-name">
				</div>
				
				
			</div>
			

			<div class="form-group">
				<p class="control-label col-sm-2" style="width:180px;font-weight:bold;" for="pwd1"><bold style="color:red;font-size:18px;">*</bold> Password:</p>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="s-password" placeholder="No special characters, at least one letter, one capital letter, one number" name="s-password">
				</div>
				
			</div>
		
           
			<div class="form-group">
				<p class="control-label col-sm-2" style="width:180px;font-weight:bold;" for="kredi"><bold style="color:red;font-size:18px;">*</bold> Credit Card:</p>
				<div class="col-sm-6">
					<input type="text"  maxlength="16" class="form-control" id="s-kredi" placeholder="Credit Card must consist of 16 digits" name="s-kredi">
				</div>
				
			</div>
			
			<div class="form-group">
				<p class="control-label col-sm-2 " style="width:180px;font-weight:bold;" for="ccv"><bold style="color:red;font-size:18px;">*</bold> CCV:</p>
				<div class="col-sm-6">
					<input type="text" maxlength="3" class="form-control" id="s-ccv" placeholder="CCV must consist of 3 digits" name="s-ccv">
				</div>
				
			</div>
			<div class="form-group">
				<p class="control-label col-sm-2" style="width:180px;font-weight:bold;" for="email"><bold style="color:red;font-size:18px;">*</bold> E-mail:</p>
				<div class="col-sm-6">
					<input type="email" class="form-control" id="s-email" placeholder="Enter Your Email" name="s-email">
				</div>
				<div class="col-sm-2" style="color:red;">
			
				<?php

if (isset($_SESSION['mail_uyari']));?>

<script> <?php

$alert=$_SESSION['mail_uyari']; 

?> var a="<?php echo $alert ?>"
	swal({
  title: "Sorry",
  text: a,
  icon: "error",
  
  
 
}).then((redirect) => {
if(redirect) {
    window.location="register.php";
}

});


 </script>
<?php
unset($_SESSION['mail_uyari']); ?>
					
				</div>
				
			</div>
			
			
			
			<div class="form-group">
				<p class="control-label col-sm-2" style="width:180px;font-weight:bold;" for="s-phone"><bold style="color:red;font-size:18px;">*</bold> Phone:</p>
				<div class="col-sm-6">
					<input type="text"  maxlength="11" class="form-control" id="s-phone" placeholder="Phone must consist of 11 digits" name="s-phone" >
				</div>
			
			</div>
			<br/>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<input type="submit" class="btn btn-primary btn-block" style="margin-left:70px; background-color:rgb(0, 50, 180,0.5);" name="s-register" id="s-register" value="Register !">
				</div>
			</div>
		</form>
		<p style="margin-right:90%; margin-top:8%;width:40%;margin-bottom:-2%;"> <bold style="color:red;font-size:22px;">*</bold>All marked fields are required. </p>
	</div>
	
</div>

</div>

</section>


<div class="form-group" id="pswd_info" style="width:290px;margin-bottom:20%;margin-right:15%; background:rgb(0, 0, 80,0.5); border:solid;border-color:orange;border-width:thin;border-left-color:rgb(0, 10, 110);border-right-color:rgb(0, 10, 110)">
				<h4 style="color:white;">Password must meet the following requirements:</h4>
				<ul>
					<li style="font-size:18px;font-weight:bold;" id="letter" class="invalid">-At least one letter</li>
					<li style="font-size:18px;font-weight:bold;" id="capital" class="invalid">-At least one capital letter</li>
					<li style="font-size:18px;font-weight:bold;" id="number" class="invalid">-At least one number</li>
                    <li style="font-size:18px;font-weight:bold;" id="length" class="invalid">-At least 6 characters</li>
                    
                </ul>
            </div>



	 
	<script>	


function validateForm() {

	var x = document.forms["s-form"]["s-name"].value;
	var valid = 1;
	if(x == null || x == "") {
		alert("Name And Surname must be filled out");
		valid = 0;
	}		
	if ( x.match(/\d/) ) {
		alert("Name And Surname cannot contain any numbers");
		valid = 0;
		}
	var y = document.forms["s-form"]["s-password"].value;
	if(y == null || y == "") {
		alert("Password must be filled out");
		valid = 0;
	}
	var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*[^a-zA-Z0-9])(.{6,})$/;
	if(!pass.test(y)){
			alert("password must be valid");
			valid = 0;
	}
	
	var z = document.forms["s-form"]["s-ccv"].value;
	if(z == null || z == "") {
		alert("CCV must be filled out");
		valid = 0;
	}
	var ccv3 = /^(?=.*\d)(?!.*[^0-9])(.{3})$/;
	if(!ccv3.test(z)){
			alert("CCV must be valid");
			valid = 0;
	}
	var w = document.forms["s-form"]["s-kredi"].value;
	if(w == null || w == "") {
		alert("Credit Card Number must be filled out");
		valid = 0;
	}
	var kredi16 = /^(?=.*\d)(?!.*[^0-9])(.{16})$/;
	if(!kredi16.test(w)){
			alert("Credit Card Number must be valid");
			valid = 0;
	}

	var v = document.forms["s-form"]["s-email"].value;
	if(v == null || v == "") {
		alert("E-mail must be filled out");
		valid = 0;
	}
	var u = document.forms["s-form"]["s-phone"].value;
	if(u == null || u == "") {
		alert("Phone Number must be filled out");
		valid = 0;
	}
	var phone11 = /^(?=.*\d)(?!.*[^0-9])(.{11})$/;
	if(!phone11.test(u)){
			alert("Phone Number must be valid");
			valid = 0;
	}
	if(valid == 0)
	return false;
	else 
	return true;
}

	</script>
</body>
</html>
<?php
require_once("parca/footer.php");
?>