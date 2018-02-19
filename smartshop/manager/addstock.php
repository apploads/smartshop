<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');


   $Vadnvtl31tt5 = "select `category` from `classcategory`";
   $Vrqhxzlwt4wa =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
   while($Vj2scvzcnmba = mysqli_fetch_array($Vrqhxzlwt4wa)){
   $Vebchrfzrwi5[] = $Vj2scvzcnmba['category'];} 
    $Vsnmhzjzvnnu = count($Vebchrfzrwi5);
    

   $Vs3pbzt0t0ya = "select * from `brands` where `category` = '".$_POST['pcat']."'";
   $Vhq1p5w5mdip =  mysqli_query($Vrq3slealtta,$Vs3pbzt0t0ya);
   while($V02x5eiflhml = mysqli_fetch_array($Vhq1p5w5mdip)){
   $Vddswznkdvn0[] = $V02x5eiflhml['brand'];} 
        


 

 
  
  if(isset($_POST['submit'])){
    $Vzmhfqn4ffz0 = $_POST['cat'];
    $Veze2k1dhdfb = $_POST['product'];
    $V0n5onapye4x = $_POST['spec'];
    $Vyku0h1kkwsj = $_POST['unit'];
    $Vmowi1fdcfga = $_POST['qty'];
    
    

 
    $Vdorkgbkp1nw = "select `ID` from `classcategory` where `category` = '".$_POST['pcat']."' ";
    $Vwlflkv5yowj = mysqli_query($Vrq3slealtta,$Vdorkgbkp1nw);
    $Vj0uoceeboev = mysqli_fetch_array($Vwlflkv5yowj);
    $Voy5r1x5xkdh = $Vj0uoceeboev['ID'];
    
  $Vzavhtfsqwe2 = count($Vzmhfqn4ffz0);

for($Vvfjr3vkunyt=0;$Vvfjr3vkunyt<$Vzavhtfsqwe2;$Vvfjr3vkunyt++) {

        $Vw0yw2abddqx ="insert into `product` set `category` = ('".$Vzmhfqn4ffz0[$Vvfjr3vkunyt]."'),
                                     `catID` = '$Voy5r1x5xkdh',
                                    `product` = '". $Veze2k1dhdfb[$Vvfjr3vkunyt]."',
                                    `spec` = '". mysqli_real_escape_string($Vrq3slealtta,$V0n5onapye4x[$Vvfjr3vkunyt])."',
                                  
                                    `unitPrice` = '". $Vyku0h1kkwsj[$Vvfjr3vkunyt]."',
                                    `left` = '". $Vmowi1fdcfga[$Vvfjr3vkunyt]."',
                                    `qty` = '". $Vmowi1fdcfga[$Vvfjr3vkunyt]."',
                                     `user` = '". $_SESSION['logname']."',  
                                     `auth` = 'Y' 
                                    ";

           $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);

     }
$Vcf0orczi5ez ='Upload Successful!';
   
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add Stock</title>
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
<table>
<p><label>Product Category</label></p>
<tr><td>
<select name='pcat' class='select' style="width:205px;">
<option selected='<?php echo @$_POST['pcat']; ?>'><?php echo @$_POST['pcat']; ?></option>
<?php
foreach ($Vebchrfzrwi5 as $Vkxuku3x3cvv) {
    echo "<option>$Vkxuku3x3cvv</option>\n";
}
?> 
</select>
</td></tr>
<tr><td><p><label>No of Fields</label></p></td></tr>



<tr><td><input type="text" name="fields" value="<?php echo @$_POST['fields']; ?>" /><button type="submit" name="go" class="find">Go</button></td></tr>



<?php

  if(isset($_POST['go'])){ ?>

<tr><td>Product / Brand</td><td>Spec (color or size f.example)</td><td>Unit Price</td><td>QTY</td></tr>
<?php
for($Vvfjr3vkunyt=1; $Vvfjr3vkunyt<=count(@cats); $Vvfjr3vkunyt++){
     for($Vkr2tpewii4o=1; $Vkr2tpewii4o<=@$_POST['fields']; $Vkr2tpewii4o++){ ?>

  <tr><td>
<select name='product[]' class='select' style="width:205px;">
<option selected='<?php echo @$_POST['product']; ?>'></option>
<?php
foreach ($Vddswznkdvn0 as $Vvz5siahip5j) {
    echo "<option>$Vvz5siahip5j</option>\n";
}
?> 
</select>
      </td>
      <td><input type='text' name='spec[]' class="input" /></td>
     
      <td><input type='text' name='unit[]' size="7" /></td>
      <td><input type='text' name='qty[]' size="4" /></td>
      <td><input type='hidden' name='cat[]' value="<?php echo $_POST['pcat']; ?>" /></td></tr>
 <?php  }
   }
 ?>
<tr><td><button type="submit" id="submit" name="submit" class="find">Upload</button></td></tr>
<?php } ?>

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
