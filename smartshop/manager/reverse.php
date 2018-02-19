<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   

$V3luyhihg0ps= date('Y-m-d h:m:s');
$Vcet4ecm1xvc = date('Y-m-d');




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Reversal</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
<link rel="stylesheet" href="../css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/input.css" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/tabscript.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="../js/jquery.autocomplete.js"></script>
  <script type="text/javascript" src="../js/autocscript.js"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
<form action="?q=$_POST['search']" method="POST" class="form">
    
<table class="table">
     <tbody id='go'>
     <tr><td>Ticket No.</td></tr>    
<tr><td><input type="text" id="search" name="search" class="clear" value="<?php echo $_POST['search'] ?>" /><button type="submit" name="submit" class="find">Go</button></td></tr>
<?php 
if(isset($_POST['submit'])){
    $V1xpz1u0dt13 = $_POST['search'];
    $Vw0yw2abddqx = "select * from `sell` where `ticket` = '$V1xpz1u0dt13'";
    $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx); ?>
 <tr><th>Product</th><th>Spec</th><th>Price</th><th>Qty</th><th>Disc</th></tr>
<?php }
while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
    $Vkuo1dfkyu2j = $Vj2scvzcnmba['ID']; 
   
    ?>
   
<tr><td class="data" style="width:200px;"> <?php echo $Vj2scvzcnmba['product'] ?></td>
    <td class="data" style="width:200px;"><?php echo $Vj2scvzcnmba['spec'] ?></td>
    <td class="data" style="width:60px;"><?php echo $Vj2scvzcnmba['unitPrice'] ?></td>
    <td class="data" style="width:45px;"><?php echo $Vj2scvzcnmba['qty'] ?></td>
    <td class="data" style="width:55px;"><?php echo $Vj2scvzcnmba['vdiscount'] ?></td>
         <?php
     echo"<td><a href='reversal.php?reverse=$Vkuo1dfkyu2j'> Reverse </a></td>";

} 
?> 
</tr>    
</tbody>
</table>
    </form>


</div>
<div class='grid_2'>
          <?php 
                <div class="clear"></div>
          <div class="user acctname"> <p><img src="../img/avatar.jpg" /> <?php echo $_SESSION['logname']; ?> | <a href='../logout.php?logout=1'>Log out</a></p></div>
      
      </div>
          </div><!--container-->
  <?php include('../includes/disabled.inc.php'); ?>	        
</body>
</html>


