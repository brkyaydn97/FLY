<?php
    session_start();

    include '../baglan.php';
    $result=$vt->query("SELECT * from satis");
    if(isset($_POST["butn"])) {
    
        $sql = "UPDATE satis SET  sehirler=trim('$_POST[sehirler]'),tarih=trim('$_POST[tarih]'),kapasite=trim('$_POST[kapasite]'),fiyat=trim('$_POST[fiyat]') WHERE id=$_POST[id]";
        $vt->query($sql);
        header('location:ucusislem.php');
    }
    if(isset($_POST["butnn"])) {
    
        $sql = "DELETE from satis
         WHERE id=$_POST[id]";
        $vt->query($sql);
        header('location:ucusislem.php');
    }
    if((@$_POST["insert"])) {
    
        $sql = "INSERT INTO satis ( sehirler,tarih,kapasite,fiyat) values (trim('$_POST[sehirler]'),trim('$_POST[tarih]'),trim('$_POST[kapasite]'),trim('$_POST[fiyat]')) ";
        $vt->query($sql);
        header('location:ucusislem.php');
    }
    
?>

<head>


   </head>
<body style="background-image: url(../img/admin.jpg)" >
    
<table class="container table" style="margin-top: 5%; margin-left:15%" >
<h1 style="margin-left: 40%; color:white;">Flight Configuration</h1>             


<thead>
                <tr style="color: white;">
                   <th>Flight id*</th>
                   <th>Cities</th>
                   <th>Date</th>  
                   <th>Capacity</th>  
                   <th>Price</th>
                             
                </tr>
             </thead>
             <?php 
               while($row = $result->fetch_assoc()): ?> 
               <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
               <tr>
                  <td><input style="text-align: center" type="text" readonly required name="id" value="<?php echo $row["id"];?>">  </td>
                  <td><input  style="text-align: center"type="text"  required name="sehirler" value="<?php echo $row["sehirler"];?>"> </td>
                  <td><input style="text-align: center"type="text"  required name="tarih" value="<?php echo $row["tarih"];?>"> </td>
                  <td><input style="text-align: center"type="text"  required name="kapasite" value="<?php echo $row["kapasite"];?> "></td>
                  <td><input style="text-align: center"type="text"  required name="fiyat" value="<?php echo $row["fiyat"];?>"> </td>
                 
                  <td> <input type="submit" name="butn"value="Update" style="background-color: aqua" ></td>
                  <td> <input type="submit" name="butnn"value="Delete"style="background-color: red"></td>
               </tr>
               </form>
               <?php endwhile; ?>

      </table>
     <br>
     <br>
     
     <table class="container table" style="margin-top: 5%; margin-left:25%" >
<h1 style="margin-left: 42%; color:white;">Flight Insert</h1>             


<thead>
                <tr style="color: white;">
                   
                   <th>Cities</th>
                   <th>Date</th>  
                   <th>Capacity</th>  
                   <th>Price</th>
                             
                </tr>
             </thead>
             
              
               <form method="POST" >
               <tr>
                  
                  <td><input required type="text" name="sehirler" > </td>
                  <td><input required  type="text" name="tarih" > </td>
                  <td><input  required type="text" name="kapasite"  ></td>
                  <td><input required type="text" name="fiyat" > </td>
                 
                  <td> <input type="submit" name="insert"value="Insert" style="background-color: Green" ></td>
                 
               </tr>
               </form>
               

      </table>
      <br>
     <br>
      <h3 style="color: white"><a href="admin.php"style="color: white; text-decoration:none; border:outset; border-color:pink; margin-left:47%; margin-top:50%;" >Admin Homapage </a></h3>


   
    
  
    
           
    
    </div>
    </body>