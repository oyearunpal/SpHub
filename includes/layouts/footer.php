
 <footer class="navbar navbar-default navbar-fixed-bottom " >
  <div class="container">
   <p class="navbar-text pull-left" style="height:inherit">ADBMS Project,Copyright <?php echo date("Y"); ?></p>
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

<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>


