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

if(isset($_GET['p'])){
   $Vmkh2mepgxtb = $_GET['p'];
}
$Vywaicimdahf ="select distinct `ticket` from `deposit` where `ticket` LIKE '$Vmkh2mepgxtb%' order by `ticket`";
$Ve1u1pvvniul = mysqli_query($Vrq3slealtta,$Vywaicimdahf);
while($Vlskcvhndstu = mysqli_fetch_array($Ve1u1pvvniul)){
      echo $Vlskcvhndstu['ticket'],"\n";
}	 
?>	 