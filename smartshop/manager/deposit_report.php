<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   
   $V0h3f0nll202 = 0;
   $V0h3f0nll202_dep = 0;

     ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sales Report</title>
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
          echo"<p style='padding:9px;'><b>","Customer Deposits Report from"," ",$_SESSION['one']," ","to"," ",$_SESSION['two'],"</b><p>";
          ?>
   <table class="rec table">
       <tbody id="go">
   <tr><th>Customer</th><th>Description</th><th>Deposit</th><th>Actual Price</th><th>Balance</th><th>Date</th></tr>
   <?php

  $Vw0yw2abddqx ="select * from `deposit` where `date` BETWEEN '".$_SESSION['one']."' AND '".$_SESSION['two']."' ";
  $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
  while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
          $Vkuo1dfkyu2j = $Vj2scvzcnmba['ID'];
          $V0h3f0nll202_dep = @$V0h3f0nll202_dep + $Vj2scvzcnmba['deposit'];
     ?>
    <tr><td><?php echo $Vj2scvzcnmba['custName']; ?></td><td><?php echo $Vj2scvzcnmba['desc'];?></td><td><?php echo $Vj2scvzcnmba['deposit']; ?></td>
        <td><?php echo $Vj2scvzcnmba['price']; ?></td><td><?php echo $Vj2scvzcnmba['balance']; ?></td><td><?php echo $Vj2scvzcnmba['date']; ?></td>
        <?php
   
  }?>
   </tr>
   </tbody>
  </table>
    <?php 
  echo "<b style='padding-left: 15px;'>","Total Deposits for the period: ","</b>","N ", "<b>",$V0h3f0nll202_dep,"</b>";
  ?>
         </div>
      <div class='grid_2'>
        
       <div class="user acctname"> <p><img src="../img/avatar.jpg" /> <?php echo $_SESSION['logname']; ?> | <a href='../logout.php?logout=1'>Log out</a></p></div>
      
      </div>
         
   </div><!--container-->
  <script type='text/javascript'>
$(document).ready(function() {
$('table tr:odd').css('background-color','#f8fafb');
});
</script>
   
    <?php include('../includes/disabled.inc.php'); ?>
   <script type='text/javascript'>
$(document).ready(function() {
$('#go').pagination();

 });
</script>
</body>
</html>
 
