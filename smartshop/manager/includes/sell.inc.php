<?php


if(isset($_POST['sell'])){
   
     
     
        $Vcuvoabx34kv = $_POST['cname'];
        $Vc2fqs1lma0w = $_POST['cphone'];
        $Vkuo1dfkyu2j = $_POST['id'];
        $Vokyt5r45ei1 = $_POST['valu'];
        $Vzmhfqn4ffz0 = $_POST['pcat'];
        $Veze2k1dhdfb = $_POST['product'];
        $V0n5onapye4x = $_POST['spec'];
               
        $Vyku0h1kkwsj = $_POST['unit'];
        $Vbdqr53bp0hg = $_POST['ticket'];
        $Vkg5nm2vl0zq = $_POST['buy'];
        $V3luyhihg0ps= date('Y-m-d h:m:s');
        $Vcet4ecm1xvc= date('Y-m-d');



        $Vsnmhzjzvnnu = count($Vkuo1dfkyu2j);
for($Vkr2tpewii4o=0;$Vkr2tpewii4o<$Vsnmhzjzvnnu;$Vkr2tpewii4o++){
    
           $Vt3ojboyqcv5 = "select * from product where ID = '".$Vkuo1dfkyu2j[$Vkr2tpewii4o]."'";
                 $Vrqhxzlwt4wa = mysqli_query($Vrq3slealtta,$Vt3ojboyqcv5);
                 while($Vvsig3mammkq = mysqli_fetch_array($Vrqhxzlwt4wa)){
                     $Vkvicruvyemw[] = $Vvsig3mammkq['qty'];
                     $Von54dywqvgv[] = $Vvsig3mammkq['buy'];
                }

                 
            if( $Vkvicruvyemw[$Vkr2tpewii4o] >= ($Von54dywqvgv[$Vkr2tpewii4o] + $Vkg5nm2vl0zq[$Vkr2tpewii4o]) ){

    $Vw0yw2abddqx ="insert into `sell` set `custName` = '".$Vcuvoabx34kv."',
                                    `custPhone` = '". $Vc2fqs1lma0w."',
                                  
                                    `ticket` = '". $Vbdqr53bp0hg."',
                                    `vdiscount` = '". $Vokyt5r45ei1[$Vkr2tpewii4o]."',
                                    `catType` = '". $Vzmhfqn4ffz0."',
                                    `product` = '". mysqli_real_escape_string($Vrq3slealtta,$Veze2k1dhdfb[$Vkr2tpewii4o])."',
                                    `spec` = '". mysqli_real_escape_string($Vrq3slealtta,$V0n5onapye4x[$Vkr2tpewii4o])."',
                                    `qty` = '". $Vkg5nm2vl0zq[$Vkr2tpewii4o]."',
                                    `unitPrice` = '".$Vyku0h1kkwsj[$Vkr2tpewii4o]."',
                                    `timestamp` = '".$V3luyhihg0ps."',
                                    `date` = '".$Vcet4ecm1xvc."',
                                    `userID` = '". $_SESSION['logname']."' ";
                 $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
                      
  
      $Vcf0orczi5ez = 'Sell Successful!'; 
            if($V4tckdkecqzl){  
                              
     $Vt3ojboyqcv5ue ="update `product` set `buy` = (`product`.`buy` + '".$Vkg5nm2vl0zq[$Vkr2tpewii4o]."') where
                                      `ID` = '".$Vkuo1dfkyu2j[$Vkr2tpewii4o]."'";
     
                                 mysqli_query($Vrq3slealtta,$Vt3ojboyqcv5ue);   
             }
             
             else {
                 echo mysqli_error($Vrq3slealtta);
               
             }
            }
                 
               
             
}     


                            
        
        
        $Vt3ojboyqcv5q = "update `product` set `left` = (`product`.`qty` - `product`.`buy`)
                                   where `buy` <= `qty`";
                             mysqli_query($Vrq3slealtta,$Vt3ojboyqcv5q);

      
     $Vt3ojboyqcv5 = "delete from `product` where `left` = 0";
                   mysqli_query($Vrq3slealtta,$Vt3ojboyqcv5);

 
     $Vywaicimdahf ="delete from `sell` where `qty` =0";
            mysqli_query($Vrq3slealtta,$Vywaicimdahf);
                 
}

