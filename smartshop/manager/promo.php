<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
 
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Promotions</title>
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' class="form">
    <table >
<p>Compose Mail</p>
   
    <tr><td>Subject: </td><td><input type='text' name='subject' value='' size='35' /></td></tr>
    <tr><td>Message: </td><td><textarea name='message' value='' cols='50' rows='10'></textarea></td></tr>
    <tr><td></td><td><input type='submit' name='submit' value='Send to customers' class="find" /></td></tr>
    
    </table>
    </form>
     <?php
    if(isset($_POST['submit']))
    {
         $Vmfqx5chbgfs = $Vbahvv3mgydh['subject'];
         $Vcf0orczi5ez = $Vbahvv3mgydh['message'];

     $Vw0yw2abddqx = "select distinct `custEmail` from `sell`";
     $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
     while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
         $Vrlygbfghzrq[] = $Vj2scvzcnmba['custEmail'];
      }
      	$V14ox42bmn0g = "zzz582x";

	ob_start();
	?>
	To: Customers
	From: 
	MIME-Version: 1.0
	Content-Type: multipart/alternative;
	boundary="==Multipart_Boundary_<?php echo($V14ox42bmn0g); ?>" 
	<?php 
	$Vg44hqjocokk = ob_get_clean(); 
	ob_start(); ?>

         <?php echo $Vcf0orczi5ez; ?>
	       		   
	
	<?php
	$Vugi3kgmjkjp = ob_get_clean();
	
        for($Vvfjr3vkunyt=0;$Vvfjr3vkunyt<count($Vrlygbfghzrq);$Vvfjr3vkunyt++){
	$V2kmlx4h1uk5 = @mail( $Vrlygbfghzrq[$Vvfjr3vkunyt], $Vmfqx5chbgfs, $Vugi3kgmjkjp, $Vg44hqjocokk );
        }
	echo( $V2kmlx4h1uk5 ? "Mail sent\n" : "Mail failed\n" );
     }

?>                           
			</div>
<div class='grid_2'>
          <?php ?>
                <div class="clear"></div>
          <div class="user"> <?php echo $_SESSION['logname'];?> </div>
      
      </div>
          </div><!--container-->
         <?php include('../includes/disabled.inc.php'); ?>	 
</body>
</html>




