<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php confirm_logged_in(); ?>

<?php //$layout_context = "admin"; ?>
<?php $menuid = 2; ?>
<link rel="shortcut icon" href="img/run.png" />
<?php include("includes/layouts/header.php"); ?>
  
 <?php 
 
 //active sport bar

 if (!isset($_GET["cnpid"])) 
	                   $cnpid=0;      
	                else
				  $cnpid=$_GET['cnpid'] ;
?>

 <div class="container">
  <div class="row">
  
  <div class="col-lg-3">
    
         <ul class="  list-group ">
         
     <?php

$news_set=find_all_data_desc("cricket_news","id");
while($subject = mysqli_fetch_assoc($news_set)){

	?>   
       
                         <li class=" list-group-item 
                         <?php if($cnpid == $subject["id"])
						 echo " active";
						 echo "\" >" ?>
                    
          <h4 class="list-group-item-text text-capitalize" ><?php echo $subject['heading'];?></h4>
        <a href="cricket_home.php?cnpid=<?php echo urlencode($subject["id"]); ?>">
         <p class="list-group-item-text "><?php echo $subject['content']; ?></p> 
         </a></li>
            <?php } ?>
          
  
     
    </div>
    
    
        <div class="col-lg-9">
          
        <div class="panel ">
                  <div class="panel-heading">
                  
                  <?php
				 
				  $page_set =  find_pages_for_cricket_news($cnpid); 
				
				  while($page = mysqli_fetch_assoc($page_set)){
                         
				  ?>

                  
                    <h1 class="panel-title">
					<p class="text-capitalize text-primary">
					<?php 
						$news_heading=find_cricket_news_by_id($cnpid);
					    echo $news_heading['heading'];?> </p> <small>posted on <?php echo $page['date'];?></small></h1>
                  </div>
            
                <!--Panel -->
                      <div class="panel-body">
                        <blockquote>
                          <p><?php echo $page['body'];?></p>
                        </blockquote>
                      </div>
                       <?php } ?>
      </div><!--close of panel-->  
    </div>


    
 
 </div><!--close of row-->
 </div><!--close of containter -->
     


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/bootstrap.js" ></script>
 <script>
        $(function () {
            $('.nav-tabs a:first').tab('show');
        });
    </script>
<?php include("includes/layouts/footer.php"); ?>
