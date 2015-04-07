<?php
$arquivo = $_GET["arquivo"];
$error   = 'page-error.php';
if(!$arquivo) {
	header( 'Location: /index.php?arquivo=home.php' ) ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Site Simples em PHP</title>

	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="starter-template.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<?php require_once("menu.php"); ?>
	
	<div class="container">
		<?php if(!file_exists($arquivo)): ?>
			<?php require_once($error); ?>
		<?php else : ?>
			<?php require_once($arquivo); ?>
		<?php endif; ?>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="text-muted">Todos os direitos reservados - <?php echo date('Y'); ?></p>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>