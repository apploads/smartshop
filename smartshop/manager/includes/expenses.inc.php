<?php
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
       
   
   if(isset($_POST['submit'])){
    if(empty($_POST['desc']) OR empty($_POST['cost'])){
       echo"Record Cannot be Null!","\n";
       
        exit();
    }
}

 

  if(isset($_POST['submit'])){

    $Vw2oz5nytxxy = $_POST['desc'];
    $Vn5wigyof0rt = $_POST['cost'];
    $V3luyhihg0ps= date('Y-m-d h:m:s');

  $Vzavhtfsqwe2 = count($Vw2oz5nytxxy);

for($Vvfjr3vkunyt=0;$Vvfjr3vkunyt<$Vzavhtfsqwe2;$Vvfjr3vkunyt++) {


       $Vw0yw2abddqx ="insert into `expenses` set `expenseDesc` = '".$Vw2oz5nytxxy[$Vvfjr3vkunyt]."',
                                   `cost` = '".$Vn5wigyof0rt[$Vvfjr3vkunyt]."',`user` = '".$_SESSION['logname']."',
                                   `timestamp` = '".$V3luyhihg0ps."',
                                       `date` =  '".$V3luyhihg0ps."'
                                   ";
        $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
        $Vcf0orczi5ez ='Expenses(s) Booked!';
    }
  
  }
