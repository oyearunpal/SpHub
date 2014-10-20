<?php include("includes/layouts/admin_header.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/db_connection.php"); ?>


 <div class="col-md-9 well">
            
    <!-- test1  
 <div class="container" id="admincricket">
	<div class="row">
		
      
        <div class="col-md-9"> -->
        <h4>SP cricket news</h4>
        <div class="table-responsive">
        
                
              <table id="mytable" class="table 	">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Heading</th>
                    <th>Content</th>
                     <th>Body</th>
                      <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    		<tbody >
    <?php 
	$query="SELECT * FROM `cricket_news_page` ,cricket_news where cnpid=id";
	$subject_set = mysqli_query($connection, $query);
	confirm_query($subject_set);
	while($subject = mysqli_fetch_assoc($subject_set)){
 ?>

                <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td class="info"><?php echo $subject["heading"]?></td>
                <td class="warning"><?php echo $subject["content"]?></td>
                <td class="danger"><?php echo $subject["body"]?></td>
                <td class="active"><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td class="success"><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                </tr>
    <?php }?> 
                
    </tbody>
       
</table>

    <div class="clearfix"></div>
        <ul class="pagination pull-right">
          <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
        </ul>
                    
            </div><!--close of table -responsive -->
       <!--test1 close     
        </div>
	</div>
</div>
-->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder=""></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
        </div>
    </div>
</div>


<?php include("includes/layouts/admin_footer.php"); ?>