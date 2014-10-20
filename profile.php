<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php $menuid = 1; ?>
<?php //$layout_context = "admin"; ?>
<?php include("includes/layouts/header.php"); ?>
<?php $username= $_SESSION["username"];
$user=find_student_profile_by_username($username);?>

 <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
         <?php /*template not required
		   <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p> */?>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $user["username"]; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
               
                <div class=" col-md-9 col-lg-9 "> 
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

    $('[data-toggle="tooltip"]').tooltip();

    
    });

</script>