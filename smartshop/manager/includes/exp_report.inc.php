<?php
session_start();
 if(isset($_POST['dep'])){
  $Vmr1gkxecu50 = $_POST['from'];
  $Vcdfvs0p50vi = $_POST['to'];
  $_SESSION['one'] = $Vmr1gkxecu50;
  $_SESSION['two'] = $Vcdfvs0p50vi;
  header("Location: http://zipp.com.ng/supermart/deposit_report.php");
} 
?>
<form  action="" method="POST" class="form">
<table style="position: relative;right: 10px">
<tr><td><label>From</label></td><td><label>To</label></td></tr>
<tr><td><input type="text" class="date" name='from' style="width:155px" /></td>
    <td><input type="text" class="date" name='to' style="width:155px" /></td></tr>
<tr><td><button type="submit" name="exp" style="font-family: 'calibri';font-size: 110%" class="find">Draw Deposits</button></td></tr>
</table>
</form>    
