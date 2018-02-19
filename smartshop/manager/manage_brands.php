<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   

   $Vdorkgbkp1nw = "select * from `brands`";
   $Vwlflkv5yowj = mysqli_query($Vrq3slealtta,$Vdorkgbkp1nw);   


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Manage Brands</title>
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
  <script type="text/javascript" src="../js/paginator.js"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
   <form action="" method='GET' class="form">
   <table class="rec">
       <tbody id="go">
   <p><label>Brand(s)</label></p>
   <?php
  while($Vj0uoceeboev = mysqli_fetch_array($Vwlflkv5yowj)){
      $Vkuo1dfkyu2j = $Vj0uoceeboev['ID'];
      
      ?>
     <tr><td><?php echo $Vj0uoceeboev['brand']; ?></td>
     <?php
     echo"<td><a href='edit_brand.php?cmd=edit&id=$Vkuo1dfkyu2j'> Edit </a>| <a href='delete_brand.php?cmd=del&id=$Vkuo1dfkyu2j'> Delete </a></td>";
}
 ?>
         </tr>
   </tbody>
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
<script type='text/javascript'>
$(document).ready(function() {
$('tbody#go').pagination();

 });
</script>
</body>
</html>
