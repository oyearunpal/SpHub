<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php $menuid = 1; ?>
<link rel="shortcut icon" href="img/Spirit_medal_2.png" />
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
 
 
<?php include("includes/layouts/footer.php"); ?>
