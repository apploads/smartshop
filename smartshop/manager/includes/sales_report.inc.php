<?php
session_start();
 if(isset($_POST['sales']) && $_POST['user']!= 'All'){
  $Vmr1gkxecu50 = $_POST['from'];
  $Vcdfvs0p50vi = $_POST['to'];
  $Vbdpiq2isbfw = $_POST['user'];
  $_SESSION['user'] = $Vbdpiq2isbfw;
  $_SESSION['one'] = $Vmr1gkxecu50;
  $_SESSION['two'] = $Vcdfvs0p50vi;
  header("Location: sales_report.php");
}
 elseif(isset($_POST['sales']) && $_POST['user'] == 'All'){
  $Vmr1gkxecu50 = $_POST['from'];
  $Vcdfvs0p50vi = $_POST['to'];
  
  
  $_SESSION['one'] = $Vmr1gkxecu50;
  $_SESSION['two'] = $Vcdfvs0p50vi;
  header("Location: sales_all_report.php");
}

   $Vadnvtl31tt5 = "select `username` from `users`";
   $Vrqhxzlwt4wa =  mysqli_query($Vrq3slealtta,$Vadnvtl31tt5);
   while($Vj2scvzcnmba = mysqli_fetch_array($Vrqhxzlwt4wa)){
   $Vbdpiq2isbfws[] = $Vj2scvzcnmba['username'];}
?>
<form action="" method="POST" class="form">
<table style="position: relative;right: 10px">
<tr><td><label>Username</label></td></tr>
<tr><td><select name='user' class='select' style="width:155px;font-family: SourceSansPro-ExtraLight, sans-serif;">
<option selected=''>All</option>
<?php
foreach ($Vbdpiq2isbfws as $Vbdpiq2isbfw) {
    echo "<option>$Vbdpiq2isbfw</option>\n";
}
?> 
</select></td></tr>  
<tr><td><label>From</label></td><td><label>To</label></td></tr>
<tr><td><input type="text" class="date" name='from' style="width:155px" /></td>
    <td><input type="text" class="date" name='to' style="width:155px" /></td></tr>
<tr><td><button type="submit" name="sales" style="font-family: SourceSansPro-ExtraLight, sans-serif;font-size: 100%" class="find">Draw Sales</button></td></tr>

</table>
</form>    
