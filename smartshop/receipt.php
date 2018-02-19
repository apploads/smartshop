<?php
session_start();
include('cnx.php');
        
 
       include('includes/hijack_sess.inc.php');


 
$V3luyhihg0ps= date('Y-m-d h:m:s');

$V0h3f0nll202 = 0;
$Vrbxrcwc101g = 0;        

$Vw0yw2abddqx = "select * from `sell` where `ticket` = '".$_SESSION['tno']."' ";
$V4tckdkecqzl =  mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
if(!$V4tckdkecqzl){echo mysqli_error($Vrq3slealtta);}


$Vw0yw2abddqx2 = "select * from `sell` where `ticket` = '".$_SESSION['tno']."' ";
$V4tckdkecqzl2 =  mysqli_query($Vrq3slealtta,$Vw0yw2abddqx2);
$Vp2w3frtp0ws = mysqli_fetch_array($V4tckdkecqzl2);


$Vw0yw2abddqx3 = "select * from `shop`";
$V4tckdkecqzl3 =  mysqli_query($Vrq3slealtta,$Vw0yw2abddqx3);
$Vafs3ahivpyi = mysqli_fetch_array($V4tckdkecqzl3);
  

$Vadnvtl31tt5 = "select `qty`,`vdiscount`,`unitPrice` from `sell` where `ticket` = '".$_SESSION['tno']."' ";
$V4tckdkecqzlque =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
while($V0jf2ohpnxpt = mysqli_fetch_array($V4tckdkecqzlque)){

      $Vkvicruvyemw[] = $V0jf2ohpnxpt['qty'];
      $V3iwpjqh3nvh[] = $V0jf2ohpnxpt['vdiscount'];
      $Vqdn33uyk12w[] = $V0jf2ohpnxpt['unitPrice'];
     

}
$Vsnmhzjzvnnu = count($Vkvicruvyemw);
for($Vvew1i1vxw2h=0;$Vvew1i1vxw2h<$Vsnmhzjzvnnu;$Vvew1i1vxw2h++){

     $V0h3f0nll202 = $V0h3f0nll202 + ($Vkvicruvyemw[$Vvew1i1vxw2h] * $Vqdn33uyk12w[$Vvew1i1vxw2h]) - $V3iwpjqh3nvh[$Vvew1i1vxw2h];
     

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Receipt</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/dpickscript.js" type="text/javascript"></script>
 
 
</head>
<body class="receipt">
      <div id="container" style="min-height: 450px;">

     <div class="grid_10 alpha"></div>
     <div class="grid_2">
               
          <div class="user"> <a href="index.php"><?php echo $_SESSION['logname'];?></a> </div>
     </div>
    
            <div class='grid_3 alpha' style="min-height: 80px;">
               <?php 
               echo "<b>Receipt </b>"," ",$_SESSION['tno'],"<br /><br />",
                       "<div class='s'>",$Vp2w3frtp0ws['custName'],"<br /><br />",
                       $Vp2w3frtp0ws['custPhone'],"</div>";
               ?>
            </div>
     <div class="grid_1">
          <?php include('includes/logo.inc.php'); ?>
        <?php echo "<font size='0.8'>",$Vp2w3frtp0ws['date'],"</font>"; ?>
     </div>
            <div class='grid_4 alpha' style="min-height: 30px;"></div>
            <div class='grid_4' style="min-height: 30px;">
              
            </div>
          
            
            <div class="grid_4 desc alpha">
                <table style="padding:0;">
                    <tr><td style="border-bottom: 1px dotted #ccc;padding-right: 0.9em;">Product</td>
                        <td style="border-bottom: 1px dotted #ccc;padding-right: 0.9em;">Spec.</td>
                        <td style="border-bottom: 1px dotted #ccc;padding-right: 0.9em;">Price</td>
                        <td style="border-bottom: 1px dotted #ccc;padding-right:  0.9em;">QTY</td>
                        <td style="border-bottom: 1px dotted #ccc;padding-right:  0.9em;">Discount</td>
                    </tr>
                    <?php
while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
    
    $Veze2k1dhdfb[] = $Vj2scvzcnmba['product'];
    $V0n5onapye4x[] = $Vj2scvzcnmba['spec'];
    $Vmowi1fdcfga[] = $Vj2scvzcnmba['qty'];
    $Vyku0h1kkwsj[] = $Vj2scvzcnmba['unitPrice'];
     $V5wxaz2gs3wg[] = $Vj2scvzcnmba['vdiscount'];
}
$Vzavhtfsqwe2 = count($Veze2k1dhdfb);
for($Vvfjr3vkunyt=0;$Vvfjr3vkunyt<$Vzavhtfsqwe2;$Vvfjr3vkunyt++) { ?>
 <tr><td style="padding-right: 0.9em"><?php echo $Veze2k1dhdfb[$Vvfjr3vkunyt]; ?></td>
     <td style="padding-right: 0.9em"><?php echo $V0n5onapye4x[$Vvfjr3vkunyt]; ?></td>
     <td style="padding-right: 0.9em"><?php echo $Vyku0h1kkwsj[$Vvfjr3vkunyt]; ?></td>
     <td style="padding-right: 0.9em"><?php echo $Vmowi1fdcfga[$Vvfjr3vkunyt]; ?></td>
     <td style="padding-right: 0.9em"><?php echo $V5wxaz2gs3wg[$Vvfjr3vkunyt]; ?></td>
 </tr>

<?php } ?>
   <tr></tr><tr></tr><tr></tr>
   </table> <br />
   <?php 
   $Vnnro1p03ywt = $_SESSION['cash'] -$V0h3f0nll202;
   echo"Cash Tendered(N): ",$_SESSION['cash']," <br />",
       "Change Due(N): ",$Vnnro1p03ywt,"<br /><br />" ; ?>            
   <b><?php echo"Total Charge(N):"," ", $V0h3f0nll202; ?></b>
                
            </div>
           
      <div class="grid_4 dessert alpha">      
            Thank you for your patronage.<br /><br />
             <?php echo "<b>",$Vafs3ahivpyi['name'],"</b>"; ?><br />
             <?php echo @$Vafs3ahivpyi['address']; ?>

 </div>
          </div><!--container-->
          <?php include('includes/disabled.inc.php'); ?>
</body>
</html>
