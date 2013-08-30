<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="views/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="views/assets/css/typeahead.js-bootstrap.css">
		<script type="text/javascript" src="views/assets/js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="views/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="views/assets/js/typeahead.min.js"></script>
		<style type="text/css">
		body{padding-top:70px;}
		.tt-hint{display:none;}
		</style>
		<title>Vafpress Framework Language Editor</title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Vafpress Framework Language Editor</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<form action="" method="GET" class="navbar-form navbar-right">
						<div class="form-group">
							<input id="searchbox" type="text" name="lang" class="form-control" placeholder="Filename (e.g. id_ID)" value="<?php echo $_GET['lang']?>">
						</div>
						<button type="submit" class="btn btn-default">Go</button>
					</form>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="container">