<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');

        include('includes/expenses.inc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Book Expenses</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
<link rel="stylesheet" href="../css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/tabscript.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="../js/fixdouble.js"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
<?php if(isset($_POST['submit']) && $V4tckdkecqzl) { echo "<p class='msg'>",$Vcf0orczi5ez,"</p>","\n";} ?>                  
<form  action="" method="POST" class="form">
    <p><label>Book Expenses</label></p>
<table>
<tr><td>No of fields</td></tr>
<tr><td><input type="text" name="fields" value="<?php echo @$_POST['fields']; ?>" /><button type="submit" name="go" class="find">Go</button></td></tr>


<?php

  if(isset($_POST['go'])){
echo"<tr>","<td>Expense Description</td>","<td>Cost</td>","</tr>";
for($Vvfjr3vkunyt=1; $Vvfjr3vkunyt<=@$_POST['fields']; $Vvfjr3vkunyt++){
    
 
  echo"<tr>","<td><input type='text' name='desc[]' size='40' /></td>","<td><input type='text' name='cost[]' size ='8' /></td>","</tr>";

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

