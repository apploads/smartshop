<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
       
     

$V3luyhihg0ps= date('Y-m-d h:m:s');

$V0h3f0nll202 = 0;
$Vrbxrcwc101g = 0;
$Vmsdat4ldkfx = 0;
$Vb4a3w044p1z = 0;
$Vget3du0qyi1 = 0;
$V5wxaz2gs3wg = 0;
$Vbw3lebinreq = substr(number_format(time() * rand(),0,'',''),0,5);


   $Vadnvtl31tt5 = "select `category` from `classcategory` order by `category`";
   $Vrqhxzlwt4wa =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
   while($Vj2scvzcnmba = mysqli_fetch_array($Vrqhxzlwt4wa)){
   $Vebchrfzrwi5[] = $Vj2scvzcnmba['category'];}
   if(!$Vrqhxzlwt4wa)echo mysqli_error($Vrq3slealtta);


   $Vadnvtl31tt52 = "select distinct * from `product` order by `product`";
   $Vrqhxzlwt4wa2 =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt52);
   while($Vj2scvzcnmba2 = mysqli_fetch_array($Vrqhxzlwt4wa2)){
   $Veze2k1dhdfb[] = $Vj2scvzcnmba2['product'];
    $Vppan5tyozja[] = $Vj2scvzcnmba2['spec'];
     $Vj4tyb5zfyzf[] = $Vj2scvzcnmba2['unitPrice'];
   }
 
 include('includes/sell.inc.php');   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sell</title>
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
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="../js/fvalidscript.js"></script>
  <script type="text/javascript" src="../js/paginator.js"></script>
  
	<script type="text/javascript">
$(document).ready(function() {    
 
  $('tbody tr').hover( 
    function(){    
      $(this).find('td').addClass('hover');    
    },  
    function(){    
      $(this).find('td').removeClass('hover');    
    } 
  );    
 
  $('tbody tr.details').click(function(){    
    $('table.listing').find('tbody tr.details').hide(); 
    $(this).show();    
  });    
}); 
</script>



</head>
<body>
  <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
      <div class='grid_8'>

<?php if(isset($_POST['sell']) && $V4tckdkecqzl) { echo "<p class='msg'>",$Vcf0orczi5ez,"</p>","\n";} ?>            
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="form">
 <table>

<tr><td>Txn. ID</td><td></td></tr>  
<tr><td class="txn"><input type="text" name="ticket" value='<?php echo $_POST['ticket']; ?>' class="ent" /></td></tr>

<tr><td><label>Customer's Name</label></td><td><label>Customer's Phone</label></td></tr> 
<tr><td><input type="text" name="cname" value='<?php echo $_POST['cname']; ?>' class="ent" /></td><td><input type="text" name="cphone" value="<?php echo $_POST['cphone']; ?>" class="ent" /></td></tr>

</table>
    
<br />
<ul style="margin-left:1px;">
    <li><label>Product Category</label></li>
<li> 
<select name='pcat' class="select">
   
 <option selected='<?php echo @$_POST['pcat']; ?>'><?php echo @$_POST['pcat']; ?></option>
     <?php 
foreach ($Vebchrfzrwi5 as $Vkxuku3x3cvv) {
    echo "<option>$Vkxuku3x3cvv</option>\n";
}
?>
    </select>
<button type="submit" name="go" class="find">Load</button></li>

 
<table class="listing sell">

    <tbody id="go">
<?php

     if(isset($_POST['go'])){ ?>
<br />            
<li class="h" style="width: 200px;">Product</li><li class="h" style="width: 200px;">Spec</li><li class="h" style="width: 35px;">Left</li><li class="h" style="width: 64px;">Price</li><li class="h" style="width: 31px;">QTY</li><li class="h" style="width: 20px;">Disc</li>
   
         <?php 
    $V3lqowohgtdj = "select * from `product` where `category` = '".$_POST['pcat']."' and `auth` ='Y' order by `category`";
    $Vlsg1hk50pgb = mysqli_query($Vrq3slealtta,$V3lqowohgtdj);
        while($Vj2scvzcnmba = mysqli_fetch_array($Vlsg1hk50pgb)){

        ?>

<tr class="details">
<td style="border: 1px solid #f8fafb;width: 200px"><input type = 'hidden' name = 'product[]' value='<?php echo $Vj2scvzcnmba['product']; ?>' /><?php echo $Vj2scvzcnmba['product']; ?></td>
<td style="border: 1px solid #f8fafb;width: 200px"><input type = 'hidden' name = 'spec[]' value='<?php echo $Vj2scvzcnmba['spec']; ?>' /><?php echo $Vj2scvzcnmba['spec']; ?></td>
<td style="border: 1px solid #f8fafb;width: 35px"><input type = 'hidden' name = 'left[]' value='<?php echo $Vj2scvzcnmba['left']; ?>' /><?php echo $Vj2scvzcnmba['left']; ?></td>
<td style="border: 1px solid #f8fafb;width: 64px"><input type = 'hidden' name = 'unit[]' value='<?php echo $Vj2scvzcnmba['unitPrice']; ?>' /><?php echo $Vj2scvzcnmba['unitPrice']; ?></td>
<td><input type = 'text' name = 'buy[]' value='' style="width:31px;" /></td>
<td><input type = 'text' name = 'valu[]' value='0' style="width:40px;" /></td>
<td><input type = 'hidden' name = 'pv[]' value='<?php echo $Vj2scvzcnmba['pv']; ?>' /></td>
<td><input type = 'hidden' name = 'id[]' value='<?php echo $Vj2scvzcnmba['ID']; ?>' /></td>

</tr>

<?php }

}
?>

</tbody>
</table>

<li><button type='submit' name='sell' class="find">Sell</button></li> 
 </ul>
</form>
          
      </div><!--grid_8-->
      
        <div class='grid_2' style="min-height:900px;">
         <?php ?>
                <div class="clear"></div>
          <div class="user acctname"> <p><img src="../img/avatar.jpg" /> <?php echo $_SESSION['logname']; ?> | <a href='../logout.php?logout=1'>Log out</a></p></div>
      
      </div>
      
</div>
<?php include('../includes/disabled.inc.php'); ?>
    
<script type='text/javascript'>
$(document).ready(function() {
$('#go').pagination();

 });
</script>
</body>
</html>

 
