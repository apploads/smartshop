<?php 
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');



            if(isset($_GET['cmd']))
             {
             $Vkuo1dfkyu2j = $_GET['id'];
            $V4tckdkecqzl = mysqli_query($Vrq3slealtta,"select * from `product` where `ID`=$Vkuo1dfkyu2j");


            $Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl);
             }


 

               if(isset($_POST['submit']))
               {
                  $Vkuo1dfkyu2j = $_POST['id'];
                 $Vbnux1a45swf = $_POST['new'];
                 $Vget3du0qyi1 = $_POST['left'];
                 $Vmowi1fdcfga = $_POST['qty'];
                 $Vbnux1a45swf_qty = $Vmowi1fdcfga + $Vbnux1a45swf;
                 $V001baiv4gzl = $Vbnux1a45swf + $Vget3du0qyi1 ;
                 
                 $Vadnvtl31tt5 = "update `product` set `qty` = '$Vbnux1a45swf_qty',
                                                `left`='$V001baiv4gzl'
                                          
                                               where id='$Vkuo1dfkyu2j'";

                 $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);

                $Vcf0orczi5ez = 'Record Updated';

                
           
                
                }

       
                          
 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Current Stock</title>
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
            <div class='grid_8'>
             <?php if(isset($_POST['submit']) && $V4tckdkecqzl) { echo "<p class='msg'>",$Vcf0orczi5ez,"</p>","\n";} ?>                
            <form action='' method ='POST' class="form">
            <table>
            <tr><td><input type='hidden' name='id' value= "<?php echo $Vj2scvzcnmba['ID']?>" maxlength='255' /></td></tr>
            <tr><td><input type='hidden' name='qty' value= "<?php echo $Vj2scvzcnmba['qty']?>" maxlength='255' /></td></tr>
            <tr><td><p><label>Category:</label></p></td><td><input type='hidden' name='cat' class="input" value="<?php echo $Vj2scvzcnmba['category'] ?>" maxlength='255' /> <?php echo $Vj2scvzcnmba['category']; ?></td></tr>
             <tr><td>Product:</td><td><input type='hidden' name='prod' class="input" value="<?php echo $Vj2scvzcnmba['product'] ?>" maxlength='255' /><?php echo $Vj2scvzcnmba['product'] ?></td></tr>

             <tr><td>Spec:</td><td><input type='hidden' name='spec' class="input" value="<?php echo $Vj2scvzcnmba['spec'] ?>" maxlength='255' /><?php echo $Vj2scvzcnmba['spec'] ?></td></tr>
             <tr><td>Unit Price:</td><td><input type='hidden' name='unit' class="input" value="<?php echo $Vj2scvzcnmba['unitPrice'] ?>" maxlength='255' /><?php echo $Vj2scvzcnmba['unitPrice'] ?></td></tr>
             <tr><td>Qty:</td><td><input type='hidden' name='left' class="input" value="<?php echo $Vj2scvzcnmba['left'] ?>" maxlength='255' /><?php echo $Vj2scvzcnmba['left'] ?></td></tr>
             <tr><td>Add to Qty:</td><td><input type='text' name='new' class="input" value="" style='width: 38px;' /></td></tr>
             
             <tr><td><input type='submit' name='submit' value= 'UPDATE' class="find" /></td></tr>
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