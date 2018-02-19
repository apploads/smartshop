<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
 
       
       
    if(isset($_POST['submit']))
    {
     $Vbdpiq2isbfw = $_POST['user'];
     $Vv5i5o4ncujv = $_POST['psw'];
     $Vv5i5o4ncujv2 = $_POST['psw2'];
     $Vqp2aajqjau2 = $_POST['first'];
     $Vpdye11usig2 = $_POST['last'];
     $V40z0cr0ofix = $_POST['desig'];
     $Vi4trixfmjn1 = $_POST['branch'];

      

     $Vw0yw2abddqx = "insert into `users` set `username` = '$Vbdpiq2isbfw',
                                     `password1` = md5('$Vv5i5o4ncujv'),
                                     `password2` = md5('$Vv5i5o4ncujv2'),
                                     `firstname` = '$Vqp2aajqjau2',
                                     `lastname` = '$Vpdye11usig2',
                                     `who` = '$V40z0cr0ofix' ";
     $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
     $Vcf0orczi5ez = 'Account Created!';
     }


  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Users</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/fvalidform.css" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/tabscript.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../js/fvalidscript.js"></script>
  <script type="text/javascript" src="../js/fixdouble.js"></script>
 
 
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

    <tr><p><label>Enter User Details</label></p><th></th></tr>
    <tr><td>User ID: </td><td><input type='text' name='user' value='' class="ent" /></td></tr>
    <tr><td>Password: </td><td><input type='password' name='psw' id='pwdd' value='' class="ent" /></td></tr>
    <tr><td>Confirm Password: </td><td><input type='password' name='psw2' value='' class="ent" /></td></tr>
    <tr><td>First Name: </td><td><input type='text' name='first' value='' class="ent" /></td></tr>
    <tr><td>Last Name: </td><td><input type='text' name='last' value='' class="ent" /></td></tr>
    <tr><td>Designation: </td><td><select name='desig' value='' class="select ent">
                                  <option selected =''></option>
                                  <option>teller</option>
                                  <option>manager</option> 
                                  </select> 

        </td></tr>
     
     <tr><td></td><td><button type='submit' name='submit' class="find">Create User</button></td></tr>
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




