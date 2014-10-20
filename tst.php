<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php $menuid = 1; ?>
<link rel="shortcut icon" href="img/Spirit_medal_2.png" />
<?php include("includes/layouts/header.php"); ?>

<section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
   <a href="#"><i class="fa fa-twitter fa-2x" ></i></a>
   <a href="#" ><i class="fa fa-google-plus fa-2x "></i></a>
   <a href="#"><i class="fa fa-facebook fa-2x" ></i></a>
    <a href="#">

                        </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a href="#"><i class="fa fa-twitter fa-2x" ></i></a>
   <a href="#" ><i class="fa fa-google-plus fa-2x "></i></a>
   <a href="#"><i class="fa fa-facebook fa-2x" ></i></a>
    <a href="#">

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a href="#"><i class="fa fa-twitter fa-2x" ></i></a>
   <a href="#" ><i class="fa fa-google-plus fa-2x "></i></a>
   <a href="#"><i class="fa fa-facebook fa-2x" ></i></a>
    <a href="#">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section> 
<?php include("includes/layouts/footer.php"); ?>
