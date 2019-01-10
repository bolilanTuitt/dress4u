<?php require_once '../partials/template.php' ?>

<?php function get_page_content() { ?>

<?php require_once '../controllers/connect.php';
	global $conn;

 ?>

 <div class="container-fluid">
		<div class="jumbotron bg-dark text-center text-white">
			<h1>Sign Up</h1>	
		</div> <!-- end jumbo -->
	</div> <!-- end container -->

 <div class="container py-5">
 	<section class="row justify-content-center">
 		<div class="col-md-6">

 			<form id="signup_form" action="../controllers/create_user.php" method="POST">
 				<div class="form-group">
 					<label for="firstname">First Name:</label>
 					<input type="text" name="firstname" id="firstname" class="form-control">
 					<span></span>
 				</div>

 				<div class="form-group">
 					<label for="lastname">Last Name:</label>
 					<input type="text" name="lastname" id="lastname" class="form-control">
 					<span></span>
 				</div>

 				<div class="form-group">
 					<label for="email">Email:</label>
 					<input type="text" name="email" id="email" class="form-control">
 					<span></span>
 				</div>

 				<div class="form-group">
 					<label for="address">Address:</label>
 					<input type="text" name="address" id="address" class="form-control">
 					<span></span>
 				</div>

 				<div class="form-group">
 					<label for="username">User Name:</label>
 					<input type="text" name="username" id="username" class="form-control">
 					<span></span>
 				</div>

 				<div class="form-group">
 					<label for="password">Password:</label>
 					<input type="text" name="password" id="password" class="form-control">
 					<span></span>
 				</div>

 				<div class="form-group">
 					<label for="confirm_password">Confirm Password:</label>
 					<input type="text" name="confirm_password" id="confirm_password" class="form-control">
 					<span></span>
 				</div>

 				
 			</form>
 			
 		</div>
 		
 	</section>
 	
 </div>

<?php } ?>