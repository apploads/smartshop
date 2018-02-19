<?php


  if(isset($_POST['submit'])){
  

    $Vbdqr53bp0hg = $_POST['ticket'];
    $Vxkk2455oj13 = $_POST['cname'];
    $Vislsnpxvq0v = $_POST['cphone'];
    $Vw2oz5nytxxy = $_POST['desc'];
    $Vbuoovesbbxj = $_POST['deposit'];
    $Vfn3cvun3kik = $_POST['price'];
    

  $Vzavhtfsqwe2 = count($Vw2oz5nytxxy);

for($Vvfjr3vkunyt=0;$Vvfjr3vkunyt<$Vzavhtfsqwe2;$Vvfjr3vkunyt++) {

     


        $Vw0yw2abddqx ="insert into `deposit` set `ticket` ='".$Vbdqr53bp0hg."',
                                    `custName` = '". mysqli_real_escape_string($Vrq3slealtta,$Vxkk2455oj13)."',
                                    `custPhone` = '".$Vislsnpxvq0v."',
                                    `desc` = '". mysqli_real_escape_string($Vrq3slealtta,$Vw2oz5nytxxy[$Vvfjr3vkunyt])."',
                                    `deposit` = '".$Vbuoovesbbxj[$Vvfjr3vkunyt]."',
                                    `price` = '".$Vfn3cvun3kik[$Vvfjr3vkunyt]."',
                                    `balance` = '".$Vfn3cvun3kik[$Vvfjr3vkunyt]."' - '".$Vbuoovesbbxj[$Vvfjr3vkunyt]."',
                                       `user` = '".$_SESSION['logname']."' ,
                                    `date` = '".$V3luyhihg0ps."'
                                    ";

           $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
           $Vcf0orczi5ez = 'Booking Successful!';


    }
   
  }
