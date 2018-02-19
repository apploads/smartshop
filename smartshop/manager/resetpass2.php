<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Change Passwords</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
<link rel="stylesheet" href="../css/print.css" type="text/css" media="print" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/fvalidform.css" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/dpickscript.js" type="text/javascript"></script>
      <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../js/fvalidscript.js"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
<form action="" method="POST" class="form">
<table>
    <p><label>Change Password</label></p>
<tr><td>New Password</td></tr>
<tr><td><input type="password" name="newpass" id='pwddd' /></td></tr>
<tr><td>ReType Password</td></tr>
<tr><td><input type="password" name="newpass2" /></td></tr>
<tr><td><button type="submit" name="submit" class="find">Change</button></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
    $Vdm4uarlihkl = $_POST['newpass'];
    $Vevvfxpginsg = $_POST['tid'];

  $Vw0yw2abddqx = "update `users` set `password1` = md5('$Vdm4uarlihkl'),
                            `password2` = md5('$Vdm4uarlihkl')
                            where username = '".$_SESSION['logname']."' ";
  $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
  $Vcf0orczi5ez = 'Password Changed!';

  if($V4tckdkecqzl)
  {
  echo "<p>", $Vcf0orczi5ez, "</p>"; 
  
  }
  else echo mysqli_error($Vrq3slealtta);

}
?>
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
