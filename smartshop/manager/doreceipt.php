<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   

$V3luyhihg0ps= date('Y-m-d h:m:s');
$Vcet4ecm1xvc = date('Y-m-d');

 if(isset($_POST['submit'])){
     $V1kkuu3zgzer = $_POST['search'];
     $Vzolxholcr0h = $_POST['cash'];
     $_SESSION['tno'] = $V1kkuu3zgzer;
     $_SESSION['cash'] = $Vzolxholcr0h;
 
     header('location: ../receipt_2.php');
 }


$V0h3f0nll202 = 0;
$Vrbxrcwc101g = 0;        

$Vw0yw2abddqx = "select * from `sell` where `ticket` = '".$_POST['search']."' ";
$V4tckdkecqzl =  mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
if(!$V4tckdkecqzl){echo mysqli_error($Vrq3slealtta);}


$Vw0yw2abddqx2 = "select * from `sell` where `ticket` = '".$_POST['search']."' ";
$V4tckdkecqzl2 =  mysqli_query($Vrq3slealtta,$Vw0yw2abddqx2);
$Vp2w3frtp0ws = mysqli_fetch_array($V4tckdkecqzl2);


$Vw0yw2abddqx3 = "select * from `shop`";
$V4tckdkecqzl3 =  mysqli_query($Vrq3slealtta,$Vw0yw2abddqx3);
$Vafs3ahivpyi = mysqli_fetch_array($V4tckdkecqzl3);
  

$Vadnvtl31tt5 = "select `qty`,`vdiscount`,`unitPrice` from `sell` where `ticket` = '".$_POST['search']."' ";
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
<title>Do Receipt</title>
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
<table>
     <tbody id='go'>
         <tr><td>Ticket No.</td></tr>
<tr><td><input type="text" id="search" name="search" class="clear" value="<?php echo $_POST['search']; ?>" /></td><td><button type="submit" name="go" class="find">Go</button></td></tr>
<?php
  if(isset($_POST['go'])){ ?>
<tr><td>Total Cost</td></tr>
<tr><td><input type="text" name="total" value="<?php echo "NGN"," ",$V0h3f0nll202; ?>" /></td></tr>
<tr><td>Cash Tendered</td></tr>
<tr><td><input type="text" name="cash" /></td></tr>
        <tr><td><button type="submit" name="submit" class="find">Print</button></td></tr>
        <?php } ?>
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


