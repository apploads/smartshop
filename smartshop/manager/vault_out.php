<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
 
       
       
    if(isset($_POST['submit']))
    {
     $Vd35trmgahep = $_POST['amt'];    
     $Vbdpiq2isbfw = $_POST['user'];
     $Vikttecajytk = $_POST['datt'];
     $V3luyhihg0ps= date('Y-m-d h:m:s');
     

     $Vw0yw2abddqx = "insert into `vault_out` set `userID` = '$Vbdpiq2isbfw',
                                          `amt` = '$Vd35trmgahep',
                                          `date` = '$Vikttecajytk',
                                          `timestamp` = '$V3luyhihg0ps'";
     $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
     $Vcf0orczi5ez = 'Amount Vaulted Out!';
     }


   $Vadnvtl31tt5 = "select `username` from `users` where `who` != 'admin'";
   $Vrqhxzlwt4wa =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
   while($Vj2scvzcnmba = mysqli_fetch_array($Vrqhxzlwt4wa)){
   $Vbdpiq2isbfws[] = $Vj2scvzcnmba['username'];} 
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Vault out</title>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />

<link rel="stylesheet" type="text/css" media="screen" href="../css/fvalidform.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/tabscript.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../js/fvalidscript.js"></script>
  <script type="text/javascript" src="../js/fixdouble.js"></script>
   <script src="../js/dpickscript.js" type="text/javascript"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
    <?php if(isset($_POST['submit']) && $V4tckdkecqzl) { echo "<p class='msg'>",$Vcf0orczi5ez,"</p>","\n";} ?>              
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' class="form">
    <table >

    <tr><p><label>Vault Out</label></p><th></th></tr>
    <tr><td>Amount (NGN): </td><td><input type='text' name='amt' value='<?php echo $_POST['amt']; ?>' class="ent" /></td></tr>

    <tr><td>User ID: </td><td>
        <select name='user' class='select ent' style="width:205px;">
<option selected='<?php echo @$_POST['user']; ?>'><?php echo @$_POST['user']; ?></option>
<?php
foreach ($Vbdpiq2isbfws as $Vbdpiq2isbfw) {
    echo "<option>$Vbdpiq2isbfw</option>\n";
}
?> 
</select>
</td></tr>
    
     <tr><td>Date: </td><td><input type='text' class="date" name='datt' value='<?php echo $_POST['datt']; ?>' class="ent" /></td></tr>   
     
     <tr><td></td><td><button type='submit' name='submit' class="find">Vault Out</button></td></tr>
     </table>
     </form>
                           
			</div>
<div class='grid_2'>
          <?php ?>
                <div class="clear"></div>
          <div class="user acctname"> <p><img src="../img/avatar.jpg" /> <?php echo $_SESSION['logname']; ?> | <a href='../logout.php?logout=1'>Log out</a></p></div>
      
      </div>
          </div><!--container-->
         <?php include('../includes/disabled.inc.php'); ?>	 
</body>
</html>




