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
		<link rel="stylesheet" href="assets/css/animate.min.css" />
		<link rel="stylesheet" href="assets/css/hover-min.css" />
		<link rel="stylesheet" href="assets/js/venobox.min.js" />
<!-- Custom Styles -->
		<link rel="stylesheet" href="assets/css/style.css" />
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<p class="text-center">Copyright &copy; $year</p>
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
	<script src="assets/js/venobox.min.js"></script>
</body>
</html>
FOOTER;
}
function dbConn($host, $dbname, $dbuser, $dbpass){
	try {
		$dsn = "mysql:host=$host;dbname=$dbname";
		$pdo = new PDO($dsn, $dbuser, $dbpass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	} catch(PDOException $e){
		die("Connection failed: " . $e->getMessage());
	}
}

function readRecords($pdo, $tablename){
	try {
		$stmt = $pdo->prepare('SELECT * FROM' . $tablename);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	} catch(PDOException $e){
		die("Something went wrong, try again later. Error: " . $e->=getMessage());
	}
}
?>

