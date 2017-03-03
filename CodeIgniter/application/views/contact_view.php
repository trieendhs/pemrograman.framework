<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf=8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>About Page</title>

		<!--Bootstrap CSS-->
		<link href="<?php echo base_url('')?>assets/css/bootstrap.min.css" rel="stylesheet">

		<!--HTML5 Shim and Respond.js IEB support of HTML5 elements and media queries-->
		<!--Warning: Respond.js doesn't work if you view the page via file://-->
		<!--[if lt IE 9]>
			<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center"></h1>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="<?php echo base_url('')?>images/untitled-3.png" class="img-rounded" alt="Image" height=100% width=100%>
					<nav class="navbar navbar-inverse" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="<?php echo site_url('')?>/Welcome/index"><font size="5">Hello World</font></a>
							</div>
					
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">
									<li class=""><a href="<?php echo site_url('')?>/Welcome/about"><font size="4">About Me</font></a></li>
									<li class="active"><a href="<?php echo site_url('')?>/Welcome/contact"><font size="4">Contact Me</font></a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
					<div class="container">
						<div class="row">
							<div class="col-xs-67 col-sm-6 col-md-6 col-lg-6">
								<form action="<?php echo site_url('')?>/Welcome/submit" method="POST" role="form" align=center>
									<legend><font size="5">Do you want to contact me?</font></legend>
										<div class="form-group">
										<label for="" ><font size="3">Your Name?</font></label>
										<input type="text" class="form-control" id="" placeholder="">
										<br>
										<label for="" ><font size="3">Your Email?</font></label>
										<input type="email" name="" id="input" class="form-control" value="" required="required" title="">
										</div>
										<label for="" ><font size="3">Your Message?</font></label>
										<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
						
						<br><br>
						<button type="submit" class="btn btn-primary">Submit</button>
						<br><br>
					</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--jQuery-->
		<script src="//code.jquery.com/jquery.js"></script>
		<!--Bootstrap JavaScript-->
		<script src="<?php echo base_url('')?>assets/js/bootstrap.min.js"></script>
	</body>
</html>