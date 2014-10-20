<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SpHub'</title>
<link rel="shortcut icon" href="../img/award.png" />
<link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="custom/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body id="page-top" class="index">
<!-- main code-->
<div class="sidebar-nav">
    <div class="well" style="width:300px; padding: 8px 0;">
		<ul class="nav nav-list"> 
		  <li class="nav-header">Admin Menu</li>        
		  <li><a href="index"><i class="icon-home"></i> Dashboard</a></li>
          <li><a href="#"><i class="icon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
          <li><a href="#"><i class="icon-comment"></i> Comments <span class="badge badge-info">10</span></a></li>
		  <li class="active"><a href="#"><i class="icon-user"></i> Members</a></li>
          <li class="divider"></li>
		  <li><a href="#"><i class="icon-comment"></i> Settings</a></li>
		  <li><a href="#"><i class="icon-share"></i> Logout</a></li>
		</ul>
	</div>
</div>



<!-- footer -->
  
<script  src="custom/js/jquery-1.11.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>


    <!-- Custom Theme JavaScript -->



</body>
</html>

<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>