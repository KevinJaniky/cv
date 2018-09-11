<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Hello, Je suis Kevin ,  22 ans. La technologie ne cesse d'évoluer, mon but est évidemment de toujours être prêt face aux problèmatiques.">
	<meta name="author" content="Kevin JANIKY">
	<link rel="icon" href="/assets/media/address.jpg">
	<title><?php echo APP_NAME ?> </title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" media="all"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

	<main role="main">
		<?php require_once __DIR__ . '/../layouts/nav.php' ?>
		<?php require_once __DIR__ . '/../layouts/header.php' ?>
		<div class="display_error">
			<?php require_once __DIR__ . '/../error/error.php' ?>
		</div>
		<div class="container">	
			<?= $content ?>
		</div>
	</main>
	<?php require_once __DIR__ . '/../layouts/footer.php' ?>

</body>
</html>
