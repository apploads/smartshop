<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   
 $V3luyhihg0ps= date('Y-m-d h:m:s');

if(isset($_GET['auth'])){
         $Vkuo1dfkyu2j = $_GET['auth'];

   $Vywaicimdahf ="update `product` set `auth` = 'Y'
                            
                             where `ID` = '$Vkuo1dfkyu2j'";
    mysqli_query($Vrq3slealtta,$Vywaicimdahf);
    header('Location: authorize.php');
}

?>
