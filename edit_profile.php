<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php $menuid = 1; ?>
<?php include("includes/layouts/header.php"); ?>
<?php $username= $_SESSION["username"];
$user=find_student_profile_by_username($username);?>

 <div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Profile :</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
               
                <div class=" col-md-9 col-lg-9 "> 
                    <form role="form" action="edit_profile.php" id="edit_profileForm" method="post" >
                   <div class="form-group">
                        <label for="name" class=" control-label">Your Name</label>
                        <div class="input-group">
                               <span class="input-group-addon"><span class="glyphicon glyphicon-user" ></span></span>
                        <input type="text" class="form-control" id="name" value="<?php echo $user["name"]; ?>"  required="required" name="name" >
                        </div>
                   </div>
                  
                      <div class="form-group">
                        <label for="Email1" class=" control-label">Email address</label>
                        <input type="email" class="form-control" id="Email1" name="email" value="<?php echo $user["email_id"]; ?>">
                      </div>
          
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
                  <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>Name:</td>
                        <th><?php echo $user["name"];?></th>
                      </tr>
                    <tr>
                        <td>Year:</td>
                        <td><?php echo $user["year"];?></td>
                      </tr>
                      <tr>
                        <td>Branch:</td>
                        <td><?php echo $user["branch"];?></td>
                      </tr>
                     
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php if(empty_date($user["dob"])) {echo "Provide your Date Of Birth" ;} else echo date('d/m/y', strtotime($user["dob"])) ;?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $user["gender"];?></td>
                      </tr>
                        <tr>
                        <td>College Roll no.</td>
                        <td><?php if(empty($user["roll_no"])) {echo "Provide your Roll no" ;} else echo $user["roll_no"];?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $user["email_id"];?></td>
                      </tr>
                        <td>Contact Number</td>
                        <td><?php if(empty($user["phone_no"])) {echo "Provide your Contact no." ;} else echo $user["phone_no"];?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
          
                        
                            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        
                    </div>
            
          </div>
        </div>
      </div>
    </div>

<?php include("includes/layouts/footer.php"); ?>
 <script >
 $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>