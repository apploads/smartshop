<?php
session_start();
ob_start();
include('../includes/cnx.php');
        
 
       include('../includes/hijack_sess.inc.php');

       
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Reports</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<!-- Link CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/12c.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/ui-lightness/jquery-ui-1.7.3.custom.css" />
<link rel="stylesheet" href="../css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />

  <!-- Link js -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="../js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery-ui-1.7.3.custom.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/tabscript.js" type="text/javascript" charset="utf-8"></script>
 <script src="../js/dpickscript.js" type="text/javascript"></script>
 <style type="text/css">
 
.ui-tabs{
    padding: 0;
    font-size: 0.9em;
    font-family: SourceSansPro-ExtraLight, sans-serif;
    
}
.grid_8 .ui-widget-content{
    background: none;
    border: none;
    font-family: 'lucida grande';
    font-family: SourceSansPro-ExtraLight, sans-serif;
   
}
.grid_8 .ui-widget-header{
    background: none;
    border-left: none;
    border-right: none;
    border-top:none;
    font-family: 'lucida grande', arial;  
    font-family: SourceSansPro-ExtraLight, sans-serif;
}


.ui-tabs-nav{
    border-radius: 0;
}
 </style>
 
</head>
<body>
  <div id="container">

     
      <div class='grid_2 dash'>
<?php include('includes/dash.inc.php'); ?>
      </div>
      <div class='grid_8'>
                 <div id='info' class="ws">
        <ul>
          <li><a href="#sales">Sales Report</a></li>
          <!--<li><a href="#expenses">Expenses</a></li>-->
          <li><a href="#deposits">Deposits</a></li>
         
        </ul>
        <div id="sales">
        <?php include('includes/sales_report.inc.php'); ?>
        </div>
           
          
        <div id="deposits">
        <?php include('includes/dep_report.inc.php'); ?>
           
          </div>
       </div>
      </div>
      <div class='grid_2'>
                 <div class='grid_2' style="min-height:900px;">
          <?php ?>
                <div class="clear"></div>
          <div class="user acctname"> <p><img src="../img/avatar.jpg" /> <?php echo $_SESSION['logname']; ?> | <a href='../logout.php?logout=1'>Log out</a></p></div>
      
      </div>
      
      </div>
        
   </div><!--container-->	
<?php include('../includes/disabled.inc.php'); ?>		
</body>
</html>
