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
<body>

<header class=" navbar  navbar-default navbar-fixed-top navbar-collapse " style="margin-bottom:100px;">

<div class=" collapse navbar-collapse navHeaderCollapse ">
 <ul class="nav nav-pills navbar-nav navbar-right">
<a href="#" class="navbar-brand ">Name of User</a>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
</button>
 
<li class="dropdown text-success ">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
   <ul class="dropdown-menu">
       <li><a href="#">Profile<span class="badge pull-right">4</span></a></li>
        <li><a href="#" class="text-success">Setting</a></li>
         <li><a href="#">LogOut</a></li>
         </ul></li>

</div>


</header>


<div class="navbar navbar-inverse navbar-static-top navbar-collapse" style="margin-top:50px">
 <div  class="container">
  
   <a href="#" class="navbar-brand">SPHub!</a>


 <div class=" collapse navbar-collapse navHeaderCollapse">
 <ul class="nav navbar-nav navbar-right">
  <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <li class="active"> <a href="#">Home <span class="badge "><span class="glyphicon glyphicon-home"></span></span></a></li></li>
 
 <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sport<b class="caret"></b></a>
   <ul class="dropdown-menu">
       <li><a href="cricket_home.php">Cricket<span class="badge pull-right">4</span></a></li>
        <li><a href="#">Chess</a></li>
         <li><a href="#">Football</a></li>
         </ul></li>
<li><a href="#">HubStarPlayer</a></li>
<li><a href="#">Developer</a></li>
 <li><a href="#contact" data-toggle="modal" >Feedback</a></li>
  <li><a href="#">About</a></li>
 </ul>
 </div>
 </div></div><!-- navigation bar close -->
 
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
        <textarea rows="8" class="form-control" name="feedback"></textarea>
      </div>
      
         
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  >Send</button>
        
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
  


<!--Footer is here-->
<footer class="navbar navbar-default navbar-fixed-bottom " >
  <div class="container">
   <p class="navbar-text pull-left" style="height:inherit">ADBMS Project</p>
   <div class="navbar-text pull-right">
   <a href="#"><i class="fa fa-twitter fa-2x" style="color: #4099FF"></i></a>
   <a href="#" ><i class="fa fa-google-plus fa-2x "></i></a>
   <a href="#"><i class="fa fa-facebook fa-2x" style="color:#3b5998"></i></a>
    <a href="#"><i class="icon-thumbs-up icon-3x main-color"></i></a>
   </div>
   
  
   </div>
  </footer>
  
  
<script  src="../custom/js/jquery-1.11.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>

</body>
</html>