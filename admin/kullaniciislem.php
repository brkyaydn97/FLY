<?php
    session_start();

    include '../baglan.php';
    $result=$vt->query("SELECT * from user");
    if(isset($_POST["butn"])) {
    
        $sql = "UPDATE user SET  email=trim('$_POST[email]'),ceptel=trim('$_POST[ceptel]'),kredikart=trim('$_POST[kredikart]'),ccv=trim('$_POST[ccv]'),parola=trim('$_POST[parola]')
         WHERE id=$_POST[id]";
        $vt->query($sql);
        header('location:kullaniciislem.php');
    }
    if(isset($_POST["butnn"])) {
    
        $sql = "DELETE from user
         WHERE id=$_POST[id]";
        $vt->query($sql);
        header('location:kullaniciislem.php');
    }
    
?>

<head>


   </head>
<body style="background-image: url(../img/admin.jpg)" >
    
<table class="container table" style="margin-top: 5%;" >
<h1 style="margin-left: 40%; color:white;">User Configuration</h1>             


<thead>
                <tr style="color: white;">
                   <th>id*</th>
                   <th>Name&Surname*</th>
                   <th>E-mail</th>  
                   <th>Phone</th>  
                   <th>Password</th>                  
                   <th>Credit Cart</th>  
                   <th>CCV</th>           
                </tr>
             </thead>
             <?php 
               while($row = $result->fetch_assoc()): ?> 
               <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
               <tr>
                  <td><input readonly type="text" name="id" value="<?php echo $row["id"]; ?>">  </td>
                  <td><input readonly type="text" name="fullname" value=" <?php echo $row["fullname"]; ?>"> </td>
                  <td><input type="text" name="email" value=" <?php echo $row["email"]; ?>"> </td>
                  <td><input type="text" name="ceptel" value=" <?php echo $row["ceptel"]; ?> "></td>
                  <td><input type="text" name="parola" value=" <?php echo $row["parola"]; ?>"> </td>                 
                  <td><input type="text" name="kredikart" value=" <?php echo $row["kredikart"]; ?>"> </td>
                  <td><input type="text" name="ccv" value=" <?php echo $row["ccv"]; ?> "></td>
                  <td> <input type="submit" name="butn"value="Update" style="background-color: aqua"></td>
                  <td> <input type="submit" name="butnn"value="Delete"style="background-color: red"></td>
               </tr>
               </form>
               <?php endwhile; ?>

      </table>
     <br>
     <br>
     <br>
     <br>
     
      <h3 style="color: white"><a href="admin.php"style="color: white; text-decoration:none; border:outset; border-color:pink; margin-left:47%; margin-top:50%;" >Admin Homapage </a></h3>


   
    
  
    
           
    
    </div>
    </body>