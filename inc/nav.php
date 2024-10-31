<nav class="navbar navbar-expand-lg fixed-top" id="navbarTop">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Site Name Here</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav me-auto mb-2">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="services.php">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact Me</a>
				</li>
			</ul>
			<div class="d-flex">
				<?php
				if(isset($_SESSION["loggedin"])){
				?>
					<div class="dropdown" style="margin-right: 50px;">
						<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-person-circle me-2"></i><?php echo $_SESSION["username"]; ?>
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="account.php"><i class="bi bi-gear-fill me-2"></i>Account Settings</a></li>
							<li><a class="dropdown-item" href="forgot-password.php"><i class="bi bi-question-circle me-2"></i>Forgot Password</a></li>
							<li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
						</ul>
					</div>
				<?php
				} else {
				?>
					<a class="btn btn-primary me-3" href="signup-form.php">Signup</a>
					<a class="btn btn-warning me-3" href="login-form.php">Login</a>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</nav>
<?php
if(!empty($_SESSION['error'])){
	echo "<div class='alert alert-danger w-50 mx-auto'><i class='bi bi-exclamation-triangle me-2'></i>". $_SESSION['error']['message']."</div>";
	unset($_SESSION['error']);
}
if(!empty($_SESSION['success'])){
	echo "<div class='alert alert-success w-50 mx-auto'><i class='bi bi-check-circle me-2'></i>". $_SESSION['success']['message']."</div>";
	unset($_SESSION['success']);
}
?>