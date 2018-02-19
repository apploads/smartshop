<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
       
  
       $Vw0yw2abddqx = "select * from `shop`";
       $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
      $Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl);
       


       
           if(isset($_POST['submit']))
               {
                  $Vlfe4ah5ifxp = $_POST['nom'];
                 $Vlfe4ah5ifxp = mysqli_real_escape_string($Vrq3slealtta,$Vlfe4ah5ifxp);
                 $Vzpi5sjft1er = $_POST['addy'];
                 $Vzpi5sjft1er = mysqli_real_escape_string($Vrq3slealtta,$Vzpi5sjft1er);

           
                 $Vadnvtl31tt5 = "update `shop` set `name` = '$Vlfe4ah5ifxp',
                                             `address` = '$Vzpi5sjft1er'";

                 $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);

                 $Vcf0orczi5ez = 'Record Updated!';
               
                   
              }
                
                
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Info</title>
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
           <?php if(isset($_POST['submit']) && $V4tckdkecqzl) { echo "<p class='msg'>",$Vcf0orczi5ez,"</p>","\n";} ?>       
           <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form">
            <ul>
            
            <p>Business Name:</p>
            <li><input type='text' name='nom' value="<?php echo mysqli_real_escape_string($Vrq3slealtta,$Vj2scvzcnmba['name'])?>" style="height:24px;width:205px;" /></li>

            <p>Business Address:</p>
            <li><textarea name="addy" rows="5" cols="35"><?php echo mysqli_real_escape_string($Vrq3slealtta,$Vj2scvzcnmba['address'])?></textarea></li>
            
         
            <p></p> 
            <li><button type='submit' name='submit' class='find'>Edit</button></li>
            </ul>
            </form> 
              
			</div>
                <div class='grid_2'>
        
          <div class="user acctname"> <p><img src="../img/avatar.jpg" /> <?php echo $_SESSION['logname']; ?> | <a href='../logout.php?logout=1'>Log out</a></p></div>
      
      </div>
          
          </div><!--container-->
          
    
    <?php include('../includes/disabled.inc.php'); ?>	      
</body>
</html>
