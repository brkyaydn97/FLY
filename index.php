<?php
require_once("parca/header.php");

require_once("parca/navbar.php");
include 'baglan.php';


?>
 
    <div class="anaSayfa anaYazi">
    <h1>SEZ&AY AIRLINES</h1>
    <p>our only opponent is Turkish AIRLINES</p>
   <a href="flights.php" > <button class="hayallerineUc">Fly With Us </button></a> 
  
  
   
   </div>
   <div id="ucak"> <img style="height:17%; width:30%;" id='resimucak' src='img/uucak.png'></div>


   <script>
bounce()
function bounce()
{
$('#resimucak')
.animate( { left:'68%' }, 3500, 'linear')

}
</script>
  
    

    
  
<?php
require_once("parca/footer.php");

?>