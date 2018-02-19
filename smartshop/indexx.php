<?php
session_start();
include('cnx.php');
        


## we have a user on browser! + router
if(@$_SESSION['logname']){
   $Vqvbp0dwfbp4 = "select `who` from `users` where `username` = '".$_SESSION['logname']."'"; 
   $Vbckwrx4egbs = mysqli_query($Vrq3slealtta,$Vqvbp0dwfbp4);
   $V5zxspjzwfsd = mysqli_fetch_array($Vbckwrx4egbs);
   $Vmxzolwkuwxj = $V5zxspjzwfsd['who'];
   $_SESSION['iwho'] = $Vmxzolwkuwxj;
   
   header("Location: $Vmxzolwkuwxj/index.php"); 
}##   
  
    
   if(isset($_POST['submit']))
    {  
       $Vw0yw2abddqx = "select `username` from `users` where `username`='".$_POST['user']."' ";
       $V4tckdkecqzl = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx) or die("Couldn't execute query");
       $Vtjwixv2k3ey = mysqli_num_rows($V4tckdkecqzl);
       if($Vtjwixv2k3ey == 1)
       {
         $Vw0yw2abddqx="select * from users where username = '".$_POST['user']."' AND password1 = md5('".$_POST['pass']."') AND password2 = md5('".$_POST['pass']."')";
         $V4tckdkecqzl2 = mysqli_query($Vrq3slealtta,$Vw0yw2abddqx) or die("Couldn't execute query 2.");
         $Vtjwixv2k3ey2 = mysqli_num_rows($V4tckdkecqzl2);
         $Vj2scvzcnmba = mysqli_fetch_array($V4tckdkecqzl2);
         $Vlihrkakveqv = $Vj2scvzcnmba['who'];
         $Vyc0v55r21l0 = $Vj2scvzcnmba['address'];
         $Vez0prxvi52h = $Vj2scvzcnmba['org'];
				
         if($Vtjwixv2k3ey2 > 0)
         {
          $_SESSION['auth']='yes';
          $Vvljny0lgsej = $_POST['user'];
          $_SESSION['logname']= $Vvljny0lgsej;
          $_SESSION['address']= $Vyc0v55r21l0;
          $_SESSION['org']= $Vez0prxvi52h;
          $Vc2vdu3wdma2 = $_POST['pass'];
          $_SESSION['pass']= @$Vc2vdu3wdma2;
       
           
										 

            header("Location: $Vlihrkakveqv/index.php");

         
         }
         else 
         {
          
         unset($_POST['submit']);
         $Vk32ft33wako = "Username exists, but password is incorrect!";
         

         }
        }
         elseif($Vtjwixv2k3ey==0)
         {
        
         unset($_POST['submit']);
         $Vk32ft33wako = "The Username entered does not exist!" ;
         
         }
       }
       
       
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Index</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<link rel='stylesheet' media="screen" type='text/css' href='css/fvalidform.css' charset='utf-8'/> 

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/jquery.validate.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/fvalidscript.js" type="text/javascript" charset="utf-8"></script>
 
 
</head>
<body class="hm">
  <div id="container">

     <div class="grid_12"></div>
     
      <div class="grid_3"></div>
      <div class='grid_6'>

         <!--<img src="img/logo.png" alt="#" />--> 
          
      </div>
      <div class="grid_3"></div>
      <div class="clear"></div>
     
     
      <div class="grid_3"></div>
      <div class='grid_6'>
        
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form hm_form">
                            <table>
                                <tr><td><?php echo "<p class='err'>",@$Vk32ft33wako,"</p>","\n";  ?></td></tr>
                                <tr><td><label class="cl">Username:</label></td></tr>
                                <tr><td><input type='text' name='user' style='height:24px;width:205px;' /></td></tr>
                                <tr><td><label class="cl">Password:</label></td></tr>
                                <tr><td><input type='password' name='pass' style='height:24px;width:205px;' /></td></tr>
                                <tr><td><button type='submit' name='submit' class="find">Enter</button></td></tr>
                                
                            </table>
                        </form> 
                      
      </div>
      <div class="grid_3"></div><div class="clear"></div>
      
      

       
 <div class="grid_3"></div>      
      
<div class="grid_6 footer hm_form">
            <!--<div style="font-size: 0.8em;color:#1a5252;">
         Copyright &copy; 2012 Akinlola Departmental Stores
         </div>-->
    
</div>
 <div class="grid_3"></div>

              
   </div><!--container-->	
<?php include('includes/disabled.inc.php'); ?>	
</body>
</html>
