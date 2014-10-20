<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php echo message();?>
<?php $menuid = 1; ?>

<?php $username= $_SESSION["username"];
$user=find_student_profile_by_username($username);?>


<?php
if (isset($_POST['submit_form'])) {
	// Process the form
	
	$name =     mysql_prep($_POST["name"]);
	$email_id =  mysql_prep($_POST["email"]);
	$branch =  $_POST["branch"];
	$year =    $_POST["year"];
	$gender =  $_POST["gender"];
	$dob =  $_POST["dob"]; 
    $phone_no =  $_POST["phone_no"];
	$roll_no =  $_POST["roll_no"];



		if (!empty($errors)) {
			echo $errors;
		$_SESSION["errors"] = $errors;
		//redirect_to("edit_profile.php");
		} 

	$query  = "UPDATE student SET name='{$name}',branch ='{$branch}',year='{$year}',gender='{$gender}',email_id='{$email_id}',roll_no='{$roll_no}',dob='{$dob}',phone_no='{$phone_no}'";
	
	$query .= " where username='{$username}'";
	$result = mysqli_query($connection, $query);
	if ($result) {
		// Success
		$message = "profile updated.";
           //$_SESSION["username"] = $username;

		redirect_to("index.php");
	} else {
		// Failure
		$message = "Subject creation failed.";
		redirect_to("home.php");
	}
	
echo $message;
 }
?>
<?php include("includes/layouts/header.php"); ?>
 <div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   

          <div class="panel panel-info">
            <div class="panel-heading">
            
             <?php  if(isset($_POST['submit_edit'])) {?>
              <h3 class="panel-title">Edit Profile :</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
               
                <div class=" col-md-9 col-lg-9 "> 
                
                <form role="form" action="edit_profile.php" id="edit_profileForm" method="post" >
                 <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>Name:</td>
                        <th>
                         <div class="input-group">
                               <span class="input-group-addon"><span class="glyphicon glyphicon-user" ></span></span>
                        <input type="text" class="form-control" id="name" value="<?php echo $user["name"]; ?>"  required="required" name="name" ></th>
                        </div>
                      </tr>
                    <tr>
                        <td>Year:</td>
                        <td><select class="form-control " name="year"  id="year" >
                                  <option value="First year">FE</option>
                                  <option value="Second year">SE</option>
                                  <option value="Third year">TE</option>
                                  <option value="Fourth Year">BE</option>
                                  </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Branch:</td>
                        <td><select class="form-control " name="branch"  id="branch">
                          <option value="IT">IT</option>
                          <option value="COMPS">COMPS</option>
                          <option value="EXTC">EXTC</option>
                          <option value="ETRX">ETRX</option>
                          </select>
                        </td>
                      </tr>
                     
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php if(!empty_date($user["dob"])) { echo date('d/m/y', strtotime($user["dob"]));} ?>
                        	<input type="date" name="dob" placeholder="(MM/DD/YYYY)" ><br></td>
                      </tr>
                   
                         
                             <tr>
                        <td>Gender</td>
                        <td><select class="form-control" name="gender"  id="sex" >
                          <option>Male</option>
                          <option>FEMALE</option>
                          </select>
                        </td>
                      </tr>
                        <tr>
                        <td>College Roll no.</td>
                        <td> <input type="text" class="form-control" id="name" value="<?php if(!empty($user["roll_no"])) {echo $user["roll_no"];} ?>"   name="roll_no" ></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="email" class="form-control" id="Email1" name="email" value="<?php echo $user["email_id"]; ?>" required="required"></td>
                      </tr>
                        <td>Contact Number</td>
                        <td><input type="text" class="form-control" id="name" value="<?php  if(!empty($user["phone_no"])) { echo $user["phone_no"]; }  ?>"   name="phone_no" ></td>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                    </form>
                     </div>
              </div>
            </div>
                   <div class="panel-footer">
                               <button type="submit" class="btn btn-info " name="submit_form" value="Submit" form="edit_profileForm">Submit</button>
                              <!--<button  type="submit" class="btn btn-default " name="" >Cancel</button> -->
                    </div>
            
                   <?php } else { ?>
                     <h3 class="panel-title"><?php echo $user["username"]; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
               
                <div class=" col-md-9 col-lg-9 "> 
                <form action="edit_profile.php" id="edit_profile" method="post">
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
                               <button type="submit" class="btn btn-sm btn-warning" data-original-title="Edit this user" data-toggle="tooltip" name="submit_edit" value="Submit" form="edit_profile"
                               >
                            <i class="glyphicon glyphicon-edit"></i></a>   </button>
                    </div>
            
                  <?php }?>
                  
               
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