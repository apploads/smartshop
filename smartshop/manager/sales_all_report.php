<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   
  $V0h3f0nll202 =0;
   
$Vadnvtl31tt5 = "select qty,vdiscount,unitPrice from sell where date BETWEEN '".$_SESSION['one']."' AND '".$_SESSION['two']."' ";
$Vfdxjtdao2fk =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
while($V0jf2ohpnxpt = mysqli_fetch_array($Vfdxjtdao2fk)){

      $Vkvicruvyemw[] = $V0jf2ohpnxpt['qty'];
      $V3iwpjqh3nvh[] = $V0jf2ohpnxpt['vdiscount'];
      $Vqdn33uyk12w[] = $V0jf2ohpnxpt['unitPrice'];

}
$Vsnmhzjzvnnu = count($Vkvicruvyemw);
for($Vvew1i1vxw2h=0;$Vvew1i1vxw2h<$Vsnmhzjzvnnu;$Vvew1i1vxw2h++){

     $V0h3f0nll202 = $V0h3f0nll202 + ($Vkvicruvyemw[$Vvew1i1vxw2h] * $Vqdn33uyk12w[$Vvew1i1vxw2h]) - $V3iwpjqh3nvh[$Vvew1i1vxw2h];

}
 
   
   $Vv0iishjtsus = 0;
   
    $Vw0yw2abddqx = "select `cost` from `expenses` where `date` BETWEEN '".$_SESSION['one']."' AND '".$_SESSION['two']."' ";
  $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
  while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
        $Vn5wigyof0rt[] = $Vj2scvzcnmba['cost'];
        }

        for($Vvfjr3vkunyt=0;$Vvfjr3vkunyt<count($Vn5wigyof0rt);$Vvfjr3vkunyt++){
           $Vv0iishjtsus = $Vv0iishjtsus + $Vn5wigyof0rt[$Vvfjr3vkunyt];
        }
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>All Sales Report</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/tabscript.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="../js/paginator.js"></script>
 
 
</head>
<body>
  <div id="container">
      <div class='grid_2 dash alpha'>
<?php include('includes/dash.inc.php'); ?>
      </div>
      <div class='grid_8'>
          <?php
          echo"<p style='padding: 9px;'><b>","Sales Summary Report from"," ",$_SESSION['one']," ","to"," ",$_SESSION['two'],"</b><p>";
          ?>
   <table class="rec table">
       <tbody id="go"> 
   <tr><th>Customer</th><th>Phone</th><th>Product</th><th>Spec</th><th>Price</th><th>Qty</th><th>Discount</th><th>UserID</th><th>Timestamp</th></tr>
   <?php

  $Vw0yw2abddqx ="select * from `sell` where `date` BETWEEN '".$_SESSION['one']."' AND '".$_SESSION['two']."' ";
  $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
  while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
     ?>
    <tr><td style="width:100px;"><?php echo $Vj2scvzcnmba['custName']; ?></td><td><?php echo $Vj2scvzcnmba['custPhone'];?></td><td><?php echo $Vj2scvzcnmba['product']; ?></td>
        <td><?php echo $Vj2scvzcnmba['spec']; ?></td><td><?php echo $Vj2scvzcnmba['unitPrice']; ?></td>
        <td><?php echo $Vj2scvzcnmba['qty']; ?></td><td><?php echo $Vj2scvzcnmba['vdiscount']; ?></td><td><?php echo $Vj2scvzcnmba['userID']; ?></td>
        <td><?php echo $Vj2scvzcnmba['timestamp']; ?></td>
    </tr>
     
  <?php } ?>
   </tbody>
   </table><br />
  
   
            
   <table class="rec table">
       <tbody> 
   <tr><th>Expense Description</th><th>Cost</th><th>User</th><th>Timestamp</th></tr>
   <?php

  $Vw0yw2abddqx ="select * from `expenses` where `date` BETWEEN '".$_SESSION['one']."' AND '".$_SESSION['two']."' ";
  $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
  while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
     ?>
    <tr><td><?php echo $Vj2scvzcnmba['expenseDesc']; ?></td><td><?php echo $Vj2scvzcnmba['cost'];?></td><td><?php echo $Vj2scvzcnmba['user'];?></td><td><?php echo $Vj2scvzcnmba['timestamp']; ?></td>
     </tr>

  <?php } ?>
</tbody>
  </table><br />
  <?php echo "<span style='padding:7px 0 5px 9px;'>","Total Sales for the Period: NGN ",@$V0h3f0nll202,"<br />","</span>"; ?>
          <?php echo "<span style='padding:7px 0 5px 9px;'>","Total Expenses for the Period: NGN ",$Vv0iishjtsus,"<br />","</span>"; ?>
  <?php echo "<p style='padding:9px;'>","<b>","Total Cash Balance for the period: NGN ",$V0h3f0nll202 - @$Vv0iishjtsus,"</b>","</p>"; ?>
          </div>
      <div class='grid_2'>
         
          <div class="user acctname"> <p><img src="../img/avatar.jpg" /> <?php echo $_SESSION['logname']; ?> | <a href='../logout.php?logout=1'>Log out</a></p></div>
      
      </div>
         
   </div><!--container-->	

   
   
   
 <?php include('../includes/disabled.inc.php'); ?>
   
<script type='text/javascript'>
$(document).ready(function() {
$('#go').pagination();

 });
</script>
</body>
</html>
  
  
  

  





