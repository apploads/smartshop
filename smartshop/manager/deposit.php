<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
       
       
$V3luyhihg0ps = date('Y-m-d h:m:s');
         
         
         

include('includes/deposit.inc.php'); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Book Deposits</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
<link rel="stylesheet" href="../css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/fvalidform.css" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/dpickscript.js" type="text/javascript"></script>
  <script type="text/javascript" src="../js/fixdouble.js"></script>
   <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../js/fvalidscript.js"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
<?php if(isset($_POST['submit']) && $V4tckdkecqzl) { echo "<p class='msg'>",$Vcf0orczi5ez,"</p>","\n";} ?>  
<form  action="" method="POST" class="form">

<p><label>Book Deposits</label></p>
    
<table class="table">

<tr><td>Txn ID.</td></tr>    
<tr><td><input type="text" name="ticket" value="<?php echo $_POST['ticket']; ?>" class="ent" /></td></tr>

<tr><td>Customer Name</td></tr>    
<tr><td><input type="text" name="cname" value="<?php echo $_POST['cname'] ?>" class="ent" /></td></tr>

<tr><td>Customer Phone</td></tr>    
<tr><td><input type="text" name="cphone" value="<?php echo $_POST['cphone'] ?>" class="ent" /></td></tr>

<tr><td><p style="margin-bottom: -10px;">No of fields</p></td></tr>
<tr><td><input type="text" name="fields" value="<?php echo @$_POST['fields']; ?>" class="ent" style="width:100px;" /><button type="submit" name="go" class="find">Go</button></td></tr>   

<?php
  if(isset($_POST['go'])){ ?>
<tr><td>Product</td><td>Deposit</td><td>Actual Price</td></tr>
<?php
for($Vvfjr3vkunyt=1; $Vvfjr3vkunyt<=@$_POST['fields']; $Vvfjr3vkunyt++){

  echo"<tr>","<td><input type='text' name='desc[]' class='ent' /></td>",
  "<td><input type='text' name='deposit[]' size='7' /></td>","<td><input type='text' name='price[]' size='7' /></td></tr>";

  } ?>
<tr><td><button type="submit" id="submit" name="submit" class="find">Book</button></td></tr>
<?php }
?>

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
