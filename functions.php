<?php
function temp_header($title){
echo <<<HEADER
<!DOCTYPE html>
<html lang="en">
	<head>
<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- Icons -->
		<link href="assets/css/tabler-icons.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
<!-- Custom Styles -->
		<link rel="stylesheet" href="assets/css/style.css" />
<!-- Page Title -->
    <title>$title</title>
  </head>
<body>
HEADER;
}
function temp_footer(){
echo <<<FOOTER
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<p class="text-center">Copyright &copy; </p>
				</div>
				<!-- /. col -->
			</div>
			<!-- /. row -->
		</div>
		<!-- /. container -->
	</footer>
	<!-- /. Footer -->
<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
FOOTER;
}
?>
