<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');


            if(isset($_GET['cmd']))
             {
             $Vkuo1dfkyu2j = $_GET['id'];
            $V4tckdkecqzl = mysqli_query($Vrq3slealtta,"select * from `brands` where `ID`=$Vkuo1dfkyu2j");


            $Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl);
             }
           

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Delete Brand</title>
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
  <script src="../js/dpickscript.js" type="text/javascript"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
                       <?php
 
               if(isset($_POST['submit']))
               {
                  $Vkuo1dfkyu2j = $_POST['id'];
                 


                 $Vadnvtl31tt5 = "delete from `brands` where `ID`='$Vkuo1dfkyu2j'";

                 $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);

             
                 
                 $Vcf0orczi5ez = 'Brand deleted!';
       

                }


 ?>   
            <div class='grid_8'>
             <?php if(isset($_POST['submit']) && $V4tckdkecqzl) { echo "<p class='msg'>",$Vcf0orczi5ez,"</p>","\n";} ?>                
            <form action='' method ='POST' class="form">
            <table>
            <tr><td><input type='hidden' name='id' value= "<?php echo $Vj2scvzcnmba['ID']?>" maxlength='255' /></td></tr>
            <tr><td>Brand:</td><td><input type='text' name='brand' value="<?php echo @$Vj2scvzcnmba['brand']; ?>" maxlength='255' /></td></tr>
         
            <tr><td></td><td><input type='submit' name='submit' value= 'Delete' class="find" /></td></tr>
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