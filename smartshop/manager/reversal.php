<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   
 $V3luyhihg0ps= date('Y-m-d h:m:s');

if(isset($_GET['reverse'])){
         $Vkuo1dfkyu2j = $_GET['reverse'];


   
    $Vcpfzzlds50q = "select * from `sell` where `ID` = '$Vkuo1dfkyu2j'";
    $Vcpfzzlds50qans = mysqli_query($Vrq3slealtta,$Vcpfzzlds50q);
    $Vcpfzzlds50qrow = mysqli_fetch_array($Vcpfzzlds50qans);
    $V2vl1cjtykoc = $Vcpfzzlds50qrow['qty'];
    $Veze2k1dhdfb = $Vcpfzzlds50qrow['product'];
    $V0n5onapye4x = $Vcpfzzlds50qrow['spec'];
  
    $Vlsqwmqfcyvk ="select * from `product` where `product` = '$Veze2k1dhdfb' and `spec` = '$V0n5onapye4x'";
    $Vlsqwmqfcyvkans = mysqli_query($Vrq3slealtta,$Vlsqwmqfcyvk);
    $Vlsqwmqfcyvkrow = mysqli_fetch_array($Vlsqwmqfcyvkans);
    $Vmowi1fdcfga = $Vlsqwmqfcyvkrow['qty'];
    $Vget3du0qyi1 = $Vlsqwmqfcyvkrow['left'];
    
     $Vadnvtl31tt5 ="update `product` set `qty` = ('".$Vmowi1fdcfga."' + '".$V2vl1cjtykoc."'),
                                 `left` = ('".$Vget3du0qyi1."' + '".$V2vl1cjtykoc."')
                                     where `product` = '$Veze2k1dhdfb' and `spec` = '$V0n5onapye4x'";
     mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
     
     
    $Vlsqwmqfcyvkq ="delete from `sell` where `ID` = '$Vkuo1dfkyu2j' ";
    mysqli_query($Vrq3slealtta,$Vlsqwmqfcyvkq);
    
    header('Location: reverse.php');
}

?>
