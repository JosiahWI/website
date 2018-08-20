<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/materialize.min.css">
	<link rel="stylesheet" href="/assets/css/main.css">

	<title>Legal | Qub³d Engine Group</title>
</head>

<body>
	<div class="navbar-fixed">
		<nav class="z-depth-0 transparent">
			<div class="nav-wrapper black-text">
				<div class="brand-logo">
					<img class="asyncimg" id="Logo" data-src="/assets/img/qub3d-logo.png" style="width:100px">
				</div>
				<a href="#" data-target="mobile-nav" class="sidenav-trigger">
					<i class="material-icons">menu</i>
				</a>
				<ul class="right hide-on-med-and-down">
				<li>
						<a href="/">Home</a>
					</li>
					<li>
						<a href="/#staff">Meet The Staff</a>
					</li>
					<li>
						<a href="/legal">Legal</a>
					</li>
					<li>
						<a class="modal-trigger" href="#links-modal">Useful Links</a>
					</li>
				</ul>
				<ul class="sidenav" id="mobile-nav">
					<li>
						<a href="#intro">Home</a>
					</li>
					<li>
						<a href="#staff">Meet The Staff</a>
                    </li>
                    <li>
						<a href="/legal">Legal</a>
					</li>
					<li>
						<a class="modal-trigger" href="#links-modal">Useful Links</a>
					</li>
				</ul>			
			</div>
		</nav>
	</div>

	<!-- Useful Links Modal -->
	<div id="links-modal" class="modal center-align">
		<div class="modal-content">
			<h4>Useful Links</h4>
			<a href="https://phab.qub3d.tk" class="btn-large blue accent-2 col s12 m4 l4 row">PHABRICATOR</a>
			<a href="https://github.com/qub3d" class="btn-large green darken-2 col s12 m4 l4 row">GITHUB</a>
			<a href="https://phab.qub3d.tk" class="btn-large indigo accent-4 col s12 m4 l4 row">DISCORD</a>
			<a href="https://chat.qub3d.tk" class="btn-large blue col s12 m4 l4 row">MATTERMOST</a>
		</div>
	</div>

	<!-- END NAVBAR STUFF -->
	<main class="grey lighten-4">
		<section class="intro" id="intro">
			<h1 class="center-align">
				LEGAL
			</h1>
			<h5 class="center-align">
				<i>The boring, yet important pages.</i>
			</h5>
			<br />
			<i class="large material-icons left hide-on-med-and-down">arrow_downward</i>
			<i class="large material-icons right hide-on-med-and-down">arrow_downward</i>
		</section>
		<div class="center links container black-text" style="font-family: 'Roboto Mono';">
            <h2><a href="/legal/termsofdevelopment">TERMS OF DEVELOPMENT</a></h2>
            <h2><a href="/legal/termsofuse">TERMS OF USE</a></h2>
            <h2><a href="/legal/privacy">PRIVACY POLICY</a></h2>
		</div>
	</main>
	<footer class="page-footer indigo darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Qub³d Engine Group</h5>
					<p class="grey-text text-lighten-4">Because Blocks Should Be Open Source</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Useful Links</h5>
					<ul>
						<li>
							<a class="grey-text text-lighten-3" href="https://phab.qub3d.org">PHABRICATOR</a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="https://github.com/qub3d/">GITHUB</a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="https://discord.gg/Yf8v4Xs">DISCORD</a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="https://chat.qub3d.tk">MATTERMOST</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2018 Qub³d Engine Group. All Rights Reserved
				<!-- <a class="grey-text text-lighten-4 right" href="#!"></a> -->
			</div>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<script async src="/assets/js/main.min.js"></script>
	<script>
		M.AutoInit();
	</script>
</body>

</html>