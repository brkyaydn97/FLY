<?php
    session_start();

    include '../baglan.php';
    $result=$vt->query("SELECT * from alinan");
    if(isset($_POST["butn"])) {
    
        $sql = "UPDATE alinan SET  sehir=trim('$_POST[sehir]'),tarih=trim('$_POST[tarih]'),fiyat=trim('$_POST[fiyat]'),sahibi=trim('$_POST[sahibi]'),pnr=trim('$_POST[pnr]')
         WHERE id=$_POST[id]";
        $vt->query($sql);
        header('location:biletislem.php');
    }
    if(isset($_POST["butnn"])) {
    
        $sql = "DELETE from alinan
         WHERE id=$_POST[id]";
        $vt->query($sql);
        header('location:biletislem.php');
    }
    
?>

<head>


   </head>
<body style="background-image: url(../img/admin.jpg)" >
    
<table class="container table" style="margin-top: 5%;" >
<h1 style="margin-left: 40%; color:white;">Ticket Configuration</h1>             


<thead>
                <tr style="color: white;">
                   <th>Ticket id*</th>
                   <th>Cities</th>
                   <th>Date</th>  
                   <th>Price</th>  
                   <th>Owner*</th>
                   <th>PNR</th>
                           
                </tr>
             </thead>
             <?php 
               while($row = $result->fetch_assoc()): ?> 
               <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
               <tr>
                  <td><input type="text" readonly name="id" value="<?php echo $row["id"]; ?>">  </td>
                  <td><input type="text" name="sehir" value=" <?php echo $row["sehir"]; ?>"> </td>
                  <td><input type="text" name="tarih" value=" <?php echo $row["tarih"]; ?>"> </td>
                  <td><input type="text" name="fiyat" value=" <?php echo $row["fiyat"]; ?> "></td>
                  <td><input type="text" name="sahibi" readonly value=" <?php echo $row["sahibi"]; ?>"> </td>
                  <td><input type="text" name="pnr" value=" <?php echo $row["pnr"]; ?> "></td>
                 
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