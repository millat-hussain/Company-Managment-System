<!-- 

This Website Design And Development By MD.Millat Hussin 

All Link Socail Media;
=============================================
https://www.youtube.com/c/MHJBrothers
https://web.facebook.com/Developermillat/
https://twitter.com/FMillathussain
https://www.instagram.com/millat_hussain_/
https://github.com/millat-hussain
https://www.millat-hussain.github.io/me
https://www.linkedin.com/in/millat-hussain/
==============================================
 -->

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<?php 

if(!isset($_COOKIE["login"]))

    header("location:login.php"); 

 ?>


<?php 

include "config.php";
include "Database.php";
include "helper.php";

$db = new Database(); 
$help = new formet(); 



 ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Company Menagement System </title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
    <style type="text/css">
        .inputlevel{
            width: 100px;
        }
       input[type="submit"] {
    text-align: center;
    margin-top: 1rem;
    width: 161px;
    border: none;
    outline: none;
    padding: 0.7rem;
    text-transform: uppercase;
    background: #333;
    color: #fff;
    border-radius: 10px;
    cursor: pointer;
}
table.form input[type="submit"] {
    /* border: 1px solid #300a0a; */
    color: #444;
    cursor: pointer;
    font-size: 20px;
    padding: 2px 10px;
    color: #fff;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
    text-align: center;

}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    
				</div>
				<div class="floatleft middle">
				
					<h1 style="text-align: center;">Company Management System </h1>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <!-- <img src="img/img-profile.jpg" alt="Profile Pic" /> --></div>
            
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                        
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Add Customer</span></a> </li>
                <li class="ic-form-style"><a href="inbox.php"><span>Customer List</span></a></li>
				<li class="ic-typography"><a href="Billing.php"><span>Billing </span></a></li>
				<li class="ic-grid-tables"><a href="earn.php"><span>Earn</span></a></li>
                <li class="ic-charts"><a href="Expense.php"><span>Expense Report</span></a></li>
                <li class="ic-charts"><a href="Earning.php"><span>Earning Report</span></a></li>
                <li class="ic-charts"><a href="mwf.php"><span>Monthly wise Profit</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
    