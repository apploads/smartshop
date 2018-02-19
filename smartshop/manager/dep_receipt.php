<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   

$V3luyhihg0ps= date('Y-m-d h:m:s');
$Vcet4ecm1xvc = date('Y-m-d');

 if(isset($_POST['submit'])){
     $Vbq2ij4qunqq = $_POST['searche'];
     $_SESSION['no'] = $Vbq2ij4qunqq;
 
     header('location: ../deposit_receipt.php');
 }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Do Deposit Receipt</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
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
<form action="?p=$_POST['searche']" method="POST" class="form">
<table>
     <tbody id='go'>
<tr><td><input type="text" id="searche" name="searche" class="clear" value="Enter Ticket No" /><button type="submit" name="submit" class="find">Print</button></td></tr>
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


