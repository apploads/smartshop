<?php 
session_start();

include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');
   

   $Vadnvtl31tt5 = "select `category` from `classcategory` order by `category`";
   $Vrqhxzlwt4wa =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
   while($Vj2scvzcnmba = mysqli_fetch_array($Vrqhxzlwt4wa)){
   $Vebchrfzrwi5[] = $Vj2scvzcnmba['category'];}     


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

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/dpickscript.js" type="text/javascript"></script>
  <script type="text/javascript" src="../js/paginator.js"></script>
 
 
</head>
<body>
      <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
            <div class='grid_8'>
                            
<form action='' method='post' class="form">
<table>

<p><label>Enter Category</label></p>
<tr><td>
   <select name='cat' class="select">
   <option selected='<?php echo @$_POST['cat']; ?>'><?php echo @$_POST['cat']; ?></option>
<?php   
foreach ($Vebchrfzrwi5 as $Vkxuku3x3cvv) {
    echo "<option>$Vkxuku3x3cvv</option>\n";
}

?>
   </select>
   </td><td><button type='submit' name='go' class="find">Go</button></td></tr>

</table>
</form>                         
<?php if(isset($_POST['go'])){
    
   include('includes/current_stock.inc.php'); 
} ?>                         
                            
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
$('#go').pagination();

 });
</script>
</body>
</html>               