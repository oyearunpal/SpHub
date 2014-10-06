
//<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
//<?php confirm_logged_in(); ?>

//<?php $layout_context = "admin"; ?>
<?php include("includes/layouts/header.php"); ?>

 <div class="container">
  <div class="jumbotron text-center">
   <h1> Home</h1>
   <p>This is official SP's Sport Club.

         You will get live update of all sports event.

        Welcome in SP'Club
    </p>
         <a class="btn btn-default">Watch Now!</a>
         <a class="btn btn-info">Tweet it!</a>
</div>
<!--Feedback form -->
<div class="modal fade" id="contact">
  <div class="modal-dialog">
    <div class="modal-content">
     <form action="php/feedback.php" method="post" >
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
  

<div class="container-fluid">
 <div class="row">
   <div class=" col-md-4">
   <h3><a href="#">Headlines</a></h3>
   <p>This will include Latest trend ongoing in Sp</p>
   <a href="#" class="btn btn-default">Read More</a>
  </div>
  
   <div class=" col-md-4">
   <h3><a href="#">Tournament Results</a></h3>
   <p>This will include recent tournament match result</p>
   <a href="#" class="btn btn-default">Read More</a>
  </div>
   
   <div class=" col-md-4">
   <h3><a href="#">Participate for</a></h3>
   <p>Thhis will show list of ongoing event ,So user can participate online</p>
   <a href="#" class="btn btn-default">Read More</a>
  </div>
</div>
</div>
 
 <div class="navbar navbar-default navbar-fixed-bottom ">
  <div class="container">
   <p class="navbar-text pull-left">Site Built By Arunkumar Pal</p>
   <div class="navbar-text pull-right">
   <a href="#"><i class="fa fa-twitter fa-2x" style="color: #4099FF"></i></a>
   <a href="#" ><i class="fa fa-google-plus fa-2x "></i></a>
   <a href="#"><i class="fa fa-facebook fa-2x" style="color:#3b5998"></i></a>
    <a href="#"><i class="icon-thumbs-up icon-3x main-color"></i></a>
   </div>
   
  
   </div>
  </div> 
<?php include("includes/layouts/footer.php"); ?>
