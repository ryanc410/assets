<?php
function genHeader($title){
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
		<link rel="stylesheet" href="assets/icons/font/bootstrap-icons.min.css">
<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
<!-- Custom Styles -->
		<link rel="stylesheet" href="assets/css/style.css" />
<!-- Jquery -->
		<script src="assets/js/jquery-3.7.0.min.js"></script>
<!-- Page Title -->
    <title>$title</title>
  </head>
<body>
<main>
HEADER;
}
function genFooter(){
	$year = date("Y");
echo <<<FOOTER
    </main>
    <footer>
           <div class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <div class="text-center mb-3 mb-md-0">
                    <span class="text-muted">© ${year} My Project, Inc</span>
                </div>
            </div>
            <div class="col-md-4 justify-content-end d-flex gap-3">
                <div>
                    <a href="#"><i class="bi bi-facebook social-icon"></i></a>
                </div>
                <div>
                    <a href="#"><i class="bi bi-instagram social-icon"></i></a>
                </div>
                <div>
                    <a href="#"><i class="bi bi-twitter-x social-icon"></i></a>
                </div>
            </div>
        </div>
    </footer>
<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
FOOTER;
}

function sanitize($input){
	$data = trim($input);
	$data = stripslashes($input);
	$data = htmlspecialchars($data);
	return $data;
}

function isValidUsername($username){
	$pattern = '/^[A-Za-z0-9-_]+$/';
	return preg_match($pattern, $username);
}

function isValidEmail($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>

