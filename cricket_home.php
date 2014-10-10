<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php //confirm_logged_in(); ?>

//<?php $layout_context = "admin"; ?>
<?php include("includes/layouts/header.php"); ?>
 
 <div class="container">
  <div class="row">
        <div class="col-lg-9">
          <?php /* <div class="tab-content">
                 <div class="tab-pane fade active in" id="10">
             <div class="panel "  >
                  <div class="panel-heading">
                 
                    <h3 class="panel-title">Headline   <small>posted on 23sep</small></h3>
                  </div>
            
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>
                
                  <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                            <div class="item active">
                              <img  src="img/10649707_777140952331421_4110345323726995801_n.jpg" alt="Ganesha">
                              <div class="carousel-caption">
                                Ganesh
                              </div>
                            </div>
                            <div class="item">
                              <img  src="img/IPL 4.jpg" alt="...">
                              <div class="carousel-caption">
                                ...
                              </div>
                            </div>
                        ...
                      </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div><!--close of carousel-example-generic-->
            
                <!--Panel -->
                      <div class="panel-body">
                        <!-- list navigation for tabs -->
                      
                      <!-- text for each callout -->
                      </div><!--close of panel-body-->
                    
        </div><!--close of panel-->
          </div>  
           <div class="tab-pane fade" id="11"> */ ?>
        <div class="panel ">
                  <div class="panel-heading">
                    <h3 class="panel-title">Headline   <small>posted on 23sep</small></h3>
                  </div>
            <?php /*images
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>
                
                  <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                            <div class="item active">
                              <img  src="img/10649707_777140952331421_4110345323726995801_n.jpg" alt="Ganesha">
                              <div class="carousel-caption">
                                Ganesh
                              </div>
                            </div>
                            <div class="item">
                              <img  src="img/IPL 4.jpg" alt="...">
                              <div class="carousel-caption">
                                ...
                              </div>
                            </div>
                        ...
                      </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div><!--close of carousel-example-generic-->
            *///close of images ?>
                <!--Panel -->
                      <div class="panel-body">
                        This is how we won this match two times
                     
                      </div>
                    <div class="panel-body">
                        This is how we won this match two times
                     
                      </div>
      </div><!--close of panel-->
       <?php /*   </div>
        </div> */ ?>
    </div>

    <div class="col-lg-3">
    
         <ul class="  list-group ">
         
         <?php
$feed="cricket_news";
$result=find_all_data($feed);
while($subject = mysqli_fetch_assoc($result)){

	?>
        
                         <li class=" list-group-item ">
          <h4 class="list-group-item-text " ><?php echo $subject['heading'];?></h4>
         <a href="#10" data-toggle="tab"> <p class="list-group-item-text"><?php echo $subject['content']; ?></p> 
         </a></li>
            <?php } ?>
            <!--
                    <li class=" list-group-item"><a href="#11" data-toggle="tab">
          <h4 class="list-group-item-text"> India Vs England </h4>
          <p class="list-group-item-text">#EngvInd, 4th ODI: Root, Morgan doing a solid rebuilding job. ENG 95/3 (27ov) Root 33*, Morgan 32*. Stand: 72*. Live: http://read.ht/i4S  </p> 
          </a></li>
                    <li class=" list-group-item"><a href="#12" data-toggle="tab">
          <h4 class="list-group-item-text"> India Vs England </h4>
          <p class="list-group-item-text">#EngvInd, 4th ODI: Root, Morgan doing a solid rebuilding job. ENG 95/3 (27ov) Root 33*, Morgan 32*. Stand: 72*. Live: http://read.ht/i4S  </p> 
          </a></li>
                    <li class=" list-group-item"><a href="#13" data-toggle="tab">
          <h4 class="list-group-item-text"> India Vs England </h4>
          <p class="list-group-item-text">#EngvInd, 4th ODI: Root, Morgan doing a solid rebuilding job. ENG 95/3 (27ov) Root 33*, Morgan 32*. Stand: 72*. Live: http://read.ht/i4S  </p> 
     
             </a></li>-->
             </ul>
     
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
