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
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a href="#" class="navbar-brand pull-right "><?php echo $_SESSION["username"] ; ?></a></a>
              <li class="dropdown" >
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
           <span class="glyphicon glyphicon-cog " style="font-size:30px;"></span>
          </button>
           <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" >
            <li role="presentation"><a role="menuitem" tabindex="-1" href="edit_profile.php">Profile<span class="badge pull-right">4</span></a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Setting</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">LogOut</a></li>
          </ul>
        </li>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<header class=" navbar  navbar-default navbar-fixed-top navbar-collapse ">
   <div class="navbar-header page-scroll">
    
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-0">
                   <!-- <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>-->
                </button>
              
     </div>
     <div class=" collapse navbar-collapse navbar-header navbar-right  navHeaderCollapse">
    <ul class="nav nav-pills" id="navbar-collapse-0">
     <li><a href="#" class="navbar-brand  "><?php echo $_SESSION["username"] ; ?></a></li>
         <li class="dropdown" >
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
           <span class="glyphicon glyphicon-cog " style="font-size:30px;"></span>
          </button>
           <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" >
            <li role="presentation"><a role="menuitem" tabindex="-1" href="edit_profile.php">Profile<span class="badge pull-right">4</span></a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Setting</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">LogOut</a></li>
          </ul>
        </li>
     </ul>
     </div>

</header>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" style="margin-top:60px">
        <div class="container">
<!--

<div class="navbar navbar-inverse navbar-static-top navbar-collapse" style="margin-top:50px">
 <div  class="container"> -->
   <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">SPHub!</a>
            </div>
             <div class=" collapse navbar-collapse navHeaderCollapse" id="navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
         
                     <li class="hidden">
                                <a href="#page-top"></a>
                     </li>
                     <li class=" <?php if($menuid == 1) echo " active"; ?>"> 
                     <a href="index.php">Home <span class="badge "><span class="glyphicon glyphicon-home"></span></span></a>
                     </li>
                     
                     <li class="dropdown<?php if($menuid == 2) echo " active"; ?> ">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sport<b class="caret"></b></a>
                           <ul class="dropdown-menu">
                               <li><a href="cricket_home.php">Cricket<span class="badge pull-right">4</span></a></li>
                               <li><a href="#">Chess</a></li>
                               <li><a href="#">Football</a></li>
                           </ul>
                     </li>
                    <li class="<?php if($menuid == 3) echo " active"; ?> "><a href="#">HubStarPlayer</a></li>
                    
                    <li class="<?php if($menuid == 4) echo " active"; ?>"><a href="#developer">Developer</a></li>
                    
                     <li class=" <?php if($menuid == 5) echo " active"; ?>"><a href="#contact" data-toggle="modal" >Feedback</a></li>
                      <li><a href="#">About</a></li>
                     </ul>
             </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

 
<!--Feedback form -->
<div class="modal fade" id="contact">
  <div class="modal-dialog">
    <div class="modal-content">
     <form   action="feedback.php" method="post" >
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    
        <h4 class="modal-title">Help Us to improve</h4>
      </div>
     
      <div class="modal-body">
        
        <p>Write here&hellip;</p>
        <textarea rows="8" class="form-control" name="feedback_content"></textarea>
      </div>
      
         
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="feedback" value="Feedback" >Send</button>
        
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

