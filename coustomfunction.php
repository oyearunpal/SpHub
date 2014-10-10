
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php
$feed="cricket_news";
$result=find_all_data($feed);
while($subject = mysqli_fetch_assoc($result)){

	?>
	<ul class="  list-group ">
         
        
                         <li class=" list-group-item active"><a href="#10" data-toggle="tab">
          <h4 class="list-group-item-text " ><?php echo $subject['heading'];?></h4>
          <p class="list-group-item-text"><?php echo $subject['content']; ?></p> 
         </a></li>
         <?php } ?>