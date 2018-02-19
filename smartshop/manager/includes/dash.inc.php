<?php
$Vid1zt1p1a3q = basename($_SERVER['SCRIPT_NAME']);
$V02ok4p45s0i ="select `who` from `users` where `username` = '".$_SESSION['logname']."'";
$Vyul2hbql3pw = mysqli_query($Vrq3slealtta,$V02ok4p45s0i);
$Vrpg0jwivsn1 = mysqli_fetch_array($Vyul2hbql3pw);
$Vcwsfhsbmcmp = $Vrpg0jwivsn1['who'];
if($Vcwsfhsbmcmp != 'manager'){
    header('Location: ./../index.php');
}
?>  
<ul>
           
              <li><a href='txn_hist.php' <?php if ($Vid1zt1p1a3q =='txn_hist.php') {echo 'id="here"';} ?>>Txn History</a></li>           
              <li><a href='newcat.php' <?php if ($Vid1zt1p1a3q =='newcat.php') {echo 'id="here"';} ?>>Create Categories</a></li>
              <li><a href='manage.php' <?php if ($Vid1zt1p1a3q =='manage.php') {echo 'id="here"';} ?>>Manage Categories</a></li>
              <li><a href='brands.php' <?php if ($Vid1zt1p1a3q =='brands.php') {echo 'id="here"';} ?>>Create Brands</a></li>
              <li><a href='manage_brands.php' <?php if ($Vid1zt1p1a3q =='manage_brands.php') {echo 'id="here"';} ?>>Manage Brands</a></li>
              <li><a href='addstock.php' <?php if ($Vid1zt1p1a3q =='addstock.php') {echo 'id="here"';} ?>>Add Stock</a></li>
              <li><a href='current.php' <?php if ($Vid1zt1p1a3q =='current.php') {echo 'id="here"';} ?>>Current Stock</a></li>
              <li><a href='sell.php' <?php if ($Vid1zt1p1a3q =='sell.php') {echo 'id="here"';} ?>>Sell</a></li>
              <li><a href='doreceipt.php' <?php if ($Vid1zt1p1a3q =='doreceipt.php') {echo 'id="here"';} ?>>Print Receipt</a></li>
              <li><a href='deposit.php' <?php if ($Vid1zt1p1a3q =='deposit.php') {echo 'id="here"';} ?>>Book Deposits</a></li>
              <li><a href='dep_receipt.php' <?php if ($Vid1zt1p1a3q =='dep_receipt.php') {echo 'id="here"';} ?>>Deposit Receipt</a></li>
              <li><a href='expenses.php' <?php if ($Vid1zt1p1a3q =='expenses.php') {echo 'id="here"';} ?>>Book Expenses</a></li>
              <li><a href='reverse.php' <?php if ($Vid1zt1p1a3q =='reverse.php') {echo 'id="here"';} ?>>Reversals</a></li>
              <li><a href='reports.php' <?php if ($Vid1zt1p1a3q =='reports.php' || $Vid1zt1p1a3q =='sales_all_report.php') {echo 'id="here"';} ?>>Reports</a></li>
              <li><a href='vault_out.php' <?php if ($Vid1zt1p1a3q =='vault_out.php') {echo 'id="here"';} ?>>Vault Out</a></li>
              <li><a href='info.php' <?php if ($Vid1zt1p1a3q =='info.php') {echo 'id="here"';} ?>>Biz Info</a></li>
              <!--<li><a href='resetpass2.php' <?php 
         
              
          </ul>

