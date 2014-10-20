<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

 <span class="text-danger">
	<?php echo message();?>
    <?php $errors = errors(); ?>
    <?php echo form_errors($errors); ?>
 </span>
        	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/Spirit_medal_2.png" />

<title>SpHub'</title>
<link rel="shortcut icon" href="../img/award.png" />
<link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="custom/css/style.css" rel="stylesheet" type="text/css" />
<!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
<style>

header {
	text-align: center;
	color:#BFAEF5;
	background-attachment: scroll;
	background-image: url(img/intro.jpg);
	background-position: center center;
	background-repeat: none;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
	-o-background-size: cover;
}

header .intro-text {
    padding-top: 100px;
    padding-bottom: 50px;
}

header .intro-text .intro-lead-in {
    margin-bottom: 25px;
    font-family: "Droid Serif","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 22px;
    font-style: italic;
    line-height: 22px;
}

header .intro-text .intro-heading {
    margin-bottom: 25px;
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 50px;
    font-weight: 700;
    line-height: 50px;
}

@media(min-width:768px) {
    header .intro-text {
	padding-top: 50px;
	padding-bottom: 300px;
    }

    header .intro-text .intro-lead-in {
	margin-bottom: 180px;
	font-family: "Droid Serif","Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size: 40px;
	font-style: italic;
	line-height: 40px;
    }

    header .intro-text .intro-heading {
	margin-bottom: 180px;
	text-transform: uppercase;
	font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size: 75px;
	font-weight: 700;
	line-height: 75px;
	opacity: 1;
    }
}

section {
    padding: 100px 0;
}

section h2.section-heading {
    margin-top: 0;
    margin-bottom: 15px;
    font-size: 40px;
}

section h3.section-subheading {
    margin-bottom: 75px;
    text-transform: none;
    font-family: "Droid Serif","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
}
.navbar {
	margin-bottom:0px;}
	.navbar-inverse {
    border-color: transparent;
    background-color: #222;
}
.navbar-inverse .navbar-brand {
    font-family: "Kaushan Script","Helvetica Neue",Helvetica,Arial,cursive;
    color: #fed136;
}

.team-member {
    margin-bottom: 50px;
    text-align: center;
}

.team-member img {
    margin: 0 auto;
    border: 7px solid #fff;
}

.team-member h4 {
    margin-top: 25px;
    margin-bottom: 0;
    text-transform: none;
}

.team-member p {
    margin-top: 0;
}


</style>
</head>
<body >
<div class="navbar navbar-inverse navbar-static-top navbar-collapse">
 <div  class="container">
 <div class=" collapse navbar-collapse navHeaderCollapse">
 <a href="#" class="navbar-brand">SPHub!</a>
 <ul class="nav navbar-nav navbar-right">
  
   
	<li><a href="#developer">Developer</a></li>
 
  <li><a href="#">About</a></li>
 </ul>
 </div>
 </div>
</div>




<!--Whole form is here-->
<!--<button class="btn btn-default pull-right navbar-btn  " data-toggle="modal" data-target="#loginModal">Login</button>-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal" action="login.php">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <div class="col-md-3">
                        <a class="btn"  data-toggle="modal" data-target="#signUpModal">Not yet Register</a>
                  
                    </div>
                        <div class="col-md-5 col-md-offset-3">
                        <button type="submit" class="btn btn-default" value="Submit" name="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--test1-->
<!--<button class="btn btn-default pull-right navbar-btn  " data-toggle="modal" data-target="#signUpModal">SignUp!   </button>-->
 <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                   <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                    <h4 class="modal-title">SignUp!</h4>
                </div>

            <div class="modal-body">
             <form role="form" action="sign_up.php" id="sign_upForm" method="post" >
             <div class="row">
              <div class="col-md-6">
        
              <div class="form-group">
                <label for="name" class=" control-label">Your Name</label>
                <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-user" data-toggle="tooltip" data-placement="top" title="Password must be of six characters"></span></span>
                <input type="text" class="form-control" id="name" placeholder="Your Full Name"  required="required" name="name" >
                </div>
               </div>
              
              <div class="form-group">
                <label for="Email1" class=" control-label">Email address</label>
                <input type="email" class="form-control" id="Email1" name="email" required placeholder="Enter email">
              </div>
              

              <div class="form-group">
               <label for="Password1" class="control-label">Password</label>
                  <div class="input-group">
                       <span class="input-group-addon"><span class="glyphicon glyphicon-lock" data-toggle="tooltip" data-placement="top" title="Password must be of six characters"></span></span>
                     
                      <input type="password" class="form-control" id="Password1" placeholder="Password" required name="password">
                  </div>
               </div>
                
          </div><!--close of col-md-6 -->
        <div class="col-md-6">
        <div class="form-group">
              <label for="Username1" class=" control-label">Username</label>
              <input type="text" class="form-control" id="username1"  required="required" placeholder="Username" name="username">
        </div>
        <div class="row">
              <div class="col-md-6">     
             <div class="form-group">
                      <label for="year" class=" control-label">Year</label>
                      <select class="form-control " name="year"  id="year" >
                      <option value="First year">FE</option>
                      <option value="Second year">SE</option>
                      <option value="Third year">TE</option>
                      <option value="Fourth Year">BE</option>
                      </select>
                   </div>
            </div>
                <div class="col-md-6">   
                  <div class="form-group">
                      <label for="branch" class=" control-label">Branch</label>
                      <select class="form-control " name="branch"  id="branch">
                      <option value="IT">IT</option>
                      <option value="COMPS">COMPS</option>
                      <option value="EXTC">EXTC</option>
                      <option value="ETRX">ETRX</option>
                      </select>
                   </div>
            </div>
            </div>
                 <div class="form-group">
                   <label for="sex" class="control-label">Gender</label>
                      <select class="form-control" name="gender"  id="sex" >
                      <option>Male</option>
                      <option>FEMALE</option>
                      </select>
            
                 </div>
        </div>
     </div>
     <div class="modal-footer">
      <button type="submit" class="btn btn-info " name="submit" value="Submit">Submit  </button>
      <button  type="reset" class="btn btn-default ">reset</button>
      </div>
    </form><!--End of test-->
  </div></div></div></div>
</div>
    
<!-- closing of form-->
  
 <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To SpHub!</div>
                <div class="intro-heading">Connecting to all Sptian</div>
               
                <span class="btn  btn-success  " data-toggle="modal" data-target="#loginModal" > 
<h1 class="text-nowrap"  >Join Us</h1></span>
            </div>
        </div>
    </header>
</section>



<!--footer is here-->
<footer class="navbar navbar-default navbar-fixed-bottom " style="margin-top:100px">
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
  
  
<script  src="custom/js/jquery-1.11.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>

</body>
</html>
<?php include("includes/layouts/footer.php"); ?>
  


