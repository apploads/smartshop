<?php

    $V3lqowohgtdj = "select * from `product` where `category` = '".$_POST['cat']."' order by `category`";
    $Vlsg1hk50pgb = mysqli_query($Vrq3slealtta,$V3lqowohgtdj);
    ?>
<table class="table form">
    
<tr><th>Product</th><th>Spec</th><th>Qty</th><th>Price(N)</th></tr>
    <tbody id='go'>
    <?php   
    while($Vj2scvzcnmba = mysqli_fetch_array($Vlsg1hk50pgb)){ 
            $Vkuo1dfkyu2j = $Vj2scvzcnmba['ID'];
            
            ?>
<tr>
<td><input type = 'text' name = 'product[]' value='<?php echo $Vj2scvzcnmba['product']; ?>' style="width: 200px;" class="input" /></td>
<td><input type = 'text' name = 'spec[]' value='<?php echo $Vj2scvzcnmba['spec']; ?>' style="width: 160px;" class="input" /></td>
<td><input type = 'text' name = 'left[]' value='<?php echo $Vj2scvzcnmba['left']; ?>' style="width: 42px;" /></td>
<td><input type = 'text' name = 'unit[]' value='<?php echo $Vj2scvzcnmba['unitPrice']; ?>' style="width: 70px;" /></td>
<?php
    echo"<td><a href='edit.php?cmd=edit&id=$Vkuo1dfkyu2j' style='font-size:0.9em;'>","Edit","</a>
            <a href='editqty.php?cmd=edit&id=$Vkuo1dfkyu2j' style='font-size:0.9em;'>","Update","</a>
             <a href='delete.php?cmd=del&id=$Vkuo1dfkyu2j' style='font-size:0.9em;'>","Delete","</a></td>"
  ?>
</tr>

<?php } ?>
</tbody>
</table>
