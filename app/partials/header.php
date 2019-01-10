<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<i class="far fa-hand-peace"></i> MyStore
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbar-nav" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php"> Home </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"> Catalog </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"> Cart 🛒<span class="badge text-danger" id="cart-count">0</span></a>
				</li>

			<?php if(isset($_SESSION["logged_in_user"])): ?>
				<li class="nav-item">
					<a class="nav-link" href="../controllers/logout.php">Logout</a>
					
				</li>

			<?php else: ?>

			
				<li class="nav-item">
					<a class="nav-link" href="#"> Sign Up </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"> Login </a>
				</li>

			<?php endif; ?>
			</ul>
		</div> <!-- end navbar nav -->
	</nav> <!-- end nav -->