<?php 
             if(isset($_POST['submit'])){
                 $Vmkh2mepgxtb = $_POST['search'];
                 
                  $Vdorkgbkp1nw = "select `ID` from `sub` where `subcat` = '$Vmkh2mepgxtb'";
                     $Vsyo00juod4b = mysqli_query($Vrq3slealtta,$Vdorkgbkp1nw);
                     $Vj0uoceeboev = mysqli_fetch_array($Vsyo00juod4b);
                     $Vvuevnntrwqu = $Vj0uoceeboev['ID'];
                     
     $Vw0yw2abddqx = "select * from `workpost` where `expired` != 'Y' and `subID`='$Vvuevnntrwqu' order by `stamp` DESC ";
        $Vxz3lkthtnqc = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx);
        ?>
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form rec">
            <table>
            <tbody id='go'>
                <?php
        while($Vj2scvzcnmba = mysqli_fetch_array($Vxz3lkthtnqc)){
                    $Vkuo1dfkyu2j = $Vj2scvzcnmba['ID'];
                    
                    ?>
                 <tr><td style="min-width: 270px;"><?php echo $Vj2scvzcnmba['title']; ?></td><td><?php echo $Vj2scvzcnmba['diff'],"Ds"," ","Left"; ?></td>
             <?php
             echo"<td> <a href='details.php?cmd=details&id=$Vkuo1dfkyu2j'>","Details","</a></td></tr>";
             }
             ?>
        
          </tbody>
          </table>
          </form>
             
         <?php  }   
           
