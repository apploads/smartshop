<?php
session_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
       

   $Vadnvtl31tt5 = "select `category` from `classcategory`";
   $Vrqhxzlwt4wa =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
   while($Vj2scvzcnmba = mysqli_fetch_array($Vrqhxzlwt4wa)){
   $Vebchrfzrwi5[] = $Vj2scvzcnmba['category'];} 
    $Vsnmhzjzvnnu = count($Vebchrfzrwi5);
    
  
  if(isset($_POST['submit'])){

    $Vvz5siahip5j = $_POST['brand'];
    $Vpu103fwcafh = $_POST['pcat'];
    
    
  $Vzavhtfsqwe2 = count($Vvz5siahip5j);

for($Vvfjr3vkunyt=0;$Vvfjr3vkunyt<$Vzavhtfsqwe2;$Vvfjr3vkunyt++) {

     
        $Vw0yw2abddqx ="insert into `brands` set
                                    `brand` = '".mysqli_real_escape_string($Vrq3slealtta,$Vvz5siahip5j[$Vvfjr3vkunyt])."',
                                    `category` = '$Vpu103fwcafh'    
                                   
                                    ";
   if($Vvz5siahip5j[$Vvfjr3vkunyt] != ''){
           $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
   }
           
      $Vcf0orczi5ez = 'Brand(s) Created!';
    }
   
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Register Brands</title>
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
<form  action="" method="POST" class="form">
<ul>
    <p><label>Product Category</label></p>
<li>
<select name='pcat' class='select' style="width:205px;">
<option selected='<?php echo @$_POST['pcat']; ?>'><?php echo @$_POST['pcat']; ?></option>
<?php
foreach ($Vebchrfzrwi5 as $Vkxuku3x3cvv) {
    echo "<option>$Vkxuku3x3cvv</option>\n";
}
?> 
</select>
</li>
<p><label>No of fields</label></p>
<li>
    <input type="text" name="fields" value="<?php echo @$_POST['fields']; ?>" class="ent" />
    <input type="submit" name="go" value="Go" class="find" />
</li>



<?php
  if(isset($_POST['go'])){
      ?>
<p><label> Brand name(s)</label></p>
<?php
for($Vvfjr3vkunyt=1; $Vvfjr3vkunyt<=@$_POST['fields']; $Vvfjr3vkunyt++){ ?>

  <li><input type='text' name='brand[]' class="input" /></li>

 <?php  } ?>
 <li><input type="submit" name="submit" value="Create" class="find" /></li> 
<?php } ?>

</ul>
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
