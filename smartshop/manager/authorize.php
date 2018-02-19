<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   

   $Vw0yw2abddqx = "select * from `product` where `auth` !='Y' order by `product`";
   $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);   


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Auth</title>
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
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
   <form action="" method='GET' class="form">
   <table class="rec">
   <tr><th>Product</th><th>Spec</th><th>Price</th><th>QTY</th><th>User ID</th><th>Authorized?</th></tr>
   <?php
  while($Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl)){
      $Vkuo1dfkyu2j = $Vj2scvzcnmba['ID'];
      ?>
     <tr><td><?php echo $Vj2scvzcnmba['product']; ?></td><td><?php echo $Vj2scvzcnmba['spec']; ?></td><td><?php echo $Vj2scvzcnmba['unitPrice']; ?></td><td><?php echo $Vj2scvzcnmba['qty'] ; ?></td>
         <td><?php echo $Vj2scvzcnmba['user']; ?></td><td><?php echo $Vj2scvzcnmba['auth']; ?></td>
     <?php
     echo"<td><a href='deny.php?deny=$Vkuo1dfkyu2j'> Deny </a>| <a href='auth.php?auth=$Vkuo1dfkyu2j'> Auth </a>| <a href='cancel.php?cancel=$Vkuo1dfkyu2j'> Cancel </a></td>";
}
 ?>
         </tr>
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
