<?php
session_start();

      include('includes/session.inc.php');
      $Vrq3slealtta = mysqli_connect ($Vk0x0dblw0me,$Vbdpiq2isbfw,$Vtxrxglwtcyi);
      if(!$Vrq3slealtta)
      { echo "server connection failed ", mysqli_error($Vrq3slealtta);}


      
      $Vqh4locuqjoa = mysqli_select_db($Vrq3slealtta,$Vz2ur4dzhmpn);
        if(!$Vqh4locuqjoa)
        {
        echo "database connex failed ",mysqli_error($Vrq3slealtta);
        }


       include('includes/hijack_sess.inc.php'); 

if(isset($_GET['q'])){
   $Vmkh2mepgxtb = $_GET['q'];
}
$Vthib3wmd2zt ="select distinct `ticket` from `sell` where `ticket` LIKE '$Vmkh2mepgxtb%' order by `ticket`";
$Vmde2rskb0bo = mysqli_query($Vrq3slealtta,$Vthib3wmd2zt);
while($Vaoapnqnuabz = mysqli_fetch_array($Vmde2rskb0bo)){
      echo $Vaoapnqnuabz['ticket'],"\n";
}	 
?>	 