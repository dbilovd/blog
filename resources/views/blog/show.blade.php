<!DOCTYPE html>
<html>
	<head>
		<title>David Lartey</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
			integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
			integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<style type="text/css">	
		h1 {
			/* font-size: 3.5em; */
		}
		a,
		a:hover,
		a:visited,
		a:active {
			color: #7f0011;
			text-decoration: none;
		}
		.container {
			max-width: 800px;
			padding: 40px 20px 0;
		}
		header {
			background-color: #7f0011; /*#cf001c;*/
			border-bottom: 1px solid;
			color: #FFF;
			padding-top: 75px;
			padding-bottom: 75px;
		}
		header a,
		header a:hover,
		header a:visited,
		header a:active {
			color: #FFF;
		}
		header img.header-image {
			width: 200px;
			height: 200px;
		}
		header div.header-top {
			height: 100%;
			margin-bottom: -20px;
		}
		header div.header-top h1.title {
			font-weight: bolder;
			margin-top: -9px;
		}
		header div.header-top h1.sub-title {
			font-weight: lighter;
		}
		header ul.header-footer {
			padding: 0;
		}
		header ul li {
			display: inline;
			list-style: none;
			margin-right: 10px;
		}
		header ul a {
			color: #FFF;
		}
		.section {
			margin-bottom: 60px;
		}
		.section-header {
			border-bottom: 2px solid #ffd1d7;
			margin-bottom: 40px;
			padding-bottom: 15px;
		}
		.section-header h4 {
			border-bottom: 5px solid #7f0011;
			display: inline;
			margin-bottom: -2px;
			padding-bottom: 13px;
		}
		.section-header a {
			float: right;
		}
		.section-header a:hover,
		.section-header a:active,
		.section-header a:visited {
			text-decoration: underline;
		}
		.card a {
			color: inherit;
		}
		.card .card-text a {
			color: #7f0011;
			text-decoration: underline;
		}
		footer {
			min-height: 100px;
		}
		</style>
	</head>
	<body>
		<!--
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img src="assets/img/header-pic-main.jpg" class="header-image img-responsive img-thumbnail">
					</div>
					<div class="col-sm-8" style="height: 200px;">
						<div class="header-top">
							<h1 class="title">David Lartey</h1>
							<h1 class="sub-title">#LifeIsBeautiful</h4>
						</div>
						<ul class="header-footer">
							<li>
								<a href="#">
									<i class="fab fa-2x fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-2x fa-github"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-2x fa-medium"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-2x fa-twitter"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		-->

		<div class="container">
			<!-- About -->
			<div class="section">
				<div class="section-header">
					<h4 class="">{{ $post->title }}</h4>
				</div>
				<div class="section-content">
					{!! $post->body !!}
				</div>
			</div>
		</div>

		<footer class="container text-center">
			<a href="#">&hearts; <img src="{{ url('/img/GH.png') }}" /></a>
		</footer>
	</body>
</html>