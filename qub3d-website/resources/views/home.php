<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/materialize.min.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<title>About | Qub³d Engine Group</title>
</head>

<body>
	<div class="navbar-fixed">
		<nav class="z-depth-0 transparent">
			<div class="nav-wrapper black-text">
				<div class="brand-logo">
					<img class="asyncimg" id="Logo" data-src="assets/img/qub3d-logo.png" style="width:100px">
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
	<main class="">
		<section class="intro" id="intro">
			<h1 class="center-align">
				WELCOME
			</h1>
			<h5 class="center-align">
				<i>You've found the internet home of the Qub³d Engine Group</i>
			</h5>
			<br />
			<i class="large material-icons left hide-on-med-and-down">arrow_downward</i>
			<i class="large material-icons right hide-on-med-and-down">arrow_downward</i>
		</section>
		<div class="row center grey darken-4 white-text paragraphs">
			<h3 class="col s12 m12 l4">WHO ARE WE?</h3>
			<h5 class="col s12 m12 l8">
				We're currently building all sorts of awesome things, including the Qub³d Engine, a brand new voxel game engine with C++
				and OpenGL & Vulkan. We'll also be creating an epic default game for Sandblox, currently entitled Horizons.
			</h5>
		</div>
		<div class="row center grey darken-4 white-text paragraphs">
			<h3 class="col s12 m12 l4">WHERE ARE WE?</h3>
			<h5 class="col s12 m12 l8">
				Our development platform is <a href="https://phab.qub3d.tk">PHABRICATOR</a>. (We also have <a href="https://github.com/qub3d">GitHub
					Mirrors
				</a>) We use Discord as our main communication platform, and Mattermost as a secondary platform for those who can't use
				Discord.
				<ul>
					<li class="links">&bull; <a href="https://discord.gg/Yf8v4Xs">Discord Server</a> &bull;</li>
					<li class="links">&bull; <a href="https://chat.qub3d.tk">Mattermost</a> &bull;</li>
				</ul>
			</h5>
		</div>
		<section class="intro" id="staff">
			<h1 class="center-align">
				MEET THE STAFF!
			</h1>
			<h5 class="center-align">
				<i>the protectors of our vision</i>
			</h5>
			<br />
			<i class="large material-icons left hide-on-med-and-down">arrow_downward</i>
			<i class="large material-icons right hide-on-med-and-down">arrow_downward</i>
		</section>
		<div class="container">
			<div class="row">
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/0xen.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">0xen
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">0xen
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								Hey I'm John, a Third Year Game Development student who is specialising in computer graphics. I am also the graphics lead
								for Qub3d focusing on the integration of the OpenGL/Vulkan into the renderer. I have also programmed for over 10
								years now focusing primarily in C++.
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/beeper.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">BeeperDeeper
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">BeeperDeeper
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								Eyo! I currently am the Lead SysAdmin (Server Manager), alongside Zicklag. I like to help out in general, but my strengths
								are server management and Python. I've been programming for over 10 years, and now primarily in Python & C. :)
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/blaclegi.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Blaclegi
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Blaclegi
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								Sup! I'm Blaclegi. I'm the Lead Developer, as I have an extensive past in C++ & OpenGL. I initially developed the Demo application,
								and recieved a Staff position, I now lead development and help out making sure the coding standards are up to scratch
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/toby.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Toby109tt
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Toby109tt
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								I love doing pixelart and have been fascinated with Voxel Games ever since Minecraft Beta 1.8 released back in 2011. My favorite
								shape is a cube as it's such a special shape, and love pixels because they are so simple yet advanced. I am 1 of
								the 2, together with The Scarecrowman, that founded Qub³d back on Feb 5th 2017.
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/sonos.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">SonosFuer
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">SonosFuer
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								Hey There! My name is Austin and I am a 3rd year computer science student. I am helping Qub³d by directing the community.
								I manage communication systems such as phab and discord as well as running the blog and social media.
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/tekhnae.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">TekhnaeRaav
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">TekhnaeRaav
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								I coordinate and manage the design of games and mods, helping out in bits all around the project.
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/thomas.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">TMcSquared
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">TMcSquared
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								I protect the vision of technology. I oversee development from a technical aspect and oversee mainstream operations. I'm
								slightly humorous and don't turn down a good joke.
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/harsulinsghost.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">HarsulinsGhost
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">HarsulinsGhost
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								I am in charge of protecting the vision of the user, I oversee development of the games as well as the design of services
								that our users interact with.
							</p>
						</div>
					</div>
				</div>
				<div class="card col s12 m4 l3 module">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator asyncimg" data-src="assets/img/zicklag.png">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Zicklag
							<i class="material-icons right">more_vert</i>
						</span>
						<p class="container">
							<a href="#">Phabricator Profile</a>
						</p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Zicklag
							<i class="material-icons right">close</i>
						</span>
						<div class="valign-wrapper">
							<p>
								I am the Lead DevOps. I lead finding the best techincal cloud solutions and, alongside BeeperDeeper089, work to deploy those
								applications in a secure production environment!
							</p>
						</div>
					</div>
				</div>
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
	<script async src="assets/js/main.min.js"></script>
	<script>
		M.AutoInit();
	</script>
</body>

</html>