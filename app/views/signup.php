<?php require_once '../partials/template.php' ?>

<?php function get_page_content() { ?>

<?php require_once '../controllers/connect.php';
	global $conn;

 ?>

<div class="container">
	<div class="jumbotron bg-dark text-center text-white mt-5">
		<h1>Sign Up</h1>	
	</div> <!-- end jumbo -->


 	<form>
 		<section class="row mx-0">
			<div class="col-sm-6">
					
 				<div class="form-group">
 					<label for="firstname">First Name:</label>
 					<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter you firstname here">
 					<span class="validation"></span>
 				</div>

 				<div class="form-group">
 					<label for="lastname">Last Name:</label>
 					<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter your lastname here">
 					<span class="validation"></span>
 				</div>

 				<div class="form-group">
 					<label for="email">Email:</label>
 					<input type="text" name="email" id="email" class="form-control" placeholder="Enter your email here">
 					<span class="validation"></span>
 				</div>

 				<div class="form-group">
 					<label for="address">Address:</label>
 					<input type="text" name="address" id="address" class="form-control" placeholder="Enter your address here">
 					<span class="validation"></span>
 				</div>
			</div>
			<div class="col-sm-6">
					
 				<div class="form-group">
 					<label for="username">Username:</label>
 					<input type="text" name="username" id="username" class="form-control" placeholder="Enter your username here">
 					<span class="validation"></span>
 				</div>

 				<div class="form-group">
 					<label for="password">Password:</label>
 					<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password here">
 					<span class="validation"></span>
 				</div>

 				<div class="form-group">
 					<label for="confirm_password">Confirm Password:</label>
 					<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Please confirm password">
 					<span class="validation"></span>
 				</div>
			</div>

		</section>
 	</form>
	<div class="text-center py-4 mb-5">
		<a href="./login.php" class="btn btn-secondary"> Login</a>
		<button id="add_user" type="button" class="btn btn-primary">Register</button>
	</div>

</div> <!-- end container -->

<?php } ?>