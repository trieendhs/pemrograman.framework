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
									<li class="active"><a href="<?php echo site_url('')?>/Welcome/about"><font size="4">About Me</font></a></li>
									<li><a href="<?php echo site_url('')?>/Welcome/contact"><font size="4">Contact Me</font></a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
					<table class="table table-striped table-hover">
						<p>
						<thead>
							<tr>
								<th></th>
							</tr>
						</thead>
						<tbody align=center>
							<tr>
								<td colspan="2"><font size="9"><b>BIODATA</b></font></td>
							</tr>
							<tr>
								<td colspan="2" align="left"><font size="4">Hello there! Namaku Trie Endah Sulistyoningrum. Aku berasal dari Kabupaten Jombang. Saat ini aku melanjutkan pendidikanku di Politeknik </font></td>
							</tr>
							<tr>
								<td colspan="2" align="left"><font size="4">Negeri Malang. Aku mengambil jurusan Teknik Informatika. <i>I am a beginner in this field!</i> Tapi aku berkeinginan untuk menjadi orang yang </font></td>
							</tr>
							<tr>
								<td colspan="2" align="left"><font size="4">berkemampuan lebih dalam bidang ini. Aku memiliki cukup banyak hobby seperti membaca buku, menonton film, dan belakangan ini aku </font></td>
							</tr>
							<tr>
								<td colspan="2" align="left"><font size="4">tertarik untuk <i>bereksperimen</i> di dapur. Banyak jenis genre buku yang sering aku baca, mulai dari ber-genre fantasy, sci-fi, detective, hingga </font></td>
							</tr>
							<tr>
								<td colspan="2" align="left"><font size="4">biography. Namun aku lebih suka dengan buku ber-genre fantasy.</font></td>
							</tr>
							<tr align=center>
								<td colspan=2><font size="3"><i><br><br><img src="<?php echo base_url('')?>images/anime-scenery-backgrounds-62.jpg" class="img-circle" alt="Image" height=20% width=20%><br><br>"There are no shortcuts to any place worth going"</i></font></td>
							</tr>
						</tbody>
						</p>
					</table>
				</div>
			</div>
		</div>
		<!--jQuery-->
		<script src="//code.jquery.com/jquery.js"></script>
		<!--Bootstrap JavaScript-->
		<script src="<?php echo base_url('')?>assets/js/bootstrap.min.js"></script>
	</body>
</html>